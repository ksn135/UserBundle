# Symfony2 Admin Generator User Bundle
---------------------------------------

[![KnpBundles Badge](http://knpbundles.com/symfony2admingenerator/GeneratorBundle/badge-short)](http://knpbundles.com/symfony2admingenerator/GeneratorBundle)
![project status](http://stillmaintained.com/symfony2admingenerator/UserBundle.png)
[![Latest Stable Version](https://poser.pugx.org/symfony2admingenerator/user-bundle/v/stable.png)](https://packagist.org/packages/symfony2admingenerator/user-bundle)
[![Total Downloads](https://poser.pugx.org/symfony2admingenerator/user-bundle/downloads.png)](https://packagist.org/packages/symfony2admingenerator/user-bundle)

This package is a part of the [Symfony2 Admin Generator](https://github.com/symfony2admingenerator/GeneratorBundle) based on YAML configuration and Twig templating.

It will allow you to associate to the [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) a base layout configured throw a config in the config.yml

### Follow us on Twitter!

Don't miss any updates from **Symfony2 Admin Generator**! Join Twitter today and [follow us](https://twitter.com/sf2admgen)!

## How to setup

### Download files

Add Admingenerator to your `composer.json`:

```json
"require": {
    "symfony2admingenerator/user-bundle": "dev-master"
},
```

Then run `php composer.phar update` command.

> **Note:** This repository is compatible with [symfony2admingenerator/GeneratorBundle](https://github.com/symfony2admingenerator/GeneratorBundle).

### Setup the FOSUserBundle

Follow the bundle documentation : [https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md)

### Enable the bundle in AppKernel

```php
 $bundles = array(
    // ....
    new Admingenerator\UserBundle\AdmingeneratorUserBundle(),
```

### Configure the base layout to use for the login form

In config.yml

```yaml
admingenerator_user:
     login_template: AdmingeneratorGeneratorBundle::base_admin.html.twig
```

## Use the twig extension in your projects :

```html+django
{% extends_my_configured_layout 'admingenerator.user_login_template' %}
```

Will be the same as :

```html+django
{% extends 'The value of the container paramater admingenerator.user_login_template' %}
```

