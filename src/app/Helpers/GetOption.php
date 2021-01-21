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

if (!function_exists('get_slide_content')) {
    function get_slide_content($param)
    {
        return OptionService::get('slide-content-' . $param);
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
    function get_info_name($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-name');
        }
        return OptionService::get('info-name-' . $param);
    }
}

if (!function_exists('get_info_description')) {
    function get_info_description($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-description');
        }
        return OptionService::get('info-description-' . $param);
    }
}

if (!function_exists('get_info_email')) {
    function get_info_email($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-email');
        }
        return OptionService::get('info-email-' . $param);
    }
}

if (!function_exists('get_info_hotline')) {
    function get_info_hotline($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-hotline');
        }
        return OptionService::get('info-hotline-' . $param);
    }
}

if (!function_exists('get_info_fax')) {
    function get_info_fax($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-fax');
        }
        return OptionService::get('info-fax-' . $param);
    }
}

if (!function_exists('get_info_support_online')) {
    function get_info_support_online($param)
    {
        if ($param === null) {
            return OptionService::get('info-support-online');
        }
        return OptionService::get('info-support-online-' . $param);
    }
}

if (!function_exists('get_info_address')) {
    function get_info_address($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-address');
        }
        return OptionService::get('info-address-' . $param);
    }
}

if (!function_exists('get_info_facebook')) {
    function get_info_facebook($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-facebook');
        }
        return OptionService::get('info-facebook-' . $param);
    }
}

if (!function_exists('get_info_instagram')) {
    function get_info_instagram($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-instagram');
        }
        return OptionService::get('info-instagram-' . $param);
    }
}

if (!function_exists('get_info_twitter')) {
    function get_info_twitter($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-twitter');
        }
        return OptionService::get('info-twitter-' . $param);
    }
}

if (!function_exists('get_info_zalo')) {
    function get_info_zalo($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-zalo');
        }
        return OptionService::get('info-zalo-' . $param);
    }
}

if (!function_exists('get_info_youtube')) {
    function get_info_youtube($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-youtube');
        }
        return OptionService::get('info-youtube-' . $param);
    }
}

if (!function_exists('get_info_fanpage')) {
    function get_info_fanpage($param = null)
    {
        if ($param === null) {
            return OptionService::get('info-fanpage');
        }
        return OptionService::get('info-fanpage-' . $param);
    }
}

if (!function_exists('get_info_map')) {
    function get_info_map($param)
    {
        if ($param === null) {
            return OptionService::get('info-map');
        }
        return OptionService::get('info-map-' . $param);
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
    function get_title($page = null)
    {
        if ($page === null) {
            return OptionService::get('title-website');
        }
        return OptionService::get('title-' . $page);
    }
}

if (!function_exists('get_description')) {
    function get_description($page = null)
    {
        if ($page === null) {
            return OptionService::get('description-website');
        }
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
    function get_sologan($param = null)
    {
        if ($page === null) {
            return OptionService::get('sologan');
        }
        return OptionService::get('sologan-' . $param);
    }
}

if (!function_exists('get_contact_me')) {
    function get_contact_me($param = null)
    {
        if ($param === null) {
            return OptionService::get('contact-me');
        }
        return OptionService::get('contact-me-' . $param);
    }
}

if (!function_exists('get_operation_license')) {
    function get_operation_license($param = null)
    {
        if ($param === null) {
            return OptionService::get('operation-license');
        }
        return OptionService::get('operation-license-' . $param);
    }
}

if (!function_exists('get_copy_by')) {
    function get_copy_by($param = null)
    {
        if ($param === null) {
            return OptionService::get('copy-by');
        }
        return OptionService::get('copy-by-' . $param);
    }
}
