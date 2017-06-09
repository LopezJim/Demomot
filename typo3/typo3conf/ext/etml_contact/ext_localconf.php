<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Etml.EtmlContact',
            'Ada',
            [
                'Perso' => 'list, show, new, create, edit, update, delete',
                'Category' => 'list, show, new, create, edit, update, delete, '
            ],
            // non-cacheable actions
            [
                'Perso' => 'create, update, delete',
                'Category' => 'create, update, delete, '
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					ada {
						icon = &#039; . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . &#039;Resources/Public/Icons/user_plugin_ada.svg
						title = LLL:EXT:etml_contact/Resources/Private/Language/locallang_db.xlf:tx_etml_contact_domain_model_ada
						description = LLL:EXT:etml_contact/Resources/Private/Language/locallang_db.xlf:tx_etml_contact_domain_model_ada.description
						tt_content_defValues {
							CType = list
							list_type = etmlcontact_ada
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
