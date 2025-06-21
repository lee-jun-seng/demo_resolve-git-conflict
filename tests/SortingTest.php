<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Slj\ResolveGitConflictDemo\Sorting;

class SortingTest extends TestCase
{
  public function testBubbleSortAscending()
  {
    $unsortedArray = [64, 34, 25, -1, 12, 22, 11, 90];
    $sortedArray = Sorting::bubbleSort($unsortedArray);

    $this->assertEquals([-1, 11, 12, 22, 25, 34, 64, 90], $sortedArray);
  }

  public function testBubbleSortWithEmptyArray()
  {
    $this->assertEquals([], Sorting::bubbleSort([]));
  }

  public function testBubbleSortWithSingleElement()
  {
    $this->assertEquals([42], Sorting::bubbleSort([42]));
  }
}
