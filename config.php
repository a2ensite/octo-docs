<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://localhost:3000/',
    'production' => false,
    'siteName' => 'Octo Docs',
    'siteDescription' => 'Start a web!',
    'githubUrl' => 'https://github.com/a2insights/octo-core',

    // Algolia DocSearch credentials
    'docsearchApiKey' => '4b06adfa27bf30162ef0475642fe638e',
    'docsearchIndexName' => 'docs',

    // navigation menu
    'navigation' => require_once('navigation.php'),

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
