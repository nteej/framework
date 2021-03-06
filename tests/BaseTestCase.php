<?php
namespace AvoRed\Framework\Tests;

use AvoRed\Framework\Provider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class BaseTestCase extends OrchestraTestCase
{
    public function setUp()
    {
        parent::setUp();
        // $this->setUpDatabase();
    }
    private function resetDatabase()
    {
        $this->artisan('migrate:reset', [
            '--database' => 'sqlite',
        ]);
    }
    protected function getPackageProviders($app)
    {
        return [
            Provider::class,
        ];
    }
    /**
     * Set up the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', array(
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ));
       
    }
    protected function setUpDatabase()
    {
        $this->resetDatabase();
    }
}