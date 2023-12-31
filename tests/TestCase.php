<?php

namespace Kiwilan\Sentinel\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithConsoleEvents;
use Kiwilan\Sentinel\SentinelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use WithConsoleEvents;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kiwilan\\Sentinel\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SentinelServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_sentinel-laravel_table.php.stub';
        $migration->up();
        */
    }
}
