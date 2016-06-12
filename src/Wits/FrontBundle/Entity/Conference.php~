<?php

namespace Wits\FrontBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
 * @ORM\Table(name="conference")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\ConferenceRepository")
 */
class Conference
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date")
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin", type="string", length=255)
     */
    private $linkedin;


    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255)
     */
    private $edition;

    /**
     * @ORM\ManyToOne(targetEntity="Participant", inversedBy="conferenceResponsible")
     */
    private  $responsible;
    
    /**
     * @ORM\OneToMany(targetEntity="Sponsor", mappedBy="conference")
     */
    private $sponsors;

    /**
     * @ORM\OneToMany(targetEntity="Informations", mappedBy="conference")
     */
    private $informations;

    /**
     * @ORM\OneToMany(targetEntity="Submissions", mappedBy="conference")
     */
    private $submissions;

    /**
     * @ORM\OneToMany(targetEntity="Registration", mappedBy="conference")
     */
    private $registrations;

    /**
     * @ORM\OneToMany(targetEntity="ImportantDates", mappedBy="conference")
     */
    private $dateimport;

    /**
     * @ORM\OneToMany(targetEntity="Program", mappedBy="conference")
     */
    private $programs;

    /**
     * @ORM\OneToMany(targetEntity="Slider", mappedBy="conference")
     */
    private $sliders;

    /**
     * @ORM\OneToMany(targetEntity="Committee", mappedBy="conference")
     */
    private $committee;
    
    /**
     * Conference constructor.
     */
    public function __construct()
    {
        $this->sponsors = new ArrayCollection();
        $this->informations = new ArrayCollection();
        $this->submissions = new ArrayCollection();
        $this->registrations = new ArrayCollection();
        $this->dateimport = new ArrayCollection();
        $this->programs = new ArrayCollection();
        $this->sliders = new ArrayCollection();
        $this->committee = new ArrayCollection();
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
     * @return Conference
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
     * Set title
     *
     * @param string $title
     * @return Conference
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Conference
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Conference
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     * @return Conference
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string 
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Conference
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Conference
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Conference
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
     * Set edition
     *
     * @param string $edition
     * @return Conference
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string 
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Add sponsors
     *
     * @param \Wits\FrontBundle\Entity\Sponsor $sponsors
     * @return Conference
     */
    public function addSponsor(\Wits\FrontBundle\Entity\Sponsor $sponsors)
    {
        $this->sponsors[] = $sponsors;

        return $this;
    }

    /**
     * Remove sponsors
     *
     * @param \Wits\FrontBundle\Entity\Sponsor $sponsors
     */
    public function removeSponsor(\Wits\FrontBundle\Entity\Sponsor $sponsors)
    {
        $this->sponsors->removeElement($sponsors);
    }

    /**
     * Get sponsors
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSponsors()
    {
        return $this->sponsors;
    }

    function __toString()
    {
        return $this->name;
    }

    /**
     * Add informations
     *
     * @param \Wits\FrontBundle\Entity\Informations $informations
     * @return Conference
     */
    public function addInformation(\Wits\FrontBundle\Entity\Informations $informations)
    {
        $this->informations[] = $informations;

        return $this;
    }

    /**
     * Remove informations
     *
     * @param \Wits\FrontBundle\Entity\Informations $informations
     */
    public function removeInformation(\Wits\FrontBundle\Entity\Informations $informations)
    {
        $this->informations->removeElement($informations);
    }

    /**
     * Get informations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInformations()
    {
        return $this->informations;
    }

    /**
     * Add submissions
     *
     * @param \Wits\FrontBundle\Entity\Submissions $submissions
     * @return Conference
     */
    public function addSubmission(\Wits\FrontBundle\Entity\Submissions $submissions)
    {
        $this->submissions[] = $submissions;

        return $this;
    }

    /**
     * Remove submissions
     *
     * @param \Wits\FrontBundle\Entity\Submissions $submissions
     */
    public function removeSubmission(\Wits\FrontBundle\Entity\Submissions $submissions)
    {
        $this->submissions->removeElement($submissions);
    }

    /**
     * Get submissions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }

    /**
     * Add registrations
     *
     * @param \Wits\FrontBundle\Entity\Registration $registrations
     * @return Conference
     */
    public function addRegistration(\Wits\FrontBundle\Entity\Registration $registrations)
    {
        $this->registrations[] = $registrations;

        return $this;
    }

    /**
     * Remove registrations
     *
     * @param \Wits\FrontBundle\Entity\Registration $registrations
     */
    public function removeRegistration(\Wits\FrontBundle\Entity\Registration $registrations)
    {
        $this->registrations->removeElement($registrations);
    }

    /**
     * Get registrations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegistrations()
    {
        return $this->registrations;
    }
    

    /**
     * Add dateimport
     *
     * @param \Wits\FrontBundle\Entity\ImportantDates $dateimport
     * @return Conference
     */
    public function addDateimport(\Wits\FrontBundle\Entity\ImportantDates $dateimport)
    {
        $this->dateimport[] = $dateimport;

        return $this;
    }

    /**
     * Remove dateimport
     *
     * @param \Wits\FrontBundle\Entity\ImportantDates $dateimport
     */
    public function removeDateimport(\Wits\FrontBundle\Entity\ImportantDates $dateimport)
    {
        $this->dateimport->removeElement($dateimport);
    }

    /**
     * Get dateimport
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDateimport()
    {
        return $this->dateimport;
    }

    /**
     * Add programs
     *
     * @param \Wits\FrontBundle\Entity\Program $programs
     * @return Conference
     */
    public function addProgram(\Wits\FrontBundle\Entity\Program $programs)
    {
        $this->programs[] = $programs;

        return $this;
    }

    /**
     * Remove programs
     *
     * @param \Wits\FrontBundle\Entity\Program $programs
     */
    public function removeProgram(\Wits\FrontBundle\Entity\Program $programs)
    {
        $this->programs->removeElement($programs);
    }

    /**
     * Get programs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrograms()
    {
        return $this->programs;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Conference
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Conference
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Conference
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     * @return Conference
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set responsible
     *
     * @param \Wits\FrontBundle\Entity\Participant $responsible
     * @return Conference
     */
    public function setResponsible(\Wits\FrontBundle\Entity\Participant $responsible = null)
    {
        $this->responsible = $responsible;

        return $this;
    }

    /**
     * Get responsible
     *
     * @return \Wits\FrontBundle\Entity\Participant 
     */
    public function getResponsible()
    {
        return $this->responsible;
    }
    

    /**
     * Add sliders
     *
     * @param \Wits\FrontBundle\Entity\Slider $sliders
     * @return Conference
     */
    public function addSlider(\Wits\FrontBundle\Entity\Slider $sliders)
    {
        $this->sliders[] = $sliders;

        return $this;
    }

    /**
     * Remove sliders
     *
     * @param \Wits\FrontBundle\Entity\Slider $sliders
     */
    public function removeSlider(\Wits\FrontBundle\Entity\Slider $sliders)
    {
        $this->sliders->removeElement($sliders);
    }

    /**
     * Get sliders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSliders()
    {
        return $this->sliders;
    }

    /**
     * Add committee
     *
     * @param \Wits\FrontBundle\Entity\Committee $committee
     * @return Conference
     */
    public function addCommittee(\Wits\FrontBundle\Entity\Committee $committee)
    {
        $this->committee[] = $committee;

        return $this;
    }

    /**
     * Remove committee
     *
     * @param \Wits\FrontBundle\Entity\Committee $committee
     */
    public function removeCommittee(\Wits\FrontBundle\Entity\Committee $committee)
    {
        $this->committee->removeElement($committee);
    }

    /**
     * Get committee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommittee()
    {
        return $this->committee;
    }
}
