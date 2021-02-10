<?php

/***************************************************************
 * Made by Simon Köhler @ simon-koehler.com
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Font Awesome Icon',
    'description' => 'Adds a Font Awesome icon selector to every page',
    'category' => 'plugin',
    'author' => 'Simon Köhler',
    'author_email' => 'info@simon-koehler.com',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.4.99',
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
