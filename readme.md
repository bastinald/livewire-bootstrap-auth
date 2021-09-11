## Livewire Bootstrap Auth

Laravel starter kit with Livewire & Bootstrap 5 auth scaffolding.

## Requirements

- NPM

## Installation

Create a new Laravel app:

```console
laravel new my-app
```

Configure your `.env` app, database, and mail values:

```env
APP_*
DB_*
MAIL_*
```

Require this package via composer:

```console
composer require bastinald/livewire-bootstrap-auth
```

## Usage

Run the `make:auth` command to generate scaffolding:

```console
php artisan make:auth
```

This will create the Livewire components and install Bootstrap 5.
