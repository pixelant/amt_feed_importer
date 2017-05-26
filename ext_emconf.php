<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "amt_feed_importer".
 *
 * Auto generated | Identifier: 5823640845ed0db198b73d48878b6722
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Feed Importer',
	'description' => 'Extension to import news from feeds (e.g. RSS2, Atom, etc). Fast and simple configuration which is quite similar to configuration rss2_import',
	'category' => 'be',
	'author' => 'Krzysztof Kasprzyca',
	'author_email' => 'k.kasprzyca@amtsolution.pl',
	'state' => 'stable',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '2.0.2',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '7.6.0-7.99.99',
			'news' => '4.0.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'clearcacheonload' => false,
	'author_company' => NULL,
	'_md5_values_when_last_written' => 'a:69:{s:8:"Classes/";s:4:"d41d";s:15:"Classes/Domain/";s:4:"d41d";s:21:"Classes/Domain/Model/";s:4:"d41d";s:29:"Classes/Domain/Model/News.php";s:4:"84fd";s:29:"Classes/Domain/Model/Feed.php";s:4:"fb78";s:26:"Classes/Domain/Repository/";s:4:"d41d";s:44:"Classes/Domain/Repository/NewsRepository.php";s:4:"a818";s:44:"Classes/Domain/Repository/FeedRepository.php";s:4:"9271";s:13:"Classes/Task/";s:4:"d41d";s:48:"Classes/Task/AtomFeedAdditionalFieldProvider.php";s:4:"7347";s:31:"Classes/Task/AtomImportTask.php";s:4:"fa95";s:31:"Classes/Task/RSS2ImportTask.php";s:4:"027b";s:52:"Classes/Task/AbstractFeedAdditionalFieldProvider.php";s:4:"74df";s:48:"Classes/Task/RSS2FeedAdditionalFieldProvider.php";s:4:"7c0c";s:12:"Classes/Job/";s:4:"d41d";s:38:"Classes/Job/FeedImportJobInterface.php";s:4:"c494";s:29:"Classes/Job/AtomImportJob.php";s:4:"29e9";s:29:"Classes/Job/RSS2ImportJob.php";s:4:"09c2";s:13:"Classes/Hook/";s:4:"d41d";s:30:"Classes/Hook/TcemainProcDm.php";s:4:"87d8";s:14:"Configuration/";s:4:"d41d";s:18:"Configuration/TCA/";s:4:"d41d";s:28:"Configuration/TCA/Overrides/";s:4:"d41d";s:57:"Configuration/TCA/Overrides/tx_news_domain_model_news.php";s:4:"fc96";s:58:"Configuration/TCA/tx_amtfeedimporter_domain_model_feed.php";s:4:"ee23";s:14:"Documentation/";s:4:"d41d";s:27:"Documentation/Introduction/";s:4:"d41d";s:36:"Documentation/Introduction/Index.rst";s:4:"2e67";s:28:"Documentation/KnownProblems/";s:4:"d41d";s:37:"Documentation/KnownProblems/Index.rst";s:4:"bf46";s:23:"Documentation/Index.rst";s:4:"ace1";s:23:"Documentation/ToDoList/";s:4:"d41d";s:32:"Documentation/ToDoList/Index.rst";s:4:"3612";s:26:"Documentation/Settings.yml";s:4:"e27c";s:26:"Documentation/UsersManual/";s:4:"d41d";s:35:"Documentation/UsersManual/Index.rst";s:4:"e5c2";s:26:"Documentation/Includes.txt";s:4:"6d5f";s:26:"Documentation/Development/";s:4:"d41d";s:35:"Documentation/Development/Index.rst";s:4:"af0e";s:21:"Documentation/Images/";s:4:"d41d";s:33:"Documentation/Images/UsersManual/";s:4:"d41d";s:54:"Documentation/Images/UsersManual/FeedConfiguration.png";s:4:"eca7";s:36:"Documentation/Images/Administration/";s:4:"d41d";s:62:"Documentation/Images/Administration/ExtensionConfiguration.png";s:4:"34b2";s:20:"Documentation/_make/";s:4:"d41d";s:35:"Documentation/_make/_not_versioned/";s:4:"d41d";s:46:"Documentation/_make/_not_versioned/_.gitignore";s:4:"829c";s:28:"Documentation/_make/Makefile";s:4:"fae9";s:28:"Documentation/_make/make.bat";s:4:"0a59";s:27:"Documentation/_make/conf.py";s:4:"5cb6";s:33:"Documentation/_make/make-html.bat";s:4:"6d1c";s:24:"Documentation/ChangeLog/";s:4:"d41d";s:33:"Documentation/ChangeLog/Index.rst";s:4:"e122";s:29:"Documentation/Administration/";s:4:"d41d";s:38:"Documentation/Administration/Index.rst";s:4:"138e";s:21:"ext_conf_template.txt";s:4:"c3f2";s:12:"ext_icon.png";s:4:"c484";s:17:"ext_localconf.php";s:4:"bb8e";s:14:"ext_tables.php";s:4:"645d";s:14:"ext_tables.sql";s:4:"c3ea";s:10:"Resources/";s:4:"d41d";s:18:"Resources/Private/";s:4:"d41d";s:27:"Resources/Private/Language/";s:4:"d41d";s:44:"Resources/Private/Language/locallang_ttc.xlf";s:4:"6a62";s:40:"Resources/Private/Language/locallang.xlf";s:4:"a960";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"9af4";s:17:"Resources/Public/";s:4:"d41d";s:23:"Resources/Public/Icons/";s:4:"d41d";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";}',
);

?>