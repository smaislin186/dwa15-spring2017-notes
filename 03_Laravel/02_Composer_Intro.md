## What is Composer?

* Dependency Manager for PHP
* Command Line utility
<img src='http://making-the-internet.s3.amazonaws.com/laravel-composer-logo-in-command-line@2x.png' class='' style='max-width:776px; width:100%' alt='Composer called in command line'>

* Similar to Node's NPM and Ruby's Bundler
* Installs dependencies on a project by project basis, all configured by a configuration file. E.g.:

`composer.json`
```json
 "require": {
        "php": ">=5.6.4",
        "laravel/framework": "5.4.*",
        "laravel/tinker": "~1.0"
    },
    "require-dev": {
        "fzaninotto/faker": "~1.4",
        "mockery/mockery": "0.9.*",
        "phpunit/phpunit": "~5.7"
    },
```

* Packagist <http://packagist.org>
* Powers autoloading - On-demand Class loading
* Docs <https://getcomposer.org/doc/>
