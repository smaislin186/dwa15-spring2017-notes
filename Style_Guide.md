# CSCI E-15 Style Guide

[Read more about usage of this style guide...](https://github.com/susanBuck/dwa15-spring2017-notes/blob/master/02_PHP/99_Code_Style.md)


## Naming conventions
+ Class names should be declared using `UpperCamelCase`.
+ Variables, methods, functions should be declared using `camelCase`.
+ Constants should be declared using `UPPER_SNAKE_CASE`.



## Formatting
Code should use 4 spaces for indenting, not tabs.

PHP only files (no HTML) should aim to keep lines around 80 characters or less. Lines that stretch beyond this point should be refactored for optimal readability.

Files with HTML may extend beyond this 80 character limit.

In PHP-only files, there should only be one statement per line.

Right:
```php
$x = 1;
$y = 2;
```

Wrong:
```php
$x = 1; $y = 2;
```


## Indentation
Parent/child relationship of code blocks should consistently be indicated with 4 spaces.


### PHP
For PHP code, this includes the structure of if constructs, loops, classes, functions/methods, etc. Example:

Right:
```php
if($x) {
    if($y) {
        echo $x;
    }
}
```

Wrong:
```php
if($x) {
    if($y) {
    echo $x;
    }
}
```


### HTML
For HTML code, indentation should be used to emphasize nesting relationships of elements.

Right:
```html
<header>
    <h1>Welcome!</h1>
    <img src='logo.png' alt='Company Logo'>
</header>
```

Wrong:
```html
<header>
<h1>Welcome!</h1>
<img src='logo.png' alt='Company Logo'>
</header>
```

Typically, block level elements start and end tags should go on their own lines, but exceptions can be made, as long as they're consistent.

For example, for short list items, it's typical/acceptable to see the start/end `li` tag on the same line:

```html
<ul>
    <li>Apples</li>
    <li>Oranges</li>
</ul>
```


### CSS
Declarations should be indented, with one declaration per line.

Right:
```css
footer {
    color:red;
    font-family:Helvetica;
}
```

Wrong:
```css
footer {
color:red; font-family:Helvetica;
}
```




## PHP Tags
PHP code should use the long `<?php ?>` tags or the short-echo `<?= ?>` tags.

Files with just PHP code and no output (i.e. logic files) should omit the closing `?>` tag.


## Alternative syntax in display files
PHP's echo shortcut should be used when echo'ing in a display file:

Wrong:
```php
<title><?php echo $title; ?></title>
```

Right:
```php
<title><?=$title?></title>
```

When the Blade templating language is introduced (not until mid-semester), that will be the preferred echo approach, as it will take care of escaping output:

```php
<title>{{ $title }}</title>
```

For optimal readability, PHP control structures in HTML should use the `:`/`end` alternative syntax.

Wrong:
```php
<?php foreach($students as $student) { ?>
    <?php echo $student['name']; ?><br>
<?php } ?>
```

Right:
```php
<?php foreach($students as $student): ?>
    <?php echo $student['name']; ?><br>
<?php endforeach ?>
```

When the Blade templating language is introduced (not until mid-semester) you may format your PHP display control structures using that:

```php
@foreach($students as $student)
    {{ $student['name'] }}
endforeach
```
