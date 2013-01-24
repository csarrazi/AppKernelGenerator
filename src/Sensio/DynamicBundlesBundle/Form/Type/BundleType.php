<?php

namespace Sensio\DynamicBundlesBundle\Form\Type;

class BundleType extends \Symfony\Component\Form\AbstractType
{
  public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
  {
    $builder->add('bundle', 'choice', array(
        'choices' => array(
              'demo' => 'Acme\DemoBundle\AcmeDemoBundle',
              'bundles' => 'Sensio\DynamicBundlesBundle\DynamicBundlesBundle',
            ),
        'multiple' => true,
    ));
  }
  
  public function setDefaultOptions(\Symfony\Component\OptionsResolver\OptionsResolverInterface $resolver) {
    
  }


  public function getName() {
    return 'sensio_bundle';
  }
}

?>
