The solution is straightforward: always use the strict comparison operator (`===`) when comparing variables to ensure both the value and type are identical.  The corrected code is:

```php
$value = "1";
if ($value === true) {
    echo "Value is true";
} else {
    echo "Value is false";
}
```

This version correctly evaluates the comparison and outputs "Value is false" because the string "1" is not strictly equal to the boolean `true`.