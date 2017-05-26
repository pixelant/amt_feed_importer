<?php
$languageFile = 'LLL:EXT:amt_feed_importer/Resources/Private/Language/locallang_db.xlf:';

$GLOBALS['TCA']['tx_amtfeedimporter_domain_model_feed'] = array(
	'ctrl' => array(
		'title' => $languageFile . 'tx_amtfeedimporter_domain_model_feed',
		'label' => 'name',
		'type' => 'type',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name, feed_url, author, author_email,',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('amt_feed_importer') .  'ext_icon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'hidden, name, type, feed_url, target_folder, news_type, 
			override_edited_news, hide_imported_news, categories, author, author_email, news_language, custom_mapping, social_feed',
	),
	'types' => array(
		'1' => array('showitem' => 'name, type, feed_url, target_folder, news_type, news_language, override_edited_news, hide_imported_news, 
			--div--;LLL:EXT:amt_feed_importer/Resources/Private/Language/locallang_ttc.xlf:tabs.defaults, categories, author, author_email,
			--div--;LLL:EXT:amt_feed_importer/Resources/Private/Language/locallang_ttc.xlf:tabs.additional, custom_mapping, social_feed,
			--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, hidden, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_amtfeedimporter_domain_model_feed',
				'foreign_table_where' => 'AND tx_amtfeedimporter_domain_model_feed.pid=###CURRENT_PID### AND tx_amtfeedimporter_domain_model_feed.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'name' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.name',
			'config' => array(
				'type' => 'input',
				'eval' => 'trim'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array($languageFile . 'tx_amtfeedimporter_domain_model_feed.type.I.0', 0),
					array($languageFile . 'tx_amtfeedimporter_domain_model_feed.type.I.1', 1),
				),
				'size' => 1,
				'maxitems' => 1,
			),
		),
		'feed_url' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.feed_url',
			'config' => array(
				'type' => 'input',
				'eval' => 'trim,required'
			),
		),
		'target_folder' => array(
			'exclude' => 1,
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.target_folder',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'pages',
				'size' => 1
			),
		),
		'news_type' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.news_type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.0', 0),
					array('LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1', 1),
					array('LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.2', 2),
				),
				'size' => 1,
				'maxitems' => 1,
			),
		),
		'override_edited_news' => array(
			'exclude' => 1,
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.override_edited_news',
			'config' => array(
				'type' => 'check',
			),
		),
		'hide_imported_news' => array(
			'exclude' => 1,
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.hide_imported_news',
			'config' => array(
				'type' => 'check',
			),
		),
		'author' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.author',
			'config' => array(
				'type' => 'input',
				'eval' => 'trim'
			),
		),
		'author_email' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.author_email',
			'config' => array(
				'type' => 'input',
				'eval' => 'trim'
			),
		),
		'news_language' => array(
			'exclude' => 1,
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.news_language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'custom_mapping' => array(
			'exclude' => 1,
			'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.custom_mapping',
			'config' => array(
				'type' => 'text',
				'cols' => '30',
				'rows' => '10'
			),
		),
        'social_feed' => array(
            'exclude' => 1,
            'label' => $languageFile . 'tx_amtfeedimporter_domain_model_feed.social_feed',
            'config' => array(
                'type' => 'check',
                'default' => 0,
            ),
        ),
	),
);