<?php

namespace Pbxg33k\VocadbBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class SongAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('artistId')
            ->add('name')
            ->add('vocalistId')
            ->add('created')
            ->add('updatedOn')
            ->add('length')
            ->add('status')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('artistId')
            ->add('name')
            ->add('vocalistId')
            ->add('created')
            ->add('updatedOn')
            ->add('length')
            ->add('status')
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
            ->add('id')
            ->add('artistId')
            ->add('name')
            ->add('vocalistId')
            ->add('created')
            ->add('updatedOn')
            ->add('length')
            ->add('status')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('artistId')
            ->add('name')
            ->add('vocalistId')
            ->add('created')
            ->add('updatedOn')
            ->add('length')
            ->add('status')
        ;
    }
}
