/*
Navicat MySQL Data Transfer

Source Server         : lulunote
Source Server Version : 50537
Source Host           : localhost:3306
Source Database       : mine

Target Server Type    : MYSQL
Target Server Version : 50537
File Encoding         : 65001

Date: 2017-06-22 13:19:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `student_informations`
-- ----------------------------
DROP TABLE IF EXISTS `student_informations`;
CREATE TABLE `student_informations` (
  `s_no` varchar(10) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `s_dept` varchar(20) DEFAULT NULL,
  `s_sex` varchar(10) DEFAULT NULL,
  `s_credits` varchar(10) DEFAULT '11',
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student_informations
-- ----------------------------
INSERT INTO `student_informations` VALUES ('201501', '可--1', '计科', '女', '18');
INSERT INTO `student_informations` VALUES ('201502', '可--2', '信管', '男', '19');
INSERT INTO `student_informations` VALUES ('201503', '可--3', '电商', '女', '20');

-- ----------------------------
-- Table structure for `teach`
-- ----------------------------
DROP TABLE IF EXISTS `teach`;
CREATE TABLE `teach` (
  `t_no` varchar(10) NOT NULL,
  `s_no` varchar(10) NOT NULL,
  `subject` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`t_no`,`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teach
-- ----------------------------
INSERT INTO `teach` VALUES ('01', '201501', '数据库');
INSERT INTO `teach` VALUES ('02', '201501', '模拟电子');
INSERT INTO `teach` VALUES ('02', '201502', '模拟电子');
INSERT INTO `teach` VALUES ('03', '201503', '网页前端');

-- ----------------------------
-- Table structure for `teacher_informations`
-- ----------------------------
DROP TABLE IF EXISTS `teacher_informations`;
CREATE TABLE `teacher_informations` (
  `t_name` varchar(20) NOT NULL,
  `t_no` varchar(10) NOT NULL,
  `t_dept` varchar(20) NOT NULL,
  PRIMARY KEY (`t_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher_informations
-- ----------------------------
INSERT INTO `teacher_informations` VALUES ('幸--1', '01', '软件');
INSERT INTO `teacher_informations` VALUES ('幸--2', '02', '计科');
INSERT INTO `teacher_informations` VALUES ('幸--3', '03', '电子');
