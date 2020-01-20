<?php

namespace app\core\models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="timeSlot")
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