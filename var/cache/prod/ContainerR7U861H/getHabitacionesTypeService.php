<?php

namespace ContainerR7U861H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitacionesTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\HabitacionesType' shared autowired service.
     *
     * @return \App\Form\HabitacionesType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\HabitacionesType'] = new \App\Form\HabitacionesType();
    }
}