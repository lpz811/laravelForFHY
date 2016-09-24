/*
Navicat MySQL Data Transfer

Source Server         : homestead
Source Server Version : 50711
Source Host           : localhost:33060
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-09-24 21:12:22
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for action_permission
-- ----------------------------
DROP TABLE IF EXISTS `action_permission`;
CREATE TABLE `action_permission` (
  `action_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`action_id`),
  KEY `action_permission_action_id_foreign` (`action_id`),
  CONSTRAINT `action_permission_action_id_foreign` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `action_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of action_permission
-- ----------------------------

-- ----------------------------
-- Table structure for actions
-- ----------------------------
DROP TABLE IF EXISTS `actions`;
CREATE TABLE `actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '操作分组',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '操作名称',
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '操作路由',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '操作描述',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '菜单排序',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否禁用',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of actions
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', 'admin', 'admin@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '1', '', '2016-05-19 09:52:51', '2016-06-27 09:06:34');
INSERT INTO `admins` VALUES ('2', 'aaaaa', 'aaaaa@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('3', 'bbbbb', 'bbbbb@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('4', 'ccccc', 'ccccc@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('5', 'ddddd', 'ddddd@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('6', 'eeeee', 'eeeee@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('7', 'fffff', 'fffff@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('8', 'ggggg', 'ggggg@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('9', 'hhhhh', 'hhhhh@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('10', 'iiiii', 'iiiii@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('12', '22222', '22222@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('13', '33333', '33333@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('14', '44444', '44444@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('15', '55555', '55555@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('16', '66666', '66666@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('17', '77777', '77777@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('18', '88888', '88888@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('19', '99999', '99999@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('20', '202020', '202020@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('21', '212121', '212121@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('23', '232323', '232323@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('24', '242424', '242424@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('27', '272727', '272727@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('28', '282828', '282828@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('29', '292929', '292929@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('30', '303030', '303030@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('31', '313131', '313131@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');
INSERT INTO `admins` VALUES ('32', '323232', '323232@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '0', '', '2016-09-08 20:56:58', '2016-09-09 20:57:01');

-- ----------------------------
-- Table structure for menu_permission
-- ----------------------------
DROP TABLE IF EXISTS `menu_permission`;
CREATE TABLE `menu_permission` (
  `menu_id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`menu_id`),
  KEY `menu_permission_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_permission_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `menu_permission_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu_permission
-- ----------------------------

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '父级菜单ID',
  `data_id` smallint(6) NOT NULL DEFAULT '0' COMMENT '下级分类ID',
  `icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单图标',
  `icon_close` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单关闭时图标',
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单名称',
  `route` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单路由',
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '菜单描述',
  `tab_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '打开的Navtab的ID',
  `data_fresh` tinyint(1) NOT NULL COMMENT '点击Navtab时是否重载',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '菜单排序',
  `hide` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '0', '0', 'star-o', 'star-o', 'ui.system.group', 'backend.system', '系统配置', 'systemgroup', '0', '1', '0', '2016-09-07 17:37:16', '2016-09-07 17:37:24');
INSERT INTO `menus` VALUES ('2', '1', '1', 'folder-open-o', 'folder-o', 'ui.menu.group', 'backend.menu', '菜单管理', 'menugroup', '0', '2', '0', '2016-09-07 17:46:50', '2016-09-07 17:46:53');
INSERT INTO `menus` VALUES ('3', '2', '11', 'caret-right', '#', 'ui.menu.list', 'backend.menu.index', '菜单列表', 'menuslist', '1', '3', '0', '2016-09-07 17:49:18', '2016-09-07 17:49:21');
INSERT INTO `menus` VALUES ('4', '2', '12', 'fa fa-edit', '#', 'ui.menu.edit', 'backend.menu.edit', '菜单编辑', 'menuedit', '1', '4', '1', '2016-09-07 15:00:45', '2016-09-07 15:00:50');
INSERT INTO `menus` VALUES ('5', '2', '13', 'fa fa-plus', '#', 'ui.menu.create', 'backend.menu.add', '新增菜单', 'menuadd', '1', '5', '1', '2016-09-07 15:08:30', '2016-09-07 15:08:34');
INSERT INTO `menus` VALUES ('6', '2', '14', 'star-o', 'star-o', 'ui.menu.dd', 'backend.menu.dd', 'dd', 'menudd', '1', '6', '1', '2016-09-24 12:21:28', '2016-09-24 12:21:28');

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
INSERT INTO `migrations` VALUES ('2016_09_18_074344_entrust_setup_tables', '1');
INSERT INTO `migrations` VALUES ('2016_09_18_080114_create_menus_table', '1');
INSERT INTO `migrations` VALUES ('2016_09_18_081530_create_actions_table', '1');
INSERT INTO `migrations` VALUES ('2016_09_18_081733_create_action_permission_table', '1');
INSERT INTO `migrations` VALUES ('2016_09_18_082441_create_menu_permission_table', '1');

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
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'all.menus.visible', 'menu', '全部菜单可见', '全部菜单可见', '2016-06-14 11:53:36', '2016-06-14 13:41:58');
INSERT INTO `permissions` VALUES ('2', 'all.actions.available', 'action', '所有操作权限', '所有操作权限', '2016-06-15 16:34:26', '2016-06-15 16:34:26');
INSERT INTO `permissions` VALUES ('3', 'management.menu.visible', 'menu', '菜单管理页面可见', '菜单管理页面可见', '2016-06-20 14:07:13', '2016-06-20 14:07:13');
INSERT INTO `permissions` VALUES ('4', 'management.permission.visible', 'menu', '权限管理页面可见', '权限管理页面可见', '2016-06-21 11:55:27', '2016-06-21 12:19:55');

-- ----------------------------
-- Table structure for role_admin
-- ----------------------------
DROP TABLE IF EXISTS `role_admin`;
CREATE TABLE `role_admin` (
  `admin_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`admin_id`,`role_id`),
  KEY `role_admin_role_id_foreign` (`role_id`),
  CONSTRAINT `role_admin_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_admin_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_admin
-- ----------------------------
INSERT INTO `role_admin` VALUES ('1', '3');
INSERT INTO `role_admin` VALUES ('1', '4');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin1', '超级管理员1', '拥有最高权限1', '2016-09-07 08:38:49', '2016-09-19 03:29:05');
INSERT INTO `roles` VALUES ('2', 'admin', '超级管理员', '拥有最高权限', '2016-09-07 08:38:49', '2016-09-19 03:27:51');
INSERT INTO `roles` VALUES ('3', 'role', '角色管理员', '角色管理', '2016-09-07 08:38:49', '2016-09-19 07:54:39');
INSERT INTO `roles` VALUES ('4', 'editor-web', '网站编辑员', '具有网站的文章编辑权限', '2016-09-19 08:09:12', '2016-09-19 08:09:12');
INSERT INTO `roles` VALUES ('5', 'web-editor', '你发开始', '护发空间划分空间啊', '2016-09-19 09:30:57', '2016-09-19 09:30:57');
INSERT INTO `roles` VALUES ('6', 'sds', '发顺丰', '该发生的故事', '2016-09-19 09:31:09', '2016-09-19 09:31:09');
INSERT INTO `roles` VALUES ('7', 'ddd', '南方大厦', '感受感受', '2016-09-19 09:31:25', '2016-09-19 09:31:25');
INSERT INTO `roles` VALUES ('8', 'admin2', '站点站点', '经过考虑时间过了时间', '2016-09-20 07:23:59', '2016-09-20 08:57:34');
INSERT INTO `roles` VALUES ('9', '人人人人如果', '感受感受1111', '干啥干啥干啥的', '2016-09-20 09:01:42', '2016-09-20 09:10:40');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
