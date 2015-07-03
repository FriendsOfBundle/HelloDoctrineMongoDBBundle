# HelloDoctrineMongoDBBundle

[![Latest Stable Version](https://poser.pugx.org/hgtan/mongo-odm-bundle/v/stable)](https://packagist.org/packages/hgtan/mongo-odm-bundle) [![Total Downloads](https://poser.pugx.org/hgtan/mongo-odm-bundle/downloads)](https://packagist.org/packages/hgtan/mongo-odm-bundle) [![Latest Unstable Version](https://poser.pugx.org/hgtan/mongo-odm-bundle/v/unstable)](https://packagist.org/packages/hgtan/mongo-odm-bundle) [![License](https://poser.pugx.org/hgtan/mongo-odm-bundle/license)](https://packagist.org/packages/hgtan/mongo-odm-bundle)
Just a simple example bundle using MongoDB Object Document Mapper (ODM) and the following Bundles:
* [DoctrineMongoDBBundle](https://github.com/doctrine/DoctrineMongoDBBundle)

Installation
------------

### Step 1: Using Composer

composer.json
```bash
    php composer.phar require hgtan/mongo-odm-bundle:dev-master
```

### Step 2 : Register the bundle

Then register the bundle with your kernel:

```
    <?php

    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
        new Hgtan\Bundle\HelloDoctrineMongoDBBundle\HelloDoctrineMongoDBBundle(),
        // ...
    );
```

### Step 3 : Configure the bundle

Then register the bundle with your kernel:

```
    # app/config/config.yml
    
```

### Step 4 : Test
```
    $ php app/console hgtan:user:create
    Please choose a username: ahoang
    Please choose an email: hoang@example.com
    Please choose a password: 
    Created user ahoang

```