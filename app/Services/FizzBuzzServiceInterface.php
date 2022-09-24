<?php
namespace App\Services;

interface FizzBuzzServiceInterface
{
    /**
     * @param int $offset
     * @param int $limit
     *
     * @return array
     */
    public function generateSeries(int $offset, int $limit): array;
}
