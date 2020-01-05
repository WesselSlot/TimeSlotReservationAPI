<?php
namespace app\core\repositories;

use app\core\Database;
use app\core\interfaces\TimeSlotRepositoryInterface;


class TimeSlotRepository extends BaseRepository implements TimeSlotRepositoryInterface
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getAllAvailableTimeSlots() {
        /** @var mysqli */
        $connection = $this->database->openConnection();
        $result = $this->checkIfResultIsNotEmpty($connection->query("SELECT * FROM TimeSlot WHERE Available = 1"));
        $this->database->closeConnection();

        return $result;
    }
}