<?php declare (strict_types=1);

namespace Orzford\Tests\Flute\Package;

use Orzford\Flute\Package\FluteProvider;
use Orzford\Tests\Flute\TestCase;

/**
 * @package App
 */
class FluteProviderTest extends TestCase
{
    /**
     * Test provider
     */
    public function testProvider()
    {
        $this->assertNotEmpty(FluteProvider::getContainerConfigurators());
    }
}
