<?php

namespace app\core\models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="TimeSlot")
 */
class TimeSlot
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="datetime")
     */
    public $startDateTime;

    /**
     * @ORM\Column(type="datetime")
     */
    public $endDateTime;

    /**
     * @ORM\Column(type="integer")
     */
    public $available;
}