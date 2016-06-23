# Faker Vehicle Provider

A provider for [Faker](https://github.com/fzaninotto/Faker#faker-internals-understanding-providers) to generate random vehicle makes & models as well as UK registration plate.

## Install

This package is not available on Packagist, this means that in order to make Composer be aware of this package you will need to add this [repository to your `composer.json`](https://getcomposer.org/doc/05-repositories.md#vcs) like below:

```
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/mattwells/faker-vehicle.git"
        }
    ]
```

Then add `"mattwells/faker-vehicle": "dev-master"` to you `require` or `require-dev` array.

Finally you need to add the provider to Faker:

```
$generator = \Faker\Factory::create();
$generator->addProvider(new \MattWells\Faker\Vehicle\Provider($generator));
```
