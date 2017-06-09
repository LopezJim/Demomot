#
# Table structure for table &#039;tx_etmlcontact_domain_model_perso&#039;
#
CREATE TABLE tx_etmlcontact_domain_model_perso (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT &#039;0&#039; NOT NULL,

	name varchar(255) DEFAULT &#039;&#039; NOT NULL,
	data date DEFAULT &#039;0000-00-00&#039;,
	adad int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,

	tstamp int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	crdate int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	cruser_id int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	deleted tinyint(4) unsigned DEFAULT &#039;0&#039; NOT NULL,
	hidden tinyint(4) unsigned DEFAULT &#039;0&#039; NOT NULL,
	starttime int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	endtime int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,

	t3ver_oid int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_id int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_wsid int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_label varchar(255) DEFAULT &#039;&#039; NOT NULL,
	t3ver_state tinyint(4) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_stage int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_count int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_tstamp int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_move_id int(11) DEFAULT &#039;0&#039; NOT NULL,

	sys_language_uid int(11) DEFAULT &#039;0&#039; NOT NULL,
	l10n_parent int(11) DEFAULT &#039;0&#039; NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table &#039;tx_etmlcontact_domain_model_category&#039;
#
CREATE TABLE tx_etmlcontact_domain_model_category (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT &#039;0&#039; NOT NULL,

	perso int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,

	name varchar(255) DEFAULT &#039;&#039; NOT NULL,

	tstamp int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	crdate int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	cruser_id int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	deleted tinyint(4) unsigned DEFAULT &#039;0&#039; NOT NULL,
	hidden tinyint(4) unsigned DEFAULT &#039;0&#039; NOT NULL,
	starttime int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,
	endtime int(11) unsigned DEFAULT &#039;0&#039; NOT NULL,

	t3ver_oid int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_id int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_wsid int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_label varchar(255) DEFAULT &#039;&#039; NOT NULL,
	t3ver_state tinyint(4) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_stage int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_count int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_tstamp int(11) DEFAULT &#039;0&#039; NOT NULL,
	t3ver_move_id int(11) DEFAULT &#039;0&#039; NOT NULL,

	sys_language_uid int(11) DEFAULT &#039;0&#039; NOT NULL,
	l10n_parent int(11) DEFAULT &#039;0&#039; NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_etmlcontact_domain_model_category'
#
CREATE TABLE tx_etmlcontact_domain_model_category (

	perso int(11) unsigned DEFAULT '0' NOT NULL,

);
