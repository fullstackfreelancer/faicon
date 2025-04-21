<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Font Awesome Icon',
    'description' => 'Provides Font Awesome Icons for the TYPO3 page settings in the backend, and Icons for the Bootstrap Package in the frontend.',
    'category' => 'plugin',
    'author' => 'Simon Köhler',
    'author_email' => 'simon@kohlercode.com',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-13.4.99',
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
