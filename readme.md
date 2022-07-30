# Example:

### Parameters in this example:
1. Reads [\_\_DIR\_\_ . '/files/test.csv'](https://github.com/philipphermes/CSVReader/blob/example/files/test.csv)
2. Separator ";" (The separator used in the csv)
3. Header: 0 (The location of the header)
4. Assoc: true (Return as associative array)

### Output:
```
array(2) {
  [0]=>
  array(3) {
    ["productName"]=>
    string(5) "Apfel"
    ["price"]=>
    string(4) "9.99"
    ["description"]=>
    string(22) "Beschreibung von Apfel"
  }
  [1]=>
  array(3) {
    ["productName"]=>
    string(6) "Banane"
    ["price"]=>
    string(4) "10.0"
    ["description"]=>
    string(23) "Beschreibung von Banane"
  }
}
```