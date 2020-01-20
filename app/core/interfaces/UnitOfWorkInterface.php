<?php
namespace app\core\interfaces;

interface UnitOfWorkInterface
{
    public function commit(): void;
    public function commitTransactional(callable $operation);
    public function getTimeSlotRepository();
}