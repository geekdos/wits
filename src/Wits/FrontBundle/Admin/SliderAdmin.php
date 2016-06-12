<?php

namespace Wits\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SliderAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('subTitle')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('subTitle')
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
            ->with('Slide infos', array('class' => 'col-md-6'))
                ->add('title')
                ->add('subTitle')
                ->add('conference', 'sonata_type_model', array(
                    'class' => 'Wits\FrontBundle\Entity\Conference',
                    'property' => 'edition',
                ))
            ->end()
            ->with('Photo de la slide', array('class' => 'col-md-6'))
                ->add('media', 'sonata_media_type', array(
                    'required' => false,
                    'provider' => 'sonata.media.provider.image',
                    'context'  => 'slider'
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
            ->add('title')
            ->add('subTitle')
        ;
    }
}
