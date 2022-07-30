# Usage:

### Parameters:
1. csvPath
    * path of the csv
    * required
2. separator
    * the separator used in the csv
    * required
3. header
    * the location of the header
4. assoc
    * when true returns the array associative

### Example
```php
 $data = ReadCSV::read(__DIR__ . '/files/test.csv', ';', 0, true);
```