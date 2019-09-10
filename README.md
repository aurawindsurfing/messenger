# Messenger for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/aurawindsurfing/messenger.svg?style=flat-square)](https://packagist.org/packages/aurawindsurfing/messenger)
[![Build Status](https://img.shields.io/travis/aurawindsurfing/messenger/master.svg?style=flat-square)](https://travis-ci.org/aurawindsurfing/messenger)
[![Quality Score](https://img.shields.io/scrutinizer/g/aurawindsurfing/messenger.svg?style=flat-square)](https://scrutinizer-ci.com/g/aurawindsurfing/messenger)
[![Total Downloads](https://img.shields.io/packagist/dt/aurawindsurfing/messenger.svg?style=flat-square)](https://packagist.org/packages/aurawindsurfing/messenger)

This package allows you co create simple user to user messaging system to be used within your Laravel application. It comes packaged with all the views and even a simple admin panel.
It does not have support for group conversations yet as well as it does not support editing of messages. It is simply send and receive messenger.

![Messenger Dashboard](https://github.com/aurawindsurfing/messenger/blob/master/messages_dashboard.png?raw=true)

## Features
* One to one messaging between users
* Multiple conversations (threads) per user
* Returns all messages associated with the user
* Returns the user's unread message count


## Laravel Versions

Laravel | Messenger
--- | ---
5.7+ | 1.*

## Installation (Laravel 5.7+)

You can install the package via composer:

```bash
composer require aurawindsurfing/messenger
```

Or place manually in composer.json:

```php
"require": {
    "aurawindsurfing/messenger": "~1.0"
}
```

Run:

```bash
composer update
```

This package apart from standard config and migrations files includes also controller, views, factories and console commands. To publish all assets run:
```bash
php artisan vendor:publish  --provider="Aurawindsurfing\Messenger\MessengerServiceProvider"
```

### Publish separately

Publish config:

```bash
php artisan vendor:publish --tag=config --provider="Aurawindsurfing\Messenger\MessengerServiceProvider"
```
It will create a file:
```bash
config/messenger.php
```

**(Optional)** This package adds basic routes to your application needed for handling the message creation and viewing of messages, you can customise them in your config file:

```php
'index'   => '/messages/{thread?}',
'create'  => '/messages/{user}/create',
'store'   => '/messages/{thread}/store',
```

Create a `users` table if you do not have one already. If you need one, the default Laravel migration will be satisfactory.

**(Optional)** This package allows you to create fake messages between users so you can construct views more easily. You can customise for which users the messages will be created in your config file:

```php
'firstUserId'  => 1,
'secondUserId' => 2,
```

Publish views:

```bash
php artisan vendor:publish --tag=views --provider="Aurawindsurfing\Messenger\MessengerServiceProvider"
```

They will be placed in:
```bash
resources/views/vendor/messenger
```
    
Publish migrations:

```bash
php artisan vendor:publish --tag=migrations --provider="Aurawindsurfing\Messenger\MessengerServiceProvider" 
```

Migrate your database:

```bash
php artisan migrate
```

Commands and factories:

Package factories and commands will be available for your laravel app with autoloading. There is no need to copy them to your application folder.

Customising MessengerController:

It is very likely that you would like to customise controller as usually messages are viewed in some sort of user profile page or menu.
To do this simply extend provided controller and overwrite it's methods.

```php
<?php

namespace App\Http\Controllers;

use Aurawindsurfing\Messenger\Http\Controllers\MessagesController;

class YourController extends MessagesController {
```

Add the trait to your user model:

```php
use Aurawindsurfing\Messenger\Messagable;

class User extends Authenticatable {

    use Messagable;

```

Finally for your convenience you can populate your messenger tables with dummy data so you will be able to see some messages displayed. To do this run:
```bash
php artisan messenger:generate
```
To clear all your dummy data run below command in your console. Be careful as this command will delete all data from messages table including real messages if they exist!
```bash
php artisan messenger:deleteAllData
```



## Usage

Visit:

```bash
https://yourapp.test/messages/1
```
To see message threads received by first user

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email tom@gazeta.ie instead of using the issue tracker.

## Credits

- [Tomasz Lotocki](https://github.com/aurawindsurfing)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
