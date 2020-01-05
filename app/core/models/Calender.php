<?php

namespace app\core\models;

use app\core\interfaces\CalenderInterface;
use app\core\interfaces\TimeSlotRepositoryInterface;

class Calender implements CalenderInterface
{
    private $timeSlotRepository;

    public function __construct(TimeSlotRepositoryInterface $timeSlotRepository)
    {
        $this->timeSlotRepository = $timeSlotRepository;
    }

    public function getCalender() {
        return $this->timeSlotRepository->getAllAvailableTimeSlots();
    }

}