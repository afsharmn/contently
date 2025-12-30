<?php

namespace Afsharmn\Contently\Support;

class Assets
{
    protected static function basePath(): string
    {
        // points to package root
        return dirname(__DIR__, 2);
    }

    public static function css(): string
    {
        $path = self::basePath() . '/resources/css/contently.css';

        return is_file($path) ? file_get_contents($path) : '';
    }

    public static function js(): string
    {
        $path = self::basePath() . '/resources/js/contently.js';

        return is_file($path) ? file_get_contents($path) : '';
    }
}
