```php
function my_function($arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      $keysToRemove[] = $key; 
    }
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
  return $arr;
}

$myArray = ['apple', 'banana', 'target', 'orange'];
$result = my_function($myArray);
print_r($result); // Output: Array ( [0] => apple [1] => banana [3] => orange ) 

//Alternative solution using array_filter
function my_function_filter($arr){
  return array_filter($arr, function($value){ return $value !== 'target';});
}

$myArray = ['apple', 'banana', 'target', 'orange'];
$result = my_function_filter($myArray);
print_r($result); //Output: Array ( [0] => apple [1] => banana [3] => orange )
```