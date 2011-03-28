
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
	PRIMARY KEY (`id`),
	INDEX `audio_file_FI_1` (`user_id`),
	CONSTRAINT `audio_file_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
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
	PRIMARY KEY (`id`),
	INDEX `blog_FI_1` (`user_id`),
	CONSTRAINT `blog_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
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
	PRIMARY KEY (`id`),
	INDEX `chat_line_FI_1` (`user_id`),
	CONSTRAINT `chat_line_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
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
	PRIMARY KEY (`id`),
	INDEX `email_FI_1` (`user_from_id`),
	CONSTRAINT `email_FK_1`
		FOREIGN KEY (`user_from_id`)
		REFERENCES `user` (`id`),
	INDEX `email_FI_2` (`user_to_id`),
	CONSTRAINT `email_FK_2`
		FOREIGN KEY (`user_to_id`)
		REFERENCES `user` (`id`)
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
	PRIMARY KEY (`id`),
	INDEX `friend_FI_1` (`user1_id`),
	CONSTRAINT `friend_FK_1`
		FOREIGN KEY (`user1_id`)
		REFERENCES `user` (`id`),
	INDEX `friend_FI_2` (`user2_id`),
	CONSTRAINT `friend_FK_2`
		FOREIGN KEY (`user2_id`)
		REFERENCES `user` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- note
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `note`;


CREATE TABLE `note`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`text` TEXT  NOT NULL,
	`created_date` DATETIME  NOT NULL,
	`modified_date` DATETIME  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `note_FI_1` (`user_id`),
	CONSTRAINT `note_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
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
	PRIMARY KEY (`id`),
	INDEX `picture_FI_1` (`user_id`),
	CONSTRAINT `picture_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- ostatus_site
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ostatus_site`;


CREATE TABLE `ostatus_site`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`fullname` VARCHAR(50)  NOT NULL,
	`shortname` VARCHAR(30)  NOT NULL,
	`consumer_key` VARCHAR(255)  NOT NULL,
	`consumer_secret` VARCHAR(255)  NOT NULL,
	`site_url` VARCHAR(255)  NOT NULL,
	`request_token_url` VARCHAR(255)  NOT NULL,
	`access_token_url` VARCHAR(255)  NOT NULL,
	`authorize_url` VARCHAR(255)  NOT NULL,
	`update_url` VARCHAR(255)  NOT NULL,
	`update_param` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

#-----------------------------------------------------------------------------
#-- ostatus_user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ostatus_user`;


CREATE TABLE `ostatus_user`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER  NOT NULL,
	`site_id` INTEGER  NOT NULL,
	`request_token` VARCHAR(255)  NOT NULL,
	`access_token` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `ostatus_user_FI_1` (`user_id`),
	CONSTRAINT `ostatus_user_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`),
	INDEX `ostatus_user_FI_2` (`site_id`),
	CONSTRAINT `ostatus_user_FK_2`
		FOREIGN KEY (`site_id`)
		REFERENCES `ostatus_site` (`id`)
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
	PRIMARY KEY (`id`),
	INDEX `video_file_FI_1` (`user_id`),
	CONSTRAINT `video_file_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
