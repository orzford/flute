<?php declare (strict_types=1);

namespace Orzford\Flute\Contracts\Validation;

/**
 * @package Orzford\Flute\Contracts\Validation
 */
interface ErrorCodes extends \Limoncello\Flute\Contracts\Validation\ErrorCodes
{
    /**
     * Custom error code
     */
    const IS_UUID = self::FLUTE_LAST + 1;
}
