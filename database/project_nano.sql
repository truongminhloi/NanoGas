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

 Date: 10/03/2021 08:39:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gift
-- ----------------------------
DROP TABLE IF EXISTS `gift`;
CREATE TABLE `gift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `gift_category_id` int(11) NOT NULL,
  `visible` tinyint(255) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gift
-- ----------------------------
BEGIN;
INSERT INTO `gift` VALUES (1, 'Bếp gas mini', '/images/gift1.jpg', 1, 1);
INSERT INTO `gift` VALUES (2, 'Bếp đôi', '/images/gift2.jpg', 1, 1);
INSERT INTO `gift` VALUES (3, 'Bộ chén dĩa', '/images/gift3.jpg', 2, 1);
INSERT INTO `gift` VALUES (4, 'Nước tương', '/images/gift4.jpg', 3, 1);
INSERT INTO `gift` VALUES (5, 'Bột ngọt', '/images/gift5.jpg', 3, 1);
INSERT INTO `gift` VALUES (6, 'Dầu ăn', '/images/gift6.jpg', 3, 1);
COMMIT;

-- ----------------------------
-- Table structure for gift_category
-- ----------------------------
DROP TABLE IF EXISTS `gift_category`;
CREATE TABLE `gift_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `visible` tinyint(255) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gift_category
-- ----------------------------
BEGIN;
INSERT INTO `gift_category` VALUES (1, 'BẾP GAS', 1);
INSERT INTO `gift_category` VALUES (2, 'ĐỒ DÙNG GIA ĐÌNH', 1);
INSERT INTO `gift_category` VALUES (3, 'GIA VỊ', 1);
COMMIT;

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
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
BEGIN;
INSERT INTO `product` VALUES (1, 'EIF gas', 'Đỏ', 'Thép', 15, 290000.00, 1, '/images/gallery-img1.jpg');
INSERT INTO `product` VALUES (2, 'LP Petrol', 'Đỏ', 'Composit', 13, 320000.00, 1, '/images/gallery-img2.jpg');
INSERT INTO `product` VALUES (3, 'Petrol Limex', 'Đỏ', 'Composit', 13, 320000.00, 1, '/images/gallery-img3.jpg');
INSERT INTO `product` VALUES (4, 'Nam Gas', 'Đỏ', 'Composit', 13, 320000.00, 1, '/images/gallery-img4.jpg');
INSERT INTO `product` VALUES (5, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, 320000.00, 1, '/images/gallery-img5.jpg');
INSERT INTO `product` VALUES (6, 'Nam Gas', 'Đỏ', 'Composit', 13, 320000.00, 1, '/images/gallery-img6.jpg');
INSERT INTO `product` VALUES (7, 'Thủ Đức Gas', 'Đỏ', 'Composit', 13, 320000.00, 1, '/images/favicon.jpg');
COMMIT;

-- ----------------------------
-- Table structure for store
-- ----------------------------
DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `visible` tinyint(255) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of store
-- ----------------------------
BEGIN;
INSERT INTO `store` VALUES (1, 'Cửa Hàng Số 1', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '010-0230-040', 1);
INSERT INTO `store` VALUES (2, 'Cửa Hàng Số 2', '268 Lý Thường Kiệt, P.14, Quận 10, TP.HCM', '	010-0230-040', 1);
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
