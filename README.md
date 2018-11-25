<p align="center">
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="https://www.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
    <h1 align="center">Yii Framework Project Template</h1>
    <br>
</p>

[Yii Framework] Project Template is a skeleton application best for
rapidly creating projects.

[Yii Framework]: http://www.yiiframework.com/

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii-project-template.svg)](https://packagist.org/packages/yiisoft/yii-project-template)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii-project-template.svg)](https://packagist.org/packages/yiisoft/yii-project-template)
[![Build Status](https://travis-ci.org/yiisoft/yii-project-template.svg?branch=master)](https://travis-ci.org/yiisoft/yii-project-template)

DIRECTORY STRUCTURE
-------------------

```
config/             contains application configurations
public/             contains the entry script, published assets and other publicly available files e.g. favicon.ico and robots.txt
runtime/            contains files generated during runtime
vendor/             contains dependent 3rd-party packages
.env
.env.dist
composer.json
docker-compose.yml
```

REQUIREMENTS
------------
 

The minimum requirement by this project template that your Web server supports PHP 7.1.


INSTALLATION
------------

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

    composer create-project --prefer-dist --stability=dev yiisoft/yii-project-template myapp
    cd myapp

This gives you an empty project, which you can add application templates to, see the following sections on how
to add these.

> Depending on your system you might need to give write permissions to `./runtime` and `./public/assets`

### CLI application

If you want to install a console application, which is needed for running your own console commands, you can add it
by requiring the [yiisoft/yii-base-cli](https://github.com/yiisoft/yii-base-cli) package.

    composer require yiisoft/yii-base-cli

You can now run `yii help` to see the available commands.

### API application

If you want to create an API, you can add it by requiring the [yiisoft/yii-base-api](https://github.com/yiisoft/yii-base-api) package.

    composer require yiisoft/yii-base-api
    vendor/bin/yii serve -p 8081
    
You can access the API via `http://localhost:8081/`.

### Web application

Since web-applications use client-side assets, such as CSS and Javascript, you first choose an asset distribution system

> *a) Asset-packagist & composer-merge-plugin (requires only `PHP`)*
> 
>     composer require "wikimedia/composer-merge-plugin"
>     composer config repositories.ap '{"type": "composer", "url": "https://asset-packagist.org"}'
>     composer config extra.merge-plugin.include "vendor/*/*/composer.assets.json"
>         
> *b) Foxy (requires `npm` or `yarn`)*
> 
>     composer require "foxy/foxy:^1.0.0"
> 

Now you are able to install the web-application base along with its dependencies
 
     composer require yiisoft/yii-base-web
     vendor/bin/yii serve
 
Now you should be able to access the application via `http://localhost:8080/`.

---

> You can find more available application bases on [GitHub](https://github.com/yiisoft?utf8=✓&q=yii-base).


### Docker

Clone the repository and create the environment configuration file

    cp .env.dist .env

To run the installation create a bash from the PHP image

    docker-compose run --rm php bash
    
and run the `composer` commands above.
   
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

Run directly from Docker image

    docker run -it -v $PWD/yii-project:/app -w /app yiisoftware/yii2-php:7.2-apache bash
