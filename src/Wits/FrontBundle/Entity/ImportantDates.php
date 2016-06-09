<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportantDates
 *
 * @ORM\Table(name="important_dates")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\ImportantDatesRepository")
 */
class ImportantDates
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Conference", inversedBy="dateimport")
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
     * @return ImportantDates
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
     * Set date
     *
     * @param \DateTime $date
     * @return ImportantDates
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set conference
     *
     * @param \Wits\FrontBundle\Entity\Conference $conference
     * @return ImportantDates
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
