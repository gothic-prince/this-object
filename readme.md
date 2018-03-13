### Examples:
```php
use GothicPrince\Verify\ThisObject;
$string1 = 'My name is Alex';
$string2 = 'Hello World';
ThisObject::ofString($string1)->shouldContainsText('alex') //true
ThisObject::ofString($string2)->shouldContainsText('helo') //false
```
