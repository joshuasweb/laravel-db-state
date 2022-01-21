<?php

namespace Joshuasweb\LaravelDbState\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joshuasweb\LaravelDbState\LaravelDbStateServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Joshuasweb\\LaravelDbState\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDbStateServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-db-state_table.php.stub';
        $migration->up();
        */
    }
}
