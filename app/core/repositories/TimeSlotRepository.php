<?php
namespace app\core\repositories;

use app\core\interfaces\TimeSlotRepositoryInterface;
use app\core\models\TimeSlot;
use Doctrine\ORM\EntityManagerInterface;

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
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $queryBuilder->select('t')
            ->from('app\core\models\TimeSlot', 't');

        return $queryBuilder->getQuery()->getArrayResult();
    }
}