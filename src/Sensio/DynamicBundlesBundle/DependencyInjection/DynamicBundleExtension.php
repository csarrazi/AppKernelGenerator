<?php
/**
 * @author Charles Sarrazin <charles@sarraz.in>
 */

namespace Sensio\DynamicBundlesBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class DynamicBundleExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $config, ContainerBuilder $container)
    {
        //
    }
}