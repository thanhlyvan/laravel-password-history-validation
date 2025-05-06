<?php

namespace Infinitypaul\LaravelPasswordHistoryValidation\Tests;

use Infinitypaul\LaravelPasswordHistoryValidation\LaravelPasswordHistoryValidationServiceProvider;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelPasswordHistoryValidationServiceProvider::class];
    }

    #[Test]
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
