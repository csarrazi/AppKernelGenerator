<?php

namespace Sensio\DynamicBundlesBundle\Controller;

use Sensio\DynamicBundlesBundle\Model\Bundle;

class GeneratorController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
{
  public function indexAction(\Symfony\Component\HttpFoundation\Request $request)
  {
    $bundleMap = array(
      'demo' => 'Acme\DemoBundle\AcmeDemoBundle',
      'bundles' => 'Sensio\DynamicBundlesBundle\SensioDynamicBundlesBundle',
    );
    
    $form = $this->createForm(new \Sensio\DynamicBundlesBundle\Form\Type\BundleType(), array());
    
    if ($request->isMethod('post')) {
      $form->bind($request);
      if ($form->isValid()) {
        $generator = $this->get('bundle_generator');
        
        $data = $form->getData();
        
        $bundles = array();
        
        foreach ($data['bundle'] as $value => $bundle) {
          $bundles[] = new Bundle($bundleMap[$bundle]);
        }
     
        $generator->generate(array(
            'bundles' => $bundles,
//            'cacheDir' => '__DIR__.\'/../myCacheDir',
            ), $this->container->getParameter('kernel.root_dir').'/tmp');
        
        $pb = new \Symfony\Component\Process\ProcessBuilder(array('/usr/bin/php'));
        $pb
          ->add('console')
          ->add('cache:clear')
          ->add('--env=dev');
        $pb->setWorkingDirectory($this->container->getParameter('kernel.root_dir'));
        $p = $pb->getProcess();
        
        $p->run();
         $this->get('session')->setFlash(
            'notice',
            $p->getOutput()
        );
      }
    }
    
    return $this->render('SensioDynamicBundlesBundle:Generator:index.html.twig', array(
        'form' => $form->createView()
    ));
  }
}

?>
