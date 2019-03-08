/*
Navicat MySQL Data Transfer

Source Server         : jianxin
Source Server Version : 50537
Source Host           : localhost:3306
Source Database       : user

Target Server Type    : MYSQL
Target Server Version : 50537
File Encoding         : 65001

Date: 2017-12-01 22:27:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `new_user`
-- ----------------------------
DROP TABLE IF EXISTS `new_user`;
CREATE TABLE `new_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of new_user
-- ----------------------------
INSERT INTO `new_user` VALUES ('sun', 'sun', 'sun@qq.com', '13274589632');
INSERT INTO `new_user` VALUES ('zhao', 'zhao', 'zhao@qq.com', '13948868522');
INSERT INTO `new_user` VALUES ('景天', 'xian-jian', 'zhao@qq.com', '18346464646');
INSERT INTO `new_user` VALUES ('林殊', 'lang-ya', 'sun@qq.com', '13945699696');
INSERT INTO `new_user` VALUES ('盼兮', 'mu-yun', 'pan@qq.com', '18634343434');
