
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- audio_file
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `audio_file`;


CREATE TABLE `audio_file`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`artist` VARCHAR(255),
	`album` VARCHAR(255),
	`title` VARCHAR(255),
	`track` VARCHAR(255),
	`comments` VARCHAR(255),
	`path` VARCHAR(255),
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- blog
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `blog`;


CREATE TABLE `blog`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`title` VARCHAR(255)  NOT NULL,
	`text` TEXT  NOT NULL,
	`created_date` DATETIME  NOT NULL,
	`modified_date` DATETIME  NOT NULL,
	`published_date` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- chat_line
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chat_line`;


CREATE TABLE `chat_line`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`text` VARCHAR(255)  NOT NULL,
	`date` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- email
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `email`;


CREATE TABLE `email`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_from_id` INTEGER  NOT NULL,
	`user_to_id` INTEGER  NOT NULL,
	`subject` VARCHAR(255),
	`text` TEXT  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- friend
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `friend`;


CREATE TABLE `friend`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user1_id` INTEGER  NOT NULL,
	`user2_id` INTEGER  NOT NULL,
	`friend_group_id` INTEGER  NOT NULL,
	`requested_date` DATETIME  NOT NULL,
	`confirmed_date` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- note
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `note`;


CREATE TABLE `note`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`text` TEXT  NOT NULL,
	`created_date` DATETIME  NOT NULL,
	`modified_date` DATETIME  NOT NULL,
	PRIMARY KEY (`id`,`user_id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- picture
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `picture`;


CREATE TABLE `picture`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`title` VARCHAR(255),
	`caption` TEXT(255),
	`orientation` VARCHAR(10),
	`rating` DECIMAL,
	`created_date` DATETIME  NOT NULL,
	`modified_date` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(255)  NOT NULL,
	`password` VARCHAR(255)  NOT NULL,
	`fullname` VARCHAR(255)  NOT NULL,
	`email` VARCHAR(255),
	`created_date` DATETIME  NOT NULL,
	`modified_date` DATETIME  NOT NULL,
	`last_active` DATETIME  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- video_file
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `video_file`;


CREATE TABLE `video_file`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`artist` VARCHAR(255),
	`album` VARCHAR(255),
	`title` VARCHAR(255),
	`track` VARCHAR(255),
	`comments` VARCHAR(255),
	`path` VARCHAR(255),
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
