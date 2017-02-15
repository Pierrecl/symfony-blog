<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Post;
use AppBundle\Entity\Category;
use AppBundle\Form\PostType;
use AppBundle\Form\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/post")
 * @Security("has_role('ROLE_ADMIN')")
 */
class AdminController extends Controller{

    /**
    * @Route("/", name="admin_index")
    * @Route("/", name="admin_post_index")
    * @Method("GET")
    */
    public function indexAction()
    {
       $eM = $this->getDoctrine()->getManager();
       $posts = $eM->getRepository(Post::class)->findAll();
       //$listComments = $this->getDoctrine()->getRepository('AppBundle:Post')->getCommentForPost();

       return $this->render('admin/index.html.twig', ['posts' => $posts]);
    }

    /**
    * @Route("/{id}/edit", requirements={"id": "\d+"}, name="admin_post_edit")
    * @Route("/{id}/delete", requirements={"id": "\d+"}, name="admin_post_delete")
    * @Method({"GET","POST"})
    */
    public function editAction(Post $post, Request $request)
    {
      $eM = $this->getDoctrine()->getManager();
      $formType = $this->createForm(PostType::Class, $post);

      $formType->handleRequest($request);

      if ($request->get('admin_post_edit'))
      {
        if($formType->isSubmitted() && $formType->isValid())
        {
          $post->getSlug($this->get('app.slugger')->slugify($post->getTitle()));
          $eM->flush();

          $this->addFlash('sucess', 'L\'Article {$post->getTitle()}, à été modifié !');

          return $this->redirectToroute('admin_post_index');
        }

      }

      elseif ($request->get('admin_post_delete'))
        {
          if (!$this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            return $this->redirectToRoute('admin_post_index');
          }
          //$post->getTags()->clear();
          $eM->remove($post);
          $eM->flush();
          $this->addFlash('sucess', 'L\'Article {$post->getTitle()}, à été supprimé !');

          return $this->redirectToroute('admin_post_index');

          //return $this->render('admin/edit.html.twig', ['post' => $post]);
        }

      return $this->render('admin/edit.html.twig', ['post' => $post, 'edit_form' => $formType->createView()]);

    }

    /**
    * @Route("/new", name="admin_post_new")
    * @Method({"GET", "POST"})
    */
    public function newAction(Request $reqest)
    {
        $eM = $this->getDoctrine()->getManager();

        $post = new Post();
        $post->setAuthor($this->getUser());

        $formType = $this->createForm(PostType::Class, $post);

        $formType->handleRequest($reqest);

        if($formType->isSubmitted() && $formType->isValid())
        {
          $post->setSlug($this->get('app.slugger')->slugify($post->getTitle()));
          $eM->persist($post);
          $eM->flush();

          $this->addFlash('success', 'L\'Article à été crée !');

          return $this->redirectToRoute('admin_post_index');
        }

        return $this->render('admin/new_post.html.twig',[
              'post' => $post,
              'form' => $formType->createView(),
        ]);
    }

}

?>
