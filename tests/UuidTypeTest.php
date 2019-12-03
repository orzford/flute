<?php declare (strict_types=1);

namespace Dreamsbond\Tests\Flute;

use Doctrine\DBAL\Types\Type;
use Dreamsbond\Flute\Types\UuidType;

/**
 * @package App
 */
class UuidTypeTest extends TestCase
{
    /**
     * @inheritDoc
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function setUp(): void
    {
        parent::setUp();

        if (Type::hasType(UuidType::NAME) === false) {
            Type::addType(UuidType::NAME, UuidType::class);
        }
    }
}
