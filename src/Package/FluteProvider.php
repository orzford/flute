<?php declare (strict_types=1);

namespace Orzford\Flute\Package;

use Limoncello\Contracts\Provider\ProvidesContainerConfiguratorsInterface;

/**
 * @package App
 */
class FluteProvider implements ProvidesContainerConfiguratorsInterface
{
    /**
     * Get container configurator classes.
     *
     * @see ContainerConfiguratorInterface
     *
     * @return string[]
     */
    public static function getContainerConfigurators(): array
    {
        return [
            FluteContainerConfigurator::class,
        ];
    }
}
