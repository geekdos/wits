<?php

namespace Wits\FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SponsorAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('webSiteUrl')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('media')
            ->addIdentifier('nom')
            ->add('webSiteUrl')
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
                ->add('nom')
                ->add('webSiteUrl')
                ->add('conference', 'sonata_type_model', array(
                    'class' => 'Wits\FrontBundle\Entity\Conference',
                    'property' => 'edition',
                ))
            ->end()
            ->with('Logo du Sponsor', array('class' => 'col-md-6'))
                ->add('media', 'sonata_media_type', array(
                    'required' => false,
                    'provider' => 'sonata.media.provider.image',
                    'context'  => 'Sponsorship'
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
            ->add('nom')
            ->add('webSiteUrl')
        ;
    }
}
