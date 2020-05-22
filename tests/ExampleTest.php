<?php

namespace Suprvise\SuprviseLaravel\Tests;

use Orchestra\Testbench\TestCase;
use Suprvise\SuprviseLaravel\SuprviseLaravelServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [SuprviseLaravelServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
