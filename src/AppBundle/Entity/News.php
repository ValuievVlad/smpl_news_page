<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NewsRepository")
 * @ORM\Table(name= "article")
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy= "AUTO")
     * @ORM\Column(type= "integer")
     */
    private $id;

    /**
     * @ORM\Column(name= "title", type= "string", length= 100)
     */
    private $title;

    /**
     * @ORM\Column(name= "content", type= "text")
     */
    private $content;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}
