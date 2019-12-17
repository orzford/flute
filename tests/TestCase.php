<?php declare (strict_types=1);

namespace Orzford\Tests\Flute;

use Doctrine\DBAL\DriverManager;
use Limoncello\Contracts\Data\ModelSchemaInfoInterface;
use Mockery;
use PHPUnit\Framework\TestCase as BaseTestCase;

/**
 * @package App
 */
class TestCase extends BaseTestCase
{
    /**
     * @inheritDoc
     */
    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * @inheritDoc
     */
    protected function tearDown()
    {
        parent::tearDown();

        Mockery::close();
    }

    /**
     * @return \Doctrine\DBAL\Connection
     * @throws \Doctrine\DBAL\DBALException
     */
    protected function createConnection()
    {
        $connection = DriverManager::getConnection(['url' => 'sqlite:///', 'memory' => true]);
        $this->assertNotSame(false, $connection->exec('PRAGMA foreign_keys = ON;'));
        return $connection;
    }

//    /**
//     * @return ModelSchemaInfoInterface
//     */
//    protected function getModelSchemas()
//    {
//        $modelSchemas = static::createSchemas([
//            Board::class,
//            Comment::class,
//            Emotion::class,
//            Post::class,
//            Role::class,
//            User::class,
//            Category::class,
//            StringPKModel::class,
//            PostExtended::class,
//        ]);
//        return $modelSchemas;
//    }
}
