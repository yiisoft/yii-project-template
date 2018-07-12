<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 3.0 Project Template</h1>
    <br>
</p>

Yii 3.0 Project Template is a skeleton [Yii](http://www.yiiframework.com/) application best for
rapidly creating projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/app.svg)](https://packagist.org/packages/yiisoft/app)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/app.svg)](https://packagist.org/packages/yiisoft/app)
[![Build Status](https://travis-ci.org/yiisoft/app.svg?branch=master)](https://travis-ci.org/yiisoft/app)

DIRECTORY STRUCTURE
-------------------

```
bin/
config/             contains application configurations
public/             contains the entry script for a web server
runtime/            contains files generated during runtime
src/
  assets/             contains assets definition
  commands/           contains console commands (controllers)
  controllers/        contains Web controller classes
  mail/               contains view files for e-mails
  models/             contains model classes
  views/              contains view files for the Web application
tests/              contains various tests for the basic application
vendor/             contains dependent 3rd-party packages
.env
.env.dist
composer.json
```

REQUIREMENTS
------------
 

The minimum requirement by this project template that your Web server supports PHP 7.1.


INSTALLATION
------------

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability=dev yiisoft/app myapp
cd myapp
./bin/yii serve
~~~

Now you should be able to access the application via `http://localhost:8080/`.

### Docker

Clone the repository and install vendor packages

    docker-compose run --rm php composer install
    
Start application stack

    docker-compose up -d
    
Access in your browser via

~~~
http://docker.host:30080
~~~

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory.
