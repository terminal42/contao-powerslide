-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_content`
-- 

CREATE TABLE `tl_content` (
  `powerslide_size` varchar(128) NOT NULL default '',
  `powerslide_orientation` varchar(16) NOT NULL default '',
  `powerslide_interval` int(6) unsigned NOT NULL default '0',
  `powerslide_speed` int(6) unsigned NOT NULL default '0',
  `powerslide_transition` varchar(8) NOT NULL default '',
  `powerslide_ease` varchar(8) NOT NULL default '',
  `powerslide_buttons` char(1) NOT NULL default '',
  `powerslide_position` char(1) NOT NULL default '',
  `powerslide_navEvent` varchar(16) NOT NULL default '',
  `powerslide_background` varchar(255) NOT NULL default '',
  `powerslide_url` varchar(255) NOT NULL default '',
  `powerslide_target` char(1) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

