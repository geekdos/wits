<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 10/06/2016
 * Time: 13:08
 */

namespace Wits\FrontBundle\Twig;


use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class ConferenceExtension extends \Twig_Extension
{

    protected $conference;
    protected $em;
    protected $container;

    public function __construct(EntityManager $em, Container $container)
    {
        $this->em = $em;
        $this->container = $container;
    }

    public function getGlobals()
    {
        return [
            "conference" => $this->getRepo(),
        ];
    }

    public function getName()
    {
        return "WitsFrontBundle:ConferenceExtension";
    }

    private function getRepo(){
        $repo = $this->em->getRepository('WitsFrontBundle:Conference');
        $edition = $this->container->getParameter("edition");
        $this->conference = $repo->findOneBy(
            array('edition' => $edition)
        );

        if (!$this->conference) {
            $this->conference = null;
        }

        return $this->conference;
    }

}