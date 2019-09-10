<?php

namespace Aurawindsurfing\Messenger;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * @package Aurawindsurfing\Messenger
 */
class Message extends Model {

    /**
     * @var string
     */
    protected $table = 'messenger_messages';

    /**
     * @var array
     */
    protected $fillable = ['thread_id', 'user_id', 'body', 'read_at'];

    /**
     * @var array
     */
    protected $touches = ['thread'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }


}
