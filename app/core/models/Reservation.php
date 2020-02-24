<?php

namespace app\core\models;

/**
 * @ORM\Entity
 * @ORM\Table(name="Reservation")
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public $id;

    /**
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * @ORM\Column(type="string")
     */
    public $email;

}