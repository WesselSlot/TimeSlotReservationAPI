<?php

namespace app\core\repositories;

use mysqli;

abstract class BaseRepository
{
    /**
     *
     * @param mysqli $result
     * @return array
     */
    protected function checkIfResultIsNotEmpty($result) {
        if ($result == false) {
            return array();
        }

        return $result;
    }
}