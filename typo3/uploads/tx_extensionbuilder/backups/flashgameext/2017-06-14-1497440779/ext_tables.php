<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FlashGameExt.Flashgameext',
            'Frontendflashgame',
            'frontendFlashGame'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('flashgameext', 'Configuration/TypoScript', 'Flash Game Ext');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_flashgameext_domain_model_game', 'EXT:flashgameext/Resources/Private/Language/locallang_csh_tx_flashgameext_domain_model_game.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_flashgameext_domain_model_game');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_flashgameext_domain_model_user', 'EXT:flashgameext/Resources/Private/Language/locallang_csh_tx_flashgameext_domain_model_user.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_flashgameext_domain_model_user');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_flashgameext_domain_model_post', 'EXT:flashgameext/Resources/Private/Language/locallang_csh_tx_flashgameext_domain_model_post.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_flashgameext_domain_model_post');

    }
);
