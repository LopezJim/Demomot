<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FlashGameExt.Flashgameext',
            'Frontendflashgame',
            [
                'Game' => 'list, show, new, create, edit, update, delete',
                'User' => 'list, show, new, create, edit, update, delete',
                'Post' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Game' => 'create, update, delete',
                'User' => 'create, update, delete',
                'Post' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    frontendflashgame {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('flashgameext') . 'Resources/Public/Icons/user_plugin_frontendflashgame.svg
                        title = LLL:EXT:flashgameext/Resources/Private/Language/locallang_db.xlf:tx_flashgameext_domain_model_frontendflashgame
                        description = LLL:EXT:flashgameext/Resources/Private/Language/locallang_db.xlf:tx_flashgameext_domain_model_frontendflashgame.description
                        tt_content_defValues {
                            CType = list
                            list_type = flashgameext_frontendflashgame
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
