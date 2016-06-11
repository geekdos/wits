<?php

namespace Wits\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $request = $this->getRequest();

        dump($request);

        $posts = $this->getPostManager()->findAll();
        
        return $this->render('WitsFrontBundle:Default:index.html.twig', 
            [
                'posts' => $posts,
            ]    
        );
    }
    
    /**
     * @return \Sonata\NewsBundle\Model\PostManagerInterface
     */
    protected function getPostManager()
    {
        return $this->get('sonata.news.manager.post');
    }

    /**
     * @param array $criteria
     * @param array $parameters
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderArchive(array $criteria = array(), array $parameters = array())
    {
        $pager = $this->getPostManager()->getPager(
            $criteria,
            $this->getRequest()->get('page', 1)
        );

        $parameters = array_merge(array(
            'pager'            => $pager,
            'blog'             => $this->get('sonata.news.blog'),
            'tag'              => false,
            'collection'       => false,
            'route'            => $this->getRequest()->get('_route'),
            'route_parameters' => $this->getRequest()->get('_route_params')
        ), $parameters);

        $response = $this->render(sprintf('SonataNewsBundle:Post:archive.%s.twig', $this->getRequest()->getRequestFormat()), $parameters);

        if ('rss' === $this->getRequest()->getRequestFormat()) {
            $response->headers->set('Content-Type', 'application/rss+xml');
        }

        return $response;
    }
}
