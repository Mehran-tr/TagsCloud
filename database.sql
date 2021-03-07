-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` VALUES(1, 'Sample Title 1');
INSERT INTO `posts` VALUES(2, 'Sample Title 2');
INSERT INTO `posts` VALUES(3, 'Sample Title 3');
INSERT INTO `posts` VALUES(4, 'Sample Title 4');
INSERT INTO `posts` VALUES(5, 'Sample Title 5');
INSERT INTO `posts` VALUES(6, 'Sample Title 6');
INSERT INTO `posts` VALUES(7, 'Sample Title 7');
INSERT INTO `posts` VALUES(8, 'Sample Title 8');
INSERT INTO `posts` VALUES(9, 'Sample Title 9');
INSERT INTO `posts` VALUES(10, 'Sample Title 10');
INSERT INTO `posts` VALUES(11, 'Sample Title 11');
INSERT INTO `posts` VALUES(12, 'Sample Title 12');

-- --------------------------------------------------------

--
-- Table structure for table `posts_to_tags`
--

CREATE TABLE `posts_to_tags` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts_to_tags`
--

INSERT INTO `posts_to_tags` VALUES(1, 2);
INSERT INTO `posts_to_tags` VALUES(1, 4);
INSERT INTO `posts_to_tags` VALUES(2, 6);
INSERT INTO `posts_to_tags` VALUES(2, 4);
INSERT INTO `posts_to_tags` VALUES(3, 1);
INSERT INTO `posts_to_tags` VALUES(3, 5);
INSERT INTO `posts_to_tags` VALUES(3, 6);
INSERT INTO `posts_to_tags` VALUES(4, 2);
INSERT INTO `posts_to_tags` VALUES(5, 5);
INSERT INTO `posts_to_tags` VALUES(5, 6);
INSERT INTO `posts_to_tags` VALUES(6, 1);
INSERT INTO `posts_to_tags` VALUES(6, 3);
INSERT INTO `posts_to_tags` VALUES(7, 11);
INSERT INTO `posts_to_tags` VALUES(7, 4);
INSERT INTO `posts_to_tags` VALUES(7, 6);
INSERT INTO `posts_to_tags` VALUES(8, 10);
INSERT INTO `posts_to_tags` VALUES(9, 12);
INSERT INTO `posts_to_tags` VALUES(9, 8);
INSERT INTO `posts_to_tags` VALUES(10, 9);
INSERT INTO `posts_to_tags` VALUES(10, 7);
INSERT INTO `posts_to_tags` VALUES(11, 12);
INSERT INTO `posts_to_tags` VALUES(12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` VALUES(1, 'red');
INSERT INTO `tags` VALUES(2, 'yellow');
INSERT INTO `tags` VALUES(3, 'blue');
INSERT INTO `tags` VALUES(4, 'green');
INSERT INTO `tags` VALUES(5, 'purple');
INSERT INTO `tags` VALUES(6, 'orange');
INSERT INTO `tags` VALUES(7, 'turquoise');
INSERT INTO `tags` VALUES(8, 'black');
INSERT INTO `tags` VALUES(9, 'white');
INSERT INTO `tags` VALUES(10, 'gray');
INSERT INTO `tags` VALUES(11, 'pink');
INSERT INTO `tags` VALUES(12, 'lavender');
