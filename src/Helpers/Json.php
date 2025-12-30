<?php

namespace Afsharmn\Contently\Helpers;

class Json
{
    /**
     * Determine whether the given value is a valid JSON string.
     *
     * By default, only JSON that decodes to an array or object is considered valid.
     * This is useful for structured data like block/page builders.
     *
     * @param mixed $value
     * @param bool  $requireArrayOrObject  Whether decoded JSON must be an array/object
     *
     * @return bool True if the value is valid JSON, otherwise false
     */
    public static function isJson(mixed $value, bool $requireArrayOrObject = true): bool
    {
        if (!is_string($value) || trim($value) === '') {
            return false;
        }

        $decoded = json_decode($value, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return false;
        }

        if ($requireArrayOrObject) {
            return is_array($decoded);
        }

        return true;
    }
}
