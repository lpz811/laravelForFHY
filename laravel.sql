/*
Navicat MySQL Data Transfer

Source Server         : homestead
Source Server Version : 50711
Source Host           : localhost:33060
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-09-13 22:34:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_super_admin` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admin', 'admin@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '1', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('2', 'aaaaa', 'aaaaa@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('3', 'bbbbb', 'bbbbb@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('4', 'ccccc', 'ccccc@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('5', 'ddddd', 'ddddd@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('6', 'eeeee', 'eeeee@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('7', 'fffff', 'fffff@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('8', 'ggggg', 'ggggg@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('9', 'hhhhh', 'hhhhh@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('10', 'iiiii', 'iiiii@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_09_09_065517_create_admins_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_super_admin` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '1', 'vYtRangRETbMWYLTJSvbQk3XUgYlgEOK1PV3JcmVoqn9d0LOGd7mZ5LuY8wr', '2016-09-09 20:49:16', '2016-09-09 13:07:40');
