<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt_stylesheet' => [[], ['_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], [], [['text', '/_wdt/styles']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_admin_categories_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], [], [['text', '/admin/categories/']], [], [], []],
    'app_admin_categories_add' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::addCategory'], [], [['text', '/admin/categories/ajouter']], [], [], []],
    'app_admin_keywords_index' => [[], ['_controller' => 'App\\Controller\\Admin\\KeywordsController::index'], [], [['text', '/admin/keywords/']], [], [], []],
    'app_admin_keywords_add' => [[], ['_controller' => 'App\\Controller\\Admin\\KeywordsController::addKeyword'], [], [['text', '/admin/keywords/ajouter']], [], [], []],
    'api_file_upload' => [[], ['_format=json', '_controller' => 'App\\Controller\\Api\\FileUploadController::fileUpload'], [], [['text', '/api/file/upload']], [], [], []],
    'app_main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'app_mentions' => [[], ['_controller' => 'App\\Controller\\MainController::mentions'], [], [['text', '/mentions-legales']], [], [], []],
    'change_locale' => [['locale'], ['_controller' => 'App\\Controller\\MainController::changeLocale'], [], [['variable', '/', '[^/]++', 'locale', true], ['text', '/change-locale']], [], [], []],
    'app_profile_posts_index' => [[], ['_controller' => 'App\\Controller\\Profile\\PostsController::index'], [], [['text', '/profil/articles/']], [], [], []],
    'app_profile_posts_add' => [[], ['_controller' => 'App\\Controller\\Profile\\PostsController::addArticle'], [], [['text', '/profil/articles/ajouter']], [], [], []],
    'app_profile_posts_edit' => [['id'], ['_controller' => 'App\\Controller\\Profile\\PostsController::editArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profil/articles/modifier']], [], [], []],
    'app_profile_index' => [[], ['_controller' => 'App\\Controller\\Profile\\ProfileController::index'], [], [['text', '/profil/']], [], [], []],
    'app_posts_index' => [[], ['_controller' => 'App\\Controller\\PostsController::index'], [], [['text', '/articles']], [], [], []],
    'app_posts_details' => [['slug'], ['_controller' => 'App\\Controller\\PostsController::details'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/articles/details']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'verify_user' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::verifUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'reset_password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mot-de-passe-oublie']], [], [], []],
    'App\Controller\Admin\CategoriesController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], [], [['text', '/admin/categories/']], [], [], []],
    'App\Controller\Admin\CategoriesController::addCategory' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoriesController::addCategory'], [], [['text', '/admin/categories/ajouter']], [], [], []],
    'App\Controller\Admin\KeywordsController::index' => [[], ['_controller' => 'App\\Controller\\Admin\\KeywordsController::index'], [], [['text', '/admin/keywords/']], [], [], []],
    'App\Controller\Admin\KeywordsController::addKeyword' => [[], ['_controller' => 'App\\Controller\\Admin\\KeywordsController::addKeyword'], [], [['text', '/admin/keywords/ajouter']], [], [], []],
    'App\Controller\Api\FileUploadController::fileUpload' => [[], ['_format=json', '_controller' => 'App\\Controller\\Api\\FileUploadController::fileUpload'], [], [['text', '/api/file/upload']], [], [], []],
    'App\Controller\MainController::index' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\MainController::mentions' => [[], ['_controller' => 'App\\Controller\\MainController::mentions'], [], [['text', '/mentions-legales']], [], [], []],
    'App\Controller\MainController::changeLocale' => [['locale'], ['_controller' => 'App\\Controller\\MainController::changeLocale'], [], [['variable', '/', '[^/]++', 'locale', true], ['text', '/change-locale']], [], [], []],
    'App\Controller\Profile\PostsController::index' => [[], ['_controller' => 'App\\Controller\\Profile\\PostsController::index'], [], [['text', '/profil/articles/']], [], [], []],
    'App\Controller\Profile\PostsController::addArticle' => [[], ['_controller' => 'App\\Controller\\Profile\\PostsController::addArticle'], [], [['text', '/profil/articles/ajouter']], [], [], []],
    'App\Controller\Profile\PostsController::editArticle' => [['id'], ['_controller' => 'App\\Controller\\Profile\\PostsController::editArticle'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profil/articles/modifier']], [], [], []],
    'App\Controller\Profile\ProfileController::index' => [[], ['_controller' => 'App\\Controller\\Profile\\ProfileController::index'], [], [['text', '/profil/']], [], [], []],
    'App\Controller\PostsController::index' => [[], ['_controller' => 'App\\Controller\\PostsController::index'], [], [['text', '/articles']], [], [], []],
    'App\Controller\PostsController::details' => [['slug'], ['_controller' => 'App\\Controller\\PostsController::details'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/articles/details']], [], [], []],
    'App\Controller\RegistrationController::register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\RegistrationController::verifUser' => [['token'], ['_controller' => 'App\\Controller\\RegistrationController::verifUser'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/verif']], [], [], []],
    'App\Controller\SecurityController::login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\SecurityController::logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\SecurityController::forgottenPassword' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'App\Controller\SecurityController::resetPassword' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::resetPassword'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/mot-de-passe-oublie']], [], [], []],
];
