<?php declare (strict_types=1);

namespace Orzford\Flute\Validation\JsonApi\Rules;

use Orzford\Flute\Contracts\Validation\ErrorCodes;
use Orzford\Flute\Validation\L10n\Messages;
use Limoncello\Validation\Contracts\Execution\ContextInterface;
use Limoncello\Validation\Rules\ExecuteRule;
use Ramsey\Uuid\Validator\ValidatorInterface as UuidValidatorInterface;

/**
 * @package App
 */
final class IsUuidRule extends ExecuteRule
{
    /**
     * @param mixed            $value
     * @param ContextInterface $context
     *
     * @return array
     */
    public static function execute($value, ContextInterface $context): array
    {
        $uuidValidator = $context->getContainer()->get(UuidValidatorInterface::class);

        return $uuidValidator->validate($value) === true ?
            static::createSuccessReply($value) :
            static::createErrorReply(
                $context,
                $value,
                ErrorCodes::IS_UUID,
                Messages::IS_UUID,
                []
            );
    }
}