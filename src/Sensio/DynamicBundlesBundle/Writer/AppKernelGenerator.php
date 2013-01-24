<?php
/**
 * @author Charles Sarrazin <charles@sarraz.in>
 */

namespace Sensio\DynamicBundlesBundle\Writer;

use Sensio\Bundle\GeneratorBundle\Generator\Generator;
use Symfony\Component\Filesystem\Filesystem;

class AppKernelGenerator extends Generator
{
    public function __construct(Filesystem $filesystem, $skeletonDir)
    {
        $this->filesystem = $filesystem;
        $this->skeletonDir = $skeletonDir;
    }

    public function generate(array $bundles, $dir)
    {
        $this->renderFile($this->skeletonDir, 'AppKernel.php.twig', $dir.'/app/AppKernel.php', array('bundles' => $bundles));
    }
}
