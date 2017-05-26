<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_amtfeedimporter_domain_model_feed');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::makeCategorizable(
	'amt_feed_importer',
	'tx_amtfeedimporter_domain_model_feed',
	'categories',
	array(
		'label' => 'LLL:EXT:amt_feed_importer/Resources/Private/Language/locallang_db.xml:tx_amtfeedimporter_domain_model_feed.categories',
		'exclude' => 0,
		'fieldConfiguration' => array(
			'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.title ASC',
		)
	)
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][] = 'AMT\\AmtFeedImporter\\Hook\\TcemainProcDm';