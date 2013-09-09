#TKGen
=====

A simple PHP class to automatically create a token value.

How to use it:
```php
$myToken = New TKGen(); // Create an instance of TKGen
$myString = "What does not kill you makes you stronger";

$valToken = $myToken->token($myString, 20);

echo $valToken;
```

## Changelog

v1.0 - 2013-09-09 : initial release
