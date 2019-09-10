<?php

namespace Aurawindsurfing\Messenger\Tests;

use Aurawindsurfing\Messenger\Thread;
use Aurawindsurfing\Messenger\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belons_to_thread()
    {
        factory(Thread::class)->create();
        $message = factory(Message::class)->create(['thread_id' => 1]);

        $this->assertInstanceOf(Thread::class, $message->thread);
    }

}
