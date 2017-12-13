<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;

class NewsController extends Controller
{
    /**
     * @Route("/article/{id}", name="articlepages", requirements = {"id" : "\d+"})
     * @Template()
     */
    public function showAction($id)
    {
        $article = $this->get('doctrine')->getRepository('AppBundle:News')->find($id);
        if (!$article){
            throw $this->createNotFoundException();
        }

        return ['article' => $article];
    }

    /**
     * @Route("/news-title", name="newspage")
     * @Template()
     */
    public function newsTitleAction()
    {
        $repos = $this->get('doctrine')->getRepository('AppBundle:News');
        $articles = $repos->findAll();

        return compact('articles');
    }
}
