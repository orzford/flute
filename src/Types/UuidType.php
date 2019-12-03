<?php declare (strict_types=1);

namespace Dreamsbond\Flute\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType as BaseGuidType;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class UuidType extends BaseGuidType
{
    const NAME = 'limoncelloUuid';

    /**
     * @inheritDoc
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (empty($value))
            return null;

        if (assert($value instanceof UuidInterface) || ((is_string($value) || method_exists($value, '__toString')) && Uuid::isValid((string)$value)))
            return (string)$value;
    }

    /**
     * @inheritDoc
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if (empty($value)) {
            return null;
        }

        if ($value instanceof UuidInterface) {
            return $value;
        }

        $uuid = Uuid::fromString($value);

        return $uuid;
    }
}
