<?php

namespace Aurawindsurfing\Messenger\Tests;

use Aurawindsurfing\Messenger\Thread;
use Aurawindsurfing\Messenger\Message;
use Aurawindsurfing\Messenger\Tests\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LaravelTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function the_console_command_generated_dummy_data()
    {
        factory(User::class, 2)->create();

        $this->artisan('messenger:generate')
            ->expectsOutput('Generated 3 fake threads and 65 fake messages between first and second users defined in config file');

        $this->assertEquals(6, Thread::all()->count());
        $this->assertEquals(65, Message::all()->count());
    }

    /** @test */
    public function the_console_command_deletes_all_user_messages()
    {
        factory(User::class, 2)->create();

        $this->artisan('messenger:generate');

        $this->artisan('messenger:deleteAllData')
            ->expectsQuestion('Are you sure you want to delete all users messages? It will delete all of them!', 'yes')
            ->expectsOutput('Deleted user messages!');

        $this->assertEquals(0, Thread::all()->count());
        $this->assertEquals(0, Message::all()->count());
    }
}
