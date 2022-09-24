<?php
namespace App\Services;

/**
 *
 */
class FizzBuzzService implements FizzBuzzServiceInterface
{

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
      $numberSeries = $this->getNumberSeries($offset, $limit);

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
}
