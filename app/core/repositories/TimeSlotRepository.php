<?php
namespace app\core\repositories;

use app\core\interfaces\TimeSlotRepositoryInterface;
use app\core\models\TimeSlot;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;

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
        $query =  $this->entityManager->createQuery("SELECT * FROM TimeSlot")->getArrayResult();

        var_dump($query);
        return null;
    }
}