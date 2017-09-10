<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InjuryUpdates
 *
 * @ORM\Table(name="injury_updates")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\InjuryUpdatesRepository")
 */
class InjuryUpdates
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
     * @ORM\Column(name="playerName", type="string", length=255, unique=true)
     */
    private $playerName;

    /**
     * @var string
     *
     * @ORM\Column(name="typeInjury", type="string", length=255, nullable=true)
     */
    private $typeInjury;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="returnDate", type="date")
     */
    private $returnDate;

    /**
     * @var string
     *
     * @ORM\Column(name="states", type="string", length=255)
     */
    private $states;


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
     * Set playerName
     *
     * @param string $playerName
     *
     * @return InjuryUpdates
     */
    public function setPlayerName($playerName)
    {
        $this->playerName = $playerName;

        return $this;
    }

    /**
     * Get playerName
     *
     * @return string
     */
    public function getPlayerName()
    {
        return $this->playerName;
    }

    /**
     * Set typeInjury
     *
     * @param string $typeInjury
     *
     * @return InjuryUpdates
     */
    public function setTypeInjury($typeInjury)
    {
        $this->typeInjury = $typeInjury;

        return $this;
    }

    /**
     * Get typeInjury
     *
     * @return string
     */
    public function getTypeInjury()
    {
        return $this->typeInjury;
    }

    /**
     * Set returnDate
     *
     * @param \DateTime $returnDate
     *
     * @return InjuryUpdates
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set states
     *
     * @param string $states
     *
     * @return InjuryUpdates
     */
    public function setStates($states)
    {
        $this->states = $states;

        return $this;
    }

    /**
     * Get states
     *
     * @return string
     */
    public function getStates()
    {
        return $this->states;
    }
}

