<?php

namespace VCComponent\Laravel\Config\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Database\Eloquent\Model;

class Option extends model
{
    protected $data         = [];
    protected $cache        = false;
    protected $cacheMinutes = 60;
    protected $entity;
    public function __construct()
    {
        $this->data = collect($this->data);

        if (config('option.cache')['enabled'] === true) {
            $this->cache     = true;
            $this->timeCache = config('option.cache')['minutes'] ? config('option.cache')['minutes'] * 60 : $this->cacheMinutes * 60;
        }
        if (config('option.model')) {
            $this->entity = config('option.model.option');
        } else {
            $this->entity = Option::class;
        }
    }

    public function prepare($keys)
    {
        if (!is_array($keys)) {
            $keys = [$keys];
        }
        $keys      = array_map('strtolower', $keys);
        $keys      = array_map('trim', $keys);
        $keys      = array_unique($keys);
        $data_keys = $this->data->pluck('key');
        $diff_keys = collect($keys)->diff($data_keys);

        if ($diff_keys->count()) {
            foreach ($diff_keys as $key) {
                $this->data = $this->data->push(['key' => $key, 'value' => null, 'fetched' => false]);
            }
        }
        return '';
    }

    public function fetch()
    {
        if ($this->cache === true) {
            if (Cache::has('optionsFetched') && Cache::get('optionsFetched')->count() !== 0) {
                return Cache::get('optionsFetched');
            }
            return Cache::remember('optionsFetched', $this->timeCache, function () {
                return $this->fetchExcute();
            });
        }
        return $this->fetchExcute();
    }

    public function fetchExcute()
    {
        $un_fetched = $this->data->filter(function ($value, $key) {
            return $value['fetched'] == false;
        });
        if ($un_fetched->count()) {
            if ($this->entity === 'App\Entities\Option') {
                $items      = $this->entity::select('id', 'key', 'value')->with('languages')->whereIn('key', $un_fetched->pluck('key'))->get();
            } else {
                $items      = $this->entity::select('key', 'value')->whereIn('key', $un_fetched->pluck('key'))->get();
            }
            $this->data = $this->data->map(function ($d) use ($items) {
                $found = $items->search(function ($i) use ($d) {
                    return $i->key === $d['key'];
                });
                if ($found !== false) {
                    return [
                        'key'     => $items->get($found)->key,
                        'value'   => $items->get($found)->value,
                        'fetched' => true,
                    ];
                } else {
                    return $d;
                }
            });
            $this->data = $this->data->map(function ($item) {
                if ($item['fetched'] === false) {
                    return [
                        'key'     => $item['key'],
                        'value'   => null,
                        'fetched' => true,
                    ];
                } else {
                    return $item;
                }
            });
        }

        return $this->data;
    }

    public function get($key)
    {
        if ($this->cache === true && Cache::has('optionsFetched')) {
            $this->data = Cache::get('optionsFetched');
        }

        $key = strtolower($key);
        $key = trim($key);

        $found = $this->data->search(function ($i) use ($key) {
            return $i['key'] === $key;
        });
        if (!$found) {
            $this->prepare($key);
            $this->fetch();
            $item = $this->data->search(function ($i) use ($key) {
                return $i['key'] === $key;
            });
            $result = $this->data->get($item);

            return $result['value'];
        } else {
            $item = $this->data->get($found);
            if ($item['fetched'] === true) {
                return $item['value'];
            } else {
                $this->fetch();
                return $item['value'];
            }
        }
    }
}
