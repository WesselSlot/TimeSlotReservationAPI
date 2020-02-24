<?php
namespace tests;

use app\core\services\CalenderService;
use PHPUnit\Framework\TestCase;

class CalenderServiceTests extends TestCase
{
    public function testNumberOfUpcomingDates() {
        $calenderService = new CalenderService();
        $dates = $calenderService->getUpcomingDates();

        $this->assertTrue(count($dates) == 365);
    }
}