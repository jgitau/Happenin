<?php
/*
This file is for you to connect to the user sql database 
To Setup the table execute this SQL Query


CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(5) NOT NULL AUTO_INCREMENT,
  `userid` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `location` varchar(35) NOT NULL,
  `time` varchar(50) NOT NULL,
  `score` int(5) NOT NULL,
  PRIMARY KEY (`post_id`)
  ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
*/

$user="root"; //Set SQL ADMIN user. root is the default
$password="robot"; // Set as your SQL Admin Password
$dbname="happenning";// This is the Database Name
if(!mysql_connect("localhost",$user,$password))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db($dbname))
{
	die('oops database selection problem ! --> '.mysql_error());
}




?>