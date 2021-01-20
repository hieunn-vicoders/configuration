<?php

use VCComponent\Laravel\Config\Entities\Option;
use VCComponent\Laravel\Config\Services\Facades\Option as OptionService;

if (!function_exists('getOption')) {
    function getOption($key)
    {
        return OptionService::get($key);
    }
}

if (!function_exists('saveOption')) {
    function saveOption($request)
    {
        $option = Option::create($request->all());
        return response()->json([
            'data' => $option,
        ]);
    }
}

if (!function_exists('getOptions')) {
    function getOptions($key)
    {
        return Option::getOptions($key);
    }
}

if (!function_exists('prepareOption')) {
    function prepareOption($keys)
    {
        return OptionService::prepare($keys);
    }
}

function get_args()
{
    $args   = func_get_args();
    $string = '-';
    foreach ($args as $arg) {
        $string .= $arg . '-';
    }
    $key = rtrim($string, '-');
    return $key;
}

if (!function_exists('get_logo_website')) {
    function get_logo_website($type = null, $size = null, $transparent = null)
    {
        $key = get_args($type, $size, $transparent);
        return OptionService::get('logo-website' . $key);
    }
}

if (!function_exists('get_slide')) {
    function get_slide($param, $type = null, $size = null, $transparent = null)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('slide' . $key);
    }
}

if (!function_exists('get_logo_partner')) {
    function get_logo_partner($param, $type, $size, $transparent)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('logo-partner' . $key);
    }
}
if (!function_exists('get_banner')) {
    function get_banner($param, $type, $size, $transparent)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('banner' . $key);
    }
}

if (!function_exists('get_infor_name')) {
    function get_infor_name()
    {
        return OptionService::get('infor-name');
    }
}

if (!function_exists('get_infor_email')) {
    function get_infor_email()
    {
        return OptionService::get('infor-email');
    }
}

if (!function_exists('get_infor_hotline')) {
    function get_infor_hotline()
    {
        return OptionService::get('infor-hotline');
    }
}

if (!function_exists('get_infor_fax')) {
    function get_infor_fax()
    {
        return OptionService::get('infor-fax');
    }
}

if (!function_exists('get_infor_support_online')) {
    function get_infor_support_online()
    {
        return OptionService::get('infor-support-online');
    }
}

if (!function_exists('get_infor_address')) {
    function get_infor_address()
    {
        return OptionService::get('infor-address');
    }
}

if (!function_exists('get_infor_facebook')) {
    function get_infor_facebook()
    {
        return OptionService::get('infor-facebook');
    }
}

if (!function_exists('get_infor_instagram')) {
    function get_infor_instagram()
    {
        return OptionService::get('infor-instagram');
    }
}

if (!function_exists('get_infor_twitter')) {
    function get_infor_twitter()
    {
        return OptionService::get('infor-twitter');
    }
}

if (!function_exists('get_infor_zalo')) {
    function get_infor_zalo()
    {
        return OptionService::get('infor-zalo');
    }
}

if (!function_exists('get_infor_youtube')) {
    function get_infor_youtube()
    {
        return OptionService::get('infor-youtube');
    }
}

if (!function_exists('get_infor_fanpage')) {
    function get_infor_fanpage()
    {
        return OptionService::get('infor-fanpage');
    }
}

if (!function_exists('get_infor_map')) {
    function get_infor_map()
    {
        return OptionService::get('infor-map');
    }
}

if (!function_exists('get_icon_service')) {
    function get_icon_service($param, $type, $size, $transparent)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('icon-service' . $key);
    }
}

if (!function_exists('get_title_service')) {
    function get_title_service($param)
    {
        return OptionService::get('title-service' . $param);
    }
}

if (!function_exists('get_description_service')) {
    function get_description_service($param)
    {
        return OptionService::get('description-service-' . $param);
    }
}

if (!function_exists('get_title')) {
    function get_title($page)
    {
        return OptionService::get('title-' . $page);
    }
}

if (!function_exists('get_description')) {
    function get_description($page)
    {
        return OptionService::get('description-' . $page);
    }
}

if (!function_exists('get_favicon')) {
    function get_favicon()
    {
        return OptionService::get('favicon');
    }
}

if (!function_exists('get_sologan')) {
    function get_slogogan()
    {
        return OptionService::get('sologan');
    }
}

if (!function_exists('get_contact_me')) {
    function get_contact_me()
    {
        return OptionService::get('contact-me');
    }
}

if (!function_exists('get_operation_license')) {
    function get_operation_license()
    {
        return OptionService::get('operation-license');
    }
}

if (!function_exists('get_copy_by')) {
    function get_copy_by()
    {
        return OptionService::get('copy-by');
    }
}
