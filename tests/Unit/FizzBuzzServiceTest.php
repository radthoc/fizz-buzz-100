<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\FizzBuzzService;

class FizzBuzzServiceTest extends TestCase
{
    /**
     * Basic test case
     *
     * @return void
     */
    public function testBasicSeriesCase()
    {
        $offset = 1;
        $limit = 2;

        $expectedValue = $this->getExpectedValue($offset, $limit);

        $fizzBuzzService = $this->app->make(FizzBuzzService::class);

        $this->assertEquals(
          $expectedValue,
          $fizzBuzzService->generateSeries($offset, $limit)
        );
    }


    /**
     * Basic test case
     *
     * @return void
     */
    public function testFizzCase()
    {
        $offset = 1;
        $limit = 3;

        $expectedFizzValue = [1, 2,'Fizz'];

        $fizzBuzzService = $this->app->make(FizzBuzzService::class);

        $this->assertEquals(
          $expectedFizzValue,
          $fizzBuzzService->generateSeries($offset, $limit)
        );
    }


    /**
     * Basic test case
     *
     * @return void
     */
    public function testBuzzCase()
    {
        $offset = 1;
        $limit = 5;

        $expectedBuzzValue = [1, 2,'Fizz', 4, 'Buzz'];

        $fizzBuzzService = $this->app->make(FizzBuzzService::class);

        $this->assertEquals(
          $expectedBuzzValue,
          $fizzBuzzService->generateSeries($offset, $limit)
        );
    }

    private function getExpectedValue(int $offset, int $limit): array
    {
      return range($offset, $limit);
    }
}
