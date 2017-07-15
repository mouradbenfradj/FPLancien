<?php

namespace ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('FrontendBundle:News')->findAll();
        $articles = $em->getRepository('ArticleBundle:Article')->findAll();
        $teams = $em->getRepository('FrontendBundle:Team')->findAll();
        if ($request->get('categorie')) {
            return $this->render('ArticleBundle:Default:articleByCategorie.html.twig', array('news' => $news, 'articles' => $articles));
        }
        return $this->render('ArticleBundle:Default:index.html.twig', array('news' => $news, 'articles' => $articles, 'teams' => $teams,
        ));

    }
}
