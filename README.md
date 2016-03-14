[![Build Status](https://scrutinizer-ci.com/g/PBXg33k/vocadb-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/PBXg33k/vocadb-bundle/build-status/master) [![Code Coverage](https://scrutinizer-ci.com/g/PBXg33k/vocadb-bundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/PBXg33k/vocadb-bundle/?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/PBXg33k/vocadb-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/PBXg33k/vocadb-bundle/?branch=master) [![Latest Stable Version](https://poser.pugx.org/pbxg33k/vocadb-bundle/v/stable)](https://packagist.org/packages/pbxg33k/vocadb) [![Total Downloads](https://poser.pugx.org/pbxg33k/vocadb-bundle/downloads)](https://packagist.org/packages/pbxg33k/vocadb) [![Latest Unstable Version](https://poser.pugx.org/pbxg33k/vocadb-bundle/v/unstable)](https://packagist.org/packages/pbxg33k/vocadb) [![License](https://poser.pugx.org/pbxg33k/vocadb-bundle/license)](https://packagist.org/packages/pbxg33k/vocadb)
**NOTE: This is a pre-alpha release. It is broken, and under heavy development activity.**

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require pbxg33k/vocadb-bundle "@dev-master"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Pbxg33k\VocadbBundle\Pbxg33kVocadbBundle(),
        );

        // ...
    }

    // ...
}
```

Todo:
-----
- Add Sonata Admin pages
- Add missing Models from VocaDB
- Add controllers
- Add CLI Commands