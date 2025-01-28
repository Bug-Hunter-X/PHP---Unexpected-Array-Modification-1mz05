```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_string($value)) {
      $newData[$key] = strtolower($value);
    } else {
      $newData[$key] = $value;
    }
  }
  return $newData;
}

$data = ['Name' => 'John Doe', 'Age' => 30, 'City' => 'New York'];
$processedData = processData($data);
print_r($processedData);
```