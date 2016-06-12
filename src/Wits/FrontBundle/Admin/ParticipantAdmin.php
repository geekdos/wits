<?php

namespace Wits\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ParticipantAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('firstName')
            ->add('lastName')
            ->add('isAIeeeMember')
            ->add('email')
            ->add('phone')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('firstName')
            ->add('lastName')
            ->add('function')
            ->add('isAIeeeMember')
            ->add('email')
            ->add('phone')
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
            ->with('Informations générales', array('class' => 'col-md-6'))
                ->add('firstName')
                ->add('lastName')
                ->add('function')
                ->add('isAIeeeMember', null, array('required' => false))
                ->add('email', null, array('required' => false))
            ->end()
            ->with('Informations personnelles', array('class' => 'col-md-6'))
                ->add('phone', null, array('required' => false))
                ->add('school', 'sonata_type_model', array(
                    'class' => 'Wits\FrontBundle\Entity\School',
                    'property' => 'name',
                ))
                ->add('media', 'sonata_media_type', array(
                    'required' => false,
                    'provider' => 'sonata.media.provider.image',
                    'context'  => 'default'
                ))
            ->end()
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('firstName')
            ->add('lastName')
            ->add('function')
            ->add('isAIeeeMember')
            ->add('email')
            ->add('phone')
        ;
    }
}
