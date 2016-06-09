<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\SchoolRepository")
 */
class School
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
     * @ORM\ManyToOne(targetEntity="University", inversedBy="schools")
     */
    private $university;

    /**
     * @ORM\OneToMany(targetEntity="Participant", mappedBy="school")
     */
    private $professor;

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
     * @return School
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
     * Set university
     *
     * @param \Wits\FrontBundle\Entity\University $university
     * @return School
     */
    public function setUniversity(\Wits\FrontBundle\Entity\University $university = null)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return \Wits\FrontBundle\Entity\University 
     */
    public function getUniversity()
    {
        return $this->university;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->professor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add professor
     *
     * @param \Wits\FrontBundle\Entity\Participant $professor
     * @return School
     */
    public function addProfessor(\Wits\FrontBundle\Entity\Participant $professor)
    {
        $this->professor[] = $professor;

        return $this;
    }

    /**
     * Remove professor
     *
     * @param \Wits\FrontBundle\Entity\Participant $professor
     */
    public function removeProfessor(\Wits\FrontBundle\Entity\Participant $professor)
    {
        $this->professor->removeElement($professor);
    }

    /**
     * Get professor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProfessor()
    {
        return $this->professor;
    }

    function __toString()
    {
        return $this->name;
    }
}
