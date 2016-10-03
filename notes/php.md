# PHP

PHP Hypertext Preprocessor (what an awful name) is a server-side scripting language. It is used to make web pages dynamic. It can:
  - provide different content depending on the context
  - interface with other services: database, e-mail, etc.
  - authenticate users
  - process form information

PHP is written in the following format:
```
<? php
  echo "Hello, world!";
?>
```

To declare a variable use `$variable`.  

To coerce a variable can use the following syntax: `$var = (int) "21"`

Basic types of variables:
  - `int`
  - `float`
  - `boolean`
  - `string`
  - `array`
  - `object`

Commenting in **PHP**

`# Single line comment`
`// single line comment`
`/* Multi-line commenting */`

## for loop
```
for (initialization; condition; update) {
  statements;
}
```
Example
```
for ($i = 0; $i < 10; $i++) {
  print "$i squared is" . $i * $i . ".\n";
}
```

The `.` is used to concatenate.

Math operator `ceil` will be useful in creating even column.

Strings within `''` are not evaluated. Wrap vars in curlys to aid in concatenation.
```
echo "Today is your {$age}th birthday.\n";
```

## String functions

- `strlen`: string length
- `strpos`: indexOf
- `substr`: substitute string
- `strtolower` & `strtoupper`: coerce to upper or lower
- `explode`: can split string on a character
- `implode`: join an array using a character

#### vardump
vardump is a function:
`vardump($variable);`

**PHP expression blocks**
```
<?= expression ?>
```
The equals is mandatory
