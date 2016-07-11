CREATE TABLE `xmcontent_content` (
  `content_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content_title` varchar(255) NOT NULL DEFAULT '',
  `content_text` text NOT NULL,
  `content_status` tinyint(1) NOT NULL DEFAULT '0',
  `content_mkeyword` text NOT NULL,
  `content_mdescription` text NOT NULL,
  `content_maindisplay` tinyint(1) NOT NULL DEFAULT '0',
  `content_weight` int(5) NOT NULL DEFAULT '0',
  `content_dopdf` tinyint(1) NOT NULL DEFAULT '0',
  `content_doprint` tinyint(1) NOT NULL DEFAULT '0',
  `content_dosocial` tinyint(1) NOT NULL DEFAULT '0',
  `content_domail` tinyint(1) NOT NULL DEFAULT '0',
  `content_dotitle` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`content_id`),
  KEY `content_title` (`content_title`),
  KEY `content_status` (`content_status`)
) ENGINE=MyISAM;