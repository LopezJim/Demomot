<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FlashGameExtOneT.Flashgameextonet',
            'Frontendflashgameext',
            [
                'Game' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'Game' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    frontendflashgameext {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('flashgameextonet') . 'Resources/Public/Icons/user_plugin_frontendflashgameext.svg
                        title = LLL:EXT:flashgameextonet/Resources/Private/Language/locallang_db.xlf:tx_flashgameextonet_domain_model_frontendflashgameext
                        description = LLL:EXT:flashgameextonet/Resources/Private/Language/locallang_db.xlf:tx_flashgameextonet_domain_model_frontendflashgameext.description
                        tt_content_defValues {
                            CType = list
                            list_type = flashgameextonet_frontendflashgameext
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
