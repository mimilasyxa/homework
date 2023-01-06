<?php

class BinarySearch
{
    public function binarySearch(array $sortedArray, int|float $number)
    {
        $size = sizeof($sortedArray);
        $middle = (int)($size / 2);
        if ($size == 1 && $sortedArray[$middle] != $number) {
            return false;
        }
        if ($number == $sortedArray[$middle]) {
            return true;
        }
        if ($number > $sortedArray[$middle]) {
            return $this->binarySearch(array_slice($sortedArray, $middle), $number);
        }
        if ($number < $sortedArray[$middle]) {
            return $this->binarySearch(array_slice($sortedArray, 0, $middle), $number);
        }
    }
}