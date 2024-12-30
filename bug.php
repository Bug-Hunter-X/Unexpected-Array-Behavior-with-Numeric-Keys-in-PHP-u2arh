```php
<?php
function increment_array_value(&$arr, $key) {
  if (!isset($arr[$key])) {
    $arr[$key] = 0; 
  }
  $arr[$key]++;
}

$my_array = [];
increment_array_value($my_array, 'count');
echo "Count: " . $my_array['count'] . "\n";

//This will work as expected
increment_array_value($my_array, 'count');
echo "Count: " . $my_array['count'] . "\n";

//The error appears here:
increment_array_value($my_array, 1);
echo "Count: " . $my_array[1] . "\n";
increment_array_value($my_array, 1);
echo "Count: " . $my_array[1] . "\n";
?>
```