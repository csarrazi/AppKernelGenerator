<?php
/**
 * @author Charles Sarrazin <charles@sarraz.in>
 */

namespace Sensio\DynamicBundlesBundle\Model;

class Bundle
{
    private $enabled = false;

    private $namespace = '';
    
    public function __construct($namespace, $enabled = true) {
      $this->namespace = $namespace;
      $this->enabled = $enabled;
    }


    public function isEnabled()
    {
        return $this->enabled;
    }
    
    public function setEnabled($enabled = true)
    {
        $this->enabled = $enabled;
    }
    
    public function getNamespace()
    {
        return $this->namespace;
    }

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }
}