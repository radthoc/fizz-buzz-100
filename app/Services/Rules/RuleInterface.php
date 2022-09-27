<?php
namespace App\Services\Rules;

/**
 * Provides the rules to be applied to the FizzBuzz series
 */
interface RuleInterface
{
    const FIZZ = 'Fizz';
    const FIZZ_FACTOR = 3;

    const BUZZ = 'Buzz';
    const BUZZ_FACTOR = 5;

    const FIZZBUZZ = 'FizzBuzz';

    /**
     * @param int $number
     *
     * @return string|null
     */
    public function getValue(int $number);
}
