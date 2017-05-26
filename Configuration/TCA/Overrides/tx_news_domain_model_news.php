<?php
$languageFile = 'LLL:EXT:amt_feed_importer/Resources/Private/Language/locallang_db.xlf:';

$additionalColumns = array(

	'amt_feedimporter_guid' => array(
	
		'displayCond' => 'FIELD:amt_feedimporter_guid:REQ:true',
		'exclude' => 1,
		'label' => $languageFile . 'tx_news_domain_model_news.amt_feedimporter_guid',
		'config' => array(
			'type' => 'input',
			'readOnly' => TRUE,
		),
			
	),
	'amt_feedimporter_was_edited' => array(
		'config' => array(
			'type' => 'passthrough'
		)
	)
		
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_news_domain_model_news', $additionalColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_news_domain_model_news', 
	'--div--;LLL:EXT:amt_feed_importer/Resources/Private/Language/locallang_ttc.xlf:tabs.feed_importer, amt_feedimporter_guid');