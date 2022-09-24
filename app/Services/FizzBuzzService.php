<?php
namespace App\Services;

/**
 *
 */
class FizzBuzzService implements FizzBuzzServiceInterface
{

  function __construct()
  {
    // code...
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

  private function getNumberSeries(int $offset, int $limit): array
  {
    return range($offset, $limit);
  }
}
