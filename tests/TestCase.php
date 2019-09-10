<?php

namespace Aurawindsurfing\Messenger\Tests;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Aurawindsurfing\Messenger\Tests\Models\User;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Aurawindsurfing\Messenger\MessengerServiceProvider;

class TestCase extends OrchestraTestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->artisan('migrate');

        $this->withFactories(__DIR__.'/../database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [
            MessengerServiceProvider::class,
        ];
    }

//    protected function getPackageAliases($app)
//    {
//        return [
//            'sample-command' => SampleCommand::class,
//        ];
//    }

    protected function signIn($user = null)
    {
        $user = $user ?: factory(User::class)->create();

        $this->actingAs($user);

        return $user;
    }
}
