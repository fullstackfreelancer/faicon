<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Font Awesome Icon',
    'description' => 'Provides Font Awesome icons as a new select field in the page properties, which you can then use in your Fluid templates.',
    'category' => 'plugin',
    'author' => 'Simon Köhler',
    'author_email' => 'simon@kohlercode.com',
    'author_company' => 'kohlercode.com',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '3.0.1',
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
