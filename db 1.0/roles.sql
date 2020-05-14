DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `Code` int(10) NOT NULL,
  `RoleName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Permissions` text COLLATE utf8_bin NOT NULL,
  `UpdateDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'administrator', '', '2015-11-14 14:14:36');
