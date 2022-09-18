<?php

class ReadCSV
{
    private const CSV_LENGTH = 1000;
    public const ASSOC = true;

    /**
     * Reads the CSV and returns the data as array
     * @param string $csvPath   The Path of the CSV
     * @param string $separator The separator which is used in the csv to separate the data
     * @param int $header       The location of the csv header
     * @param bool $assoc       Determines if the array is returned associative
     * @return array<array-key, string>
     */
    public static function read(string $csvPath, string $separator, int $header = 0, bool $assoc = false): array
    {
        $handle = fopen($csvPath, 'rb');

        if ($handle === false) {
            $message = sprintf('Reading csv: "%s" failed!', $csvPath);
            throw new \RuntimeException($message);
        }

        $row = 0;
        $resultKey = 0;
        $data = [];
        $headerNames = [];

        while (($csvRowData = fgetcsv($handle, self::CSV_LENGTH, $separator)) !== false) {
            if ($row <= $header) {
                if ($assoc === true) {
                    $headerNames = $csvRowData;
                }

                $row++;
                continue;
            }

            if ($assoc === false) {
                $data[$resultKey] = $csvRowData;

                $resultKey++;

                continue;
            }

            foreach ($headerNames as $key => $headerName) {
                $data[$resultKey][$headerName] = $csvRowData[$key];
            }

            $resultKey++;
        }

        fclose($handle);

        return $data;
    }

    /**
     * Reads the CSV and returns the data as array
     * @param string $csvPath The Path of the CSV
     * @param string $separator The separator which is used in the csv to separate the data
     * @param array<array-key, array<int|string, string>> $fieldsList the values wich will be added to the csv
     * @return void
     */
    public static function write(string $csvPath, string $separator, array $fieldsList): void
    {
        $handle = fopen($csvPath, 'a');

        if ($handle === false) {
            $message = sprintf('Opening csv: "%s" failed!', $csvPath);
            throw new \RuntimeException($message);
        }

        foreach ($fieldsList as $fields) {
            fputcsv($handle, $fields, $separator);
        }

        fclose($handle);
    }
}