<?php
namespace App\Services\Rules;

class RulesProvider implements RulesProviderInterface
{
    /** @var FizzRule */
    private $fizzRule;

    /** @var BuzzRule */
    private $BuzzRule;

    /** @var FizzBuzzRule */
    private $fizzBuzzRule;

    /** @var array */
    private $rules;

    function __construct(
        FizzRule $fizzRule,
        BuzzRule $buzzRule,
        FizzBuzzRule $fizzBuzzRule
    )
    {
        $this->fizzRule = $fizzRule;
        $this->buzzRule = $buzzRule;
        $this->fizzBuzzRule = $fizzBuzzRule;
    }

    /**
     *
     * @return array
     */
    public function getRules(): array
    {
        return [
            $this->fizzRule,
            $this->buzzRule,
            $this->fizzBuzzRule,
        ];
    }
}
