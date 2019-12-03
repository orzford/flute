<?php

namespace Dreamsbond\Flute\Contracts\Validation;

use Limoncello\Flute\Contracts\Validation\ErrorCodes as BaseErrorCodes;

/**
 * @package Dreamsbond\Flute\Contracts\Validation
 */
interface ErrorCodes extends BaseErrorCodes
{
    /**
     * Custom error code
     */
    const IS_UUID = self::FLUTE_LAST + 1;
}
