<?php

declare(strict_types=1);

use PHPIcons\PHPIcons;
use function Tempest\get;

/**
 * Provides convenient access to rendering an icon with optional attributes using the PHPIcons class
 *
 * @param array<string, string> $attributes
 */
function icon(string $iconKey, array $attributes = []): PHPIcons
{
    $phpIcons = get(PHPIcons::class);

    if ($attributes !== []) {
        $phpIcons->attributes($attributes);
    }

    return $phpIcons->icon($iconKey);
}
