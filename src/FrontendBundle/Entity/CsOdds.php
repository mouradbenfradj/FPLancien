<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CsOdds
 *
 * @ORM\Table(name="cs_odds")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\CsOddsRepository")
 */
class CsOdds
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
     * @ORM\Column(name="teamA", type="string", length=255, unique=true)
     */
    private $teamA;

    /**
     * @var string
     *
     * @ORM\Column(name="oddA", type="string", length=255)
     */
    private $oddA;

    /**
     * @var string
     *
     * @ORM\Column(name="oddB", type="string", length=255)
     */
    private $oddB;

    /**
     * @var string
     *
     * @ORM\Column(name="teamB", type="string", length=255, unique=true)
     */
    private $teamB;


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
     * Set teamA
     *
     * @param string $teamA
     *
     * @return CsOdds
     */
    public function setTeamA($teamA)
    {
        $this->teamA = $teamA;

        return $this;
    }

    /**
     * Get teamA
     *
     * @return string
     */
    public function getTeamA()
    {
        return $this->teamA;
    }

    /**
     * Set oddA
     *
     * @param string $oddA
     *
     * @return CsOdds
     */
    public function setOddA($oddA)
    {
        $this->oddA = $oddA;

        return $this;
    }

    /**
     * Get oddA
     *
     * @return string
     */
    public function getOddA()
    {
        return $this->oddA;
    }

    /**
     * Set oddB
     *
     * @param string $oddB
     *
     * @return CsOdds
     */
    public function setOddB($oddB)
    {
        $this->oddB = $oddB;

        return $this;
    }

    /**
     * Get oddB
     *
     * @return string
     */
    public function getOddB()
    {
        return $this->oddB;
    }

    /**
     * Set teamB
     *
     * @param string $teamB
     *
     * @return CsOdds
     */
    public function setTeamB($teamB)
    {
        $this->teamB = $teamB;

        return $this;
    }

    /**
     * Get teamB
     *
     * @return string
     */
    public function getTeamB()
    {
        return $this->teamB;
    }
}

