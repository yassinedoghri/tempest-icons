<?php

declare(strict_types=1);

namespace TempestIcons;

use Override;
use PHPIcons\PHPIcons;
use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;

final readonly class PHPIconsInitializer implements Initializer
{
    #[Singleton]
    #[Override]
    public function initialize(Container $container): PHPIcons
    {
        return new PHPIcons();
    }
}
