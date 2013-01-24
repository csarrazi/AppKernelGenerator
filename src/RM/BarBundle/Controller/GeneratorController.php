<?php

namespace RM\BarBundle\Controller;

class GeneratorController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
  public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
  {
    $form = $this->createForm(new \RM\BarBundle\Form\Type\BundleType(), array());
    
    if ($request->isMethod('post')) {
      $form->bind($request);
      if ($form->isValid()) {
        $data = $form->getData();
      }
    }
    
    return $this->render('RMBarBundle:Generator:index.html.twig', array(
        'form' => $form->createView()
    ));
  }
}

?>
