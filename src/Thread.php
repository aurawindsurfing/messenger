<?php

namespace Aurawindsurfing\Messenger;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * Class Thread
 * @package Aurawindsurfing\Messenger
 */
class Thread extends Model {

    /**
     * @var string
     */
    protected $table = 'messenger_threads';

    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany(Message::class)->oldest();
    }

    public function addMessage($body, $userId = null)
    {
        $message = $this->messages()->create([
            'body'    => $body,
            'user_id' => $userId,
        ]);

        return $message;
    }

    public function subject()
    {
        return isset($this->hasMany(Message::class)->oldest()->first()->body) ? Str::limit($this->hasMany(Message::class)->oldest()->first()->body, 40) : 'Create a new message';
    }

    public function users()
    {
        return User::whereIn('id', [
            $this->from()->id,
            $this->to()->id,
        ]);
    }

    public function from()
    {
        return User::find($this->from_user_id);
    }

    public function to()
    {
        return User::find($this->to_user_id);
    }

    public function path()
    {
        return str_replace_last('{thread?}', $this->id, config('messenger.index'));
    }

    public function storeMessagePath()
    {
//
//        if (!isset($this->id)) {
//            $model = $this->save();
//        }

        return str_replace_last('{thread}', $this->id, config('messenger.store'));
    }


}
