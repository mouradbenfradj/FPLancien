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


class PriceChangesAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('player')->add('position')->add('team')->add('oldPrice')->add('newPrice')->add('status');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('player')->add('position')->add('team')->add('oldPrice')->add('newPrice')->add('status');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')->add('player')->add('position')->add('team')->add('oldPrice')->add('newPrice')->add('status');
    }
}