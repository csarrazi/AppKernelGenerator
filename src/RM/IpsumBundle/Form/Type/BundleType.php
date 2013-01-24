<?php

namespace RM\IpsumBundle\Form\Type;

use \Symfony\Component\OptionsResolver\OptionsResolverInterface;
use RM\FooBundle\Form\Type\BundleType as BaseType;

class BundleType extends BaseType
{
  public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
  {
     parent::buildForm($builder, $options);
     $builder->add('helloworld', 'text', array());
  }
  
  public function setDefaultOptions(OptionsResolverInterface $resolver) {
    
  }


  public function getName() {
    return 'rm_foo';
  }
}

?>
