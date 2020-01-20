<?php
namespace app\core\repositories;

use app\core\interfaces\TimeSlotRepositoryInterface;
use app\core\models\TimeSlot;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use mysqli;


class TimeSlotRepository implements TimeSlotRepositoryInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager
    )
    {
        $this->entityManager = $entityManager;
    }

    public function create(TimeSlot $timeSlot)
    {
        $this->entityManager->persist($timeSlot);
    }

    public function getAllFutureTimeSlot() {
        $now = new DateTime();

        $this->entityManager->createQueryBuilder()
            ->select('t')
            ->from('TimeSlot')
            ->where('t.startDateTime > :currentDate')
            ->setParameter('currentDate',  $now->format('Y-m-d H:i:s'));
    }
}