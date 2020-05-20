<?php

declare(strict_types=1);

namespace PoP\TaxonomyQueryWP;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\TaxonomyQuery\Component::class,
            \PoP\MetaQueryWP\Component::class,
            \PoP\TaxonomyMetaWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'migrate-taxonomyquery-wp',
        ];
    }
}
