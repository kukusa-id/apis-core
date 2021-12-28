<?php

namespace Kukusa\Apis\Bundle\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

class KukusaApisCoreExtension extends Extension implements PrependExtensionInterface
{

    public function load(array $configs, ContainerBuilder $container)
    {

    }
    public function prepend(ContainerBuilder $container)
    {
        $container->prependExtensionConfig('doctrine', [
            'orm'=>[
                'mappings'=>[
                    'loggable'=>[
                        'type'=>'annotation',
                        'alias'=>'Gedmo',
                        'prefix'=>'Gedmo\Loggable\Entity',
                        'dir'=>"%kernel.project_dir%/vendor/gedmo/doctrine-extensions/src/Loggable/Entity"
                    ]
                ]
            ]
        ]);
    }
}