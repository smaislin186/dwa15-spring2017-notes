## Defining arrays
In PHP, an array is an ordered map that associates values to keys.

A new empty array can be defined like so:

```php
$translations = [];
```

Or, it can be defined with initial values like so:
```php
$translations =
[
    'hello' => 'hola',
    'goodbye' => 'adios',
];
```

Note that the array's contents is encapsulated in square brackets.

Alternatively, you may see the `array()` construct used instead of square brackets:

```php
$translations = array(
    'hello' => 'hola',
    'goodbye' => 'adios',
);
```

In this course, we'll strictly use the square bracket notation.

Each element in the array (e.g. `hello => hola`) is made up of a **key => value pair**.

Elements in an array are separated by commas; the comma after the last item in the array is optional.

In the above example, the keys of the array were Strings, and this is referred to as an **associative array**.

The keys of an array can also be Integers, and this is referred to as an **indexed array**:

```php
$phrases = [
    0 => 'hola',
    1 => 'adios',
    2 => 'hasta luego',
    3 => 'por favor',
    4 => 'de nada'
];
```

Indexed arrays can also be written like this, where the key is implicitly defined, starting at 0.

```php
$phrase = [
    'hola',
    'adios',
    'hasta luego',
    'por favor',
    'de nada',
];
```

It's not necessary for the elements of an array to be written on their own lines as shown in the above examples; the syntax can be compacted like so:

```php
$phrase = ['hola', 'adios', 'hasta luego', 'por favor', 'de nada'];
```


## Working with elements in an array
You can access elements in an array using the square bracket syntax, *array[key]*.

```php
echo $phrases[0]; # Output: hola
echo $translations['hola'] # Output: hello
```

You can add new values to an existing array using the square bracket syntax:

Example with an associative array:
```php
$translations['good afternoon'] = 'buenas tardes';
```

This same approach can also be used to update an existing value in an array:

```php
# Before
echo $translations['goodbye']; # adios

# Update
$translations['goodbye'] = 'adiós';

# After
echo $translations['goodbye']; # adiós
```

When adding an element to an indexed array, omitting the key will simply add the value as a new element at the end of the array.
```php
$phrases[] = 'buenas tardes';
```

As an alternative to the square bracket syntax, elements in an array can be added/changed using the built-in functions [array_push](http://php.net/manual/en/function.array-push.php) or [array_replace](http://php.net/manual/en/function.array-replace.php).


## Debugging arrays
The built-in PHP function [var_dump](http://php.net/manual/en/function.var-dump.php) can be used to output the contents of an array for debugging purposes.

```php
var_dump($translations);
```

Output:
```xml
array(2) { ["hello"]=> string(4) "hola" ["goodbye"]=> string(5) "adios" }
```

The output of `var_dump` is easier to read when it's nested in a HTML `pre` element.
```php
echo '<pre>';
var_dump($translations);
echo '</pre>';
```

Output:
```xml
array(2) {
  ["hello"]=>
  string(4) "hola"
  ["goodbye"]=>
  string(5) "adios"
}
```

Later in the semester, we'll see more sophisticated tools for dumping data, but for now, copy and paste the following helper function into your examples so you can easily dump/see the contents of an array (and other data types as well):

```php
function dump($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
}
```

Usage:
```php
dump($translations);
```

Output:
```xml
array(2) {
  ["hello"]=>
  string(4) "hola"
  ["goodbye"]=>
  string(5) "adios"
}
```

## Value types
While they key of an array can be either a String or an Integer, the values of an array can be many different data types, and the data types can be mixed.

```php
$mixedBag = [
    False, # Booleans
    4.0, # Floats
    1, # Integers
    ['a', 'b', 'c'] # Even other Arrays!
];
```

An array containing other arrays is referred to as a **multidimensional array**.

```php
$countries = [
    'US' => [
        'name' => 'United States',
        'languages' => ['English'],
    ],
    'CA' => [
        'name' => 'Canada',
        'languages' => ['English', 'French'],
    ],
    'MX' => [
        'name' => 'Mexico',
        'languages' => ['Spanish'],
    ],
];
```

Accessing elements in a multi-dimensional array requires multiple levels of square brackets

```php
echo $countries['CA']['languages']; # Output: ['English', 'French']
```



## Iterating through arrays
PHP's built-in construct [foreach](http://php.net/manual/en/control-structures.foreach.php) is used to iterate through elements in an array.

Examples:
```php
# Print the name of all the countries in the array
foreach($countries as $countryCode => $country) {
    echo $country['name'].'<br>';
}

# Print the country code (key) of all the countries in the array
foreach($countries as $countryCode => $country) {
    echo $countryCode.'<br>';
}

# Print a line that uses the country name, code (key), and languages
foreach($countries as $countryCode => $country) {
    echo 'Primary language(s) of '.$country['name'].' ('.$countryCode.') :'.$country['languages'].'<br>';
}

# Update the array so that all the country names are uppercase
foreach($countries as $countryCode => $country) {
    $country[$countryCode]['name'] = strtoupper($country[$countryCode]['name']);
}
```



## Built-in array functions
Skim the complete list of built-in PHP [Array functions](http://php.net/manual/en/ref.array.php)

Sampling of commonly used functions:
+ count — Count all elements in an array, or something in an object
+ in_array — Checks if a value exists in an array
+ krsort — Sort an array by key in reverse order
+ ksort — Sort an array by key
+ rsort — Sort an array in reverse order
+ shuffle — Shuffle an array
+ sort — Sort an array
+ array_pop — Pop the element off the end of array
+ array_push — Push one or more elements onto the end of array
+ array_search — Searches the array for a given value and returns the first corresponding key if successful
+ array_shift — Shift an element off the beginning of array
+ array_slice — Extract a slice of the array
+ array_sum — Calculate the sum of values in an array
