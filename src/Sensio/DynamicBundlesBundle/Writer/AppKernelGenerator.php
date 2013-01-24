<?php
/**
 * @author Charles Sarrazin <charles@sarraz.in>
 */

namespace Sensio\DynamicBundlesBundle\Writer;

use Sensio\Bundle\GeneratorBundle\Generator\Generator;
use Symfony\Component\Filesystem\Filesystem;

class AppKernelGenerator extends Generator
{
    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
        $this->skeletonDir = __DIR__.'/../Resources/skeleton';
    }

    public function generate(array $params, $dir)
    {
        $this->renderFile($this->skeletonDir, 'AppKernel.php.twig', $dir.'/app/AppKernel.php', $params);
    }
}
