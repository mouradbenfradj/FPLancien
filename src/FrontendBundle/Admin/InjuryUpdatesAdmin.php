<?php
/**
 * Created by PhpStorm.
 * User: moura
 * Date: 31/07/2017
 * Time: 21:49
 */

namespace FrontendBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class InjuryUpdatesAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('playerName')->add('typeInjury')->add('returnDate','sonata_type_date_picker')->add('states');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('playerName')->add('typeInjury')->add('returnDate')->add('states');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')->add('playerName')->add('typeInjury')->add('returnDate')->add('states');
    }
}