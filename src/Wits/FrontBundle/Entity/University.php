<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * University
 *
 * @ORM\Table(name="university")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\UniversityRepository")
 */
class University
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
     * @ORM\OneToMany(targetEntity="School", mappedBy="university")
     */
    private $schools;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="university")
     */
    private $city;
    
    /**
     * University constructor.
     */
    public function __construct()
    {
        $this->schools   = new ArrayCollection();
    }

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
     * @return University
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
     * Add schools
     *
     * @param \Wits\FrontBundle\Entity\School $schools
     * @return University
     */
    public function addSchool(\Wits\FrontBundle\Entity\School $schools)
    {
        $this->schools[] = $schools;

        return $this;
    }

    /**
     * Remove schools
     *
     * @param \Wits\FrontBundle\Entity\School $schools
     */
    public function removeSchool(\Wits\FrontBundle\Entity\School $schools)
    {
        $this->schools->removeElement($schools);
    }

    /**
     * Get schools
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSchools()
    {
        return $this->schools;
    }

    /**
     * Set city
     *
     * @param \Wits\FrontBundle\Entity\City $city
     * @return University
     */
    public function setCity(\Wits\FrontBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Wits\FrontBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }

    function __toString()
    {
        return $this->name;
    }


}
