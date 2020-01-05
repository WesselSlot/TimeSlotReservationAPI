<?php
namespace app\core;

use mysqli;

class Database
{
    /**
     * @var mysqli
     */
    private $connection;

    public function openConnection() {
        $this->connection = new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'),getenv('DB_NAME'));

        if ($this->connection->error) {
            throw new Exception("Could not connect to the database");
        }

        return $this->connection;
    }

    public function closeConnection() {
        $this->connection->close();
    }

}