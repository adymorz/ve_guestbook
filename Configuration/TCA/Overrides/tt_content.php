<?php
defined('TYPO3_MODE') or die();

$TCA['tt_content']['types']['list']['subtypes_excludelist']['ve_guestbook_pi1'] = 'layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist']['ve_guestbook_pi1'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin([
    'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tt_content.list_type_pi1',
    've_guestbook_pi1'
],'list_type','ve_guestbook');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('ve_guestbook_pi1', 'FILE:EXT:ve_guestbook/Configuration/FlexForms/flexform_ds.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_veguestbook_entries');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_veguestbook_entries');
