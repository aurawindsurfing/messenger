# Messenger for Laravel [![Packagist License][badge_license]](LICENSE.md) [![For Laravel][badge_laravel]][link-github-repo]

[![Travis Status][badge_build]][link-travis]
[![Coverage Status][badge_coverage]][link-scrutinizer]
[![Scrutinizer Code Quality][badge_quality]][link-scrutinizer]
[![Github Issues][badge_issues]][link-github-issues]

[![Packagist][badge_package]][link-packagist]
[![Packagist Release][badge_release]][link-packagist]
[![Packagist Downloads][badge_downloads]][link-packagist]

This package allows you to create simple user to user messaging system  within your Laravel application. It comes packaged with all the views and even a simple admin panel.
It does not have support for group conversations yet as well as it does not support editing of messages. It is simply send and receive messenger.

![Messenger Dashboard](https://github.com/aurawindsurfing/messenger/blob/master/messages_dashboard.png?raw=true)

## Features
Easy setup &amp; configuration.
* One to one messaging between users
* Multiple conversations (threads) per user
* Returns all messages associated with the user
* Returns the user's unread message count
* Well documented &amp; IDE Friendly.
* Well tested with maximum code quality.
* Laravel `5.7` to `5.8` are supported.
* Made with :heart: &amp; :coffee:.

## Laravel Versions

Laravel | Messenger
--- | ---
5.7+ | 1.*

## Installation

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

This package apart from standard config and migrations files includes also controller, views, factories and console commands. 

To publish all assets run:
```bash
php artisan vendor:publish  --provider="Aurawindsurfing\Messenger\MessengerServiceProvider"
```
Create a `users` table if you do not have one already. If you need one, the default Laravel migration will be satisfactory.

Migrate your database:

```bash
php artisan migrate
```

Edit config:

```bash
config/messenger.php
```

This package allows you to create fake messages between users so you can construct views more easily. To view fake messages you NEED to be logged in as one of the users otherwise you will receive 404 error.
To choose for which users to create messages edit your config file:

```php
'firstUserId'  => 1,
'secondUserId' => 2,
```

Add the trait to your user model:

```php
use Aurawindsurfing\Messenger\Messagable;

class User extends Authenticatable {

    use Messagable;

```

## Usage

Populate your messenger tables with dummy data so you will be able to see some messages displayed. To do this run:
```bash
php artisan messenger:generate
```

Visit:

```bash
https://yourapp.test/messages/1
```
To see message threads received by first user

To clear all your dummy data run below command in your console. Be careful as this command will delete all data from messages table including real messages if they exist!
```bash
php artisan messenger:deleteAllData
```

# Customise

## Controller 

**(Optional)** This package uses its own MessagesController which you might choose to overwrite. To do this you need to copy it from 
```bash
/vendor/aurawindsurfing/messenger/src/Http/Controllers
``` 
to 
```bash
/app/Http/Controllers

```
Edit your config file and your copied controller to amend controller namesapce:
```php
'controller_namespace' => 'Http\Controllers',
```

This controller uses 3 methods, ``index``, ``create``, ``store`` feel free to rename them to whatever is necessary in your own application.

Edit your config file and amend method names:
```php
// customise controller method names if you choose to overwrite default controller
'controller_index'  => 'index',
'controller_create' => 'create',
'controller_store'  => 'store',

```
## Views:

```bash
php artisan vendor:publish --tag=views --provider="Aurawindsurfing\Messenger\MessengerServiceProvider"
```

They will be placed in:
```bash
resources/views/vendor/messenger
```
    
## Migrations:

```bash
php artisan vendor:publish --tag=migrations --provider="Aurawindsurfing\Messenger\MessengerServiceProvider" 
```

## Commands and factories:

Package factories and commands will be available for your laravel app with autoloading. You can copy them to relevant places and overwrite them if needed.


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


[badge_laravel]:      https://img.shields.io/badge/Laravel-5.7%20to%205.8-orange.svg?style=flat-square
[badge_license]:      https://img.shields.io/packagist/l/aurawindsurfing/messenger.svg?style=flat-square
[badge_build]:        https://img.shields.io/travis/aurawindsurfing/messenger.svg?style=flat-square
[badge_coverage]:     https://img.shields.io/scrutinizer/coverage/g/aurawindsurfing/messenger.svg?style=flat-square
[badge_quality]:      https://img.shields.io/scrutinizer/g/aurawindsurfing/messenger.svg?style=flat-square
[badge_issues]:       https://img.shields.io/github/issues/aurawindsurfing/messenger.svg?style=flat-square
[badge_package]:      https://img.shields.io/badge/package-aurawindsurfing/messenger-blue.svg?style=flat-square
[badge_release]:      https://img.shields.io/packagist/v/aurawindsurfing/messenger.svg?style=flat-square
[badge_downloads]:    https://img.shields.io/packagist/dt/aurawindsurfing/messenger.svg?style=flat-square

[link-author]:        https://github.com/aurawindsurfing
[link-github-repo]:   https://github.com/aurawindsurfing/messenger
[link-github-issues]: https://github.com/aurawindsurfing/messenger/issues
[link-contributors]:  https://github.com/aurawindsurfing/messenger/graphs/contributors
[link-packagist]:     https://packagist.org/packages/aurawindsurfing/messenger
[link-travis]:        https://travis-ci.org/aurawindsurfing/messenger
[link-scrutinizer]:   https://scrutinizer-ci.com/g/aurawindsurfing/messenger/?branch=master
[link-insight]:       https://insight.sensiolabs.com/projects/0fe62754-1219-409a-9d05-b6ae7e3e342f


