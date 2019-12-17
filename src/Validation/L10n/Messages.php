<?php declare (strict_types=1);

namespace Orzford\Flute\Validation\L10n;

/**
 * @package Orzford\Flute\Validation\L10n
 */
interface Messages extends \Limoncello\Flute\L10n\Messages
{
    /**
     * @var string Validation Message Template
     */
    const IS_UUID = 'The value should be a valid Universally Unique Identifier (UUID).';
}
