<?php
defined('TYPO3_MODE') or die();

if (TYPO3_MODE == 'BE') {
    // Adds wizard icon to the content element wizard.
    $TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_veguestbook_pi1_wizicon'] =
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'pi1/class.tx_veguestbook_pi1_wizicon.php';
}
