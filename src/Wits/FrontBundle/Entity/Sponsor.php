<?php

namespace Wits\FrontBundle\Entity;

use Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity(repositoryClass="Wits\FrontBundle\Repository\SponsorRepository")
 */
class Sponsor
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="webSiteUrl", type="string", length=255, nullable=true)
     */
    private $webSiteUrl;

    /**
     * @ORM\ManyToOne(targetEntity="Conference", inversedBy="sponsors")
     */
    private $conference;

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
     * Set nom
     *
     * @param string $nom
     * @return Sponsor
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set webSiteUrl
     *
     * @param string $webSiteUrl
     * @return Sponsor
     */
    public function setWebSiteUrl($webSiteUrl)
    {
        $this->webSiteUrl = $webSiteUrl;

        return $this;
    }

    /**
     * Get webSiteUrl
     *
     * @return string 
     */
    public function getWebSiteUrl()
    {
        return $this->webSiteUrl;
    }

    /**
     * Set conference
     *
     * @param $conference
     * @return Sponsor
     */
    public function setConference(Conference $conference = null)
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

    /**
     * Set media
     *
     * @param Media $media
     * @return Participant
     */
    public function setMedia(Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return Media
     */
    public function getMedia()
    {
        return $this->media;
    }

    function __toString()
    {
        return $this->nom;
    }
}
