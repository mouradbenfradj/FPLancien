<?php

namespace ArticleBundle\Admin;


use ArticleBundle\Entity\Article;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ParagraphAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')->add('description')
            ->add('image', 'sonata_type_model_list', array(), array('link_parameters' => array('context' => 'paragraph_image')))
            ->add('video', 'sonata_type_model_list', array(), array('link_parameters' => array('context' => 'paragraph_video')))
            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')->add('description');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
            ->add('title')
            ->add('image', 'string', array('template' => 'SonataMediaBundle:MediaAdmin:list_image.html.twig'))
            ->add('video','sonata_media_type')
            ->add('description');
    }
}