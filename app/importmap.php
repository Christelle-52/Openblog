<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'register' => [
            'path' => './assets/js/register.js',
            'entrypoint' => true,
    ],
    'navbar' => [
            'path' => './assets/js/navbar.js',
            'entrypoint' => true,
    ],
    'add-article' => [
            'path' => './assets/js/addArticle.js',
            'entrypoint' => true,
    ],
    'ckeditor-init' => [
            'path' => './assets/js/ckeditor-init.js',
            'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
];
