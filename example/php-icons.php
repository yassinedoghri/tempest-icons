<?php

declare(strict_types=1);

use PHPIcons\Config\PHPIconsConfig;

return PHPIconsConfig::configure()
    ->withPaths([__DIR__ . '/app'])
    ->withDefaultPrefix('')
    ->withPlaceholder('�');
