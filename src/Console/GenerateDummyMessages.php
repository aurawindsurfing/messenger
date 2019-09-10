<?php

namespace Aurawindsurfing\Messenger\Console;

use Illuminate\Console\Command;
use Aurawindsurfing\Messenger\Thread;
use Aurawindsurfing\Messenger\Message;

class GenerateDummyMessages extends Command
{
    protected $signature = 'messenger:generate';
    protected $description = 'Generates dummy messages for view testing';

    public function handle()
    {
        $firstUser = config('messenger.firstUserId');
        $secondUser = config('messenger.secondUserId');

        \factory(Thread::class)->create(['from_user_id' => 1, 'to_user_id' => 2]);
        \factory(Message::class)->create(['thread_id' => 1, 'user_id' => $firstUser, 'body' => 'Hi! Thanks for trying out laravel messenger package!']);
        \factory(Message::class)->create(['thread_id' => 1, 'user_id' => $secondUser, 'body' => 'Hey! Let me try it and I\'ll get back to you']);
        \factory(Message::class)->create(['thread_id' => 1, 'user_id' => $firstUser, 'body' => 'How is it working for you?']);
        \factory(Message::class)->create(['thread_id' => 1, 'user_id' => $secondUser, 'body' => 'Works great! But it is missing group messaging']);
        \factory(Message::class)->create(['thread_id' => 1, 'user_id' => $firstUser, 'body' => 'Sure that was the idea! Just a simple messenger and that is it! Make a pull request if you want to add some changes to it!']);

        \factory(Thread::class, 5)->create();
        \factory(Message::class, 60)->create();

        $this->info('Generated 3 fake threads and 65 fake messages between first and second users defined in config file');
    }
}
