<?php declare (strict_types=1);

namespace Orzford\Flute\Http\Query;

use Limoncello\Container\Traits\HasContainerTrait;
use Orzford\Flute\Contracts\Http\Query\RouteIndexInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

/**
 * @package App
 */
class RouteIndex implements RouteIndexInterface
{
    use HasContainerTrait;

    /**
     * @var string
     */
    private $index;

    /**
     * @param PsrContainerInterface $container
     */
    public function __construct(PsrContainerInterface $container)
    {
        $this->setContainer($container);
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * @param string $index
     */
    public function setIndex(string $index): void
    {
        $this->index = $index;
    }
}
