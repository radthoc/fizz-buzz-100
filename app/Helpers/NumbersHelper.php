<?php
namespace App\Helpers;

/**
 *
 */
class NumbersHelper implements NumbersHelperInterface
{

  /**
   * @param int $offset
   * @param int $limit
   *
   * @return array
   */
  public function getNumberSeries(int $offset, int $limit): array
  {
    return range($offset, $limit);
  }

  /**
   * @param int $factor
   * @param int $number
   *
   * @return bool
   */
   public function isMultipleOf(int $factor, int $number): bool
  {
    return $number % $factor == 0;
  }
}
