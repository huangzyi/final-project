ALTER TABLE `friend` (
`link_id` int(16) UNSIGNED NOT NULL AUTO_INCREMENT,
`uid1` int(8) UNSIGNED NOT NULL,
`uid2` int(8) UNSIGNED NOT NULL,
PRIMARY KEY (`link_id`) ,
INDEX `uid_link1` (`uid1` ASC) USING BTREE,
INDEX `uid_link2` (`uid2` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 1
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Dynamic
STATS_SAMPLE_PAGES = 0;
ALTER TABLE `merchant` (
`merchant_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`merchant_name` varchar(255) NOT NULL,
`merchant_link` varchar(255) NOT NULL,
`city` varchar(16) NOT NULL,
`district` varchar(32) NOT NULL,
`merchant_img` varchar(255) NOT NULL,
`merchant_category` varchar(32) NOT NULL,
`merchant_food` tinyint(1) UNSIGNED NOT NULL,
`merchant_score` decimal(3,2) UNSIGNED NULL DEFAULT NULL,
`merchant_comment` int(16) UNSIGNED NOT NULL,
`merchant_avgprice` decimal(8,2) UNSIGNED NULL DEFAULT NULL,
`merchant_telephone` varchar(32) NULL DEFAULT NULL,
`merchant_address` varchar(255) NULL DEFAULT NULL,
`merchant_worktime` varchar(255) NULL DEFAULT NULL,
`merchant_discount1` varchar(255) NULL DEFAULT NULL,
`merchant_discount1_price` decimal(10,2) NULL DEFAULT NULL,
`merchant_discount1_value` decimal(10,2) NULL DEFAULT NULL,
`merchant_discount1_sales` int(8) UNSIGNED NULL DEFAULT NULL,
`merchant_discount2` varchar(255) NULL DEFAULT NULL,
`merchant_discount2_price` decimal(10,2) NULL DEFAULT NULL,
`merchant_discount2_value` decimal(10,2) NULL DEFAULT NULL,
`merchant_discount2_sales` int(8) UNSIGNED NULL DEFAULT NULL,
`merchant_otherdiscount` varchar(255) NULL DEFAULT NULL,
PRIMARY KEY (`merchant_id`) ,
INDEX `id` (`merchant_id` ASC) USING BTREE,
INDEX `keyword` (`merchant_name` ASC, `merchant_category` ASC) USING HASH
)
ENGINE = InnoDB
AUTO_INCREMENT = 1129
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Dynamic
STATS_SAMPLE_PAGES = 0;
CREATE TABLE `user` (
`user_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`user_uname` varchar(100) NOT NULL,
`user_psw` varchar(30) NOT NULL,
`user_name` varchar(100) NOT NULL,
`user_age` tinyint(3) UNSIGNED NOT NULL,
`user_sex` char(2) NOT NULL,
`user_city` varchar(16) NOT NULL,
`user_tele` varchar(16) NULL DEFAULT NULL,
`user_address` varchar(255) NULL DEFAULT NULL,
`user_email` varchar(50) NULL DEFAULT NULL,
`user_wechat` varchar(32) NULL DEFAULT NULL,
`user_qq` text NULL,
`user_food_type` varchar(16) NULL DEFAULT NULL,
`user_hobby` varchar(16) NULL DEFAULT NULL,
PRIMARY KEY (`user_id`) ,
INDEX `getById` (`user_id` ASC) USING BTREE
)
ENGINE = InnoDB
AUTO_INCREMENT = 2
AVG_ROW_LENGTH = 0
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
KEY_BLOCK_SIZE = 0
MAX_ROWS = 0
MIN_ROWS = 0
ROW_FORMAT = Dynamic
STATS_SAMPLE_PAGES = 0;
ALTER TABLE `group` (
`group_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`group_name` varchar(100) NOT NULL,
`group_number` int(4) UNSIGNED NOT NULL DEFAULT 1,
`group_founder` int(8) NOT NULL,
`group_intro` varchar(255) NULL,
PRIMARY KEY (`group_id`) ,
UNIQUE INDEX `id` (`group_id` ASC) USING BTREE
);
CREATE TABLE `member` (
`member_id` int(8) UNSIGNED NOT NULL,
`member_group_id` int(11) UNSIGNED NOT NULL,
INDEX `group` (`member_group_id` ASC) USING HASH,
INDEX `member` (`member_id` ASC) USING HASH
);
CREATE TABLE `dialog_friend` (
`dialog_uid` int(8) NOT NULL,
`dialog_time` timestamp(4) NOT NULL ON UPDATE CURRENT_TIMESTAMP(4),
`dialog_content` varchar(255) NOT NULL,
`dialog_link` int(11) NOT NULL,
INDEX `uid` (`dialog_uid` ASC) USING HASH,
INDEX `time` (`dialog_time` ASC) USING BTREE
);
CREATE TABLE `dialog_group` (
`dialog_uid` varchar(100) NOT NULL,
`dialog_time` timestamp(4) NOT NULL ON UPDATE CURRENT_TIMESTAMP(4),
`dialog_content` varchar(255) NOT NULL,
`dialog_link` int(11) NOT NULL,
INDEX `uid` (`dialog_uid` ASC) USING HASH,
INDEX `time` (`dialog_time` ASC) USING BTREE
);
CREATE TABLE `schedule` (
`schedule_id` int(11) NOT NULL,
`schedule_founder` int(8) NOT NULL,
`schedule_found_time` timestamp(4) NOT NULL ON UPDATE CURRENT_TIMESTAMP(4),
`schedule_number` int(8) NOT NULL DEFAULT 1,
`schedule_time` date NOT NULL,
`schedule_morning` int(11) UNSIGNED NULL,
`schedule_noon` int(11) UNSIGNED NULL,
`schedule_afternoon` int(11) NULL,
`schedule_dinner` int(11) NULL,
PRIMARY KEY (`schedule_id`) ,
INDEX `id` (`schedule_id` ASC) USING BTREE,
INDEX `search` (`schedule_time` ASC) USING BTREE,
INDEX `founder` (`schedule_founder` ASC) USING HASH
);
CREATE TABLE `share_friend_merchant` (
`share_content_id` int(11) UNSIGNED NOT NULL,
`share_founder` int(8) NOT NULL,
`share_link` int(11) UNSIGNED NOT NULL,
`share_up` int(16) UNSIGNED NOT NULL,
`share_down` int(16) UNSIGNED NOT NULL,
INDEX `link` (`share_link` ASC) USING BTREE
);
CREATE TABLE `share_friend_schedule` (
`share_content_id` int(11) UNSIGNED NOT NULL,
`share_founder` int(8) UNSIGNED NOT NULL,
`share_link` int(11) UNSIGNED NOT NULL,
`share_up` int(16) UNSIGNED NOT NULL,
`share_down` int(16) UNSIGNED NOT NULL,
INDEX `link` (`share_link` ASC) USING BTREE
);
CREATE TABLE `share_group_schedule` (
`share_content_id` int(11) UNSIGNED NOT NULL,
`share_founder` int(8) NOT NULL,
`share_link` int(11) UNSIGNED NOT NULL,
`share_up` int(16) UNSIGNED NOT NULL,
`share_down` int(16) UNSIGNED NOT NULL,
INDEX `link` (`share_link` ASC) USING BTREE
);
CREATE TABLE `share_group_merchant` (
`share_content_id` int(11) UNSIGNED NOT NULL,
`share_founder` int(8) NOT NULL,
`share_link` int(11) UNSIGNED NOT NULL,
`share_up` int(16) UNSIGNED NOT NULL,
`share_down` int(16) UNSIGNED NOT NULL,
INDEX `link` (`share_link` ASC) USING BTREE
);

ALTER TABLE `friend` ADD CONSTRAINT `uid_link1` FOREIGN KEY (`uid1`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `friend` ADD CONSTRAINT `uid_link2` FOREIGN KEY (`uid2`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `member` ADD CONSTRAINT `member` FOREIGN KEY (`member_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `dialog_friend` ADD CONSTRAINT `link` FOREIGN KEY (`dialog_link`) REFERENCES `friend` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `schedule` ADD CONSTRAINT `amu` FOREIGN KEY (`schedule_morning`, `schedule_noon`, `schedule_afternoon`) REFERENCES `merchant` (`merchant_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_friend_merchant` ADD CONSTRAINT `content` FOREIGN KEY (`share_content_id`) REFERENCES `merchant` (`merchant_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_friend_merchant` ADD CONSTRAINT `share_link` FOREIGN KEY (`share_link`) REFERENCES `friend` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `share_friend_merchant` ADD CONSTRAINT `ufounder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `dialog_group` ADD CONSTRAINT `fk_dialog_group_name` FOREIGN KEY (`dialog_uid`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `dialog_friend` ADD CONSTRAINT `fk_dialog_friend_founder` FOREIGN KEY (`dialog_uid`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_friend_schedule` ADD CONSTRAINT `fk_share_friend_schedule_content` FOREIGN KEY (`share_content_id`) REFERENCES `schedule` (`schedule_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_friend_schedule` ADD CONSTRAINT `fk_share_friend_schedule_fonder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_friend_schedule` ADD CONSTRAINT `fk_share_friend_schedule_link` FOREIGN KEY (`share_link`) REFERENCES `friend` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `share_group_schedule` ADD CONSTRAINT `fk_share_group_schedule_link` FOREIGN KEY (`share_link`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE `share_group_schedule` ADD CONSTRAINT `fk_share_group_schedule_founder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_group_schedule` ADD CONSTRAINT `fk_share_group_schedule_content` FOREIGN KEY (`share_content_id`) REFERENCES `schedule` (`schedule_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_group_merchant` ADD CONSTRAINT `fk_share_group_merchant_content` FOREIGN KEY (`share_content_id`) REFERENCES `merchant` (`merchant_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_group_merchant` ADD CONSTRAINT `fk_share_group_merchant_founder` FOREIGN KEY (`share_founder`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `share_group_merchant` ADD CONSTRAINT `fk_share_group_merchant_link` FOREIGN KEY (`share_link`) REFERENCES `group` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE 
VIEW `group` AS 
;
CREATE 
VIEW `merchant_chongqing_food` AS 
SELECT
merchant.merchant_id,
merchant.merchant_name,
merchant.merchant_link,
merchant.district,
merchant.merchant_img,
merchant.merchant_category,
merchant.merchant_score,
merchant.merchant_comment,
merchant.merchant_avgprice,
merchant.merchant_telephone,
merchant.merchant_address,
merchant.merchant_worktime
FROM
merchant
WHERE
merchant_food=1
ORDER BY
merchant.merchant_comment DESC;
CREATE 
VIEW `merchant_chongqing_other` AS 
SELECT
merchant.merchant_id,
merchant.merchant_name,
merchant.merchant_link,
merchant.district,
merchant.merchant_img,
merchant.merchant_category,
merchant.merchant_score,
merchant.merchant_comment,
merchant.merchant_avgprice,
merchant.merchant_telephone,
merchant.merchant_address,
merchant.merchant_worktime
FROM
merchant
WHERE
merchant_food=0
ORDER BY
merchant.merchant_comment DESC;
CREATE 
VIEW `user` AS 
SELECT
`user`.user_id,
`user`.user_name,
`user`.user_age,
`user`.user_sex,
`user`.user_city,
`user`.user_tele,
`user`.user_address,
`user`.user_email,
`user`.user_wechat,
`user`.user_qq,
`user`.user_food_type,
`user`.user_hobby
FROM
`user`;
