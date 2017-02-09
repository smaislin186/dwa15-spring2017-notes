# Imports
PHP files can import other PHP files using one of the following statements:

+ [include](http://php.net/manual/en/function.include.php)
+ [require](http://php.net/manual/en/function.require.php)
+ [include_once](http://php.net/manual/en/function.include-once.php)
+ [require_once](http://php.net/manual/en/function.require-once.php)

A common use case for importing files, in any language, is to import a set of helper functions.

As an example, create a new file called `tools.php` in the document root from which you're working.

[Fill this file with the code found here...](https://raw.githubusercontent.com/susanBuck/dwa15-php-practice/master/tools.php)

This code includes 2 helper functions:

1. `dump` - Used to quickly output variables, arrays, etc. in a readable fashion
2. `sanitize` - Used to remove HTML characters from an array or string; will be used later when we get to forms.

To test the tools out, create a *second* file called `toolsDemo.php` that has this code:

```
<?php

# Import the tools
require('tools.php');

# Then test them out:
dump('hi');
dump(['apples', 'oranges', 'pears']);
dump(sanitize('<script>alert("Hi!")</script>'));
```

This produce results like the following:

<img src='http://making-the-internet.s3.amazonaws.com/php-toolsDemo@2x.png' style='max-width:493px;' alt=''>

If you run this test and get an error that `tools.php` can't be found, be sure both `tools.php` and `toolsDemo.php` are in the same location. If they're not, you need to adjust the path in the require statement.

Moving forward in the notes, if you see the `dump` function being used in examples, you can assume the tools.php file has been/should be imported.


## include vs. require
The difference between include and require is that include will not throw an error if the file is not found.

To demonstrate, imagine you're trying to open a file called `foobar.php` but, for whatever reason, it doesn't exist.

This would cause an error:
```php
require('foobar.php');
```

This would cause a warning rather than an error:
```php
include('foobar.php');
```


## require/include vs. require_once/include_once
The `_once` varieties the import statements can be used to prevent importing a file twice (or more) in a given script.

Examples:

`tools.php` would be imported twice:
```php
require('tools.php');
require('tools.php');
```

`tools.php` would only be imported once:
```php
require_once('tools.php');
require_once('tools.php');
```
