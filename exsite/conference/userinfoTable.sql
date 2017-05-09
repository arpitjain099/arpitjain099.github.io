-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 26, 2007 at 02:53 PM
-- Server version: 5.0.21
-- PHP Version: 5.1.4
-- 
-- Database: `iit`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `userinfo`
-- 

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) default NULL,
  `last_name` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `street` varchar(50) default NULL,
  `city` varchar(50) default NULL,
  `state` varchar(50) default NULL,
  `zip` int(20) default NULL,
  `phone` int(10) default NULL,
  `ext` int(10) default NULL,
  `fax` int(10) default NULL,
  `act_id` int(11) default NULL,
  `ticket_id` varchar(100) default NULL,
  `campus_name` varchar(30) default NULL,
  `event_attendee` char(1) default NULL,
  `google_contact` char(1) default NULL,
  `meal` char(1) default NULL,
  `trans_id` varchar(20) default NULL,
  `pay_status` varchar(20) default NULL,
  `pay_date` date default NULL,
  `country` varchar(50) default NULL,
  `company` varchar(50) default NULL,
  `title` varchar(50) default NULL,
  PRIMARY KEY  (`user_id`)
) TYPE=MyISAM AUTO_INCREMENT=53 ;
