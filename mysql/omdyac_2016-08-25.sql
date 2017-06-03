# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: aa12pb6nontr82i.czrambiqngdn.us-west-2.rds.amazonaws.com (MySQL 5.6.27-log)
# Database: omdyac
# Generation Time: 2016-08-25 06:20:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ConStuff
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ConStuff`;

CREATE TABLE `ConStuff` (
  `conid` int(11) unsigned NOT NULL,
  `TouchGroups` text NOT NULL,
  `Workshops` text NOT NULL,
  `Chaplains` text NOT NULL,
  `NightAngels` text,
  PRIMARY KEY (`conid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `ConStuff` WRITE;
/*!40000 ALTER TABLE `ConStuff` DISABLE KEYS */;

INSERT INTO `ConStuff` (`conid`, `TouchGroups`, `Workshops`, `Chaplains`, `NightAngels`)
VALUES
	(11,'Harriet Abigail Ward|Eliza Steffen|Melody MacFarland|Nic Gill|Nick Hurt|Sam Roscigno|Cavan Bonner|Joe Shmittgen|Zoe Casa','None','Maddie Farr|Lily Farr|Pete Decker|Paul Lawson|Caz Tidrick','Lydia Hyde|Caz Tidrick|Cavan Bonner|Jonah|Oliver Evans|Joe Schmittgen|Pete Decker|Maddie Farr|Nick Hurt|TBD|Aaron Bowie|TBD'),
	(14,'Melody MacFarland|Cavan bonner|Abigail Ward|Mason McCloud|Leah Jacobs|Eliza Steffen|Zoey Casa|Nick Hurt|Drake Barr|Dalin Frantz|Maddie Farr|Florida Domanski','Unschooling with Abigail Harriet Ward and her mother|Music and Society with Leah Jacobs, Mason McCloud, and Jessica Woods|Permaculture with Tom Gibson and Shaker Heights Church|Riot Grrls with Melody MacFarland|DIY Clothing with Melody MacFarland and Maddie Farr|Outdoor Games with Drake Barr, Pete Decker, and Aaron Bowie|Nerd Culture with Harriet Abigail Ward and Cavan Bonner|Worship Planning with Oliver Evans\r','Jessica Wood|Claire Gill|Pete Decker|Sam Roscigno','Cavan Bonner|Abigail Ward|Aaron Bowie|Nick Hurt|TBD|TBD|Mason McCloud|JEssica Wood|Emma Merchant|Zoey Casa|Drake Barr|TBD'),
	(9,'Harriet Ward|Nick Hurt|Melody MacFarland|Cavan Bonner|Tommy Sullivan|Pete Decker|Judah Hyde|Nic Gill|Amihan Tindongan|Lydia Hyde|Sydney Dunnet|Cecilia Phillips|Dalin Frantz|Eliza Steffen','Girl Hate with Abby Ward, Melody MacFarland, and Eliza Steffen|\nCompliment Notes with Aaron Bowie and Nick Hurt|\nRegional Con with Oliver Evans and Dalin Frantz|\nVirtual Confidence with Brian|\nDude Hate with Judah Hyde and Caz Tidrick|\nOutdoor Games with Ryan Rowe and Joe Schmittgen|\nRedonk Nervousness with Lily Farr and Eliza Steffen','Caz|Ryan|Oliver|Lily|Maddie','Claire Gill|Aaron Bowie|Caz Tidrick|Lydia Hyde|TBD|TBD|Lily Farr|Melody MacFarland|Josh Ward|Cavan Bonner|TBD|TBD'),
	(10,'Nic Gill|Abby Ward|Cecilia Phillips|Nick Hurt|Claire Gill|Eliza Steffen|Cavan Bonner|Jonathon|Sydney Dunnett|Noah Casino|Noah Frantz|Sam Ross|Zoey Casa|Rachel Kunz','Mirrormask with Aaron Bowie|\nCarniculture with Judah Hyde|\nCreepy Carnivals with Abby Ward and Wesley|\nCarnival Costumes with Melody MacFarland and Abby Ward|\nOutdoor Games with Joey Marfy and Ryan Rowe|\nFestivals Around The World with Cecilia Phillips and Paul Lawson|\nWorship Planning with Oliver Evans and Judah Hyde|\nCarnival Roleplaying (DnD) with Cavan Bonner, Nic Gill & Jonathon|\nCard Games with Nick Hurt','Caz|Ryan|Gus|Joan|Kristen|Lily','Caz Tidrick|Lydia Hyde|Aaron Bowie|Eliza Steffen|TBD|Katie Epperson|Oliver Evans|Lily Farr|Cecilia Phillips|Cavan Bonner|TBD|TBD');

/*!40000 ALTER TABLE `ConStuff` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `FirstName` varchar(9) DEFAULT NULL,
  `LastName` varchar(10) DEFAULT NULL,
  `Email` varchar(28) DEFAULT NULL,
  `Position` varchar(47) DEFAULT NULL,
  `Phone` varchar(12) DEFAULT NULL,
  `orig` varchar(28) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`FirstName`, `LastName`, `Email`, `Position`, `Phone`, `orig`)
VALUES
	('Jack','Decker','JackD@omdyac.org','Co-Chair','------------','address@email.com'),
	('Rain','Maxwell','RainM@omdyac.org','Co-Chair','------------','address@email.com'),
	('Devon','Lawson','dedeir@live.com','Co-Chair','------------','address@email.com'),
	('Chloe','Piepho','chloep@omdyac.org','Co-Chair','------------','address@email.com'),
	('Ryan','Rowe','webmaster@omdyac.org','Touch Group Coordinator','------------','address@email.com'),
	('Aaron','Bowie','boraja.bowie@yahoo.com','Touch Group Coordinator','------------','address@email.com'),
	('Judah','Hyde','supremenerd@yahoo.com','Worship Coordinator','------------','address@email.com'),
	('Oliver','Evans','OliverE@omdyac.org','Worship Coordinator','------------','address@email.com'),
	('Joey','Marfy','ipwn58@gmail.com','DJ','------------','address@email.com'),
	('Christina','Hermann','bluecat@oh.rr.com','Adult Co-chair','------------','address@email.com'),
	('Linda','McNabb','LindaM@omdyac.org','Adult Co-chair','------------','address@email.com'),
	('David','Gill','drdavegill@sbcglobal.net','Adult Co-Chair','------------','address@email.com'),
	('Eliza','Steffen','esteffen451@gmail.com','Secretary','------------','address@email.com'),
	('Chloe','Lawson','ChloeL@omdyac.org','District Liaison/OMD Board Youth Representative','------------','address@email.com'),
	('Melody','MacFarland','Social Action Co-Chair','Social Action Coordinator','------------','address@email.com'),
	('Lydia','Hyde','dsmax789@gmail.com','Junior High/Morale Liaison','------------','address@email.com'),
	('Cavan','Bonner','cavan@mindspring.com','Junior High/Morale Liaison','------------','address@email.com'),
	('Claire','Gill','chairebear07077@gmail.com','Junior High/Morale Liaison','------------','address@email.com'),
	('Lindsay','Adams','lindsay@the-adams-family.net','Junior High/Morale Liaison','------------','address@email.com'),
	('Paul','Lawson','paulsystemengineer@gmail.com','Adult Co-Chair','------------','address@email.com'),
	('Dalin','Frantz','DalinF@omdyac.org','OMD Board Liaison','------------','address@email.com'),
	('Danieh','Foltz','danileigh98@hotmail.com','Social Action Coordinator','------------','address@email.com'),
	('Aaron','Bowie','boraja.boie@yahoo.com','Social Action Coordinator','------------','address@email.com'),
	('Eliza','Steffen','esteffen451@gmail.com','Junior High/Morale Liaison','------------','address@email.com'),
	('Caz','Tidrick','caz1996@gmail.com','Head Chaplain','------------','address@email.com');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table documents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(65) DEFAULT NULL,
  `Description` text,
  `Link` varchar(255) DEFAULT NULL,
  `con` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;

INSERT INTO `documents` (`id`, `Name`, `Description`, `Link`, `con`)
VALUES
	(1,'About YAC','A PDF document desribing what the YAC is all about','AboutYAC.pdf',0),
	(12,'Sponsor Congressional Approval','<b>All</b> sponsors at YAC cons <u>must</u> complete and submit this form annually in order to be a con sponsor','Sponsor Congressional Approval.pdf',1),
	(3,'YAC Sponsor Con Form','The forms that must be signed in order to be a con sponsor','YAC Adult Con.pdf',1),
	(4,'YAC Adult Meeting Form','The forms that must be signed in order to be a YAC meeting sponsor','YAC Adult Meeting.pdf',1),
	(5,'YAC Youth Con Form','The forms that must be signed in order to attend a cons','YAC Youth Con.pdf',1),
	(6,'YAC Youth Meeting Form','The forms that must be signed in order to attend a YAC meeting','YAC Youth Meeting.pdf',1),
	(7,'First Time Attendee','A little information anyone who hasn\'t been to a con before should read.','First Time Attendee.pdf',0),
	(14,'YAC Bylaws','The YAC bylaws. Last updated 8/18/13','OMD YAC Bylaws.pdf',0),
	(9,'OMD YAC Executive Policies','YAC Executive Policies','OMD YAC Executive Policies.pdf',0),
	(10,'About Yac Cons','A PDF document describing what cons are all about','AboutYACCons.pdf',0),
	(16,'Culture Con-nection Offsite Form','This form is required for all SAC attendees wishing to participate in any offsite activities.','Culture Con-nection Offsite Form.pdf',1);

/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table Events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Events`;

CREATE TABLE `Events` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL DEFAULT '',
  `Type` tinytext,
  `Description` text NOT NULL,
  `StartDate` int(11) unsigned NOT NULL,
  `EndDate` int(11) unsigned NOT NULL,
  `AdultLink` tinytext,
  `YouthLink` tinytext,
  `MapLink` text,
  `Location` text,
  `YouthForms` tinytext NOT NULL,
  `AdultForms` tinytext NOT NULL,
  `YacMeeting` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `Events` WRITE;
/*!40000 ALTER TABLE `Events` DISABLE KEYS */;

INSERT INTO `Events` (`id`, `Title`, `Type`, `Description`, `StartDate`, `EndDate`, `AdultLink`, `YouthLink`, `MapLink`, `Location`, `YouthForms`, `AdultForms`, `YacMeeting`)
VALUES
	(9,'I think I <b>Con</b>','Sr. High Con','<font color=\"#FF0000\">All adults who wish to sponsor at this con <u>must</u> fill out and submit <a href=\"/work/omdyac/documents/Sponsor Congressional Approval.pdf\">this form</a></font>\n\n<p>Come and join us for the first OMD YAC event of the 2013-2014 school year at I Think I Con!</p>\n\n- Fee: $25 (Family discount available, check the forms.)<br/>\n- Age(s): 9th grade to 19 years old (<b>7th & 8th graders attending must have signed up for a job at the yac meeting.</b>)<br/>\n- TRA: TBD',1382742000,1382882400,'','','https://www.google.com/maps?sll=40.3765189,-80.0508739&sspn=0.12240947597922047,0.3296723197543989&t=m&q=First+Unitarian+Church,+605+Morewood+Ave,+Pittsburgh,+PA+15213&dg=opt&ie=UTF8&hq=First+Unitarian+Church,&hnear=605+Morewood+Ave,+Pittsburgh,+Allegheny,+Pennsylvania+15213&z=16&vpsrc=0&cid=4551530044388016656&iwloc=A','First UU Church of Pittsburgh, Pittsburgh, PA','5','3|12',0),
	(8,'Summer YAC 2013!','YAC Meeting','<p>Come help kick off the new season of OMD YAC events, we\'ll be planning the Junior and Senior High Conferences<br />\r\n\r\nAs with other YAC Meetings, this is a business meeting and a planning meeting. So attend if you want to help, not just to hang out with friends.</p>\r\n\r\n- Fee: $25 (Family discount available, check the forms.)<br />\r\n- Age(s): 7th grade to 19 years old.<br />\r\n- Restrictions: Must have previously attended a con/yac meeting before.',1376694000,1376834400,'','','http://g.co/maps/yq8ed','UU Church of the South Hills, Pittsburgh, PA','6','4',1),
	(10,'<b>Con</b>ival','Jr. High Con','<font color=\"#FF0000\">All youth who wish to participate in the offsite activity at this con <u>must</u> fill out and have at the con <a href=\"/work/omdyac/documents/Conival Offsite Form.pdf\">this form</a></font>\n\n<p>Join us for the second OMD YAC Con of the 2013-2014 school year, CONival!</p>\n\n-Fee: $25 (Family discount available, check the forms.)<br/>\n- Age(s): 7th grade-9th grade (<b>10th graders - 19 year olds attending must have signed up for a job at the Summer YAC meeting.</b>)<br />\n- TRA: TBD',1384560000,1384700400,'','','https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=+First+Unitarian-Universalist+Church+of+Youngstown&aq=&sll=40.365277,-82.669252&sspn=5.900512,11.634521&vpsrc=0&t=h&ie=UTF8&hq=&hnear=&ll=41.115508,-80.645056&spn=0.011397,0.022724&z=16&iwloc=A&cid=17806639337289727633','First UU Church of Youngstown','5','3|12',0),
	(11,'Culture Con-nection','SAC','<font color=\"#FF0000\">All adults who wish to sponsor at this con <u>must</u> fill out and submit <a href=\"/work/omdyac/documents/Sponsor Congressional Approval.pdf\">this form</a></font>\n\n<p>Come one come all to the annual YAC Social Action Con!<br />\nOnce a year we have a conference (con) dedicated to social action, workshops, discussions, themes, all dedicated to helping people in the world and our local communities. During the con, with pre-signed parental permission slips, everyone can participate in an offsite activity. <br /><br />This con is a working con, which means everyone who attends should do so if they are not only willing to work, but want to participate in social action.This page will be updated with more info as soon as SAC YAC happens.\n<br /><br />\nThis con is coordinated by our lovely Social Action Coordinator, Melody MacFarland in cooperation with Danieh Leigh</p>\n\n-Fee: $25 (Family discount available, check the forms.)<br/>\n- Age(s): 7th grade-19 years old<br />\n- TRA: TBD\n- Offisite: TBD',1394838000,1394978400,'','','https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=UU+Congregation,+Erie,+PA&sll=40.365277,-82.669252&sspn=5.900512,11.634521&vpsrc=0&t=h&ie=UTF8&hq=&hnear=&ll=42.077091,-80.048189&spn=0.011228,0.022724&z=16&iwloc=A&cid=3175451611640972230','UU Congregation, Erie, PA','5|16','3|12',0),
	(13,'Spring YAC','YAC Meeting','<p>Join in planning the last con of the school year, the all ages con!</p>\n\nAs with other YAC Meetings, this is a business meeting and a planning meeting. So attend if you want to help, not just to hang out with friends.</p>\r\n\r\n- Fee: $10 (Family discount available, check the forms.)<br />\r\n- Age(s): 7th grade to 19 years old.<br />\r\n- Restrictions: Must have previously attended a con/yac meeting before.',1397257200,1397311200,'','','https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=UU+Church+of+Kent,+OH&sll=40.365277,-82.669252&sspn=5.900512,11.634521&vpsrc=0&t=h&ie=UTF8&hq=&hnear=&ll=41.156718,-81.360476&spn=0.01139,0.022724&z=16&iwloc=A&cid=11140149715542770825','UU Church of Kent, OH','6','4',1),
	(12,'SAC YAC','YAC Meeting','<p>Join us at SAC YAC to help us plan this years Social Action Con!</p>\n\nAs with other YAC Meetings, this is a business meeting and a planning meeting. So attend if you want to help, not just to hang out with friends.</p>\r\n\r\n- Fee: $10 (Family discount available, check the forms.)<br />\r\n- Age(s): 7th grade to 19 years old.<br />\r\n- Restrictions: Must have previously attended a con/yac meeting before.',1390608000,1390662000,'','','https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=UU+Fellowship+of+Wayne+County,+Wooster,+OH&aq=&sll=40.365277,-82.669252&sspn=5.900512,11.634521&vpsrc=0&t=h&ie=UTF8&hq=&hnear=&z=16&iwloc=A&cid=8862988472054202351','UU Fellowship of Wayne County, Wooster, OH','6','4',1),
	(14,'CONterculture','Spring Con','<font color=\"#FF0000\">All adults who wish to sponsor at this con <u>must</u> fill out and submit <a href=\"/work/omdyac/documents/Sponsor Congressional Approval.pdf\">this form</a></font>\n\n<p>Kick off the almost start of summer at Spring Con! The theme for this year is counterculture.</p>\n\n-Fee: $25 (Family discount available, check the forms.)<br/>\n- Age(s): 7th grade-19 years old<br />\n- TRA: Zine making with Melody MacFarland',1400281200,1400421600,'','','https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=First+Unitarian+Church+of+Cleveland,+Shaker+Heights,+OH&aq=&sll=40.365277,-82.669252&sspn=5.900512,11.634521&vpsrc=0&t=h&ie=UTF8&hq=&hnear=&z=16&iwloc=A&cid=5326237765620794847','First Unitarian Church of Cleveland, Shaker Heights, OH','5','3|12',0),
	(15,'Summer YAC 1','YAC Meeting','Summer YAC is going to be a tad different this year because we have so much to talk about on top of planning two cons and electing leadership.<br /><br />\nThis is the first of two Summer YACs we\'ll be having this year, the administrative meeting. We will be continuing the discussion started at Spring Con and thinking of solutions as well as possibly holding elections. This may change depending on which meeting is going to have a higher turnout. At one of the meetings, to be decided, we are also going to have a leadership training for potential night angels, touch group leaders, and the newly elected leadership officials.\n',1407538800,1407711600,'','','https://goo.gl/maps/91cHJ','First UU Church of Columbus, Columbus, OH','6','4',1),
	(16,'Summer YAC 2','YAC Meeting','Summer YAC is going to be a tad different this year because we have so much to talk about on top of planning two cons and electing leadership.<br /><br />\nThis is the second of two Summer YACs we\'ll be having this year, the planning meeting. We will be planning junior and senior high con and doing other random summer YAC things like possibly making a con cookbook. At one of the meetings, to be decided, we are also going to have a leadership training for potential night angels, touch group leaders, and the newly elected leadership officials.\n',1408748400,1408921200,'','','https://goo.gl/maps/ChnFR','UU Fellowship of Wayne County, Wooster, OH','6','4',1);

/*!40000 ALTER TABLE `Events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(65) DEFAULT NULL,
  `Desc` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;

INSERT INTO `jobs` (`id`, `Name`, `Desc`)
VALUES
	(8,'Co-Chair','A multiple person position replacing and combining that of Con Dean and Communications Co-chair. The Co-Chairs will be left to split up responsibilities amongst themselves. Said responsibilities include running, setting up, and organizing cons and YAC meetings, working with the youth, contacting host churches, sending out YAC newsletters, determining con dates, requisitioning/distributing con funds, etc.'),
	(7,'Touch Group Coordinator','Enforces the jobs given to Touch Groups, runs Touch Group Leader training workshops at every other con or so, organizes leaders for Touch Groups from volunteers, provides ice breaker games and ideas for Touch Groups, visits Touch Groups while in session to help keep things running smoothly and to offer advice when asked, and any other extra tasks involving Touch Groups.'),
	(4,'Fuud Duude','Takes care of dietary needs/organizing food and involved matters with host church and sends out food money, getting a more diverse meal regiment set up, and making sure there is always some kind of snack available for anyone that wants it at cons and YAC meetings.'),
	(3,'District Liaison/OMD Board Youth Representative','Shows up at the OMD meetings and delegates for the UU Youth and YAC community amongst the adults.'),
	(5,'Junior High/Morale Liaison','Seeks out newcomers and involves them, measures atmosphere at con, and tries explicitly to make con enjoyable for newcomers and con goers in general.'),
	(9,'Webmaster','Takes care of YAC website management, facebook group management, registration set up on site, editing contact information, posting bylaw revisions, and putting files up on the website.'),
	(6,'Policy Coordinator','Defines terms, roles, ideas, etc. at YAC meetings for the reference or need of others.'),
	(2,'Adult Co-chair','Takes care of internal affairs/any legal issues that may arise, take calls from parents and youth, act as consultants, work with the youth leaders to coordinate cons, take care of rule infractions at all hours, etc.'),
	(1,'Adult Chaplain','Confidential consultants at con for emotional support or generally venting to and act as mediators, much like the youth chaplains.');

/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table minutes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `minutes`;

CREATE TABLE `minutes` (
  `Name` varchar(65) DEFAULT NULL,
  `Link` varchar(65) DEFAULT NULL,
  `Year` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `minutes` WRITE;
/*!40000 ALTER TABLE `minutes` DISABLE KEYS */;

INSERT INTO `minutes` (`Name`, `Link`, `Year`)
VALUES
	('Summer YAC Meeting','Summer YAC 2011.pdf',2011),
	('NeonCon Post-Con Meeting','NeonCon Post-Con Meeting 2011.pdf',2011),
	('FantastiCon Post-Con Meeting','FantastiCon Post-Con Meeting 2011.pdf',2011),
	('SAC YAC','SAC YAC 2012.pdf',2012),
	('SAC Post-Con Meeting','SAC Post-Con Meeting 2012.pdf',2012),
	('Spring YAC Meeting','Spring YAC 2012.pdf',2012),
	('SophistiCon Post-Con Meeting','SophistiCon Post-Con Meeting 2012.pdf',2012),
	('Summer YAC Meeting','Summer YAC 2012.pdf',2012),
	('Conster Post-Con Meeting','Conster Post-Con Meeting 2012.pdf',2012),
	('Game Con Post-Con Meeting','Game Con Post-Con Meeting 2012.pdf',2012),
	('SAC YAC','SAC YAC 2013.pdf',2013),
	('SAC Post-Con Meeting','SAC Post-Con Meeting 2013.pdf',2013),
	('Spring YAC Meeting','Spring YAC 2013.pdf',2013),
	('Conquest Post-Con Meeting','Conquest Post-Con Meeting 2013.pdf',2013),
	('Summer YAC Meeting','Summer YAC 2013.pdf',2013),
	('I Think I Con Post-Con Meeting','I Think I Con Post-Con Meeting 2013.pdf',2013),
	('CONival Post-Con Meeting','CONival Post-Con Meeting 2013.pdf',2013),
	('SAC YAC','SAC YAC 2014.pdf',2014),
	('Spring YAC','Spring YAC 2014.pdf',2014),
	('SAC Post-Con Meeting','SAC Post-Con Meeting 2014.pdf',2014),
	('CONterculture Post-Con Meeting','CONterculture Post-Con Meeting 2014.pdf',2014);

/*!40000 ALTER TABLE `minutes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table socialaction
# ------------------------------------------------------------

DROP TABLE IF EXISTS `socialaction`;

CREATE TABLE `socialaction` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Title` tinytext,
  `Content` mediumtext,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `socialaction` WRITE;
/*!40000 ALTER TABLE `socialaction` DISABLE KEYS */;

INSERT INTO `socialaction` (`id`, `Title`, `Content`, `date`)
VALUES
	(6,'2012 SAC Speaker Bio: Diego Espino','Diego I. Espino is the Community Education Manager at Planned Parenthood of Central Ohio, Planned Parenthood of Northwest Ohio, and Planned Parenthood of Southeast Ohio. Diego manages an education department that serves more than 12,000 participants per year in Ohio. As part of his role there, Diego provides regular trainings for professionals and parents/foster parents/guardians on a wide range of subjects. Diego began working for Planned Parenthood in 2004. Diego serves on the advisory board of the Sexual Assault Resource Network of Central Ohio (SARNCO) and the Ohio Domestic Violence Network?s Project Connect Steering Committee.',1331956800),
	(7,'2012 SAC Speaker Bio: Elaine Schleiffer','Originally from Gahanna, I am a full-time worker and full-time activist. I split my time between the occupy movement, the Move to Amend Central Ohio chapter, and the Reproductive Rights Advocates of Columbus. ',1331956800),
	(1,'2012 SAC Speaker: Elaine Schleiffer','Will Klatt and Elaine Schleiffer are from Occupy Columbus. They talked to us about Occupy\'s goals and mission, and had us discuss our ideas and thoughts about how we can become involved in social action, how to discuss politics, and how we can help make the world a better place',1331956800),
	(2,'2012 SAC Speaker: Diego Espino','Diego Espino is the Community Education Manager at Planned Parenthood of Central Ohio, Planned Parenthood of Northwest Ohio, and Planned Parenthood of Southeast Ohio. He talked to us about Planned Parenthood, politics, sexual health, and how we can get involved in our communities to help raise awareness and support Planned Parenthood.',1331956800),
	(4,'2012 YAC Off Site: Full Grade Soil Cooperative','Full Circle Soil is a local food production, distribution, and educational cooperative. They work to help the community become more sustainable and healthy through year-round local food production, distribution and education.<br /><br />\n\nAt full circle soil, we worked with compost and tilling the soil as well as planting sprouts!',1331956800),
	(5,'2012 YAC Off Site: Faith Mission Homeless Shelter','Faith Mission is a shelter for homeless men and women in the Columbus community. The agency provides shelter, food and clothing, while helping individuals with access to long term solutions such as housing, employment assistance, medical, dental and vision care, counseling and support groups.<br /><br />\n\nAt Faith Mission, we did a neighborhood clean-up and filled up 24 trash bags!',1331956800);

/*!40000 ALTER TABLE `socialaction` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
