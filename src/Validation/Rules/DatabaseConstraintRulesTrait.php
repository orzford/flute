<?php declare(strict_types=1);

namespace Orzford\Flute\Validation\Rules;

use Limoncello\Flute\Validation\Rules\DatabaseRulesTrait;
use Limoncello\Validation\Contracts\Rules\RuleInterface;
use Limoncello\Validation\Rules\Generic\AndOperator;
use Orzford\Flute\Validation\JsonApi\Rules\UniqueConstraintWithDoctrineRule;

/**
 * @package Orzford\Flute\Validation\Rules
 */
trait DatabaseConstraintRulesTrait
{
    use DatabaseRulesTrait;

    /**
     * @param string             $tableName
     * @param string             $primaryName
     * @param null|string        $primaryKey
     * @param RuleInterface|null $next
     *
     * @return RuleInterface
     */
    protected static function isUnique(
        string $tableName,
        string $primaryName,
        ?string $primaryKey = null,
        RuleInterface $next = null
    ): RuleInterface
    {
        $primary = new UniqueConstraintWithDoctrineRule($tableName, $primaryName, $primaryKey);

        return $next === null ?
            $primary :
            new AndOperator($primary, $next);
    }
}
