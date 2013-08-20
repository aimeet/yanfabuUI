/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50529
 Source Host           : localhost
 Source Database       : newPage

 Target Server Type    : MySQL
 Target Server Version : 50529
 File Encoding         : utf-8

 Date: 07/01/2013 09:35:48 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `add_delete_black`
-- ----------------------------
DROP TABLE IF EXISTS `add_delete_black`;
CREATE TABLE `add_delete_black` (
  `id` int(5) NOT NULL,
  `name` text,
  `introduce` text,
  `style` text,
  `atten` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `add_delete_black`
-- ----------------------------
BEGIN;
INSERT INTO `add_delete_black` VALUES ('1', '陈晓军', '一句话介绍，IT夜盲', '屏蔽通知', '0'), ('2', '王威', '一句话介绍', '屏蔽邀请', '0'), ('3', '吴海斌', '一句话介绍', '屏蔽邀请', '1'), ('4', '段祺瑞', '一句话介绍', '屏蔽通知', '0'), ('5', '陆乐乐', '一句话介绍', '屏蔽通知', '1'), ('6', '小段', '一句话介绍', '屏蔽通知', '1');
COMMIT;

-- ----------------------------
--  Table structure for `add_delete_vitae`
-- ----------------------------
DROP TABLE IF EXISTS `add_delete_vitae`;
CREATE TABLE `add_delete_vitae` (
  `id` int(11) DEFAULT NULL,
  `company` text,
  `vitae` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `add_delete_vitae`
-- ----------------------------
BEGIN;
INSERT INTO `add_delete_vitae` VALUES (null, '海基盛元', '软件工程师'), (null, '海基', 'CAD工程师'), (null, '海基', '编辑'), (null, '111', '1111'), (null, 'sss', 'sss');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
