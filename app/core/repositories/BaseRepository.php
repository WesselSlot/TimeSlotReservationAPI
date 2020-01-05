<?php

namespace app\core\repositories;

abstract class BaseRepository
{
    protected function checkIfResultIsNotEmpty($result) {
        if ($result == false) {
            return array();
        }

        return $result;
    }
}