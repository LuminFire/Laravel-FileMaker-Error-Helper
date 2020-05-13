<?php

namespace BrilliantPackages\LaravelFmErrorHelper;

class Helper
{
    /**
     * Convert FileMaker status codes to error message string.
     *
     * @since 1.0.0
     *
     * @param string|int $fmCode FileMaker error message.
     * @param string $fallback Fallback error message; defaults to 'Unknown error'.
     *
     * @return string Error message.
     */
    public static function getErrorMessage($fmCode, $fallback = 'Unknown error')
    {
        return FMError::getErrorMessage($fmCode, $fallback);
    }

    /**
     * Convert FileMaker status codes to HTTP status codes.
     *
     * @since 1.0.0
     *
     * @param string|int $fmCode FileMaker error code.
     * @param int $fallback Fallback error code; defaults to 500.
     *
     * @return int HTTP status code.
     */
    public static function getErrorCode($fmCode, $fallback = 500)
    {
        return FMError::getErrorCode($fmCode, $fallback);
    }
}
