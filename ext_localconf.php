<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {
        $icons = [
            'faicon' => 'EXT:faicon/Resources/Public/Icons/icon.svg',
        ];

        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        foreach ($icons as $identifier => $path) {
            $iconRegistry->registerIcon(
                $identifier,
                \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
                ['source' => $path]
            );
        }

        // Add TypoScript Constants
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
            "@import 'EXT:faicon/Configuration/TypoScript/constants.typoscript'"
        );

        // Add TypoScript Setup
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
            "@import 'EXT:faicon/Configuration/TypoScript/setup.typoscript'"
        );

    }
);
