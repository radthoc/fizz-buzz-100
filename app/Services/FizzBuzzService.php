<?php
namespace App\Services;

/**
 *
 */
class FizzBuzzService implements FizzBuzzServiceInterface
{
  const FIZZ = 'Fizz';

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
          if ($this->isFizzNumber($number)) {
              $number = self::FIZZ;
          }

          $numberSeries[] = $number;
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

  private function isFizzNumber(int $number): bool
  {
    return $number % 3 == 0;
  }
}
