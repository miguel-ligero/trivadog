<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTipohospedajeTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\TipohospedajeType' shared autowired service.
     *
     * @return \App\Form\TipohospedajeType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\TipohospedajeType'] = new \App\Form\TipohospedajeType();
    }
}
