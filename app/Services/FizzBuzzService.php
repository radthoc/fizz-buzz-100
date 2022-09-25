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

  const FIZZBUZZ = 'FizzBuzz';

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

      $numberRange = $this->getNumberSeries($offset, $limit);

      foreach ($numberRange as $number) {
          $numberInSeries = $number;

          if ($this->isMultipleOf(self::FIZZ_FACTOR,$number)) {
              $numberInSeries = self::FIZZ;
          }

          if ($this->isMultipleOf(self::BUZZ_FACTOR,$number)) {
              $numberInSeries = self::BUZZ;
          }

          if ($this->isFizzBuzz($number)) {
              $numberInSeries = self::FIZZBUZZ;
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
   * @param int $number
   *
   * @return bool
   */
  private function isFizzBuzz(int $number): bool
  {
    return $this->isMultipleOf(self::FIZZ_FACTOR, $number) &&
        $this->isMultipleOf(self::BUZZ_FACTOR, $number);
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
