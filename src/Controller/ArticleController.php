<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'I like to make a comment on all the things',
            'I have nothing to say',
            'What is your name',
        ];

        return $this->render(
            'article/show.html.twig',
            [
                'title'    => ucwords(str_replace('-', ' ', $slug)),
                'comments' => $comments,
            ]
        );
    }
}