<?php declare (strict_types=1);

namespace Orzford\Flute\Validation\Rules;

use Orzford\Flute\Validation\JsonApi\Rules\IsUuidRule;
use Limoncello\Validation\Contracts\Rules\RuleInterface;
use Limoncello\Validation\Rules\Generic\AndOperator;

/**
 * @package Orzford\Flute\Validation\Rules
 */
trait UuidRulesTrait
{
    /**
     * @param RuleInterface|null $next
     *
     * @return RuleInterface
     */
    protected static function isUuid(RuleInterface $next = null): RuleInterface
    {
        $primary = new IsUuidRule();

        return $next === null ? $primary : new AndOperator($primary, $next);
    }
}
