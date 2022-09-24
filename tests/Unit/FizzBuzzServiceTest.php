<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\FizzBuzzService;

class FizzBuzzServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSeries100Test()
    {
        $offset = 1;
        $limit = 10;

        $expectedValue = $this->getExpectedValue($offset, $limit);

        $fizzBuzzService = $this->app->make(FizzBuzzService::class);

        $this->assertEquals(
          $expectedValue,
          $fizzBuzzService->generateSeries($offset, $limit)
        );
    }

    private function getExpectedValue(int $offset, int $limit): array
    {
      return range($offset, $limit);
    }
}
