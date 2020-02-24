<?php

namespace app\core\interfaces;

use app\core\models\TimeSlot;

interface TimeSlotRepositoryInterface
{
    public function create(TimeSlot $timeSlot);
    public function getAllFutureTimeSlot();
    public function reserveTimeSlot(int $timeSlotId);
}