<?php

namespace ContainerG6pseF9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZSQXxZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._ZSQXxZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._ZSQXxZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'make' => ['privates', '.errored..service_locator._ZSQXxZ.App\\Entity\\Make', NULL, 'Cannot autowire service ".service_locator._ZSQXxZ": it needs an instance of "App\\Entity\\Make" but this type has been excluded in "config/services.yaml".'],
        ], [
            'make' => 'App\\Entity\\Make',
        ]);
    }
}
