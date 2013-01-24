<?php

namespace RM\FooBundle\Form\Type;

use \Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BundleType extends \Symfony\Component\Form\AbstractType
{
  public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
  {
    $builder->add('bundle', 'choice', array('choices' => array('m' => 'Male', 'f' => 'Female')));
  }
  
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    
  }


  public function getName() {
    return 'rm_foo';
  }
}

?>
