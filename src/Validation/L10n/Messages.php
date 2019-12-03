<?php declare (strict_types=1);

namespace Dreamsbond\Flute\Validation\L10n;

use Limoncello\Flute\L10n\Messages as BaseMessages;

/**
 * @package Dreamsbond\Flute\Validation\L10n
 */
interface Messages extends BaseMessages
{
    /**
     * @var string Validation Message Template
     */
    const IS_UUID = 'The value should be a valid Universally Unique Identifier (UUID).';
}
