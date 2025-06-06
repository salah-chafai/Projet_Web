<?php

namespace ContainerT0yB5tb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateProductImagesCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\UpdateProductImagesCommand' shared autowired service.
     *
     * @return \App\Command\UpdateProductImagesCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/SignalableCommandInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/UpdateProductImagesCommand.php';

        $container->privates['App\\Command\\UpdateProductImagesCommand'] = $instance = new \App\Command\UpdateProductImagesCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('app:update-product-images');
        $instance->setDescription('Updates existing product images');

        return $instance;
    }
}
