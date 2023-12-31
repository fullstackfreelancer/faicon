<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Font Awesome Icon',
    'description' => 'Provides Font Awesome Icons for the TYPO3 page settings in the backend, and Icons for the Bootstrap Package in the frontend.',
    'category' => 'plugin',
    'author' => 'Simon Köhler',
    'author_email' => 'info@simonkoehler.com',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
       'psr-4' => [
           'SIMONKOEHLER\\Faicon\\' => 'Classes'
        ],
    ],
];
