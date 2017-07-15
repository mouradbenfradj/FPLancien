<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\NewsRepository")
 */
class News
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
     * @ORM\Column(name="latestNews", type="string", length=255, nullable=true, unique=true)
     */
    private $latestNews;


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
     * Set latestNews
     *
     * @param string $latestNews
     *
     * @return News
     */
    public function setLatestNews($latestNews)
    {
        $this->latestNews = $latestNews;

        return $this;
    }

    /**
     * Get latestNews
     *
     * @return string
     */
    public function getLatestNews()
    {
        return $this->latestNews;
    }
}

