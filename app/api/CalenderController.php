<?php
namespace app\api;

use app\core\interfaces\TimeSlotRepositoryInterface;
use app\core\interfaces\UnitOfWorkInterface;

class CalenderController
{
    private $unitOfWork;

    public function __construct(
        UnitOfWorkInterface $unitOfWork
    )
    {
        $this->unitOfWork = $unitOfWork;
    }

    public function index() {
        /**
         * @var TimeSlotRepositoryInterface $timeSlotRepository
         */
        $timeSlotRepository = $this->unitOfWork->getTimeSlotRepository();

        return $timeSlotRepository->getAllFutureTimeSlot();
    }
}