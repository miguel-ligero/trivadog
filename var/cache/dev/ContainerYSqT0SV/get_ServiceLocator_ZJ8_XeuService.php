<?php

namespace ContainerYSqT0SV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJ8_XeuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZJ8.Xeu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZJ8.Xeu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'perfil' => ['privates', '.errored..service_locator.ZJ8.Xeu.App\\Entity\\Perfil', NULL, 'Cannot autowire service ".service_locator.ZJ8.Xeu": it references class "App\\Entity\\Perfil" but no such service exists.'],
        ], [
            'perfil' => 'App\\Entity\\Perfil',
        ]);
    }
}