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
    function get_logo_partner($param, $type = null, $size = null, $transparent = null)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('logo-partner' . $key);
    }
}
if (!function_exists('get_banner')) {
    function get_banner($param, $type = null, $size = null, $transparent = null)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('banner' . $key);
    }
}

if (!function_exists('get_info_name')) {
    function get_info_name()
    {
        return OptionService::get('info-name');
    }
}

if (!function_exists('get_info_description')) {
    function get_info_description()
    {
        return OptionService::get('info-description');
    }
}

if (!function_exists('get_info_email')) {
    function get_info_email()
    {
        return OptionService::get('info-email');
    }
}

if (!function_exists('get_info_hotline')) {
    function get_info_hotline()
    {
        return OptionService::get('info-hotline');
    }
}

if (!function_exists('get_info_fax')) {
    function get_info_fax()
    {
        return OptionService::get('info-fax');
    }
}

if (!function_exists('get_info_support_online')) {
    function get_info_support_online()
    {
        return OptionService::get('info-support-online');
    }
}

if (!function_exists('get_info_address')) {
    function get_info_address()
    {
        return OptionService::get('info-address');
    }
}

if (!function_exists('get_info_facebook')) {
    function get_info_facebook()
    {
        return OptionService::get('info-facebook');
    }
}

if (!function_exists('get_info_instagram')) {
    function get_info_instagram()
    {
        return OptionService::get('info-instagram');
    }
}

if (!function_exists('get_info_twitter')) {
    function get_info_twitter()
    {
        return OptionService::get('info-twitter');
    }
}

if (!function_exists('get_info_zalo')) {
    function get_info_zalo()
    {
        return OptionService::get('info-zalo');
    }
}

if (!function_exists('get_info_youtube')) {
    function get_info_youtube()
    {
        return OptionService::get('info-youtube');
    }
}

if (!function_exists('get_info_fanpage')) {
    function get_info_fanpage()
    {
        return OptionService::get('info-fanpage');
    }
}

if (!function_exists('get_info_map')) {
    function get_info_map()
    {
        return OptionService::get('info-map');
    }
}

if (!function_exists('get_icon_service')) {
    function get_icon_service($param, $type = null, $size = null, $transparent = null)
    {
        $key = get_args($param, $type, $size, $transparent);
        return OptionService::get('icon-service' . $key);
    }
}

if (!function_exists('get_title_service')) {
    function get_title_service($param)
    {
        return OptionService::get('title-service-' . $param);
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
    function get_sologan()
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
