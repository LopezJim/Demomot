<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Etml.EtmlContact',
            'Ada',
            'aad'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'etml_contact');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_etmlcontact_domain_model_perso', 'EXT:etml_contact/Resources/Private/Language/locallang_csh_tx_etmlcontact_domain_model_perso.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_etmlcontact_domain_model_perso');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_etmlcontact_domain_model_category', 'EXT:etml_contact/Resources/Private/Language/locallang_csh_tx_etmlcontact_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_etmlcontact_domain_model_category');

    },
    $_EXTKEY
);
