<?php

namespace Akaunting\Money\Tests;

use Akaunting\Money\Provider;
use Illuminate\Testing\TestResponse;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    // Older Testbench releases expect the concrete test case to provide this.
    protected static ?TestResponse $latestResponse = null;

    protected function getPackageProviders($app): array
    {
        return [Provider::class];
    }
}
