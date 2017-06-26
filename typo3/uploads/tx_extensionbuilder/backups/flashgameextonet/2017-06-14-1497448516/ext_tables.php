<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FlashGameExtOneT.Flashgameextonet',
            'Frontendflashgameonet',
            'frontendFlashGameOneT'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('flashgameextonet', 'Configuration/TypoScript', 'Flash Game Ext One T');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_flashgameextonet_domain_model_game', 'EXT:flashgameextonet/Resources/Private/Language/locallang_csh_tx_flashgameextonet_domain_model_game.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_flashgameextonet_domain_model_game');

    }
);
