/*
 Navicat Premium Data Transfer

 Source Server         : mac local
 Source Server Type    : MySQL
 Source Server Version : 100508
 Source Host           : localhost:3306
 Source Schema         : project_nano

 Target Server Type    : MySQL
 Target Server Version : 100508
 File Encoding         : 65001

 Date: 07/03/2021 16:27:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
BEGIN;
INSERT INTO `product` VALUES (1, 'EIF gas', 'Đỏ', 'Thép', 15, 290000.00, 1);
INSERT INTO `product` VALUES (2, 'LP Petrol', 'Đỏ', 'Composit', 13, 320000.00, 1);
INSERT INTO `product` VALUES (3, 'Petrol Limex', 'Đỏ', 'Composit', 13, 320000.00, 1);
INSERT INTO `product` VALUES (4, 'Nam Gas', 'Đỏ', 'Composit', 13, 320000.00, 1);
INSERT INTO `product` VALUES (5, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, 320000.00, 1);
INSERT INTO `product` VALUES (6, 'Nam Gas', 'Đỏ', 'Composit', 13, 320000.00, 1);
INSERT INTO `product` VALUES (7, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, 320000.00, 1);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (3, 'Trương Minh Lợi', '123456', 'loitruongminhit@gmail.com');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
