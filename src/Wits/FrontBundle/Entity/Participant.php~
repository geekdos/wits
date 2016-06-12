<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\ParticipantRepository")
 */
class Participant
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="isAIeeeMember", type="boolean")
     */
    private $isAIeeeMember;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\OneToMany(targetEntity="Conference", mappedBy="responsible")
     */
    private $conferenceResponsible;
    
    /**
     * @ORM\ManyToMany(targetEntity="Committee", mappedBy="members")
     */
    /**
     * @ORM\ManyToMany(targetEntity="Committee", inversedBy="members")
     * @ORM\JoinTable(name="committee_members")
     */
    private $committee;

    /**
     * @ORM\ManyToOne(targetEntity="School", inversedBy="professor")
     */
    private $school;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"}, fetch="LAZY")
     */
    protected $media;

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
     * Set firstName
     *
     * @param string $firstName
     * @return Participant
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Participant
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    

    /**
     * Set email
     *
     * @param string $email
     * @return Participant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Participant
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set committee
     *
     * @param Committee $committee
     * @return Participant
     */
    public function setCommittee(Committee $committee = null)
    {
        $this->committee = $committee;

        return $this;
    }

    /**
     * Get committee
     *
     * @return \Wits\FrontBundle\Entity\Committee 
     */
    public function getCommittee()
    {
        return $this->committee;
    }

    /**
     * Set school
     *
     * @param School $school
     * @return Participant
     */
    public function setSchool(School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \Wits\FrontBundle\Entity\School 
     */
    public function getSchool()
    {
        return $this->school;
    }

    function __toString()
    {
        return $this->firstName;
    }

    /**
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return Participant
     */
    public function setMedia(\Application\Sonata\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->committee = new ArrayCollection();
    }

    /**
     * Add committee
     *
     * @param Committee $committee
     * @return Participant
     */
    public function addCommittee(Committee $committee)
    {
        $this->committee[] = $committee;
    }

    /**
     * Remove committee
     *
     * @param Committee $committee
     */
    public function removeCommittee(Committee $committee)
    {
        $this->committee->removeElement($committee);
    }

    /**
     * Set isAIeeeMember
     *
     * @param boolean $isAIeeeMember
     * @return Participant
     */
    public function setIsAIeeeMember($isAIeeeMember)
    {
        $this->isAIeeeMember = $isAIeeeMember;

        return $this;
    }

    /**
     * Get isAIeeeMember
     *
     * @return boolean 
     */
    public function getIsAIeeeMember()
    {
        return $this->isAIeeeMember;
    }
    

    /**
     * Add conferenceResponsible
     *
     * @param \Wits\FrontBundle\Entity\Conference $conferenceResponsible
     * @return Participant
     */
    public function addConferenceResponsible(\Wits\FrontBundle\Entity\Conference $conferenceResponsible)
    {
        $this->conferenceResponsible[] = $conferenceResponsible;

        return $this;
    }

    /**
     * Remove conferenceResponsible
     *
     * @param \Wits\FrontBundle\Entity\Conference $conferenceResponsible
     */
    public function removeConferenceResponsible(\Wits\FrontBundle\Entity\Conference $conferenceResponsible)
    {
        $this->conferenceResponsible->removeElement($conferenceResponsible);
    }

    /**
     * Get conferenceResponsible
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getConferenceResponsible()
    {
        return $this->conferenceResponsible;
    }
}
