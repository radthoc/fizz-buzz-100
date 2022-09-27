<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FizzBuzzServiceInterface;

class printFizzBuzzSeries extends Command
{
    /**
     *
     * @var string
     */
    protected $signature = 'custom:fizz-buzz-series';

    /**
     *
     * @var string
     */
    protected $description = 'Print Fizz Buzz series';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(FizzBuzzServiceInterface $fizzBuzzService)
    {
        parent::__construct();

        $this->fizzBuzzService = $fizzBuzzService;
    }

    /**
     *
     * @return int
     */
    public function handle()
    {
        $offset = 1;
        $limit = 100;

        $fizzBuzzSeries = $this->fizzBuzzService->generateSeries($offset, $limit);

        $this->line('Printing the FizzBuzz series from ' . $offset . ' to ' . $limit);

        foreach ($fizzBuzzSeries as $value) {
            $this->line($value);
        }

        return 0;
    }
}
