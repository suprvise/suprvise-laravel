<?php

namespace Suprvise\Laravel\Tests;

use Orchestra\Testbench\TestCase;
use Suprvise\Laravel\Providers\SuprviseServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [SuprviseServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
