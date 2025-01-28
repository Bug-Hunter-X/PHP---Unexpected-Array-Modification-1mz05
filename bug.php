```php
function processData(array $data): array {
  // ... some code to process the data ...
  foreach ($data as $key => $value) {
    // ... process each value ...
    if (is_string($value)) {
      $data[$key] = strtolower($value); // convert to lowercase
    }
    // ... more processing ...
  }
  return $data;
}

$data = ['Name' => 'John Doe', 'Age' => 30, 'City' => 'New York'];
$processedData = processData($data);
print_r($processedData);
```