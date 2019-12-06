<?php declare (strict_types=1);

namespace Dreamsbond\Flute\Validation\Rules;

use Dreamsbond\Flute\Validation\JsonApi\Rules\IsUuidRule;
use Limoncello\Validation\Contracts\Rules\RuleInterface;
use Limoncello\Validation\Rules\Generic\AndOperator;

/**
 * @package Dreamsbond\Flute\Validation\Rules
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
