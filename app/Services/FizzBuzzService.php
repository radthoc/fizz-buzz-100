<?php
namespace App\Services;

use App\Helpers\NumbersHelperInterface;
use App\Services\Rules\RulesProviderInterface;

/**
 *
 */
class FizzBuzzService implements FizzBuzzServiceInterface
{
  /** @var NumbersHelperInterface */
  private $numbersHelper;

  /** @var RulesProviderInterface */
  private $rulesProvider;

  function __construct(
      NumbersHelperInterface $numbersHelper,
      RulesProviderInterface $rulesProvider
  )
  {
      $this->numbersHelper = $numbersHelper;
      $this->rulesProvider = $rulesProvider;
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

      $numberRange = $this->numbersHelper->getNumberSeries($offset, $limit);

      foreach ($numberRange as $number) {
          $numberSeries[] = $this->getFizzBuzzValue($number);
      };

      return $numberSeries;
  }

  private function getFizzBuzzValue(int $number)
  {
      $numberInSeries = $number;

      $rules = $this->rulesProvider->getRules();

      foreach ($rules as $rule) {
          $fizzBuzzValue = $rule->getValue($number);

          if ($fizzBuzzValue !== null) {
              $numberInSeries = $fizzBuzzValue;
          }
      }

      return $numberInSeries;
  }
}
