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


class CsOddsAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('teamA')->add('oddA')->add('oddB')->add('teamB');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('teamA')->add('oddA')->add('oddB')->add('teamB');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')->add('teamA')->add('oddA')->add('oddB')->add('teamB');
    }
}