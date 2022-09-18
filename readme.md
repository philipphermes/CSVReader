# Usage:

### Read Parameters:
1. csvPath
    * path of the csv
    * required
2. separator
    * the separator used in the csv
    * required
3. header
    * the location of the header
4. assoc
    * when ReadCSV::ASSOC returns the array associative

#### Example
```php
 $data = ReadCSV::read(__DIR__ . '/files/test.csv', ';', 0, ReadCSV::ASSOC);
```

### Write Parameters:
1. csvPath
   * path of the csv
   * required
2. separator
   * the separator used in the csv
   * required
3. fields
   * the location of the header
4. assoc
   * when ReadCSV::ASSOC returns the array associative

#### Example
```php
 $fieldsList = [
    0 => [
        'firstName' => 'Kevin',
        'lastName' => 'Mueller'
    ],
    1 => [
        0 => 'Max',
        1 => 'Mustermann'
    ]
 ];
 
 ReadCSV::write(__DIR__ . '/files/test.csv', ';', $fieldsList);
```