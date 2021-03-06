# HelloDoctrineMongoDBBundle

[![Latest Stable Version](https://poser.pugx.org/hgtan/mongo-odm-bundle/v/stable)](https://packagist.org/packages/hgtan/mongo-odm-bundle) 
[![Total Downloads](https://poser.pugx.org/hgtan/mongo-odm-bundle/downloads)](https://packagist.org/packages/hgtan/mongo-odm-bundle) 
[![Latest Unstable Version](https://poser.pugx.org/hgtan/mongo-odm-bundle/v/unstable)](https://packagist.org/packages/hgtan/mongo-odm-bundle) 
[![License](https://poser.pugx.org/hgtan/mongo-odm-bundle/license)](https://packagist.org/packages/hgtan/mongo-odm-bundle)

[![Build Status](https://img.shields.io/travis/FriendsOfBundle/HelloDoctrineMongoDBBundle.svg?style=flat-square)](https://travis-ci.org/FriendsOfBundle/HelloDoctrineMongoDBBundle)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/FriendsOfBundle/HelloDoctrineMongoDBBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfBundle/HelloDoctrineMongoDBBundle/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/FriendsOfBundle/HelloDoctrineMongoDBBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/FriendsOfBundle/HelloDoctrineMongoDBBundle)
[![HHVM Status](https://img.shields.io/hhvm/hgtan/mongo-odm-bundle.svg?style=flat-square)](http://hhvm.h4cc.de/package/hgtan/mongo-odm-bundle)
[![Dependency Status](https://img.shields.io/versioneye/d/user/projects/55964fbb616634001b000001.svg?style=flat-square)](https://www.versioneye.com/user/projects/55964fbb616634001b000001)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4e4c6ca7-f398-44d1-8472-4b24bd1c32de/big.png)](https://insight.sensiolabs.com/projects/4e4c6ca7-f398-44d1-8472-4b24bd1c32de)

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
        new Hgtan\Bundle\HelloDoctrineMongoDBBundle\HgtanHelloDoctrineMongoDBBundle(),
        // ...
    );
```

### Step 3 : Configure the bundle

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