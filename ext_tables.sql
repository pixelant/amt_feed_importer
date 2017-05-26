#
# Table structure for table 'tx_amtfeedimporter_domain_model_feed'
#
CREATE TABLE tx_amtfeedimporter_domain_model_feed (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name tinytext,
	type int(11) DEFAULT '0' NOT NULL,
	feed_url tinytext,
	target_folder int(11) DEFAULT '0' NOT NULL,
	news_type varchar(100) NOT NULL DEFAULT '0',
	override_edited_news tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hide_imported_news tinyint(4) unsigned DEFAULT '0' NOT NULL,
	categories int(11) DEFAULT '0' NOT NULL,
	author tinytext,
	author_email tinytext,
	news_language int(11) DEFAULT '0' NOT NULL,
	custom_mapping text,
	social_feed tinyint(4) unsigned DEFAULT '0' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 	KEY language (l10n_parent,sys_language_uid)

);

#
# Extend table structure of table 'tx_news_domain_model_news'
#
CREATE TABLE tx_news_domain_model_news (
	
	amt_feedimporter_guid tinytext,
	amt_feedimporter_was_edited tinyint(4) unsigned DEFAULT '0' NOT NULL

);
