<?php
if (!function_exists('themeLocation')) {
    /**
     * Get the theme location from settings.
     *
     * @return string
     */
    function themeLocation()
    {
        return app('settings')['template_location'] ?? 'frontend.themes.maintheme';
    }
}