<?php
namespace Kata;

/**
 * Class LeapYear
 * @package Kata
 */
class LeapYear
{
    public function checkYear($year)
    {
        return ($this->isDivisibleByFour($year)
            && (!$this->isDivisibleByOneHundred($year) || $this->isDivisibleByFourHundreds($year)));
    }

    /**
     * @param $year
     *
     * @return bool
     */
    private function isDivisibleByFour($year)
    {
        return $year % 4 === 0;
    }

    /**
     * @param $year
     *
     * @return bool
     */
    private function isDivisibleByOneHundred($year)
    {
        return $year % 100 === 0;
    }

    /**
     * @param $year
     *
     * @return bool
     */
    private function isDivisibleByFourHundreds($year)
    {
        return ($year % 400 === 0);
    }
}