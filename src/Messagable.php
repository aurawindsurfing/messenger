<?php

namespace Aurawindsurfing\Messenger;

trait Messagable
{
    public function threads()
    {
        return Thread::whereHas('messages', function ($query) {
            $query->whereUserId($this->id);
        })->latest();
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function unreadMessages()
    {
        return $this->hasMany(Message::class)->whereNull('read_at');
    }

    public function newThreadPath()
    {
        return str_replace_last('{user}', $this->id, config('messenger.create'));
    }
}
