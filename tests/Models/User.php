<?php

namespace Aurawindsurfing\Messenger\Tests\Models;

use Aurawindsurfing\Messenger\Messagable;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    use Messagable;

    public $timestamps = false;
    protected $table = 'users';
    protected $guarded = [];
}
