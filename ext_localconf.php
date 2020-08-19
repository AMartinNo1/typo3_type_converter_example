<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'AMartinNo1.Typo3TypeConverterExample',
    'Example',
    [
        'Example' => 'show',
    ],
    // non-cacheable actions
    [
        'Example' => 'show',
    ]
);