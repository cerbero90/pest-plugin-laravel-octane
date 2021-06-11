<?php

namespace Cerbero\PestPluginLaravelOctane;

use Cerbero\PestPluginLaravelOctane\Providers\PestPluginLaravelOctaneServiceProvider;
use Orchestra\Testbench\TestCase;

/**
 * The package test suite.
 *
 */
class PestPluginLaravelOctaneTest extends TestCase
{
    /**
     * Retrieve the package providers.
     *
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            PestPluginLaravelOctaneServiceProvider::class,
        ];
    }
}
