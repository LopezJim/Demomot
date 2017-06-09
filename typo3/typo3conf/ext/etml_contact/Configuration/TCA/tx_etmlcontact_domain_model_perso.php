<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:etml_contact/Resources/Private/Language/locallang_db.xlf:tx_etmlcontact_domain_model_perso',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
		'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
		'searchFields' => 'name,data,adad',
        'iconfile' => 'EXT:etml_contact/Resources/Public/Icons/tx_etmlcontact_domain_model_perso.gif'
    ],
    'interface' => [
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, data, adad',
    ],
    'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, data, adad, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					]
				],
				'default' => 0,
			],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_etmlcontact_domain_model_perso',
                'foreign_table_where' => 'AND tx_etmlcontact_domain_model_perso.pid=###CURRENT_PID### AND tx_etmlcontact_domain_model_perso.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
		't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
		'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
		'starttime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ]
        ],
        'endtime' => [
            'exclude' => true,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
        ],
        &#039;name&#039; =&gt; [
	        &#039;exclude&#039; =&gt; true,
	        &#039;label&#039; =&gt; &#039;LLL:EXT:etml_contact/Resources/Private/Language/locallang_db.xlf:tx_etmlcontact_domain_model_perso.name&#039;,
	        &#039;config&#039; =&gt; [
			    &amp;#039;type&amp;#039; =&amp;gt; &amp;#039;input&amp;#039;,
			    &amp;#039;size&amp;#039; =&amp;gt; 30,
			    &amp;#039;eval&amp;#039; =&amp;gt; &amp;#039;trim&amp;#039;
			],
	    ],
	    &#039;data&#039; =&gt; [
	        &#039;exclude&#039; =&gt; true,
	        &#039;label&#039; =&gt; &#039;LLL:EXT:etml_contact/Resources/Private/Language/locallang_db.xlf:tx_etmlcontact_domain_model_perso.data&#039;,
	        &#039;config&#039; =&gt; [
			    &amp;#039;dbType&amp;#039; =&amp;gt; &amp;#039;date&amp;#039;,
			    &amp;#039;type&amp;#039; =&amp;gt; &amp;#039;input&amp;#039;,
			    &amp;#039;size&amp;#039; =&amp;gt; 7,
			    &amp;#039;eval&amp;#039; =&amp;gt; &amp;#039;date&amp;#039;,
			    &amp;#039;default&amp;#039; =&amp;gt; &amp;#039;0000-00-00&amp;#039;
			],
	    ],
	    &#039;adad&#039; =&gt; [
	        &#039;exclude&#039; =&gt; true,
	        &#039;label&#039; =&gt; &#039;LLL:EXT:etml_contact/Resources/Private/Language/locallang_db.xlf:tx_etmlcontact_domain_model_perso.adad&#039;,
	        &#039;config&#039; =&gt; [
			    &amp;#039;type&amp;#039; =&amp;gt; &amp;#039;inline&amp;#039;,
			    &amp;#039;foreign_table&amp;#039; =&amp;gt; &amp;#039;tx_etmlcontact_domain_model_category&amp;#039;,
			    &amp;#039;foreign_field&amp;#039; =&amp;gt; &amp;#039;perso&amp;#039;,
			    &amp;#039;maxitems&amp;#039; =&amp;gt; 9999,
			    &amp;#039;appearance&amp;#039; =&amp;gt; [
			        &amp;#039;collapseAll&amp;#039; =&amp;gt; 0,
			        &amp;#039;levelLinksPosition&amp;#039; =&amp;gt; &amp;#039;top&amp;#039;,
			        &amp;#039;showSynchronizationLink&amp;#039; =&amp;gt; 1,
			        &amp;#039;showPossibleLocalizationRecords&amp;#039; =&amp;gt; 1,
			        &amp;#039;showAllLocalizationLink&amp;#039; =&amp;gt; 1
			    ],
			],
	    ],
    ],
];
