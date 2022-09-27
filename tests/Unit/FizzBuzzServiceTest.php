<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\FizzBuzzService;

class FizzBuzzServiceTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function testBasicSeriesCase()
    {
        $offset = 1;
        $limit = 2;

        $expectedValue = [1, 2];

        $fizzBuzzService = $this->app->make(FizzBuzzService::class);

        $this->assertEquals(
          $expectedValue,
          $fizzBuzzService->generateSeries($offset, $limit)
        );
    }


    /**
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


    /**
     *
     * @return void
     */
    public function testFizzBuzzCase()
    {
        $offset = 1;
        $limit = 15;

        $expectedFizzBuzzValue = [
          1,
          2,
          'Fizz',
          4,
          'Buzz',
          'Fizz',
          7,
          8,
          'Fizz',
          'Buzz',
          11,
          'Fizz',
          13,
          14,
          'FizzBuzz'
        ];

        $fizzBuzzService = $this->app->make(FizzBuzzService::class);

        $this->assertEquals(
          $expectedFizzBuzzValue,
          $fizzBuzzService->generateSeries($offset, $limit)
        );
    }
}
