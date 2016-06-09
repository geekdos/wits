<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Submissions
 *
 * @ORM\Table(name="submissions")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\SubmissionsRepository")
 */
class Submissions
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var bool
     *
     * @ORM\Column(name="online", type="boolean")
     */
    private $online;

    /**
     * @ORM\ManyToOne(targetEntity="Conference", inversedBy="submissions")
     */
    private $conference;
    
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
     * Set name
     *
     * @param string $name
     * @return Submissions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Submissions
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

    /**
     * Set online
     *
     * @param boolean $online
     * @return Submissions
     */
    public function setOnline($online)
    {
        $this->online = $online;

        return $this;
    }

    /**
     * Get online
     *
     * @return boolean 
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * Set conference
     *
     * @param \Wits\FrontBundle\Entity\Conference $conference
     * @return Submissions
     */
    public function setConference(\Wits\FrontBundle\Entity\Conference $conference = null)
    {
        $this->conference = $conference;

        return $this;
    }

    /**
     * Get conference
     *
     * @return \Wits\FrontBundle\Entity\Conference 
     */
    public function getConference()
    {
        return $this->conference;
    }
}
