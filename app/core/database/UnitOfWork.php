<?php
namespace app\core\database;

use app\core\repositories\TimeSlotRepository;
use Doctrine\ORM\EntityManagerInterface;

class UnitOfWork implements UnitOfWorkInterface
{
    private $entityManager;
    private $timeSlotRepository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function commit(): void
    {
        $this->entityManager->flush();
    }
    public function commitTransactional(callable $operation)
    {
        return $this->entityManager->transactional($operation);
    }

    public function getTimeSlotRepository() {
        if ($this->timeSlotRepository == null) {
            $this->timeSlotRepository = new TimeSlotRepository($this->entityManager);
        }

        return $this->timeSlotRepository;
    }
}