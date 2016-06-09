<?php

namespace Wits\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ConferenceAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('title')
            ->add('description')
            ->add('startDate')
            ->add('endDate')
            ->add('lieu')
            ->add('mail')
            ->add('address')
            ->add('phone')
            ->add('edition')
            ->add('facebook')
            ->add('twitter')
            ->add('linkedin')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('title')
            ->add('startDate')
            ->add('endDate')
            ->add('edition')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Informations Générale', array('class' => 'col-md-6'))
                ->add('name')
                ->add('title')
                ->add('edition')
                ->add('description')
                ->add('startDate')
                ->add('endDate')
            ->end()
            ->with('Informations de contact', array('class' => 'col-md-6'))
                ->add('lieu')
                ->add('mail')
                ->add('address')
                ->add('phone')
                ->add('responsible', 'sonata_type_model', array(
                    'class' => 'Wits\FrontBundle\Entity\Participant',
                    'property' => 'lastName',
                ))
            ->end()
            ->with('Les réseaux sociaux', array('class' => 'col-md-6'))
                ->add('facebook')
                ->add('twitter')
                ->add('linkedin')
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('title')
            ->add('description')
            ->add('startDate')
            ->add('endDate')
            ->add('lieu')
            ->add('mail')
            ->add('address')
            ->add('phone')
            ->add('edition')
            ->add('facebook')
            ->add('twitter')
            ->add('linkedin')
        ;
    }
}
