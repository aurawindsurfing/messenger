<?php

return [

    'index'        => '/messages/{thread?}',
    'create'       => '/messages/{user}/create',
    'store'        => '/messages/{thread}/store',

    // users used for generating dummy messages
    'firstUserId'  => 1,
    'secondUserId' => 2,

];
