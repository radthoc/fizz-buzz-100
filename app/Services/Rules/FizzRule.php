<?php
namespace App\Services\Rules;

use App\Helpers\NumbersHelperInterface;

/**
 *
 */
class FizzRule implements RuleInterface
{
  /** @var NumbersHelperInterface */
  private $numbersHelper;

  function __construct(NumbersHelperInterface $numbersHelper)
  {
      $this->numbersHelper = $numbersHelper;
  }

  /**
   * @param int $number
   *
   * @return string|null
   */
  public function getValue(int $number)
  {
    if ($this->numbersHelper->isMultipleOf(self::FIZZ_FACTOR,$number)) {
        return self::FIZZ;
    }

    return null;
  }
}
