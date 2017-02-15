<?php

namespace AppBundle\Controller\Blog;

use AppBundle\Entity\Post;
use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/blog")
 */
class BlogController extends Controller{


    /**
    * @Route("/", name="blog_index")
    * @Method("GET")
    */
    public function indexAction()
    {
      //$posts = $this->getDoctrine()->getRepository('AppBundle:Post')->getFiveLatest();

      $listComments = $this->getDoctrine()->getRepository('AppBundle:Post')->getCommentForPost();

      return $this->render('post/index.html.twig', ['post_com' => $listComments]);
    }

    /**
    * @Route("/posts", defaults={"page": "1", "_format"="html"}, name="blog_posts")
    * @Route("/posts/page/{page}", defaults={"_format"="html"}, requirements={"page": "[1-9]\d*"}, name="blog_posts_paginated")
    * @Method("GET")
    */
    public function listAction($page)
    {
      $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->getLatest($page);

      return $this->render('post/listposts.html.twig', ['posts' => $posts]);
    }

    /**
    * @Route("/categories", name="blog_categories")
    * @Method("GET")
    */
    public function listCategoriesAction()
    {
        $categories = $this->getDoctrine()->getRepository('AppBundle:Post')->listCategory();

        return $this->render('post/listcategories.html.twig', ['categories' => $categories]);
    }

    /**
    * Matches /categories/posts/*
    * @Route("/categories/{id}/posts", name="list_posts_categories", requirements={"id": "\d+"})
    * @Method("GET")
    */
    public function listPostsByCategoriesAction($id)
    {
        $postsByCategories = $this->getDoctrine()->getRepository('AppBundle:Post')->getPostsByCategories($id);

        return $this->render('post/listPostByCategories.html.twig', ['postsByCategories' => $postsByCategories]);
    }

    /**
    * @Route("/post/{slug}", name="post_show")
    * @Method("GET")
    */
    public function listPostBySlugAction($slug)
    {
        $postAndComment = $this->getDoctrine()->getRepository('AppBundle:Post')->getCommentForOnePost($slug);
        return $this->render('post/post_show.html.twig', ['element' => $postAndComment]);
    }

    /**
    * Matches /categories/posts/*
    * @Route("/search/post", name="post_search")
    * @Method({"GET", "POST"})
    */
    public function listPostBySearch(Request $request)
    {
        $slug = $request->get('slug');
        if(!$slug == "")
        {
          $postsBySearch = $this->getDoctrine()->getRepository('AppBundle:Post')->getPostBySearch($slug);
        }
        
        return $this->render('post/listPostBySearch.html.twig', ['search' => $postsBySearch ]);
    }

}

?>
