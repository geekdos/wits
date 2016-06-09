<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="University", mappedBy="city")
     */
    private $university;
    
    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="city")
     */
    private $country;

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
     * @return City
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
     * Constructor
     */
    public function __construct()
    {
        $this->university = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add university
     *
     * @param \Wits\FrontBundle\Entity\University $university
     * @return City
     */
    public function addUniversity(\Wits\FrontBundle\Entity\University $university)
    {
        $this->university[] = $university;

        return $this;
    }

    /**
     * Remove university
     *
     * @param \Wits\FrontBundle\Entity\University $university
     */
    public function removeUniversity(\Wits\FrontBundle\Entity\University $university)
    {
        $this->university->removeElement($university);
    }

    /**
     * Get university
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * Set country
     *
     * @param \Wits\FrontBundle\Entity\Country $country
     * @return City
     */
    public function setCountry(\Wits\FrontBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Wits\FrontBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
    
    function __toString()
    {
        return $this->name;
    }
}
