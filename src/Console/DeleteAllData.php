<?php

namespace Aurawindsurfing\Messenger\Console;

use Illuminate\Console\Command;
use Aurawindsurfing\Messenger\Thread;
use Aurawindsurfing\Messenger\Message;

class DeleteAllData extends Command
{
    protected $signature = 'messenger:deleteAllData';
    protected $description = 'Deletes all user messages, NOT ONLY dummy data!!!';

    public function handle()
    {
        if ($this->confirm('Are you sure you want to delete all users messages? It will delete all of them!')) {
            Message::truncate();
            Thread::truncate();
        }

        $this->info('Deleted user messages!');
    }
}
