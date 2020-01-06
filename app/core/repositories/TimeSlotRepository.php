<?php
namespace app\core\repositories;

use app\core\Database;
use app\core\interfaces\TimeSlotRepositoryInterface;
use app\core\models\TimeSlot;
use JsonMapper;
use mysqli;


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
        $result = $this->checkIfResultIsNotEmpty($connection->query("SELECT * FROM TimeSlot WHERE Available = 1")->fetch_all());
        $this->database->closeConnection();

        if(empty($result)) {
            return $result;
        }

        $timeSlots = array();
        foreach ($result as $item) {
            $timeSlot = new TimeSlot();
            $timeSlot->id = $item[0];
            $timeSlot->startDateTime = $item[1];
            $timeSlot->endDateTime = $item[2];
            $timeSlot->available = $item[3];
            $timeSlots[] = $timeSlot;
        }

        return $timeSlots;
    }
}