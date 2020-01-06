<?php
namespace app\api;

use app\core\models\Calender;
use app\core\repositories\TimeSlotRepository;

/**
 * Class CalenderController
 * @package app\api
 */
class CalenderController
{
    /**
     * URL: calender/index
     * @return mixed
     */
    public function index() {
        $calender = new Calender(new TimeSlotRepository());

        return json_encode($calender->getCalender());
    }
}