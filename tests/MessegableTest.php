<?php

namespace Aurawindsurfing\Messenger\Tests;

use Carbon\Carbon;
use Aurawindsurfing\Messenger\Thread;
use Aurawindsurfing\Messenger\Message;
use Aurawindsurfing\Messenger\Tests\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessegableTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_have_many_threads()
    {
        $pat = factory(User::class)->create(['name' => 'pat']);
        $mat = factory(User::class)->create(['name' => 'mat']);

        factory(Thread::class, 2)->create();
        factory(Message::class)->create(['user_id' => 1, 'thread_id' => 1]);
        factory(Message::class)->create(['user_id' => 1, 'thread_id' => 2]);

        $this->assertEquals(2, $pat->threads()->count());
        $this->assertEquals(0, $mat->threads()->count());
    }

    /** @test */
    public function user_can_have_messages()
    {
        $pat = factory(User::class)->create(['name' => 'pat']);
        factory(Thread::class, 5)->create();
        factory(Message::class, 5)->create(['user_id' => 1]);

        $this->assertEquals(5, $pat->messages()->count());
    }

    /** @test */
    public function message_belongs_to_a_user()
    {
        $pat = factory(User::class)->create(['name' => 'pat']);
        factory(Thread::class, 5)->create();
        factory(Message::class, 5)->create(['user_id' => 1]);

        $this->assertEquals(5, $pat->messages()->count());
    }

    /** @test */
    public function user_can_have_unread_messages()
    {
        $pat = factory(User::class)->create(['name' => 'pat']);
        factory(Thread::class, 5)->create();
        factory(Message::class, 5)->create(['user_id' => 1, 'read_at' => Carbon::now()]);
        factory(Message::class, 2)->create(['user_id' => 1, 'read_at' => null]);

        $this->assertEquals(2, $pat->unreadMessages()->count());
    }
}
