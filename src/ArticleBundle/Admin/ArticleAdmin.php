<?php

namespace ArticleBundle\Admin;


use ArticleBundle\Entity\Article;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ArticleAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->add('titre')->add('description')->add('categorie', ChoiceType::class, array(
            'choices' => Article::$choiceCategorie,
            'multiple' => false
        ))
            ->add('imageFile', 'file');
    }
    public function prePersist($object)
    {

        $user = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser();
        $object->setUtilisateur($user);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('titre')->add('description')->add('categorie')
            ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
            $listMapper->addIdentifier('id')->add('titre')->add('description')->add('categorie')->add('imageFile', null, array('template' => 'admin/image.html.twig'))
         ;
    }
}