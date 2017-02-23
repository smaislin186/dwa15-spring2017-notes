# Composer Setup on Windows

These instructions are for Window's users; [for Mac instructions on setting up Composer, go here...](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/03_Laravel/03_Composer_Setup_Mac.md)

Summary:

1. PHP from command line check
2. Installing Composer
3. Common problems (and solutions)


## PHP from command line check
In addition to running PHP on a server, you can also run PHP from command line. Composer uses PHP from command line, so we want to first get on the same page with *which* installation of PHP command line is using in order to understand what version of PHP we're using, what modules we have available, etc.

For __Windows__, we want PHP from command line to use XAMPP's installation of PHP, located at `c:\xampp\php\`

This is accomplished by adding the above paths to your PATH variable. __For complete instructions on what the PATH variable is and how to edit it, read: [PATH Variables](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/00_Command_Line/99_Extras/PATH_Variable.md).__

Once you've completed the above linked instructions, you should confirm that...

1. You can run `php` from the command line.
2. The command `php` is using the PHP executable that comes installed with MAMP/XAMPP.

__Windows expectations__

```xml
$ where.exe php
C:\xampp\php\php.exe

$ php -v
PHP 7.0.13 (cli) (built: Nov 8 2016 13:45:27) ( ZTS )
Copyright (c) 1997-2016 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2016 Zend Technologies

$ php --ini
Configuration File (php.ini) Path: C:\Windows
Loaded Configuration File:         C:\xampp\php\php.ini
Scan for additional .ini files in: (none)
Additional .ini files parsed:      (none)
```


## Installing Composer on Windows
There's a handy installer for Window's Composer, which you can download here: <https://getcomposer.org/Composer-Setup.exe>.

Running through the installer, you should see the following screens.

Make sure the `php.exe` path on the **second screen** matches the same XAMPP php.exe you set up in your PATH. This way you know what `php.exe` and `php.ini` Composer is using.

[Enlarge...](http://making-the-internet.s3.amazonaws.com/laravel-composer-install-on-windows@2x.png)
<img src='http://making-the-internet.s3.amazonaws.com/laravel-composer-install-on-windows@2x.png' class='' style='max-width:1252px; width:100%' alt='Composer installation on Windows'>

When the installer is complete, **close and restart Cmder**.

Now, you should be able to run the `composer` command from within any directory. This works because the installer updated your PATH variable for you.

<img src='http://making-the-internet.s3.amazonaws.com/laravel-windows-composer-confirm@2x.png' class='' style='max-width:537px; width:100%' alt=''>

That's it! Composer is installed and ready to go.


## Common problems (and solutions)

### Issue: openssl

__Symptoms:__ You get a message saying *openssl* is not enabled.

__Solution:__ Identify what `php.ini` file you're using with this command:

	$ php --ini

Open the indicated `php.ini` file and make sure the following line is not commented out (i.e. it does *not* have a semi-colon in front of it):

	extension=php_openssl.dll


### Issue: SSL Certificate problem

__Symptoms:__ (Mac) When downloading Composer (via the `curl -sS https://getcomposer.org/installer | php` command), you receive an error regarding SSL certificates:

```xml
curl: (60) SSL certificate problem: unable to get local issuer certificate
More details here: http://curl.haxx.se/docs/sslcerts.html
curl performs SSL certificate verification by default, using a "bundle"
 of Certificate Authority (CA) public keys (CA certs). If the default
 bundle file isn't adequate, you can specify an alternate file
 using the --cacert option.
If this HTTPS server uses a certificate signed by a CA represented in
 the bundle, the certificate verification probably failed due to a
 problem with the certificate (it might be expired, or the name might
 not match the domain name in the URL).
If you'd like to turn off curl's verification of the certificate, use
 the -k (or --insecure) option.
```

__Solution__:
Run the curl command somewhere outside of `/usr/local/bin` (for example, in your Documents folder) and when it's done, move the resulting `composer.phar` into `/usr/local/bin`.

```xml
$ cd ~/Documents
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer.phar
```
