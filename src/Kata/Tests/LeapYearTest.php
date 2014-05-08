<?php
namespace Kata\Tests;

use Kata\LeapYear;

class LeapYearTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function typical_common_year_should_return_false()
    {
        $this->assertFalse((new LeapYear())->checkYear(2001));
    }

    /**
     * @test
     */
    public function typical_leap_year_should_return_true()
    {
        $this->assertTrue((new LeapYear())->checkYear(1996));
    }

    /**
     * @test
     */
    public function atypical_common_year_should_return_false()
    {
        $this->assertFalse((new LeapYear())->checkYear(1900));
    }

    /**
     * @test
     */
    public function atypical_leap_year_should_return_true()
    {
        $this->assertTrue((new LeapYear())->checkYear(2000));
    }
}