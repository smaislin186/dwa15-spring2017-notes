With your Laravel application up and running locally, we now need to deploy it on your production server.

Before we can deploy, though, we need to do a few updates on your DigitalOcean server so it's set up with the necessary components that Laravel needs to run.

In these notes, we'll do the following:

1. Install Composer
2. Install some necessary modules
3. Enable `mod_rewrite`


## Install Composer
Before you install Composer, first run the following command to set up a swap file on your Droplet:

```xml
$ sudo fallocate -l 4G /swapfile
```

>> "Swap is an area on a hard drive that has been designated as a place where the operating system can temporarily store data that it can no longer hold in RAM." -[ref](https://www.digitalocean.com/community/tutorials/how-to-add-swap-on-ubuntu-14-04)

This preventative step will help when Composer runs memory intensive tasks.


Now move into your bin directory where you'll install Composer:

```bash
$ cd /usr/local/bin
```

Use cURL to download Composer:

```bash
$ curl -sS https://getcomposer.org/installer | sudo php
```

Rename the composer executable to `composer` so it's convenient to invoke:

```bash
$ sudo mv composer.phar composer
```

Test it's working:

```bash
$ composer
```

See a list of Composer commands? Good, you're ready to move to the next step...



## Install necessary modules
There are 4 modules Laravel and Composer will need that our DigitalOcean server's don't have installed by default.

To install these modules run the following command:

```xml
$ sudo apt-get install php7.0-mbstring php-xml zip unzip
```

Follow the instructions to hit Enter or Y (yes) when prompted.


## Enable mod_rewrite
Laravel requires Apache's `mod_rewrite` for Routing purposes.

To enable this module, run the following command on your DigitalOcean droplet:

```xml
$ sudo a2enmod rewrite
```

Restart Apache to make these this change take effect:
```xml
$ sudo service apache2 restart
```




## Server setup complete!
At this point, you DigitalOcean Droplet has everything it needs to run a Laravel app. You're ready to move on to the next steps of deploying.
