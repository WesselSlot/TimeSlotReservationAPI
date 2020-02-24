<?php
namespace app\api;

use app\core\interfaces\TimeSlotRepositoryInterface;
use app\core\interfaces\UnitOfWorkInterface;
use app\core\models\api\Calender;
use app\core\services\CalenderService;

class CalenderController
{
    private $unitOfWork;
    private $calenderService;

    public function __construct(
        UnitOfWorkInterface $unitOfWork
    )
    {
        $this->unitOfWork = $unitOfWork;
        $this->calenderService = new CalenderService();
    }

    public function index() {
        /**
         * @var TimeSlotRepositoryInterface $timeSlotRepository
         */
        $timeSlotRepository = $this->unitOfWork->getTimeSlotRepository();

        $calender = new Calender();
        $calender->upcomingAvailableTimeSlots = $timeSlotRepository->getAllFutureTimeSlot();
        $calender-> upcomingDays = $this->calenderService->GetUpcomingDays();

        return json_encode($calender);
    }
    
    public function reserveTimeSlot($reservationJson) {
        /**
         * @var TimeSlotRepositoryInterface $timeSlotRepository
         */
        $timeSlotRepository = $this->unitOfWork->getTimeSlotRepository();


    }

}