<?php 
$GLOBALS['TYPO3_CONF_VARS']['EXT']['news']['classes']['Domain/Model/News'][] = 'amt_feed_importer';

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['AMT\\AmtFeedImporter\\Task\\RSS2ImportTask'] = array(
	
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:amt_feed_importer.rss2_task.name',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:amt_feed_importer.rss2_task.description',
	'additionalFields' => 'AMT\\AmtFeedImporter\\Task\\RSS2FeedAdditionalFieldProvider'
	
);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['AMT\\AmtFeedImporter\\Task\\AtomImportTask'] = array(
	
	'extension' => $_EXTKEY,
	'title' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:amt_feed_importer.atom_task.name',
	'description' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.xlf:amt_feed_importer.atom_task.description',
	'additionalFields' => 'AMT\\AmtFeedImporter\\Task\\AtomFeedAdditionalFieldProvider'
	
);