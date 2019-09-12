<?php

return [

    // routes
    'index'                => '/messages/{thread?}',
    'create'               => '/messages/{user}/create',
    'store'                => '/messages/{thread}/store',

    // customise controller method names if you choose to overwrite default controller
    'controller_index'     => 'index',
    'controller_create'    => 'create',
    'controller_store'     => 'store',

    //customise controller namespace
    'controller_namespace' => 'Aurawindsurfing\Messenger\Http\Controllers',

    // users used for generating dummy messages
    'firstUserId'          => 1,
    'secondUserId'         => 2,

];
