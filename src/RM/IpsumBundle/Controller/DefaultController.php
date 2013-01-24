<?php

namespace RM\IpsumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  public function indexAction()
  {
    return $this->render('RMIpsumBundle:Default:index.html.twig', array());
  }
}

?>
