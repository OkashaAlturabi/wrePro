DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Code` int(10) NOT NULL AUTO_INCREMENT,
  `DepartmentCode` int(11) NOT NULL,
  `RoleCode` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PhotoURL` varchar(255) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `ActivationCode` varchar(100) NOT NULL,
  `UserStatus` varchar(10) NOT NULL,
  `LastLoginDateTime` datetime NOT NULL,
  `LastSeen` datetime NOT NULL,
  `LoginTimes` int(11) NOT NULL DEFAULT '0',
  `InsertDateTime` datetime NOT NULL,
  `UpdateDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '1', '1', 'Administrator', '', 'admin', '4a7d1ed414474e4033ac29ccb8653d9b', '01234567890', 'm7mdbook@hotmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '001', '2016-04-06 12:25:15', '0000-00-00 00:00:00', '0', '2015-12-24 12:50:01', '2018-10-22 02:18:28');
