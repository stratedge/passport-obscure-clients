# Passport-Obscure-Clients
Allows OAuth clients to use random strings instead of sequential integers

## Installation

### Composer

Passport-Obscure-Clients can be installed with composer, though it is not yet listed on Packagist.

```sh
composer config repositories.passport-obscure-clients vcs https://github.com/stratedge/passport-obscure-clients.git
composer require stratedge/passport-obscure-clients:dev-master
```

### Service Registration

If you are using Passport-Obscure-Clients without any other modifications to the Passport package, then the only required step is to include the Passport-Obscure-Clients service provider **instead of** the Passport provider. The Passport-Obscure-Clients service provider will register both packages.

```php
//In config/app.php:
'providers' => [
    //...
    Stratedge\PassportObscureClients\PassportServiceProvider::class,
    //...
];
```
