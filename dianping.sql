/*
 Navicat Premium Data Transfer

 Source Server         : root
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : dianping

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 10/06/2019 15:03:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dialog_friend
-- ----------------------------
DROP TABLE IF EXISTS `dialog_friend`;
CREATE TABLE `dialog_friend` (
  `dialog_uid` int(8) unsigned NOT NULL,
  `dialog_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `dialog_content` varchar(255) NOT NULL,
  `dialog_link` int(11) unsigned NOT NULL,
  KEY `uname` (`dialog_uid`) USING HASH,
  KEY `time` (`dialog_time`) USING BTREE,
  KEY `dialog` (`dialog_link`),
  CONSTRAINT `dialog` FOREIGN KEY (`dialog_link`) REFERENCES `friend` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_dialog_friend_founder` FOREIGN KEY (`dialog_uid`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for dialog_group
-- ----------------------------
DROP TABLE IF EXISTS `dialog_group`;
CREATE TABLE `dialog_group` (
  `dialog_uid` int(8) unsigned NOT NULL,
  `dialog_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `dialog_content` varchar(255) NOT NULL,
  `dialog_link` int(11) unsigned NOT NULL,
  KEY `uname` (`dialog_uid`) USING HASH,
  KEY `time` (`dialog_time`) USING BTREE,
  KEY `dialog_link` (`dialog_link`),
  CONSTRAINT `fk_dialog_group_name` FOREIGN KEY (`dialog_uid`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `group_dialog` FOREIGN KEY (`dialog_link`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for favor_merchant
-- ----------------------------
DROP TABLE IF EXISTS `favor_merchant`;
CREATE TABLE `favor_merchant` (
  `favor_content_id` int(11) unsigned NOT NULL,
  `favor_uid` int(8) unsigned NOT NULL,
  PRIMARY KEY (`favor_content_id`,`favor_uid`),
  KEY `favor_merchant` (`favor_uid`) USING BTREE,
  CONSTRAINT `fk_favor_merchant` FOREIGN KEY (`favor_content_id`) REFERENCES `merchant` (`merchant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_favor_merchant_1` FOREIGN KEY (`favor_uid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for favor_schedule
-- ----------------------------
DROP TABLE IF EXISTS `favor_schedule`;
CREATE TABLE `favor_schedule` (
  `favor_content_id` int(11) unsigned NOT NULL,
  `favor_uid` int(8) unsigned NOT NULL,
  PRIMARY KEY (`favor_content_id`,`favor_uid`),
  KEY `favor_schedule` (`favor_uid`) USING BTREE,
  CONSTRAINT `fk_favor_schedule` FOREIGN KEY (`favor_content_id`) REFERENCES `schedule` (`schedule_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_favor_schedule_1` FOREIGN KEY (`favor_uid`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for friend
-- ----------------------------
DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
  `link_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid1` int(8) unsigned NOT NULL,
  `uid2` int(8) unsigned NOT NULL,
  PRIMARY KEY (`link_id`),
  KEY `uid_link1` (`uid1`),
  KEY `uid_link2` (`uid2`),
  CONSTRAINT `uid_link1` FOREIGN KEY (`uid1`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `uid_link2` FOREIGN KEY (`uid2`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for group
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `group_founder` int(8) NOT NULL,
  `group_intro` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `id` (`group_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;



-- ----------------------------
-- Table structure for member
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `group_id` int(11) unsigned NOT NULL,
  `member_id` int(8) unsigned NOT NULL,
  PRIMARY KEY (`member_id`,`group_id`) USING BTREE,
  KEY `member` (`member_id`) USING HASH,
  KEY `group` (`group_id`) USING HASH,
  CONSTRAINT `group` FOREIGN KEY (`group_id`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `member` FOREIGN KEY (`member_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for merchant
-- ----------------------------
DROP TABLE IF EXISTS `merchant`;
CREATE TABLE `merchant` (
  `merchant_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `merchant_name` varchar(255) NOT NULL,
  `merchant_link` varchar(255) NOT NULL,
  `city` varchar(16) NOT NULL DEFAULT '重庆',
  `district` varchar(32) NOT NULL,
  `merchant_img` varchar(255) NOT NULL,
  `merchant_category` varchar(32) NOT NULL,
  `merchant_food` tinyint(1) unsigned zerofill NOT NULL,
  `merchant_score` decimal(3,2) unsigned DEFAULT NULL,
  `merchant_comment` int(8) unsigned zerofill DEFAULT NULL,
  `merchant_avgprice` decimal(8,2) unsigned DEFAULT NULL,
  `merchant_telephone` varchar(32) DEFAULT NULL,
  `merchant_address` varchar(255) DEFAULT NULL,
  `merchant_worktime` varchar(255) DEFAULT NULL,
  `merchant_longitude` decimal(10,7) unsigned DEFAULT NULL,
  `merchant_latitude` decimal(10,7) unsigned DEFAULT NULL,
  `status` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  PRIMARY KEY (`merchant_id`) USING BTREE,
  UNIQUE KEY `id` (`merchant_id`) USING BTREE,
  UNIQUE KEY `depublic2` (`merchant_link`),
  KEY `keyword` (`merchant_name`,`merchant_category`) USING HASH,
  KEY `depublic1` (`merchant_name`)
) ENGINE=InnoDB AUTO_INCREMENT=1129 DEFAULT CHARSET=utf8 COMMENT='status 用来分页;';

-- ----------------------------
-- Records of merchant
-- ----------------------------
BEGIN;
INSERT INTO `merchant` VALUES (1, '长嘉口腔医院', 'https://www.meituan.com/yiliao/171508092/', '重庆', '石子山体育公园', 'https://p1.meituan.net/180.180/joymerchant/-2925940471591689101-44845597-1537426514102.jpg@275w_156h_1e_1c', '齿科', 0, 5.00, 00000476, 99.00, '13527559690', '江北区福泉路28号附5-6号（环线体育公园轻轨站2A出口旁）', '周一至周日08:00-20:002019-02-03至2019-02-09 休息', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (3, '哈儿土火锅（南兴路店）', 'https://www.meituan.com/meishi/230182/', '重庆', '南坪', 'https://p0.meituan.net/msmerchant/c345b6a9e3c67f153216bc5f9822e415279675.jpg@275w_156h_1e_1c', '重庆火锅', 1, 4.20, 00005020, 51.00, NULL, '南岸区南兴路220附7号（近青青佳苑）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (4, '1号连锁 SALON（观音桥店）', 'https://www.meituan.com/jiankangliren/60993050/', '重庆', '观音桥', 'https://p0.meituan.net/180.180/wedding/23814f537532709083e0bae0806b469b533463.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00001591, 136.00, '023-67517973/18580943769', '江北区新港城屈臣氏隔壁红鼎国际C座17楼15室  座低层电梯', '周一至周日\n10:00-21:00', 106.5326100, 29.5763800, 0);
INSERT INTO `merchant` VALUES (5, '老太婆摊摊面（西南医院店）', 'https://www.meituan.com/meishi/42873508/', '重庆', '天星桥', 'https://p0.meituan.net/deal/f885aecc6cf1de86fa76923376793f3c76696.jpg@275w_156h_1e_1c', '面条', 1, 4.70, 00003926, 7.00, NULL, '沙坪坝区高滩岩正街32-3号（菜市场旁边）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (6, '海之星海鲜火锅（时代天街总店）', 'https://www.meituan.com/meishi/41298605/', '重庆', '龙湖时代天街', 'https://p0.meituan.net/bbia/77dea20ea692dfd4b19f0e7b5c9172be139223.jpg@275w_156h_1e_1c', '泰国菜', 1, 5.00, 00001174, 61.00, NULL, '渝中区石油路龙湖时代天街B馆4号写字楼1613室（近浦发银行）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (7, '临江门山城老火锅', 'https://www.meituan.com/meishi/4874003/', '重庆', '直港大道', 'https://p0.meituan.net/msmerchant/58a9c673b93419caabb4fdc579c5035b815358.jpg@275w_156h_1e_1c', '重庆火锅', 1, 4.30, 00003865, 48.00, NULL, '九龙坡区直港大道珠江花园后门口', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (8, '卡诗私人定制（时代天街A馆店）', 'https://www.meituan.com/jiankangliren/112359718/', '重庆', '龙湖时代天街', 'https://p0.meituan.net/180.180/dpdeal/824aaa233bb2e07093cf2fe939028fb1297038.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00000812, 68.00, '15223466330', '渝中区大坪正街时代天街A馆1号写字楼15楼-11号（必胜客旁1号时代星空旁）', '周一至周日\n10:00-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (9, '老友记私房菜（万达广场店）', 'https://www.meituan.com/meishi/5149611/', '重庆', '万达广场', 'https://p1.meituan.net/msmerchant/0edd9458f4bf6a2117cac08e0090829b45996.jpg@275w_156h_1e_1c', '私房菜', 1, 5.00, 00002927, 68.00, NULL, '南岸区珊瑚路6号南坪万达广场锋邸小区3栋5-4室门禁按:0504（万达肯德基对面）', NULL, 106.5681310, 29.5260740, 0);
INSERT INTO `merchant` VALUES (10, '北国居酒屋（北碚店）', 'https://www.meituan.com/meishi/42950736/', '重庆', '九号好吃街', 'https://p1.meituan.net/msmerchant/64b12b7c751ec5d05b434ed3e6b175f071445.jpg@275w_156h_1e_1c', '居酒屋', 1, 3.80, 00000874, 97.00, NULL, '九号好吃街金华路369号（北温泉9号小区上行50米）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (11, '舒美佰粥汇（八一广场店）', 'https://www.meituan.com/meishi/6286118/', '重庆', '解放碑', 'https://p1.meituan.net/msmerchant/b151d31e500538ae338960df72874eae42867.jpg@275w_156h_1e_1c', '快餐', 1, 4.10, 00005683, 41.00, NULL, '渝中区解放碑八一路238号八一广场5楼502号商铺', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (12, '鲜龙井火锅公园（南山总店）', 'https://www.meituan.com/meishi/202116/', '重庆', '黄桷垭/南山', 'https://p1.meituan.net/msmerchant/20b278c9e9e791ef4852e12c167c01ae195249.jpg@275w_156h_1e_1c', '重庆火锅', 1, 3.50, 00003570, 83.00, NULL, '南岸区黄桷垭镇黄金公路老厂龙井旁（佰沐家具厂西北）', NULL, 106.5905440, 29.4913160, 0);
INSERT INTO `merchant` VALUES (13, '已悦YIJOY国际美妆连锁（大学城店）', 'https://www.meituan.com/jiankangliren/134647312/', '重庆', '大学城', 'https://p1.meituan.net/wedding/639c30efef14beba107a32be51c01cca1169224.jpg@275w_156h_1e_1c', '美甲', 0, 5.00, 00002792, 50.00, '15111930505/13650535443', '沙坪坝区大学城北路熙都会三期二栋601（重师南门对面，汉堡王楼上）', '周一至周日\n10:00-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (14, '野生菌汤锅馆', 'https://www.meituan.com/meishi/2463923/', '重庆', '万达广场', 'https://p0.meituan.net/deal/b83c95f62d9bdff7547abcce3798bf45223594.jpg@275w_156h_1e_1c', '菌菇火锅', 1, 4.10, 00003380, 39.00, NULL, '南岸区响水路11号南坪万达广场（城市之光旁，长途汽车站下客处，农业银行背后）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (15, 'show舌私房麻辣烫', 'https://www.meituan.com/meishi/6842248/', '重庆', '较场口', 'https://p0.meituan.net/deal/__46247495__7305548.jpg@275w_156h_1e_1c', '麻辣烫', 1, 4.10, 00002546, 16.00, NULL, '渝中区民权路解放碑日月光中心B1楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (16, '荣派老鸭汤', 'https://www.meituan.com/meishi/6554974/', '重庆', '南坪', 'https://p1.meituan.net/deal/__44172223__4243686.jpg@275w_156h_1e_1c', '汤类', 1, 4.60, 00000768, 24.00, NULL, '南岸区南坪正街50号（重百往后保方向500米过红绿灯即到）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (17, '石梯坎老火锅', 'https://www.meituan.com/meishi/1824872/', '重庆', '南坪', 'https://p0.meituan.net/deal/__21281491__9451365.jpg@275w_156h_1e_1c', '重庆火锅', 1, 4.00, 00001891, 48.00, NULL, '南岸区亚太路1号亚太商谷2幢2楼（近会展中心）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (18, '渝李记火锅米线（英利店）', 'https://www.meituan.com/meishi/42194179/', '重庆', '大坪', 'https://p0.meituan.net/deal/6c4783205ab749015096feb164b4ee3384324.jpg@275w_156h_1e_1c', '川菜', 1, 3.90, 00003770, 15.00, NULL, '渝中区大坪英利大融城LG层014号', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (19, '佈麻佈辣精品冒菜（炫地店）', 'https://www.meituan.com/meishi/4170543/', '重庆', '三峡广场', 'https://p0.meituan.net/deal/__35803863__3495493.jpg@275w_156h_1e_1c', '冒菜', 1, 3.30, 00005849, 20.00, NULL, '沙坪坝区沙坪坝炫地2楼（UME售票厅楼上）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (20, '老王家老火锅（网红壹华里店）', 'https://www.meituan.com/meishi/182082000/', '重庆', '黄桷垭/南山', 'https://p0.meituan.net/180.180/msmerchant/46389bf7d730e2c9ad00fd224390e10e199281.jpg@275w_156h_1e_1c', '重庆火锅', 1, 3.70, 00000010, 71.00, NULL, '南岸区南山壹华里夜景公园', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (21, '林妹妹沾水米线（会展中心店）', 'https://www.meituan.com/meishi/41165030/', '重庆', '南坪', 'https://p1.meituan.net/deal/0984cf0e2ae1bc27d69864568e2ef320262230.jpg@275w_156h_1e_1c', '小吃快餐', 1, 3.90, 00002697, 16.00, NULL, '南岸区亚太路9号附3号玖玺国际1号广场（南坪会展中心旁，重庆凯宾斯基酒店斜对面）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (22, '临江门天桥老火锅（鲁能星城店）', 'https://www.meituan.com/meishi/4407445/', '重庆', '鲁能星城', 'https://p0.meituan.net/deal/86167c617b5b69e04bc68a1874b0393d103347.jpg@275w_156h_1e_1c', '重庆火锅', 1, 3.80, 00000505, 55.00, NULL, '渝北区鲁能新城6街区（巴蜀小学旁）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (23, '中国顺天自助烤肉火锅', 'https://www.meituan.com/meishi/2734438/', '重庆', '人民广场', 'https://p1.meituan.net/msmerchant/f2059f9318726d11a3ad97ef7644a31a55339.jpg@275w_156h_1e_1c', '综合自助', 1, 3.50, 00003682, 46.00, NULL, '人民广场华创步行街F1-54铺（文化艺术中心国际影城斜对面一楼）', NULL, 105.9300730, 29.3541120, 0);
INSERT INTO `merchant` VALUES (24, '舰长寿司（人和店）', 'https://www.meituan.com/meishi/2749414/', '重庆', '人和', 'https://p1.meituan.net/deal/c92d958a44971a6139e6b05ff8c43d3f150920.jpg@275w_156h_1e_1c', '日式寿司', 1, 4.20, 00000812, 74.00, NULL, '渝北区人和金开大道58号柠檬郡（近人和加气站）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (25, '馋猫花甲', 'https://www.meituan.com/meishi/41235984/', '重庆', '天生桥', 'https://p1.meituan.net/deal/5a715484cdf4efd20c36eaa55bfefbf0115143.jpg@275w_156h_1e_1c', '米线', 1, 4.20, 00002160, 12.00, NULL, '天生桥天生桥西南大学南门往斑竹村方向20米', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (26, '安妮斯贝.闪电泡芙', 'https://www.meituan.com/meishi/41608964/', '重庆', '新城区', 'https://p0.meituan.net/poi/ef9ed6c5fcc5b33fcca17903367133e941101.jpg@275w_156h_1e_1c', '西式甜品', 0, 4.30, 00000637, 15.00, NULL, '新城区巴川街道电影院巷3号（名流尚品会斜对面）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (27, '轻住·琦艾假日酒店（大渡口店）', 'https://www.meituan.com/jiudian/86250001/', '重庆', '九宫庙', 'https://p0.meituan.net/tdchotel/2e5c910c345824d8c04208e3bc4de48a2061414.jpg@275w_156h_1e_1c', '经济酒店', 0, 4.70, 00000560, NULL, NULL, '大渡口区钢花路515号翠楼车站旁（金融广场玫瑰之约酒楼楼上）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (28, '派乐汉堡', 'https://www.meituan.com/meishi/40022999/', '重庆', '白市驿', 'https://p1.meituan.net/deal/b4f5844ef4ed35dcd97e8f61f4d935de722458.jpg@275w_156h_1e_1c', '汉堡', 1, 3.90, 00000750, 20.00, NULL, '九龙坡区白市驿三角碑驿都广场（重客隆旁）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (29, '纸上烤鱼（晒光坪店）', 'https://www.meituan.com/meishi/5015205/', '重庆', '天星桥', 'https://p0.meituan.net/deal/8ccda2e5d4c9229dd622b8edcf81263c85366.jpg@275w_156h_1e_1c', '烤鱼', 1, 4.50, 00000376, 36.00, NULL, '沙坪坝区华宇·福源山庄晒光坪70号附14号（岩口公交车站旁，人行天桥旁）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (30, '徐生记大酒楼（文星湾店）', 'https://www.meituan.com/meishi/1829937/', '重庆', '文星湾', 'https://p0.meituan.net/poi/c90efd67cd1f4efd96446ae929b10df344577.png@275w_156h_1e_1c', '川菜', 1, 4.50, 00001029, 53.00, NULL, '文星湾文星湾旺德旺城商业街,永辉超市楼上（文星湾桥头）', NULL, NULL, 29.8308360, 0);
INSERT INTO `merchant` VALUES (31, '九涧江景酒店（解放碑中心店）', 'https://www.meituan.com/jiudian/188986945/', '重庆', '较场口', 'https://p0.meituan.net/tdchotel/f84bf4e2909dc15d0e6be36439ab29ae9276599.jpg@275w_156h_1e_1c', '经济酒店', 0, 5.00, 00000075, NULL, NULL, '渝中区民权路88号日月光中心广场3栋45-8', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (32, '火源部落铁板烧（大学城店）', 'https://www.meituan.com/meishi/5877591/', '重庆', '大学城', 'https://p1.meituan.net/mogu/9116e5116295871e81c6342388f90eff625599.jpg@275w_156h_1e_1c', '特色菜', 1, 3.90, 00002223, 36.00, NULL, '沙坪坝区大学城熙街商业街二期20号楼1F-06', NULL, 106.3026130, 29.6034070, 0);
INSERT INTO `merchant` VALUES (33, '方圆蛋糕', 'https://www.meituan.com/meishi/42714779/', '重庆', '老城区', 'https://p0.meituan.net/deal/455743d413d857bbe40c69cf94fab289261975.jpg@275w_156h_1e_1c', '蛋糕', 0, 5.00, 00001457, 60.00, NULL, '老城区渝西大道中段1129号（小南门车站，中山影都，炫酷KTV下面，川主沟，闽渝网吧楼下）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (34, '家全居（大渡口店）', 'https://www.meituan.com/meishi/2420291/', '重庆', '新天泽国际广场', 'https://p0.meituan.net/deal/__11514361__4253186.jpg@275w_156h_1e_1c', '川菜', 1, 5.00, 00000907, 64.00, NULL, '大渡口区步行街新天泽广场2F016（万达电影院楼下）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (35, '大众烤鱼', 'https://www.meituan.com/meishi/41212710/', '重庆', '大学城', 'https://p0.meituan.net/apiback/09a45449fb79e74d2ba91677bc5e051d185006.jpg@275w_156h_1e_1c', '烤鱼', 1, 4.20, 00000594, 27.00, NULL, '大学城合川缤果城278号附4号', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (36, '巷巷跷脚牛肉', 'https://www.meituan.com/meishi/41110582/', '重庆', '三峡广场', 'https://p1.meituan.net/deal/954f2ce0696aa24c44c74d00aed20a0585276.jpg@275w_156h_1e_1c', '川菜', 1, 4.30, 00000803, 32.00, NULL, '沙坪坝区小龙坎新街66号（邮政储蓄银行、沙美利都金沙国际旁边巷子里）', NULL, 106.4646120, 29.5586530, 0);
INSERT INTO `merchant` VALUES (37, '徐生记大酒楼（五里店）', 'https://www.meituan.com/meishi/4514707/', '重庆', '五里店/江北嘴', 'https://p1.meituan.net/deal/9eb7a9eccb1014d870851ea9bc1b5714254631.jpg@275w_156h_1e_1c', '川菜', 1, 4.20, 00000908, 55.00, NULL, '江北区渝能明日城市R6栋2-3楼（近五里店）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (38, '犀利锅疯胃美蛙鱼头馆（四小区店）', 'https://www.meituan.com/meishi/2775474/', '重庆', '南坪', 'https://p1.meituan.net/msmerchant/d42f4ff104627b24c8051fc27b23d8dd114558.jpg@275w_156h_1e_1c', '鱼火锅', 1, 3.70, 00000563, 57.00, NULL, '南岸区南城大道238号（南坪四小区六院立交桥爱尔麦格眼科楼下）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (39, '仙指时光', 'https://www.meituan.com/xiuxianyule/6331815/', '重庆', '龙头寺', 'https://p0.meituan.net/joymerchant/e38616715c269874631ecdf0d63555e2--419605837.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 5.00, 00005221, 122.00, '023-67059998', '渝北区动力时光商场内2楼15号（重庆火车北站广场对面，斯坦利酒店旁）', '周一至周日\n全天', 106.5537640, 29.6031320, 0);
INSERT INTO `merchant` VALUES (40, 'MAX伯爵真人密室逃脱（江北店）', 'https://www.meituan.com/xiuxianyule/4384191/', '重庆', '观音桥', 'https://p0.meituan.net/joymerchant/c4e3a000f592c9fe02cdb1820ce60859-320675932.jpg@275w_156h_1e_1c', '密室逃脱', 0, 4.80, 00005667, 79.00, '400-993-0909', '江北区北城天街观音桥阳光城大厦25楼（观音桥步行街美特斯邦威楼上）', '周六,周日\n11:00-23:00\n\n周一至周五\n12:00-23:00', 106.5315880, 29.5766000, 0);
INSERT INTO `merchant` VALUES (41, 'Fis.Salon美髮沙龍（观音桥总店）', 'https://www.meituan.com/jiankangliren/41963505/', '重庆', '观音桥', 'https://p0.meituan.net/wedding/ccd41cc23104afc7180098a3e1a7154d110896.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00014669, 307.00, '023-67003061/18580310104', '江北区观音桥步行街红鼎国际A座3211（大融城店）（大融城后侧星天广场小吃街）', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (42, 'AC 潮牌Salon（三峡广场店）', 'https://www.meituan.com/jiankangliren/64667583/', '重庆', '三峡广场', 'https://p1.meituan.net/merchantpic/61c0fb00a642091185b7933b73e6d5ef70928.jpg@275w_156h_1e_1c', '美发', 0, 4.80, 00001172, 113.00, '15730341664/18581380089', '沙坪坝区三峡广场新时代大厦29楼7室（UME炫地楼上）', '周一至周日\n08:00-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (43, '墨吉.日系 サロン（MJ salon观音桥总店）', 'https://www.meituan.com/jiankangliren/5744189/', '重庆', '观音桥', 'https://p1.meituan.net/wedding/60b248aae738c0f90b5eb3a117357558254569.jpg@275w_156h_1e_1c', '美发', 0, 4.70, 00000832, 164.00, '023-67711776/13617633660', '江北区观音桥建北一支路红鼎国际名苑A座2907室', '周一至周日\n10:00-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (44, 'Ace造型馆（大融城观音桥店）', 'https://www.meituan.com/jiankangliren/5787897/', '重庆', '观音桥', 'https://p1.meituan.net/merchantpic/3661a89d9e8b3995dde225bbb1af7ecd271898.jpg@275w_156h_1e_1c', '美发', 0, 4.80, 00001974, NULL, '15683072097', '江北区东环路大融城红鼎国际B座二单元2703（大融城后面）', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (45, 'Beauty贝优主题美甲连锁店', 'https://www.meituan.com/jiankangliren/40830202/', '重庆', '观音桥', 'https://p1.meituan.net/wedding/4f951cb42c6ca04cd66f10c411a7b2d536194.jpg@275w_156h_1e_1c', '美甲', 0, 4.80, 00002488, 144.00, '023-86069698/18580129810', '江北区兴塔路观音桥红鼎国际C座23-1', '周一至周日\n10:00-20:30', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (46, '美工坊潮牌Hair Salon（沙坪坝总店）', 'https://www.meituan.com/jiankangliren/40214058/', '重庆', '三峡广场', 'https://p0.meituan.net/wedding/7dc4e4350d58119fa29331fb1fe89db1276758.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00001168, 280.00, '18323081989/18725716825', '沙坪坝区三峡广场（轻轨1号出口旁边）第一家鸡排旁边通道进17楼17-11室（麦当劳通道进）', '周一至周日\n10:00-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (47, '海宇温泉大酒店', 'https://www.meituan.com/cate/4028237/', '重庆', '北碚城南', 'https://p0.meituan.net/travel/26ab37a7bb904b6472b282adb79f3fd81105492.png@275w_156h_1e_1c', '温泉', 0, 4.60, 00003075, 180.00, '023-63179999/63179768', '北碚城南双元大道198号', '周五至周日\n10:00-23:00\n\n周一至周四\n12:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (48, '新摇篮KTV（双碑店）', 'https://www.meituan.com/xiuxianyule/4059477/', '重庆', '双碑', 'https://p0.meituan.net/deal/__23011538__2726988.jpg@275w_156h_1e_1c', '量贩式KTV', 0, 3.40, 00002686, 56.00, '023-65138999', '沙坪坝区双碑九重锦2号楼4楼（近地铁1号线双碑站出口）', '周一至周日\n13:00-06:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (49, '芭提香草海鲜火锅（万象城店）', 'https://www.meituan.com/meishi/4442252/', '重庆', '谢家湾', 'https://p0.meituan.net/msmerchant/1fa7f8a2668d5bcc5bd3996f7c0c659126291.jpg@275w_156h_1e_1c', '海鲜', 1, 3.60, 00002784, 95.00, NULL, '九龙坡区谢家湾正街51号万象城独栋B1楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (50, '浅草和风日本料理', 'https://www.meituan.com/meishi/51528116/', '重庆', '北碚城南', 'https://p0.meituan.net/deal/c55e9d0aa4b04c3c3f9f8fa58f7ea004289807.jpg@275w_156h_1e_1c', '日本菜', 1, 4.20, 00001439, 72.00, NULL, '北碚城南卢作孚路316号、318号', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (51, '滋味小栈（远东百货店）', 'https://www.meituan.com/meishi/40875322/', '重庆', '北城天街/九街', 'https://p0.meituan.net/msmerchant/d169894fcc1f84394d6823b4f7858ac75487708.jpg@275w_156h_1e_1c', '川菜', 1, 4.20, 00001752, 55.00, NULL, '江北区北城天街8号北城天街购物广场远东百货B1层（肯德基旁）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (52, '爱玩嘉年华（炫地店）', 'https://www.meituan.com/xiuxianyule/1113320/', '重庆', '三峡广场', 'https://p1.meituan.net/joymerchant/3791d5133182ec3fa47e9b8a8aad3519--677480414.jpg@275w_156h_1e_1c', '电玩/游戏厅', 0, 3.20, 00009694, 38.00, '023-65906833', '沙坪坝区三峡广场步行街炫地购物中心5楼', '周一至周日\n10:00-02:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (53, '摩登时尚hair salon（杨家坪尖端店）', 'https://www.meituan.com/jiankangliren/6282722/', '重庆', '杨家坪', 'https://p0.meituan.net/wedding/3c623f69203f869f54fbda7f8c57d90b297330.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00005349, 231.00, '13883476860/18602390132', '九龙坡区杨家坪步行街商业区金鹰女人街3楼（大洋百货旁）', '周一至周日\n10:00-20:00', 106.5174400, 29.5113610, 0);
INSERT INTO `merchant` VALUES (54, '德香苑北京烤鸭（协信星光时代广场店）', 'https://www.meituan.com/meishi/1153040/', '重庆', '协信星光时代广场', 'https://p1.meituan.net/msmerchant/74739119ea4867c9f1aea13dbcaa1339160451.jpg@275w_156h_1e_1c', '烤鸭', 1, 4.20, 00012612, 60.00, NULL, '南岸区江南大道28号协信星光时代广场7楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (55, 'style造型（大学城总店）', 'https://www.meituan.com/jiankangliren/67633026/', '重庆', '大学城', 'https://p0.meituan.net/wedding/67d5a1db579b74faa8c12ac8cb173ce7262507.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00000957, NULL, '18190848208', '沙坪坝区大学城熙街三期熙都会4栋5楼507室（重师南门轻轨一号线麦当劳斜对面50米）', '周一至周日\n10:00-20:30', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (56, '徐家院子', 'https://www.meituan.com/meishi/1169404/', '重庆', '石桥铺', 'https://p0.meituan.net/deal/201210/10/_1010141645.jpg@275w_156h_1e_1c', '火锅', 1, 5.00, 00002045, 45.00, NULL, '九龙坡区石桥铺科园二路三街丰华园D区96号一楼（渝高公园后门对面）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (57, '顺风123·coco（时代天街店）', 'https://www.meituan.com/meishi/40502482/', '重庆', '龙湖时代天街', 'https://p1.meituan.net/msmerchant/dffde3e27e73aeaf946a4571fd21fe3e33898.jpg@275w_156h_1e_1c', '川菜', 1, 3.00, 00002318, 57.00, NULL, '渝中区大坪龙湖时代天街C馆5楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (58, '大渔铁板烧（万象城店）', 'https://www.meituan.com/meishi/4872492/', '重庆', '万象城', 'https://p1.meituan.net/scarlett/9abf3b1db8d64a28391e6e7865f2e616163998.jpg@275w_156h_1e_1c', '日式铁板烧', 1, 4.20, 00001950, 94.00, NULL, '九龙坡区谢家湾街道谢家湾正街51号万象城L5层', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (59, '威特尼西餐', 'https://www.meituan.com/meishi/41997219/', '重庆', '大学城', 'https://p1.meituan.net/deal/d109600d514ff8578aed2760f8326736192202.jpg@275w_156h_1e_1c', '西餐', 1, 4.50, 00001330, 66.00, NULL, '沙坪坝区大学城中路9号台北城生活广场2楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (60, '子和整脊推拿足疗养生馆', 'https://www.meituan.com/xiuxianyule/2511713/', '重庆', '南坪', 'https://p1.meituan.net/joymerchant/-527776991746712582.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 4.60, 00001137, 120.00, '023-62497749/18983091180', '南岸区南坪辅仁路辅仁中学正大门旁人行天桥旁2号门', '周一至周日\n10:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (61, '喜年贡茶（解放碑店）', 'https://www.meituan.com/meishi/60035554/', '重庆', '解放碑', 'https://p1.meituan.net/deal/9614fd92b6593bf041ea526a9ca567c8406494.jpg@275w_156h_1e_1c', '奶茶/果汁', 0, 4.10, 00005480, 13.00, NULL, '渝中区解放碑街道八一路夜市', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (62, '两个人的老火锅（观音桥店）', 'https://www.meituan.com/meishi/51908468/', '重庆', '观音桥', 'https://p0.meituan.net/msmerchant/1a35c557e941be6585b73085c033a4f4110251.jpg@275w_156h_1e_1c', '重庆火锅', 1, 5.00, 00001080, 77.00, NULL, '江北区建新南路红鼎国际A座35-7室（未来国际队对面）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (63, '牛仔世家牛排餐厅（时代天街店）', 'https://www.meituan.com/meishi/42618488/', '重庆', '龙湖时代天街', 'https://p1.meituan.net/bbia/bb09368779e0b1531d7d1536e10e16b62977180.png@275w_156h_1e_1c', '牛排', 1, 5.00, 00004252, 59.00, NULL, '渝中区医学院路时代天街C馆L508号', NULL, 106.5132210, 29.5347810, 0);
INSERT INTO `merchant` VALUES (64, '加禧港式茶餐厅（解放碑店）', 'https://www.meituan.com/meishi/40070849/', '重庆', '解放碑', 'https://p1.meituan.net/apiback/0e9ed80532fed497180e81a82e737481150484.jpg@275w_156h_1e_1c', '茶餐厅', 1, 3.10, 00001822, 58.00, NULL, '渝中区五一路99号协信星光广场L5层L515号', NULL, 106.5805760, 29.5586200, 0);
INSERT INTO `merchant` VALUES (65, '中医脊柱理疗馆', 'https://www.meituan.com/xiuxianyule/41068339/', '重庆', '观音桥', 'https://p1.meituan.net/joymerchant/7243dabd23e6254a47abd12eed9a51b1-1562774011.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 4.80, 00000970, 97.00, '17602377536/18723420762', '江北区观音桥步行街红鼎国际名苑A座46-11', '周一至周日\n10:00-22:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (66, 'CIAOCIAO崖畔音乐主题酒吧', 'https://www.meituan.com/xiuxianyule/50326908/', '重庆', '洪崖洞', 'https://p1.meituan.net/merchantpic/1ef727018fb67b880afd8db4eab4321e8588234.jpg@275w_156h_1e_1c', '清吧', 0, 4.50, 00000818, 61.00, '15086929787/15971170444', '渝中区嘉陵江滨江路88号洪崖洞10楼（近王府井百货，解放碑，朝天门小什字）', '周一至周日\n15:00-03:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (67, '大队长主题火锅（解放碑店）', 'https://www.meituan.com/meishi/6442820/', '重庆', '解放碑', 'https://p0.meituan.net/msmerchant/6746bbabbbbdf26ec2eed17f53892b4e46773.jpg@275w_156h_1e_1c', '重庆火锅', 1, 5.00, 00005796, 79.00, NULL, '渝中区青年路18号中天大酒店2层', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (68, '金田一三国自助烤肉（新世界百货店）', 'https://www.meituan.com/meishi/1080055/', '重庆', '观音桥', 'https://p1.meituan.net/deal/6af3a72a0fb0b4d71b09adbda7170175351401.jpg@275w_156h_1e_1c', '综合自助', 1, 3.00, 00013153, 55.00, NULL, '江北区观音桥步行街6号新世界百货5层（近世纪新都）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (69, '陶然居（沙坪坝店）', 'https://www.meituan.com/meishi/1482761/', '重庆', '三峡广场', 'https://p1.meituan.net/deal/6ceaa2a2777ca9730889cffdc12fafbc327452.jpg@275w_156h_1e_1c', '川菜', 1, 5.00, 00003163, 67.00, NULL, '沙坪坝区三峡广场渝碚路52号融信大厦8楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (70, '云中漫步·足疗养生会所（南坪店）', 'https://www.meituan.com/xiuxianyule/41868502/', '重庆', '南坪', 'https://p0.meituan.net/joymerchant/-4882087959086071783-939139-1543556510195.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 4.00, 00002457, 189.00, '023-62660007', '南岸区亚太路南坪国际会展中心玖玺台（凯宾斯基酒店对面）', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (71, '名润足道（四公里店）', 'https://www.meituan.com/xiuxianyule/40210668/', '重庆', '回龙湾', 'https://p1.meituan.net/joymerchant/f7a85e2bb27816dc56acfbdfbdc6e348--1513716470.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 4.40, 00001683, 92.00, '023-62977055', '南岸区回龙路四公里绿洲龙城底商（距永辉超市约200米）', '周一至周日\n12:00-01:00\n\n2019-02-04至2019-02-08 休息', 106.5720700, 29.5113740, 0);
INSERT INTO `merchant` VALUES (72, '时雨照相馆', 'https://www.meituan.com/shenghuo/50836208/', '重庆', '观音桥', 'https://p1.meituan.net/joymerchant/0e054287e76b708c5381d6aca4d4c8a9-1553719703.jpg@275w_156h_1e_1c', '证件照', 0, 5.00, 00000561, 154.00, '18166328071', '江北区观音桥东环路红鼎国际B座1单元1511（观音桥好吃街旁、广发银行左转）', '周二至周日\n10:30-19:30', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (73, '杨氏韩蒸天下', 'https://www.meituan.com/xiuxianyule/2509042/', '重庆', '南坪', 'https://p1.meituan.net/shopmainpic/03b6d8f47fad143dda2885b69c82d5a143916.jpg@275w_156h_1e_1c', '洗浴/汗蒸', 0, 4.10, 00001531, 17.00, '19923164085/15213295703', '南岸区南坪西路3号南坪商业大楼建玛特楼上7楼12号', '周一至周日\n13:00-22:00\n\n2019-02-04至2019-02-10 休息', 106.5662960, 29.5280720, 0);
INSERT INTO `merchant` VALUES (74, '德福迎君大酒楼（欣阳广场店）', 'https://www.meituan.com/meishi/1576040/', '重庆', '重庆大学', 'https://p1.meituan.net/deal/__21366905__7178724.jpg@275w_156h_1e_1c', '川菜', 1, 4.00, 00000848, 60.00, NULL, '沙坪坝区沙坪坝正街77号（沙坪坝区第二人民医院旁）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (75, '藕然间（大坪九坑子店）', 'https://www.meituan.com/meishi/41790882/', '重庆', '大坪', 'https://p0.meituan.net/msmerchant/57ed4ffacdbe96ab3b57e4761ce6d30224688.jpg@275w_156h_1e_1c', '汤锅', 1, 3.80, 00001246, 45.00, NULL, '渝中区长江支路25附1号附近', NULL, 106.5196700, 29.5424010, 0);
INSERT INTO `merchant` VALUES (76, 'COOL CUTS C&C造型', 'https://www.meituan.com/jiankangliren/69164906/', '重庆', '北碚城南', 'https://p0.meituan.net/merchantpic/d39821275c493b7f7d2639feacaf53cf110053.jpg@275w_156h_1e_1c', '美发', 0, 5.00, 00001401, 612.00, '023-81696890', '北碚城南云清路209号（雄风新天地后面，正新鸡排后面，顺水鱼馆、甲壳虫旁边）', '周一至周日\n09:00-20:30', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (77, '酸汤乌鱼府', 'https://www.meituan.com/meishi/6136864/', '重庆', '北碚城南', 'https://p1.meituan.net/deal/__33473397__4489235.jpg@275w_156h_1e_1c', '鱼火锅', 1, 3.80, 00001076, 43.00, NULL, '北碚城南云华路376号（泉霖大饭店旁）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (78, '简舞（望龙门店）', 'https://www.meituan.com/jiankangliren/1572107/', '重庆', '渝中区', 'https://p0.meituan.net/wedding/9f9f7db9b21e20cea5e7022bc077bc7a144967.jpg@275w_156h_1e_1c', '美发', 0, 4.20, 00001257, 135.00, '023-86126622', '渝中区解放东路129号金宏大厦1楼（望龙门公交车站，建设银行旁）', '周一至周日\n10:00-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (79, '地瓜老火锅', 'https://www.meituan.com/meishi/5366495/', '重庆', '南岸区', 'https://p0.meituan.net/deal/19d79377550cc024d8e7180e7edf46b6443311.jpg@275w_156h_1e_1c', '重庆火锅', 1, 4.00, 00001489, 50.00, NULL, '南岸区福民路39号-88（腾龙大道与福民路交叉口国际社区观园二期对面）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (80, '易驰汽车养护中心', 'https://www.meituan.com/aiche/5765347/', '重庆', '石桥铺', 'https://p0.meituan.net/shopmainpic/647337a351800f7dbdd23693b3d4d16f400778.jpg@275w_156h_1e_1c', '维修保养', 0, 4.10, 00000679, NULL, '023-68570018/68570008', '九龙坡区渝州路121号（渝州宾馆斜对面）', '周一至周日\n08:30-17:30\n\n2019-02-02至2019-02-12 休息', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (81, '多比儿童摄影（江北店）', 'https://www.meituan.com/qinzi/1165809/', '重庆', '观音桥', 'https://p0.meituan.net/wedding/77ec200ac6125f5bea526fd3116dad97328822.jpg@275w_156h_1e_1c', '其他儿童摄影', 0, 5.00, 00001202, 346.00, '023-67955367/17353267927', '江北区观音桥步行街茂业百货对面阳光城大厦8楼', '周一至周日\n09:30-18:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (82, '品亮诚烧鸡公（无专厂店）', 'https://www.meituan.com/meishi/6853954/', '重庆', '渝北区', 'https://p1.meituan.net/mogu/c15b6f3a107d97942b5340792d7db9a043664.jpg@275w_156h_1e_1c', '火锅', 1, 3.80, 00001078, 57.00, NULL, '渝北区兴盛大道荷塘路荣升锦瑟华年2幢1一1一2', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (83, '亮娃美蛙三合鱼', 'https://www.meituan.com/meishi/6379207/', '重庆', '黄桷垭/南山', 'https://p1.meituan.net/deal/b711e7ebeefe0f23668747c8186441ee362444.jpg@275w_156h_1e_1c', '川菜', 1, 4.20, 00000323, 30.00, NULL, '南岸区南山路百世快递旁', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (84, '福记柳州螺蛳粉', 'https://www.meituan.com/meishi/61695330/', '重庆', '两路口', 'https://p0.meituan.net/mogu/8f880725344075bfe03f434c09bd5443102118.jpg@275w_156h_1e_1c', '螺蛳粉', 1, 5.00, 00002937, 10.00, NULL, '渝中区长江一路1号（两路口轨道站四号出口右手下行一钟张国富纪念碑右下方20米）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (85, '典雅戴斯国际大酒店', 'https://www.meituan.com/meishi/1217485/', '重庆', '龙洲湾', 'https://p0.meituan.net/deal/__9862006__3912744.jpg@275w_156h_1e_1c', '川菜', 1, 3.70, 00000651, 106.00, NULL, '巴南区龙海大道5号（巴南区区府旁,轻轨站三号线学堂湾站下车即到）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (86, '根据地火锅（福利社直营店）', 'https://www.meituan.com/meishi/230394/', '重庆', '南坪', 'https://p1.meituan.net/mogu/336802356201621ddefc31a1640118e947865.png@275w_156h_1e_1c', '四川火锅', 1, 4.00, 00000847, 51.00, NULL, '南岸区福利社十字路口（近家福火锅）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1087, '上影国际影城', 'https://www.meituan.com/cate/152330178/', '重庆', '新城区', 'http://qcloud.dpfile.com/pc/Cp-x7S_W67RFbP4kNdwNQG1PiqBQQLtpJGiDSJdTXUa-FvCzPO9IivOSTyyizkLFZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 4.00, 00000000, 31.00, '023-45690999/45685888', '新城区新步行街太阳城1幢3号', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1088, '中影国际影城（潼南店）', 'https://www.meituan.com/cate/191717224/', '重庆', '潼南区', 'http://qcloud.dpfile.com/pc/MjDZ56w25825VHoL52oCuKKu2B3-bXe8cP6KV-VsJDjWKsAFsZ6ASaXzlHoLZTSyZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 3.50, 00000000, NULL, '023-44810006', '近郊潼南县正兴街御景江山三楼中影国际影城', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1089, '保利万和国际影城（江津店）', 'https://www.meituan.com/cate/5391610/', '重庆', '鼎山', 'https://p0.meituan.net/deal/17c0d0d06dd8d51b6a742fcdf7539776235674.jpg@275w_156h_1e_1c', '电影院', 0, 3.70, 00001345, 40.00, '023-47573366', '鼎山江洲大道600号御景华庭', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1090, 'UME影城（南滨）', 'https://www.meituan.com/cate/132958733/', '重庆', '南滨路', 'http://qcloud.dpfile.com/pc/4RwG567rhIaS5ykj5oPjAApBzC-m_MKfVW_wI8VzT49XAWQoUBst0kZNFAaJbUm4ZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 4.00, 00000000, 44.00, '023-62500088', '南岸区南滨路81号东原1891B馆3楼', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1091, '保利万和国际影城（壹街店）', 'https://www.meituan.com/cate/189955457/', '重庆', '壹街', 'http://qcloud.dpfile.com/pc/Vnj0GkLi0tpyM9RJeBf6nuQAO7e5OJZHPHXwTnOvnFHBcq3U9uOdwt7ypyivWjGBZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 5.00, 00000000, 27.00, '023-68550888', '大渡口区顺祥壹街A区2楼（近轻轨2号线平安站）', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1092, '百丽宫影城（天地店）', 'https://www.meituan.com/cate/40055198/', '重庆', '化龙桥/重庆天地', 'https://p1.meituan.net/poi/1ac28854ce0d669808f1b53a274f0458155068.jpg@275w_156h_1e_1c', '电影院', 0, 5.00, 00000000, 322.00, '023-63722691-8003', '渝中区瑞天路20号重庆天地嘉陵中心A馆', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1093, '大地影院（渝北金港国际二店）', 'https://www.meituan.com/cate/51478136/', '重庆', '两路', 'https://p1.meituan.net/deal/80d699ab28655d8772728bc47c60987f196966.jpg@275w_156h_1e_1c', '电影院', 0, 4.00, 00000000, 34.00, '400-101-3565', '渝北区胜利路194号金港国际购物中心2楼（原嘉裕国际影城（渝北二店）', '周一至周日\n11:30-22:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1094, '金逸珠江西正影城', 'https://www.meituan.com/cate/117717362/', '重庆', '西政', 'http://qcloud.dpfile.com/pc/rjw_CbEa4nLjpOLv1Cpz8ef2XLKydx4eONM7mefyXB-WCI9gmeM_rQBnBJ80f39mZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 4.00, 00000003, 30.00, '023-67627933', '渝北区宝圣大道西正街A栋6楼（网虫网咖楼上）', '周一至周日\n10:00-24:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1095, '越界影城（巴南店）', 'https://www.meituan.com/cate/165254419/', '重庆', '巴南区', 'https://p1.meituan.net/deal/201208/22/1_0822151022.jpg@275w_156h_1e_1c', '电影院', 0, 3.50, 00000000, NULL, '023-62292166', '巴南区艺园路138号6幢', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1096, '摩登时代电影城（璧山店）', 'https://www.meituan.com/cate/6621279/', '重庆', '奥康', 'https://p1.meituan.net/deal/8505a0842ee303782d0fffe981b51921289961.jpg@275w_156h_1e_1c', '电影院', 0, 4.20, 00001544, 32.00, '023-64305111', '奥康金剑路496号（摩登时代）3楼（碧波海岸旁）', '周一至周日\n10:00-24:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1097, '恒大影城（香山华府店）', 'https://www.meituan.com/cate/179970751/', '重庆', '九龙坡区', 'http://qcloud.dpfile.com/pc/LRkFVtd1X8p30DVbhGlOOKejyUJXSwfMmN9sv-4U6oNhmi1mf6FziTuP3N3-ZZitZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 4.00, 00000000, NULL, '023-67027788', '九龙坡区新宏大道75号28幢恒大影城二、三层', '周一至周日\n午市 11:30-14:00\n晚市 17:30-21:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1098, '嘉裕国际影城（双龙店）', 'https://www.meituan.com/cate/67797696/', '重庆', '一碗水', 'https://p1.meituan.net/poi/6d81bf9a2233e469f270cce92e4b403888064.jpg@275w_156h_1e_1c', '电影院', 0, 4.40, 00000504, 34.00, '023-67183821', '渝北区双湖路1号水木天地1栋4楼', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1099, '横店影城（丰都店）', 'https://www.meituan.com/cate/1560531/', '重庆', '丰都', 'https://p0.meituan.net/deal/__43558314__1826377.jpg@275w_156h_1e_1c', '电影院', 0, 3.30, 00000349, 61.00, '023-85604888/70728789', '丰都三合街道平都大道东段52号', '周一至周日\n10:00-24:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1100, '紫鑫影城', 'https://www.meituan.com/cate/1542737/', '重庆', '黔江区中心城区', 'https://p1.meituan.net/poi/23568c8b897cfe07111c54a9438c560096256.jpg@275w_156h_1e_1c', '电影院', 0, 3.50, 00000000, 32.00, '023-79234633', '黔江区解放路与杨柳街交叉口苏宁易购对面（近苏宁电器）', '12：30-24：00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1101, 'UME影城（双桥）', 'https://www.meituan.com/cate/119241544/', '重庆', '大足区', 'https://p1.meituan.net/poi/3ebefe170a08425977abe1f72c73213469632.jpg@275w_156h_1e_1c', '电影院', 0, 4.00, 00000000, NULL, '023-43796688', '大足区重庆双桥经开区车城大道39号附2号', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1102, '金字塔金木影城（平桥金科店）', 'https://www.meituan.com/cate/71442452/', '重庆', '平桥片区', 'https://p1.meituan.net/deal/7c9c80ef10695bf1c8ffa2604a6586bc50138.jpeg@275w_156h_1e_1c', '电影院', 0, 4.00, 00000072, 32.00, '023-52680000', '平桥片区云枫街道关子社区滨湖西路533号3-1（金科中央金街3楼）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1103, '红星太平洋（重庆渝北店）', 'https://www.meituan.com/cate/115555966/', '重庆', '渝北区', 'http://qcloud.dpfile.com/pc/_eLgAIlADM0Dsmb5r4tJSFBqHnx567VCnGqs9i5ndyNK6y-L3pvPVV21jP8K46WmZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 4.00, 00000000, 63.00, '023-63080818', '渝北区金开大道爱琴海购物公园5楼', '周一至周日\n10:00-22:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1104, '星光影城（渝北店）', 'https://www.meituan.com/cate/157271584/', '重庆', '两路', 'http://qcloud.dpfile.com/pc/_Svbca4fQbO_oEi57snhB48FFFqYOt7Fh3MKAjmht9wKsStZDMgo5racItuO8-LMZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 4.00, 00000000, NULL, '023-67490455', '渝北区胜利路91号（原保利影城）', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1105, '我们的电影屋', 'https://www.meituan.com/xiuxianyule/169438609/', '重庆', '大庙/红旗河沟', 'https://p1.meituan.net/joymerchant/1776363166068438726-40142272-1545110015627.jpg@275w_156h_1e_1c', '私人影院', 0, 5.00, 00000088, 42.00, '023-67657652/18716646562', '江北区龙湖新壹街2号楼8楼（观音桥中学对面）', '周一至周日\n10:00-22:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1106, '保利石柱影院', 'https://www.meituan.com/cate/4521905/', '重庆', '石柱', 'https://p1.meituan.net/deal/01d987b2ae1451b5050975c60869dbc165426.jpg@275w_156h_1e_1c', '电影院', 0, 3.50, 00000268, NULL, '023-85008520', '石柱南宾镇休闲广场玉音楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1107, '万达影城（SM广场店）', 'https://www.meituan.com/cate/2408716/', '重庆', 'SM广场购物中心', 'https://p0.meituan.net/deal/__26911867__3043748.jpg@275w_156h_1e_1c', '电影院', 0, 5.00, 00000521, 37.00, '023-88195007', '渝北区渝北松石大道148号SM广场L4层（近龙湖紫都城）', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1108, '万画X超幕影城（合川店）', 'https://www.meituan.com/cate/42273842/', '重庆', '大学城', 'https://p1.meituan.net/poi/c0c5f18dae48d5c155201a6404be63bf64623.jpg@275w_156h_1e_1c', '电影院', 0, 4.20, 00002409, 33.00, '023-81660899', '大学城义乌大道278号缤果城3楼（移通学院）', '9：00-23：00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1109, '越界影城（永川店）', 'https://www.meituan.com/cate/1438949/', '重庆', '渝西广场', 'https://p1.meituan.net/deal/201107/14/4_0714182828.jpg@275w_156h_1e_1c', '电影院', 0, 4.70, 00012171, 35.00, '023-49898500', '渝西广场渝西大道中段918号11号楼7层（新世纪百货7楼）', '周二~周日: 09:00-12:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1110, '大地影院（老城帝都红旗店）', 'https://www.meituan.com/cate/5841618/', '重庆', '渝西广场', 'https://p0.meituan.net/deal/804f41a15a6f553633bbf4ef4c987bfd187560.jpg@275w_156h_1e_1c', '电影院', 0, 3.90, 00001441, 30.00, '023-49669992', '渝西广场玉屏路999号帝都红旗广场百货4楼', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1111, '私幕影吧（沙坪坝店）', 'https://www.meituan.com/xiuxianyule/174994966/', '重庆', '三峡广场', 'https://p1.meituan.net/merchantpic/6b600deda04e1a22677d5a5214a8666f620082.jpg@275w_156h_1e_1c', '私人影院', 0, 4.40, 00000101, NULL, '023-65651957/18983152913', '沙坪坝区沙坪坝三峡广场华宇世纪银河8-23', '周一至周日\n11:00-24:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1112, '东山精品私人影院', 'https://www.meituan.com/xiuxianyule/189753439/', '重庆', '南坪', 'https://p0.meituan.net/joymerchant/2eefa0a4d29d5ee018fffd6f1d933b60--335856189.jpg@275w_156h_1e_1c', '私人影院', 0, 3.50, 00000004, NULL, '023-62879888/18084084714', '南岸区重庆南岸区南坪西路一号楼商业大楼16楼', '周一至周日\n08:00-18:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1113, '遇见私人影院', 'https://www.meituan.com/xiuxianyule/77895677/', '重庆', '大学城', 'https://p0.meituan.net/merchantpic/d3554995528b7ca4f1a325a7f6fdf1f1432439.jpg@275w_156h_1e_1c', '私人影院', 0, 5.00, 00000324, NULL, '023-65659510/15213737068', '沙坪坝区大学城熙街熙都会2栋16-19（重师南门，海友酒店，麦当劳）', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1114, '8089私人影院', 'https://www.meituan.com/xiuxianyule/177901708/', '重庆', '金港国际', 'https://p1.meituan.net/joymerchant/-6192340234525818075-43922666-1534415978696.jpg@275w_156h_1e_1c', '私人影院', 0, 4.60, 00000062, NULL, '17782328688', '渝北区机场路金港国际19栋10-3（轻轨3/10号线T2航站楼7出口，戴斯酒店，兴业银行旁））', '周一至周日\n10:00-02:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1115, '金色印象影院式足体养生会馆（石油路店）', 'https://www.meituan.com/xiuxianyule/50803702/', '重庆', '大坪', 'https://p0.meituan.net/joymerchant/-334677111793481413-1054278-1536803697226.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 4.60, 00007325, 122.00, '023-68798180', '渝中区大坪石油支路118号嘉华鑫城（恒大名都旁）', '周一至周日\n全天', 106.5107690, 29.5429790, 0);
INSERT INTO `merchant` VALUES (1116, '江津电影院', 'https://www.meituan.com/cate/204017/', '重庆', '江津/重百', 'https://p1.meituan.net/poi/c16d2650ed5a440a19439676974c7bcb28672.jpg@275w_156h_1e_1c', '电影院', 0, 3.00, 00000000, NULL, '023-47530403/47982756', '江津/重百时代广场商业中心步行街', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1117, '重庆北欧风格影院式公寓', 'https://www.meituan.com/jiudian/173285892/', '重庆', '鸳鸯', 'https://p1.meituan.net/tdchotel/618e3f1883ec6383ca98e7bfdabc7b53390064.jpg@275w_156h_1e_1c', '城市民宿', 0, 4.90, 00000025, NULL, NULL, '渝北区金开大道1239号融科金开中心@#2-2座15楼9号', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1118, '江之南影城', 'https://www.meituan.com/cate/1438937/', '重庆', '弹子石', 'https://p0.meituan.net/deal/__39257003__4627391.jpg@275w_156h_1e_1c', '电影院', 0, 4.60, 00000103, 27.00, '023-62512316', '南岸区弹子石群慧路1号（宏声假日广场对面）', '周一至周日\n10:00-24:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1119, '逸轩影院式足浴养生', 'https://www.meituan.com/xiuxianyule/169468391/', '重庆', '渝北区', 'https://p0.meituan.net/merchantpic/4a477832f04d5fc22d80bcd6f6fa7e37501999.jpg@275w_156h_1e_1c', '按摩/足疗', 0, 4.50, 00000107, NULL, '023-63073676', '渝北区翠渝路55号美丽山西门', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1120, '桔子映像婚纱摄影', 'https://www.meituan.com/jiehun/41304658/', '重庆', '杨家坪', 'https://p1.meituan.net/wedding/064532305966170647a3675dec5934d3442095.jpg@275w_156h_1e_1c', '工作室', 0, 5.00, 00000165, 4034.00, NULL, '九龙坡区杨家坪步行街盛仁汇大厦银乐迪KTV小区内1楼门市（假日造型旁进口）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1121, '知了私人影院', 'https://www.meituan.com/xiuxianyule/187551027/', '重庆', '观音桥', 'https://p1.meituan.net/merchantpic/ffce8180ddefb7f06c76b9e3245894a9877251.jpg@275w_156h_1e_1c', '私人影院', 0, 5.00, 00000137, NULL, '023-88927935', '江北区观音桥红鼎国际A座37-11', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1122, '卡蓝私人影院Color Movie（中央大街店）', 'https://www.meituan.com/xiuxianyule/115209181/', '重庆', '渝西广场', 'https://p1.meituan.net/joymerchant/-7958600040977483631.JPG@275w_156h_1e_1c', '私人影院', 0, 4.70, 00000437, NULL, '13648428831/19923854149', '渝西广场中央大街5栋26-7室（中央大街沃尔玛入口建设银行）', '周一至周日\n全天\n\n2019-02-04至2019-02-05 休息', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1123, 'Box球迷俱乐部', 'https://www.meituan.com/xiuxianyule/178031481/', '重庆', '万达广场', 'https://p1.meituan.net/merchantpic/921f067bbc6bb2be400a9a9f03c48443975021.jpg@275w_156h_1e_1c', '电玩/游戏厅', 0, 3.80, 00000020, NULL, '17318440310/18690989931', '南岸区珊瑚路万达铭邸2栋27-6（万达13号观光电梯旁）', '周一至周日\n全天', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1124, '爱奇艺电影院', 'https://www.meituan.com/cate/163858425/', '重庆', '石桥铺', 'http://qcloud.dpfile.com/pc/xU9K6UnLbY8Ruep9AnUp19YdpeDBQmb_pElHj0AkbTPr6BQbIWx1htkz6M8-qiaoZSUjBikR5Ecy-DoGYkMhlg.jpg', '电影院', 0, 3.00, 00000000, NULL, '023-68659735', '九龙坡区石桥铺科园一路渝高c座4楼-1号', '周一至周日\n09:00-23:00', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1125, '打通土灶院子影院式老火锅', 'https://www.meituan.com/meishi/179968973/', '重庆', '南坪', 'https://p1.meituan.net/msmerchant/6a8a63858972aaf0712aec1d4f1d1be6132937.jpg@275w_156h_1e_1c', '重庆火锅', 1, 4.40, 00000150, 54.00, NULL, '南岸区南城大道10号（南城大道公交车站斜对面）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1126, '白描·映画私人影吧', 'https://www.meituan.com/xiuxianyule/165293468/', '重庆', '龙湖时代天街', 'https://p0.meituan.net/joymerchant/-4124389724072377862-14534111-1522080375739.jpg@275w_156h_1e_1c', '私人影院', 0, 4.90, 00000102, NULL, '19923014108', '渝中区医学院路大坪龙湖时代天街D馆12栋17楼0607室（时代天街D馆汉堡王对面）', '周一至周日\n12:30-23:30', NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1127, '慕思国际摄影工作室', 'https://www.meituan.com/jiehun/60466435/', '重庆', '观音桥', 'https://p0.meituan.net/wedding/4c4b5431c23fb5428e640bc1f067a067212830.jpg@275w_156h_1e_1c', '工作室', 0, 5.00, 00000149, 3513.00, NULL, '江北区观音桥步行街融恒时代广场13-4号（轻轨观音桥3号出口右手边）', NULL, NULL, NULL, 0);
INSERT INTO `merchant` VALUES (1128, '花田映画婚纱摄影（巴南万达广场店）', 'https://www.meituan.com/jiehun/160723635/', '重庆', '万达广场', 'https://p1.meituan.net/wedding/e902f974c33526f1c8721bf62ce134ab284379.jpg@275w_156h_1e_1c', '其他婚纱摄影', 0, 4.40, 00000016, NULL, NULL, '巴南区3号线学堂湾轻轨站2号出口旁跨越中心7-3', NULL, NULL, NULL, 0);
COMMIT;

-- ----------------------------
-- Table structure for schedule
-- ----------------------------
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule` (
  `schedule_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `schedule_founder` int(8) unsigned NOT NULL,
  `schedule_found_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `schedule_number` int(8) unsigned NOT NULL DEFAULT '1',
  `schedule_time` date NOT NULL,
  `schedule_morning` int(11) unsigned DEFAULT NULL,
  `schedule_noon` int(11) unsigned DEFAULT NULL,
  `schedule_afternoon` int(11) unsigned DEFAULT NULL,
  `schedule_dinner` int(11) unsigned DEFAULT NULL,
  `city` varchar(16) NOT NULL,
  `schedule_name` varchar(160) NOT NULL,
  PRIMARY KEY (`schedule_id`),
  KEY `id` (`schedule_id`) USING BTREE,
  KEY `search` (`schedule_time`) USING BTREE,
  KEY `founder` (`schedule_founder`) USING HASH,
  KEY `fk_schedule_1` (`schedule_morning`),
  KEY `fk_schedule_2` (`schedule_noon`),
  KEY `fk_schedule_3` (`schedule_afternoon`),
  KEY `fk_schedule_4` (`schedule_dinner`),
  CONSTRAINT `fk_schedule` FOREIGN KEY (`schedule_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for share_friend_merchant
-- ----------------------------
DROP TABLE IF EXISTS `share_friend_merchant`;
CREATE TABLE `share_friend_merchant` (
  `share_content_id` int(11) unsigned NOT NULL,
  `share_founder` int(8) unsigned NOT NULL,
  `share_link` int(11) unsigned NOT NULL,
  `share_up` int(16) unsigned NOT NULL DEFAULT '0',
  `share_down` int(16) unsigned NOT NULL DEFAULT '0',
  `share_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`share_content_id`,`share_link`,`share_founder`) USING BTREE,
  KEY `link` (`share_link`) USING BTREE,
  KEY `ufounder` (`share_founder`),
  CONSTRAINT `centent` FOREIGN KEY (`share_content_id`) REFERENCES `merchant` (`merchant_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `share_link` FOREIGN KEY (`share_link`) REFERENCES `friend` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ufounder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for share_friend_schedule
-- ----------------------------
DROP TABLE IF EXISTS `share_friend_schedule`;
CREATE TABLE `share_friend_schedule` (
  `share_content_id` int(11) unsigned NOT NULL,
  `share_founder` int(8) unsigned NOT NULL,
  `share_link` int(11) unsigned NOT NULL,
  `share_up` int(16) unsigned NOT NULL DEFAULT '0',
  `share_down` int(16) unsigned NOT NULL DEFAULT '0',
  `share_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`share_content_id`,`share_link`,`share_founder`) USING BTREE,
  KEY `link` (`share_link`) USING BTREE,
  KEY `fk_share_friend_schedule_fonder` (`share_founder`),
  CONSTRAINT `fk_share_friend_schedule_content` FOREIGN KEY (`share_content_id`) REFERENCES `schedule` (`schedule_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_share_friend_schedule_fonder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_share_friend_schedule_link` FOREIGN KEY (`share_link`) REFERENCES `friend` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for share_group_merchant
-- ----------------------------
DROP TABLE IF EXISTS `share_group_merchant`;
CREATE TABLE `share_group_merchant` (
  `share_content_id` int(11) unsigned NOT NULL,
  `share_founder` int(8) unsigned NOT NULL,
  `share_link` int(11) unsigned NOT NULL,
  `share_up` int(16) unsigned NOT NULL DEFAULT '0',
  `share_down` int(16) unsigned NOT NULL DEFAULT '0',
  `share_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`share_content_id`,`share_link`,`share_founder`) USING BTREE,
  KEY `link` (`share_link`) USING BTREE,
  KEY `fk_share_group_merchant_founder` (`share_founder`),
  CONSTRAINT `fk_share_group_merchant_content` FOREIGN KEY (`share_content_id`) REFERENCES `merchant` (`merchant_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_share_group_merchant_founder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_share_group_merchant_link` FOREIGN KEY (`share_link`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for share_group_schedule
-- ----------------------------
DROP TABLE IF EXISTS `share_group_schedule`;
CREATE TABLE `share_group_schedule` (
  `share_content_id` int(11) unsigned NOT NULL,
  `share_founder` int(8) unsigned NOT NULL,
  `share_link` int(11) unsigned NOT NULL,
  `share_up` int(16) unsigned NOT NULL DEFAULT '0',
  `share_down` int(16) unsigned NOT NULL DEFAULT '0',
  `share_time` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`share_content_id`,`share_link`,`share_founder`) USING BTREE,
  KEY `link` (`share_link`) USING BTREE,
  KEY `fk_share_group_schedule_founder` (`share_founder`),
  CONSTRAINT `fk_share_group_schedule_content` FOREIGN KEY (`share_content_id`) REFERENCES `schedule` (`schedule_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_share_group_schedule_founder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_share_group_schedule_link` FOREIGN KEY (`share_link`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_uname` varchar(100) NOT NULL,
  `user_psw` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_age` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `user_sex` char(2) NOT NULL,
  `user_city` varchar(16) NOT NULL,
  `user_tele` varchar(16) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_wechat` varchar(32) DEFAULT NULL,
  `user_qq` text,
  `user_ffood` varchar(16) DEFAULT NULL,
  `user_hobby` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `getById` (`user_id`) USING BTREE,
  UNIQUE KEY `uname` (`user_uname`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
BEGIN;
INSERT INTO `user` VALUES (1, 'admin', 'admin', '管理员', 0, '女', '重庆', '', '', NULL, NULL, NULL, '火锅', '健身');
INSERT INTO `user` VALUES (2, '未知', 'inivbdfvhbdfhvbdfhbsvhbvh', '未知', 0, '男', '重庆', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

-- ----------------------------
-- View structure for merchant_chongqing_food
-- ----------------------------
DROP VIEW IF EXISTS `merchant_chongqing_food`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `merchant_chongqing_food` AS select `merchant`.`merchant_id` AS `merchant_id`,`merchant`.`merchant_name` AS `merchant_name`,`merchant`.`merchant_link` AS `merchant_link`,`merchant`.`district` AS `district`,`merchant`.`merchant_img` AS `merchant_img`,`merchant`.`merchant_category` AS `merchant_category`,`merchant`.`merchant_score` AS `merchant_score`,`merchant`.`merchant_comment` AS `merchant_comment`,`merchant`.`merchant_avgprice` AS `merchant_avgprice`,`merchant`.`merchant_telephone` AS `merchant_telephone`,`merchant`.`merchant_address` AS `merchant_address`,`merchant`.`merchant_worktime` AS `merchant_worktime` from `merchant` where (`merchant`.`merchant_food` = 1) order by `merchant`.`merchant_comment` desc;

-- ----------------------------
-- View structure for merchant_chongqing_other
-- ----------------------------
DROP VIEW IF EXISTS `merchant_chongqing_other`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `merchant_chongqing_other` AS select `merchant`.`merchant_id` AS `merchant_id`,`merchant`.`merchant_name` AS `merchant_name`,`merchant`.`merchant_link` AS `merchant_link`,`merchant`.`district` AS `district`,`merchant`.`merchant_img` AS `merchant_img`,`merchant`.`merchant_category` AS `merchant_category`,`merchant`.`merchant_score` AS `merchant_score`,`merchant`.`merchant_comment` AS `merchant_comment`,`merchant`.`merchant_avgprice` AS `merchant_avgprice`,`merchant`.`merchant_telephone` AS `merchant_telephone`,`merchant`.`merchant_address` AS `merchant_address`,`merchant`.`merchant_worktime` AS `merchant_worktime` from `merchant` where (`merchant`.`merchant_food` = 0) order by `merchant`.`merchant_comment` desc;


SET FOREIGN_KEY_CHECKS = 1;
