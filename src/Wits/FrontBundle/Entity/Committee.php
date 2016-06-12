<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Committee
 *
 * @ORM\Table(name="committee")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\CommitteeRepository")
 */
class Committee
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
     * @ORM\ManyToMany(targetEntity="Participant", mappedBy="committee")
     */
    private $members;

    /**
     * @ORM\ManyToOne(targetEntity="Conference", inversedBy="committee")
     */
    private $conference;

    /**
     * Committee constructor.
     */
    public function __construct()
    {
        $this->members = new ArrayCollection();
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
     * @return Committee
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

    function __toString()
    {
        return $this->name;
    }

    /**
     * Add members
     *
     * @param \Wits\FrontBundle\Entity\Participant $members
     * @return Committee
     */
    public function addMember(Participant $members)
    {
        $this->members[] = $members;
        $members->addCommittee($this);
    }

    /**
     * Remove members
     *
     * @param Participant $members
     */
    public function removeMember(Participant $members)
    {
        $this->members->removeElement($members);
        $members->removeCommittee($this);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set conference
     *
     * @param \Wits\FrontBundle\Entity\Conference $conference
     * @return Committee
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
