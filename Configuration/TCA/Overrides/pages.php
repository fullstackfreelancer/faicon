<?php
defined('TYPO3') or die();

// Settings the file manually because of conflicts with old functionality and TYPO3 v12
$items = 'typo3conf/ext/faicon/Resources/Public/Libs/fontawesome-free-6.5.1-web/metadata/icons.json';

//Configure new fields:
$fields = [
    'tx_faicon_icon' => [
        'label' => 'LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon',
        'exclude' => 0,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => \SIMONKOEHLER\Faicon\Utility\IconUtility::iconArray($items),
            'maxitems' => 1
        ],
    ]
];

// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $fields);

// Make fields visible in the TCEforms:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages', // Table name
    '--palette--;LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon_pallette;tx_faicon_icon',
    // Field list to add
    '', // List of specific types to add the field list to. (If empty, all type entries are affected)
    'after:subtitle' // Insert fields before (default) or after one, or replace a field
);

// Add the new palette:
$GLOBALS['TCA']['pages']['palettes']['tx_faicon_icon'] = [
    'showitem' => 'tx_faicon_icon'
];
