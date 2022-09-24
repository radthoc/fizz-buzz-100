<?php
namespace App\Services;

/**
 *
 */
class FizzBuzzService implements FizzBuzzServiceInterface
{
  const FIZZ = 'Fizz';
  const FIZZ_FACTOR = 3;

  const BUZZ = 'Buzz';
  const BUZZ_FACTOR = 5;

  function __construct()
  {
  }

  /**
   * @param int $offset
   * @param int $limit
   *
   * @return array
   */
  public function generateSeries(int $offset, int $limit): array
  {
      $numberSeries = [];

      foreach ($this->getNumberSeries($offset, $limit) as $number) {
          $numberInSeries = $number;

          if ($this->isMultipleOf(self::FIZZ_FACTOR,$number)) {
              $numberInSeries = self::FIZZ;
          }

          if ($this->isMultipleOf(self::BUZZ_FACTOR,$number)) {
              $numberInSeries = self::BUZZ;
          }

          $numberSeries[] = $numberInSeries;
      };

      return $numberSeries;
  }

  /**
   * @param int $offset
   * @param int $limit
   *
   * @return array
   */
  private function getNumberSeries(int $offset, int $limit): array
  {
    return range($offset, $limit);
  }

  /**
   * @param int $factor
   * @param int $number
   *
   * @return bool
   */  private function isMultipleOf(int $factor, int $number): bool
  {
    return $number % $factor == 0;
  }
}
