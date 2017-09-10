<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PriceChanges
 *
 * @ORM\Table(name="price_changes")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\PriceChangesRepository")
 */
class PriceChanges
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="player", type="string", length=255, unique=true)
     */
    private $player;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="team", type="string", length=255)
     */
    private $team;

    /**
     * @var string
     *
     * @ORM\Column(name="oldPrice", type="string", length=255)
     */
    private $oldPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="newPrice", type="string", length=255)
     */
    private $newPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set player
     *
     * @param string $player
     *
     * @return PriceChanges
     */
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return string
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return PriceChanges
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set team
     *
     * @param string $team
     *
     * @return PriceChanges
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set oldPrice
     *
     * @param string $oldPrice
     *
     * @return PriceChanges
     */
    public function setOldPrice($oldPrice)
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    /**
     * Get oldPrice
     *
     * @return string
     */
    public function getOldPrice()
    {
        return $this->oldPrice;
    }

    /**
     * Set newPrice
     *
     * @param string $newPrice
     *
     * @return PriceChanges
     */
    public function setNewPrice($newPrice)
    {
        $this->newPrice = $newPrice;

        return $this;
    }

    /**
     * Get newPrice
     *
     * @return string
     */
    public function getNewPrice()
    {
        return $this->newPrice;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return PriceChanges
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}

