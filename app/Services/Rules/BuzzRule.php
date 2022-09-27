<?php
namespace App\Services\Rules;

use App\Helpers\NumbersHelperInterface;

/**
 *
 */
class BuzzRule implements RuleInterface
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
    if ($this->numbersHelper->isMultipleOf(self::BUZZ_FACTOR,$number)) {
        return self::BUZZ;
    }

    return null;
  }
}
