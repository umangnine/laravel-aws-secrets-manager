<?php

namespace Umn\LaravelAwsSecretsManager\Tests;

use Orchestra\Testbench\TestCase;
use Umn\LaravelAwsSecretsManager\LaravelAwsSecretsManagerServiceProvider;

class ExampleTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [LaravelAwsSecretsManagerServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
