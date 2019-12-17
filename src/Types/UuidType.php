<?php declare (strict_types=1);

namespace Orzford\Flute\Types;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class UuidType extends GuidType
{
    const NAME = 'limoncelloUuid';

    /**
     * @inheritDoc
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $result = null;

        if (empty($value))
            $result = null;

        if (($value instanceof UuidInterface) || ((is_string($value) || method_exists($value, '__toString')) && Uuid::isValid((string)$value)))
            $result = (string)$value;

        return $result;
    }

    /**
     * @inheritDoc
     */
    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        $result = null;

        if (empty($value)) {
            $result = null;
        }

        if ($value instanceof UuidInterface) {
            $result = $value;
        }

        $result = Uuid::fromString($value);

        return $result;
    }
}
