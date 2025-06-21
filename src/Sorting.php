<?php

namespace Slj\ResolveGitConflictDemo;

class Sorting
{
  /**
   * Sorts an array using the bubble sort algorithm
   *
   * @param array $arr The array to be sorted
   * @return array The sorted array
   */
  public static function bubbleSort(array $arr): array
  {
    // Get the length of the array
    $n = count($arr);

    // Outer loop to traverse through all elements in the array
    for ($i = 0; $i < $n - 1; $i++) {
      // Inner loop to compare adjacent elements
      for ($j = 0; $j < $n - $i - 1; $j++) {
        // If the current element is greater than the next element, swap them
        if ($arr[$j] > $arr[$j + 1]) {
          // Swap the elements
          $temp = $arr[$j];
          $arr[$j] = $arr[$j + 1];
          $arr[$j + 1] = $temp;
        }
      }
    }

    // Return the sorted array
    return $arr;
  }
}
