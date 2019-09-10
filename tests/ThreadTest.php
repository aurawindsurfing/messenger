<?php

namespace Aurawindsurfing\Messenger\Tests;

use Aurawindsurfing\Messenger\Message;
use Aurawindsurfing\Messenger\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase {

    use RefreshDatabase;

    /** @test */
    public function it_has_messages()
    {
        $thread = factory(Thread::class)->create();
        $message = factory(Message::class, 10)->create(['thread_id' => 1]);

        $this->assertInstanceOf(Message::class, $thread->messages()->first());
    }

    /** @test */
    public function it_can_add_a_message()
    {
        $thread = factory(Thread::class)->create();
        $message = $thread->addMessage('Some new message', 1);

        $this->assertCount(1, $thread->messages);
        $this->assertTrue($thread->messages->contains($message));
    }






}



