<?php
namespace App\Services\Rules;

/**
 * Provides the rules to be applied to the FizzBuzz series
 */
interface RulesProviderInterface
{
    /**
     *
     * @return array
     */
    public function getRules(): array;
}
