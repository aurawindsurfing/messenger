<?php

namespace Aurawindsurfing\Messenger\Console;

use Aurawindsurfing\Messenger\Message;
use Aurawindsurfing\Messenger\Thread;
use Illuminate\Console\Command;

class DeleteAllData extends Command {

    protected $signature = 'messenger:deleteAllData';
    protected $description = 'Deletes all user messages, NOT ONLY dummy data!!!';

    public function handle()
    {
        if ($this->confirm('Are you sure you want to delete all users messages? It will delete all of them!'))
        {
            Message::truncate();
            Thread::truncate();
        }

        $this->info('Deleted user messages!');
    }
}
