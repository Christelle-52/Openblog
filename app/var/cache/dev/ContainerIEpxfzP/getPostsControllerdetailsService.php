<?php

namespace ContainerIEpxfzP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostsControllerdetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cv37jhs.App\Controller\PostsController::details()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cv37jhs.App\\Controller\\PostsController::details()'] = ($container->privates['.service_locator.cv37jhs'] ?? $container->load('get_ServiceLocator_Cv37jhsService'))->withContext('App\\Controller\\PostsController::details()', $container);
    }
}
