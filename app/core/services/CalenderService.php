<?php
namespace app\core\services;

use app\core\interfaces\CalenderServiceInterface;
use app\core\models\Reservation;
use DateTime;

class CalenderService implements CalenderServiceInterface
{
    public function createReservation(int $timeSlotId, Reservation $reservation) {

    }

    public function getUpcomingDates() {
        $dates = array();
        $numberOfDays = 365;
        $date = new DateTime();

        for ($i = 1; $i <= $numberOfDays; $i++) {
            $date = $date->modify('+'. $i . 'days');
            $dates[] = $date;
        }

        return $dates;
    }
}