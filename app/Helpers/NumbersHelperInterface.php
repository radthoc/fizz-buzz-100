<?php
namespace App\Helpers;

/**
 *
 */
interface NumbersHelperInterface
{

  /**
   * @param int $offset
   * @param int $limit
   *
   * @return array
   */
  public function getNumberSeries(int $offset, int $limit): array;

  /**
   * @param int $factor
   * @param int $number
   *
   * @return bool
   */
   public function isMultipleOf(int $factor, int $number): bool;
 }
