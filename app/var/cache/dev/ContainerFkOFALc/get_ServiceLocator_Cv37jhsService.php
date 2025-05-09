<?php

namespace ContainerFkOFALc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cv37jhsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cv37jhs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cv37jhs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
        ], [
            'postsRepository' => 'App\\Repository\\PostsRepository',
        ]);
    }
}
