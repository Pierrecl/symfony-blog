<?php

namespace AppBundle\Controller\CheckComponent;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class CheckComponentController extends Controller
{


    /**
    * @Route("/login", name="blog_login")
    */
    public function loginAction()
    {
      $helper = $this->get('security.authentication_utils');
      //$user = new User();
      $form = $this->createForm(UserType::class);
      $form->remove('email');
      return $this->render('checkComponent/login.html.twig', [

            'last_username' => $helper->getLastUsername(),

            'error' => $helper->getLastAuthenticationError(),

            'form' => $form->createView(),
        ]);
    }
    /**
    * @Route("/logout", name="blog_logout")
    */
    public function logoutAction()
    {

    }
}

?>
