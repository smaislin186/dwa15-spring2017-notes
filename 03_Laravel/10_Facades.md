# Facades

In the *Basic flow* notes we saw how routes are declared using Laravel's Router Class:

```php
Route::get('/', function() {
    # [...]
});
```

Before proceeding, let's take a moment to focus on the `Route::get` syntax because you'll see it used frequently throughout Laravel...
<br><br>
Knowing what we know about object oriented programming, it looks like `Route::get` is **statically** invoking a method called `get` from a class called `Route`.

(Refresher &rarr; [PHP notes: Statically using classes](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/02_PHP/12_Classes.md#statically-using-classes))

This implies that the Route class is never instantiated, but that's not actually true. What we're seeing here is what Laravel calls a **facade**.

__A facade is a &ldquo;static alias&rdquo; to a underlying class/object in Laravel.__

Here's another example using Laravel's `Hash` facade:

```php
$hashedPassword = Hash::make('secret123');
```

And another example using Laravel's `App` facade:
```php
$currentEnvironment = App::environment();
```

## Philosophy behind the use of facades
>> *[Laravel facades] provide the benefit of a terse, expressive syntax while maintaining more testability and flexibility than traditional static methods.* -[src](http://laravel.com/docs/facades#facade-class-reference)


## Facades and their classes
Here's a [list of facades and their underlying classes](http://laravel.com/docs/facades#facade-class-reference).

You can identify many facades in the [Laravel 5 cheatsheet](https://learninglaravel.net/cheatsheet/)&mdash; look for any class name followed by two colons, e.g. `Config::`, `File::`, `Request::`, `Session::`, etc.



## Helpers
Some Laravel classes can also be accessed via a **helper method** which provides an even more terse syntax for commonly used methods.

For example, the Config class can be used like this:

```php
$timezone = Config::get('app.timezone');
```

But there's also a helper method that can accomplish the same thing:
```php
$timezone = config('app.timezone');
```

[See a full list of available helper functions here...](https://laravel.com/docs/5.4/helpers)
