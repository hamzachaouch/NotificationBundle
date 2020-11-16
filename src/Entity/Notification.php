<?php

namespace HamDev\NotifcationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Class Notification
 *
 * @ORM\Entity(repositoryClass="HamDev\NotifcationBundle\Repository\NotificationRepository")
 * @package HamDev\NotificationBundle\Entity
 */
class Notification {


    /**
     * @var integer $id
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $date;


    /**
     * @var string
     * @ORM\Column(type="string", length=4000, nullable=true)
     */
    protected $message;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getIdUser(): int
    {
        return $this->id_user;
    }

    /**
     * @param int $id_user
     */
    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }


    /**
     * @var integer $id
     *
     * @ORM\Column(type="integer")
     */
     protected $id_user;


}
