<?php

namespace ContainerZDVQM9F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ZenstruckFoundry_Maker_Factory_OrmDefaultPropertiesGuesserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.zenstruck_foundry.maker.factory.orm_default_properties_guesser' shared service.
     *
     * @return \Zenstruck\Foundry\Bundle\Maker\Factory\ORMDefaultPropertiesGuesser
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'DefaultPropertiesGuesser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'AbstractDefaultPropertyGuesser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'AbstractDoctrineDefaultPropertiesGuesser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'ORMDefaultPropertiesGuesser.php';

        $a = ($container->privates['.zenstruck_foundry.maker.factory.generator'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_GeneratorService'));

        if (isset($container->privates['.zenstruck_foundry.maker.factory.orm_default_properties_guesser'])) {
            return $container->privates['.zenstruck_foundry.maker.factory.orm_default_properties_guesser'];
        }

        return $container->privates['.zenstruck_foundry.maker.factory.orm_default_properties_guesser'] = new \Zenstruck\Foundry\Bundle\Maker\Factory\ORMDefaultPropertiesGuesser(($container->privates['.zenstruck_foundry.chain_manager_registry'] ?? $container->load('get_ZenstruckFoundry_ChainManagerRegistryService')), ($container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService')), $a);
    }
}
