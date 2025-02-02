<?php

namespace ContainerCbkscwv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GKAH1sYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gKAH1sY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gKAH1sY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'comentarioshospedajeRepository' => ['privates', 'App\\Repository\\ComentarioshospedajeRepository', 'getComentarioshospedajeRepositoryService', true],
        ], [
            'comentarioshospedajeRepository' => 'App\\Repository\\ComentarioshospedajeRepository',
        ]);
    }
}
