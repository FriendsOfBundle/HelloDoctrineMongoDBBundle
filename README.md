# HelloDoctrineMongoDBBundle
==========================
Just a simple example bundle using MongoDB Object Document Mapper (ODM) and the following Bundles:
* [DoctrineMongoDBBundle](https://github.com/doctrine/DoctrineMongoDBBundle)
* 

Installation
------------
[![Latest Stable Version](https://poser.pugx.org/hgtan/doctrine-mongodb-bundle/v/stable.svg)](https://packagist.org/packages/hgtan/doctrine-mongodb-bundle) [![Total Downloads](https://poser.pugx.org/hgtan/doctrine-mongodb-bundle/downloads.svg)](https://packagist.org/packages/hgtan/doctrine-mongodb-bundle) [![Latest Unstable Version](https://poser.pugx.org/hgtan/doctrine-mongodb-bundle/v/unstable.svg)](https://packagist.org/packages/hgtan/doctrine-mongodb-bundle) [![License](https://poser.pugx.org/hgtan/doctrine-mongodb-bundle/license.svg)](https://packagist.org/packages/hgtan/doctrine-mongodb-bundle)

### Step 1: Using Composer

composer.json
```bash
    php composer.phar require hgtan/doctrine-mongodb-bundle:dev-master
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