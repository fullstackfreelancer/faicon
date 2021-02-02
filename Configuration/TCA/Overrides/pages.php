<?php
defined('TYPO3_MODE') or die();

$configurationManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Configuration\\BackendConfigurationManager');
$extbaseFrameworkConfiguration = $configurationManager->getTypoScriptSetup();

// Configure new fields:
$fields = [
    'tx_faicon_icon' => [
        'label' => 'LLL:EXT:faicon/Resources/Private/Language/locallang_db.xlf:tx_faicon_icon',
        'exclude' => 0,
        'config' => [
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'items' => \SIMONKOEHLER\Faicon\Utility\IconUtility::iconArray($extbaseFrameworkConfiguration['plugin.']['tx_faicon.']['settings.']['jsonfile']),
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
