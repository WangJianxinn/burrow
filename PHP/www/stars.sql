/*
Navicat MySQL Data Transfer

Source Server         : jianxin
Source Server Version : 50537
Source Host           : localhost:3306
Source Database       : stars

Target Server Type    : MYSQL
Target Server Version : 50537
File Encoding         : 65001

Date: 2018-06-09 22:52:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('4', 'play');
INSERT INTO `category` VALUES ('5', 'caijing');

-- ----------------------------
-- Table structure for `contents`
-- ----------------------------
DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `contents_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `category_id` int(5) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `content` varchar(200) DEFAULT NULL,
  `publish_time` datetime DEFAULT NULL,
  `clicked` int(100) DEFAULT NULL,
  `attachment` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`contents_id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `contents_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contents
-- ----------------------------
INSERT INTO `contents` VALUES ('10', '1', '4', 'fighting', 'gogogog', '2018-06-07 07:22:48', '0', null);
INSERT INTO `contents` VALUES ('14', '1', '4', 'happy', 'happily', '2018-06-07 11:25:48', '0', null);
INSERT INTO `contents` VALUES ('15', '1', '4', 'dfdldlaj', 'adadh', '2018-06-07 14:06:39', '0', null);
INSERT INTO `contents` VALUES ('16', '1', '4', '455f', 'jianxin', '2018-06-07 14:06:47', '0', null);
INSERT INTO `contents` VALUES ('20', '1', '5', 'weather', '99999999', '2018-06-08 00:31:13', '0', null);

-- ----------------------------
-- Table structure for `review`
-- ----------------------------
DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `review_id` int(10) NOT NULL AUTO_INCREMENT,
  `contents_id` int(10) DEFAULT NULL,
  `content` text,
  `publish_time` datetime DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`review_id`),
  KEY `contents_id` (`contents_id`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`contents_id`) REFERENCES `contents` (`contents_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of review
-- ----------------------------
INSERT INTO `review` VALUES ('4', null, 'osocjlsc', '2018-06-07 13:18:50', 'checked', '127.0.0.1');
INSERT INTO `review` VALUES ('5', null, 'view', '2018-06-08 00:31:59', 'checked', '127.0.0.1');
INSERT INTO `review` VALUES ('8', null, '999', '2018-06-08 00:58:07', 'checked', '127.0.0.1');
INSERT INTO `review` VALUES ('10', null, 'r', '2018-06-08 01:04:58', 'checked', '127.0.0.1');
INSERT INTO `review` VALUES ('19', null, 'will ', '2018-06-09 14:35:53', 'checked', '127.0.0.1');
INSERT INTO `review` VALUES ('20', null, 'test', '2018-06-09 14:45:12', '1', '127.0.0.1');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `kind` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'jianxin', 'jianxin', 'female', null, null, null, null);
INSERT INTO `users` VALUES ('3', 'xiaofang', 'test', 'female', '20', '3285', 'hrb', 'juxie');
INSERT INTO `users` VALUES ('4', 'fangfang', 'fangfang', 'man', '22', '22', 'ee', 'on');
INSERT INTO `users` VALUES ('12', '15', '123', 'man', '2', '266', 'jiko', 'on');
INSERT INTO `users` VALUES ('13', 'shuai', 'shuai', 'man', '19', '155', 'jishishizheyang', 'on');
INSERT INTO `users` VALUES ('14', 'jianxinf', '5', 'man', '5', '5', '6', 'on');
INSERT INTO `users` VALUES ('15', 'test', 'test', 'woman', '5', '5', '5', 'on');
