<?php

namespace ContainerFkOFALc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostsControllereditArticleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.awlNrV1.App\Controller\Profile\PostsController::editArticle()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.awlNrV1.App\\Controller\\Profile\\PostsController::editArticle()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
            'pictureService' => ['privates', 'App\\Service\\PictureService', 'getPictureServiceService', true],
        ], [
            'slugger' => '?',
            'em' => '?',
            'postsRepository' => 'App\\Repository\\PostsRepository',
            'pictureService' => 'App\\Service\\PictureService',
        ]))->withContext('App\\Controller\\Profile\\PostsController::editArticle()', $container);
    }
}
