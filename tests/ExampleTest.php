<?php

namespace Twgroupcl\Chileansii\Tests;

use Orchestra\Testbench\TestCase;
use Twgroupcl\Chileansii\ChileansiiServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [ChileansiiServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
