<?php
namespace app\core\interfaces;

use app\core\models\Reservation;
use app\core\models\TimeSlot;

interface CalenderServiceInterface {
    public function getUpcomingDates();
    public function createReservation(int $timeSlotId, Reservation $reservation);
}