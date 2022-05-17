<?php

use Carbon\Carbon;

if (!function_exists('now')) {
    /**
     * Create a new Carbon instance for the current time.
     *
     * @param \DateTimeZone|string|null $tz
     * @return \Illuminate\Support\Carbon
     */
    function now($tz = null)
    {
        return Carbon::now($tz);
    }
}

if (!function_exists('is_valid_json')) {
    /**
     * Check if string is a valid json.
     *
     * @param string $data
     *
     * @return boolean
     */
    function is_valid_json(string $data = null): bool
    {
        if (!empty($data)) {
            try {
                @json_decode($data);
                return (json_last_error() === JSON_ERROR_NONE);
            } catch (Exception $e) {
                return false;
            }
        }
        return false;
    }
}

if (!function_exists('storage_path')) {
    /**
     * Get the path to the storage folder.
     *
     * @param string $path
     * @return string
     */
    function storage_path($path = '')
    {
        return app()->storagePath($path);
    }
}

if (!function_exists('public_path')) {
    /**
     * Return the path to public dir
     * @param null $path
     * @return string
     */
    function public_path($path = null)
    {
        return rtrim(app()->basePath('public/' . $path), '/');
    }
}

if (!function_exists('config_path')) {
    /**
     * Return the path to config files
     * @param null $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->getConfigurationPath(rtrim($path, ".php"));
    }
}

if (!function_exists('lang_path')) {
    /**
     * Return the path to lang dir
     * @param null $str
     * @return string
     */
    function lang_path($path = null)
    {
        return app()->getLanguagePath($path);
    }
}

if (!function_exists('asset')) {
    /**
     * Generate an asset path for the application.
     *
     * @param string $path
     * @param bool $secure
     * @return string
     */
    function asset($path, $secure = null)
    {
        return app('url')->asset($path, $secure);
    }
}

if (!function_exists('resource_path')) {
    /**
     * Return the path to resource dir
     * @param null $path
     * @return string
     */
    function resource_path($path = null)
    {
        return app()->resourcePath($path);
    }
}

if (!function_exists('database_path')) {
    /**
     * Return the path to database dir
     * @param null $path
     * @return string
     */
    function database_path($path = null)
    {
        return app()->databasePath($path);
    }
}
