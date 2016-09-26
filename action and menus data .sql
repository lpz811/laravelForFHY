/*
Navicat MySQL Data Transfer

Source Server         : Homestead
Source Server Version : 50712
Source Host           : 192.168.10.10:33060
Source Database       : laravel

Target Server Type    : MYSQL
Target Server Version : 50712
File Encoding         : 65001

Date: 2016-09-26 17:17:19
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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of actions
-- ----------------------------
INSERT INTO `actions` VALUES ('1', 'menu', '保存菜单', 'App\\Http\\Controllers\\Backend\\MenuController@store', '保存菜单', '1', '1', '2016-09-07 16:31:09', '2016-09-07 16:31:12');
INSERT INTO `actions` VALUES ('2', 'menu', '显示菜单', 'App\\Http\\Controllers\\Backend\\MenuController@show', '显示菜单', '2', '1', '2016-09-07 16:35:16', '2016-09-07 16:35:20');
INSERT INTO `actions` VALUES ('3', 'menu', '修改菜单', 'App\\Http\\Controllers\\Backend\\MenuController@update', '修改菜单', '3', '1', '2016-09-07 16:35:09', '2016-09-07 16:35:13');
INSERT INTO `actions` VALUES ('4', 'menu', '删除菜单', 'App\\Http\\Controllers\\Backend\\MenuController@destroy', '删除菜单', '4', '1', '2016-09-07 16:35:55', '2016-09-07 16:35:58');
INSERT INTO `actions` VALUES ('5', 'menu', '删除所选菜单', 'App\\Http\\Controllers\\Backend\\MenuController@selectdelete', '删除所选菜单', '5', '1', '2016-09-07 16:37:36', '2016-09-07 16:37:40');
INSERT INTO `actions` VALUES ('6', 'admin', '保存用户', 'App\\Http\\Controllers\\Backend\\RoleController@store', '保存用户', '6', '1', '2016-09-07 16:41:09', '2016-09-07 16:41:12');
INSERT INTO `actions` VALUES ('7', 'admin', '显示用户', 'App\\Http\\Controllers\\Backend\\RoleController@show', '显示用户', '7', '1', '2016-09-07 16:45:16', '2016-09-07 16:45:20');
INSERT INTO `actions` VALUES ('8', 'admin', '修改用户', 'App\\Http\\Controllers\\Backend\\RoleController@update', '修改用户', '8', '1', '2016-09-07 16:45:09', '2016-09-07 16:45:13');
INSERT INTO `actions` VALUES ('9', 'admin', '删除用户', 'App\\Http\\Controllers\\Backend\\RoleController@destroy', '删除用户', '9', '1', '2016-09-07 16:45:55', '2016-09-07 16:45:58');
INSERT INTO `actions` VALUES ('10', 'admin', '删除所选用户', 'App\\Http\\Controllers\\Backend\\RoleController@selectdelete', '删除所选用户', '10', '1', '2016-09-07 16:47:36', '2016-09-07 16:47:40');
INSERT INTO `actions` VALUES ('11', 'role', '角色关联权限', 'App\\Http\\Controllers\\Backend\\RoleController@associatePermission', '角色关联权限', '11', '1', '2016-09-07 16:42:27', '2016-09-07 16:42:31');
INSERT INTO `actions` VALUES ('12', 'role', '保存角色', 'App\\Http\\Controllers\\Backend\\RoleController@store', '保存角色', '12', '1', '2016-09-07 16:43:25', '2016-09-07 16:43:28');
INSERT INTO `actions` VALUES ('13', 'role', '显示角色', 'App\\Http\\Controllers\\Backend\\RoleController@show', '显示角色', '13', '1', '2016-09-07 16:46:39', '2016-09-07 16:46:42');
INSERT INTO `actions` VALUES ('14', 'role', '修改角色', 'App\\Http\\Controllers\\Backend\\RoleController@update', '修改角色', '14', '1', '2016-09-07 16:47:35', '2016-09-07 16:47:39');
INSERT INTO `actions` VALUES ('15', 'role', '删除角色', 'App\\Http\\Controllers\\Backend\\RoleController@destroy', '删除角色', '15', '1', '2016-09-07 16:48:29', '2016-09-07 16:48:33');
INSERT INTO `actions` VALUES ('16', 'role', '删除所选角色', 'App\\Http\\Controllers\\Backend\\RoleController@selectdelete', '删除所选角色', '16', '1', '2016-09-07 16:49:20', '2016-09-07 16:49:24');
INSERT INTO `actions` VALUES ('17', 'permission', '权限关联菜单', 'App\\Http\\Controllers\\Backend\\PermissionController@associateMenus', '权限关联菜单', '17', '1', '2016-09-07 16:50:17', '2016-09-07 16:50:20');
INSERT INTO `actions` VALUES ('18', 'permission', '权限关联操作', 'App\\Http\\Controllers\\Backend\\PermissionController@associateActions', '权限关联操作', '18', '1', '2016-09-07 16:51:01', '2016-09-07 16:51:03');
INSERT INTO `actions` VALUES ('19', 'permission', '保存权限', 'App\\Http\\Controllers\\Backend\\PermissionController@store', '保存权限', '19', '1', '2016-09-07 16:51:35', '2016-09-07 16:51:39');
INSERT INTO `actions` VALUES ('20', 'permission', '显示权限', 'App\\Http\\Controllers\\Backend\\PermissionController@show', '显示权限', '20', '1', '2016-09-07 16:52:15', '2016-09-07 16:52:18');
INSERT INTO `actions` VALUES ('21', 'permission', '修改权限', 'App\\Http\\Controllers\\Backend\\PermissionController@update', '修改权限', '21', '1', '2016-09-07 16:52:53', '2016-09-07 16:52:56');
INSERT INTO `actions` VALUES ('22', 'permission', '删除权限', 'App\\Http\\Controllers\\Backend\\PermissionController@destroy', '删除权限', '22', '1', '2016-09-07 16:53:45', '2016-09-07 16:53:48');
INSERT INTO `actions` VALUES ('23', 'permission', '删除所选权限', 'App\\Http\\Controllers\\Backend\\PermissionController@selectdelete', '删除所选权限', '23', '1', '2016-09-07 16:54:47', '2016-09-07 16:54:50');
INSERT INTO `actions` VALUES ('24', 'action', '保存操作', 'App\\Http\\Controllers\\Backend\\ActionController@store', '保存操作', '24', '1', '2016-09-07 16:55:27', '2016-09-07 16:55:30');
INSERT INTO `actions` VALUES ('25', 'action', '显示操作', 'App\\Http\\Controllers\\Backend\\ActionController@show', '显示操作', '25', '1', '2016-09-07 16:57:57', '2016-09-07 16:58:00');
INSERT INTO `actions` VALUES ('26', 'action', '修改操作', 'App\\Http\\Controllers\\Backend\\ActionController@update', '修改操作', '26', '1', '2016-09-07 16:58:56', '2016-09-07 16:58:59');
INSERT INTO `actions` VALUES ('27', 'action', '删除操作', 'App\\Http\\Controllers\\Backend\\ActionController@destory', '删除操作', '27', '1', '2016-09-07 16:59:41', '2016-09-07 16:59:44');
INSERT INTO `actions` VALUES ('28', 'action', '删除所选操作', 'App\\Http\\Controllers\\Backend\\ActionController@selectdelete', '删除所选操作', '28', '1', '2016-09-07 17:00:34', '2016-09-07 17:00:37');

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
  `data_pid` smallint(6) NOT NULL DEFAULT '0' COMMENT 'DATA_PID',
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('1', '0', '0', '0', 'star-o', 'star-o', 'ui.system.group', 'backend.system', '系统配置', '#', '0', '1', '0', '2016-09-07 17:37:16', '2016-09-07 17:37:24');
INSERT INTO `menus` VALUES ('2', '1', '1', '0', 'folder-open-o', 'folder-o', 'ui.menu.group', 'backend.menu', '菜单管理', '#', '0', '1', '0', '2016-09-07 17:46:50', '2016-09-07 17:46:53');
INSERT INTO `menus` VALUES ('3', '2', '11', '1', 'fa fa-list', 'fa fa-list', 'ui.menu.list', 'backend.menu.index', '菜单列表', 'menuslist', '1', '1', '0', '2016-09-07 17:49:18', '2016-09-07 17:49:21');
INSERT INTO `menus` VALUES ('4', '2', '0', '1', 'fa fa-edit', 'fa fa-edit', 'ui.menu.edit', 'backend.menu.edit', '菜单编辑', 'menuedit', '1', '2', '1', '2016-09-07 15:00:45', '2016-09-07 15:00:50');
INSERT INTO `menus` VALUES ('5', '2', '0', '1', 'fa fa-create', 'fa fa-create', 'ui.menu.create', 'backend.menu.create', '新增菜单', 'menuadd', '1', '3', '1', '2016-09-07 15:08:30', '2016-09-07 15:08:34');
INSERT INTO `menus` VALUES ('6', '1', '2', '0', 'fa fa-user', 'fa fa-user', 'ui.admin.group', 'backend.admin', '用户管理', 'adminslist', '1', '2', '0', '2016-09-07 15:02:44', '2016-09-07 15:02:48');
INSERT INTO `menus` VALUES ('7', '6', '21', '2', 'fa fa-list', 'fa fa-list', 'ui.admin.list', 'backend.admin.index', '用户列表', 'adminslist', '1', '1', '0', '2016-09-07 15:07:06', '2016-09-07 15:07:09');
INSERT INTO `menus` VALUES ('8', '6', '0', '2', 'fa fa-list', 'fa fa-list', 'ui.admin.create', 'backend.admin.create', '新增用户', 'adminadd', '1', '2', '1', '2016-09-07 15:10:01', '2016-09-07 15:10:04');
INSERT INTO `menus` VALUES ('9', '6', '0', '2', 'fa fa-edit', 'fa fa-edit', 'ui.admin.edit', 'backend.admin.edit', '编辑用户', 'adminedit', '1', '3', '1', '2016-09-07 15:15:23', '2016-09-07 15:15:27');
INSERT INTO `menus` VALUES ('10', '1', '3', '0', 'fa -fa-user', 'fa fa-user', 'ui.role.group', 'backend.role', '角色管理', 'roleslist', '1', '3', '0', '2016-09-07 15:40:24', '2016-09-07 15:40:27');
INSERT INTO `menus` VALUES ('11', '10', '31', '3', 'fa fa-list', 'fa fa-list', 'ui.role.list', 'backend.role.index', '角色列表', 'rolelist', '1', '1', '0', '2016-09-07 15:42:26', '2016-09-07 15:42:30');
INSERT INTO `menus` VALUES ('12', '10', '0', '3', 'fa fa-add', 'fa fa-add', 'ui.role.create', 'backend.role.create', '新增角色', 'roleadd', '1', '2', '1', '2016-09-07 15:46:45', '2016-09-07 15:46:42');
INSERT INTO `menus` VALUES ('13', '10', '0', '3', 'fa fa-edit', 'fa fa-edit', 'ui.role.edit', 'backend.role.edit', '角色编辑', 'roleedit', '1', '3', '1', '2016-09-07 15:52:34', '2016-09-07 15:52:38');
INSERT INTO `menus` VALUES ('14', '10', '0', '3', 'fa fa-asso', 'fa fa-asso', 'ui.role.permission', 'backend.role.permission', '角色关联权限', 'roleasso', '1', '4', '1', '2016-09-07 15:56:00', '2016-09-07 15:56:03');
INSERT INTO `menus` VALUES ('15', '1', '4', '0', 'fa fa-check', 'fa fa-check', 'ui.permission.group', 'backend.permission', '权限管理', 'permissionslist', '1', '4', '0', '2016-09-07 15:58:36', '2016-09-07 15:58:40');
INSERT INTO `menus` VALUES ('16', '15', '41', '4', 'fa fa-list', 'fa fa-list', 'ui.permission.list', 'backend.permission.index', '权限列表', 'permisssionlist', '1', '1', '0', '2016-09-07 16:00:46', '2016-09-07 16:00:49');
INSERT INTO `menus` VALUES ('17', '15', '0', '4', 'fa fa-plus', 'fa fa-plus', 'ui.permission.create', 'backend.permission.create', '新增权限', 'permissionadd', '1', '2', '1', '2016-09-07 16:02:53', '2016-09-07 16:02:57');
INSERT INTO `menus` VALUES ('18', '15', '0', '4', 'fa fa-edit', 'fa fa-edit', 'ui.permission.edit', 'backend.permission.edit', '编辑权限', 'permissionedit', '1', '3', '1', '2016-09-07 16:06:32', '2016-09-07 16:06:36');
INSERT INTO `menus` VALUES ('19', '15', '0', '4', 'fa fa-assoc', 'fa fa-assoc', 'ui.permission.associate', 'backend.permission.associate', '关联权限', 'permissionassoc', '1', '4', '1', '2016-09-07 16:08:26', '2016-09-07 16:08:30');
INSERT INTO `menus` VALUES ('20', '1', '5', '0', 'fa -fa-keyboard-o', 'fa -fa keyboard-o', 'ui.action.group', 'backend.action', '操作管理', 'actionslist', '1', '5', '0', '2016-09-07 16:14:39', '2016-09-07 16:14:43');
INSERT INTO `menus` VALUES ('21', '20', '51', '5', 'fa fa-plus', 'fa fa-plus', 'ui.action.list', 'backend.action.list', '操作列表', 'actionlist', '1', '1', '0', '2016-09-07 16:17:25', '2016-09-07 16:17:29');
INSERT INTO `menus` VALUES ('22', '20', '0', '5', 'fa fa-create', 'fa fa-create', 'ui.action.create', 'backend.action.create', '新增操作', 'actionadd', '1', '2', '1', '2016-09-07 16:19:06', '2016-09-07 16:19:09');
INSERT INTO `menus` VALUES ('23', '20', '0', '5', 'fa fa-edit', 'fa fa-edit', 'ui.action.edit', 'backend.action.edit', '操作编辑', 'actionedit', '1', '2', '1', '2016-09-07 16:20:14', '2016-09-07 16:20:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'all.menus.visible', 'menu', '全部菜单可见', '全部菜单可见', '2016-06-14 11:53:36', '2016-06-14 13:41:58');
INSERT INTO `permissions` VALUES ('2', 'all.actions.available', 'action', '所有操作权限', '所有操作权限', '2016-06-15 16:34:26', '2016-06-15 16:34:26');
INSERT INTO `permissions` VALUES ('3', 'management.menu.visible', 'menu', '菜单管理页面可见', '菜单管理页面可见', '2016-06-20 14:07:13', '2016-06-20 14:07:13');
INSERT INTO `permissions` VALUES ('4', 'management.permission.visible', 'menu', '权限管理页面可见', '权限管理页面可见', '2016-06-21 11:55:27', '2016-06-21 12:19:55');
INSERT INTO `permissions` VALUES ('5', 'all.menus.use', 'menu', ' 所有菜单可以用', ' 所有菜单可以用', '2016-09-25 01:23:51', '2016-09-25 01:23:51');

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
INSERT INTO `role_admin` VALUES ('3', '2');
INSERT INTO `role_admin` VALUES ('1', '3');
INSERT INTO `role_admin` VALUES ('3', '3');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'aaadmin', 'admin@qq.com', '$2y$10$THzCWaxn/DPlwFGNX6o8/uEy5kK/0AFBa8z5GBG6ApyOgEvBwxwUG', '1', 'vnjLoBsi4zCqywOa0PBtWXz9ulfBTUHbjoACRXHe3HthmA8wDQO4bPBpOQs8', '2016-05-19 09:52:51', '2016-06-27 09:06:34');
