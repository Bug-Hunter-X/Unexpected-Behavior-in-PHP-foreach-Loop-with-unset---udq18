```php
function my_function($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
      break; // This line is crucial!
    }
  }
  return $arr;
}

$myArray = ['apple', 'banana', 'target', 'orange'];
$result = my_function($myArray);
print_r($result); // Output: Array ( [0] => apple [1] => banana [3] => orange )

//Problem: foreach loop using unset() and reference
//The unset() function modifies the original array, and the foreach loop continues to use the original array
//When unset() is called, the array's internal pointer is modified, and next iteration may skip elements.
```