<?php


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_jfgoods')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '名称',
  `img` varchar(100) NOT NULL,
  `score` int(11) NOT NULL COMMENT '所需积分',
  `type_id` int(11) NOT NULL COMMENT '分类id',
  `goods_details` text NOT NULL,
  `process_details` text NOT NULL,
  `attention_details` text NOT NULL,
  `number` int(11) NOT NULL COMMENT '数量',
  `time` varchar(50) NOT NULL COMMENT '期限',
  `is_open` int(11) NOT NULL COMMENT '1.开启2关闭',
  `type` int(11) NOT NULL COMMENT '1.余额2.实物',
  `num` int(11) NOT NULL COMMENT '排序',
  `end_time` int(11) NOT NULL COMMENT '兑换截止时间',
  `uniacid` int(11) NOT NULL,
  `hb_moeny` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_jfhb')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `money` decimal(10,2) NOT NULL COMMENT '红包金额',
  `state` int(4) NOT NULL DEFAULT '1' COMMENT '1新增,2使用',
  `time` int(11) NOT NULL COMMENT '时间',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='积分红包表';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_jfrecord')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `good_id` int(11) NOT NULL COMMENT '商品id',
  `time` varchar(20) NOT NULL COMMENT '兑换时间',
  `user_name` varchar(20) NOT NULL COMMENT '用户地址',
  `user_tel` varchar(20) NOT NULL COMMENT '用户电话',
  `address` varchar(200) NOT NULL COMMENT '地址',
  `note` varchar(20) NOT NULL,
  `integral` int(11) NOT NULL COMMENT '积分',
  `good_name` varchar(50) NOT NULL COMMENT '商品名称',
  `good_img` varchar(100) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '2' COMMENT '1.未处理 2.已处理',
  `kd_name` varchar(30) NOT NULL COMMENT '快递公司',
  `kd_num` varchar(50) NOT NULL COMMENT '快递编号'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_account')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属帐号',
  `storeid` varchar(1000) NOT NULL COMMENT '门店id',
  `uid` int(10) unsigned NOT NULL DEFAULT '0',
  `from_user` varchar(100) NOT NULL DEFAULT '',
  `accountname` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(200) NOT NULL DEFAULT '',
  `salt` varchar(10) NOT NULL DEFAULT '',
  `pwd` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pay_account` varchar(200) NOT NULL,
  `displayorder` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '2' COMMENT '状态',
  `role` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1:店长,2:店员',
  `lastvisit` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(15) NOT NULL,
  `areaid` int(10) NOT NULL DEFAULT '0' COMMENT '区域id',
  `is_admin_order` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_order` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_queue` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_service` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_notice_boss` tinyint(1) NOT NULL DEFAULT '0',
  `remark` varchar(1000) NOT NULL DEFAULT '' COMMENT '备注',
  `lat` decimal(18,10) NOT NULL DEFAULT '0.0000000000' COMMENT '经度',
  `lng` decimal(18,10) NOT NULL DEFAULT '0.0000000000' COMMENT '纬度'
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_withdrawal')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '真实姓名',
  `username` varchar(100) NOT NULL COMMENT '账号',
  `type` int(11) NOT NULL COMMENT '1支付宝 2.微信 3.银行',
  `time` varchar(20) NOT NULL COMMENT '申请时间',
  `sh_time` varchar(20) NOT NULL COMMENT '审核时间',
  `state` int(11) NOT NULL COMMENT '1.待审核 2.通过  3.拒绝',
  `tx_cost` decimal(10,2) NOT NULL COMMENT '提现金额',
  `sj_cost` decimal(10,2) NOT NULL COMMENT '实际金额',
  `seller_id` int(11) NOT NULL COMMENT '商家id',
  `is_delete` int(4) NOT NULL DEFAULT '1' COMMENT '1显示,2删除',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_commission_withdrawal')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `state` int(11) NOT NULL COMMENT '1.审核中2.通过3.拒绝',
  `time` int(11) NOT NULL COMMENT '申请时间',
  `sh_time` int(11) NOT NULL COMMENT '审核时间',
  `uniacid` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL COMMENT '姓名',
  `account` varchar(100) NOT NULL COMMENT '账号',
  `tx_cost` decimal(10,2) NOT NULL COMMENT '提现金额',
  `sj_cost` decimal(10,2) NOT NULL COMMENT '实际到账金额',
  `note` varchar(50) NOT NULL DEFAULT '提现'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='佣金提现';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_distribution')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_tel` varchar(20) NOT NULL,
  `state` int(11) NOT NULL COMMENT '1.审核中2.通过3.拒绝',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='分销申请';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_earnings')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `order_id` int(11) NOT NULL COMMENT '订单ID',
  `user_id` int(11) NOT NULL,
  `son_id` int(11) NOT NULL COMMENT '下线',
  `money` decimal(10,2) NOT NULL,
  `time` int(11) NOT NULL,
  `note` varchar(50) NOT NULL COMMENT '备注',
  `state` int(4) NOT NULL COMMENT '佣金状态,1冻结,2有效,3无效',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='佣金收益表';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_fxset')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fx_details` text NOT NULL COMMENT '分销商申请协议',
  `tx_details` text NOT NULL COMMENT '佣金提现协议',
  `is_fx` int(11) NOT NULL COMMENT '1.开启分销审核2.不开启',
  `is_ej` int(11) NOT NULL COMMENT '是否开启二级分销1.是2.否',
  `tx_rate` int(11) NOT NULL COMMENT '提现手续费',
  `commission` varchar(10) NOT NULL COMMENT '一级佣金',
  `commission2` varchar(10) NOT NULL COMMENT '二级佣金',
  `tx_money` int(11) NOT NULL COMMENT '提现门槛',
  `img` varchar(100) NOT NULL COMMENT '分销中心图片',
  `img2` varchar(100) NOT NULL COMMENT '申请分销图片',
  `uniacid` int(11) NOT NULL,
  `is_open` int(11) NOT NULL DEFAULT '1' COMMENT '1.开启2关闭',
  `instructions` text NOT NULL COMMENT '分销商说明'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_fxuser')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '一级分销',
  `fx_user` int(11) NOT NULL COMMENT '二级分销',
  `time` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_czhd')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `full` int(11) NOT NULL,
  `reduction` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_recharge')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
   `user_id` int(11) NOT NULL COMMENT '用户id',
  `cz_money` decimal(10,2) NOT NULL COMMENT '充值金额',
  `zs_money` decimal(10,2) NOT NULL COMMENT '赠送金额',
  `note` varchar(30) NOT NULL DEFAULT '在线充值' COMMENT '备注信息',
  `out_trade_no` varchar(30) NOT NULL COMMENT '商户号',
  `state` int(4) NOT NULL DEFAULT '1' COMMENT '1未付款,2已付款',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='充值表';"

);

 if (!pdo_fieldexists(tablename('zh_jdgjb_room'), 'sort')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_room')." ADD `sort` INT(11) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_score'), 'goods_id')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_score')." ADD `goods_id` INT(11) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_score'), 'type')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_score')." ADD `type` INT(4) NOT NULL DEFAULT '1' ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'is_use')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `is_use` INT(4) NOT NULL DEFAULT '1' ;");
}


 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'hb_cost')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `hb_cost` DECIMAL(10,2) NOT NULL ;");
}


 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'hb_id')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `hb_id` INT(11) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_level'), 'content')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_level')." ADD `content` TEXT NOT NULL ;");
}


if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'll_num')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `ll_num` INT(11) NOT NULL ;");
}


if (!pdo_fieldexists(tablename('zh_jdgjb_room'), 'state')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_room')." ADD `state` INT(4) NOT NULL DEFAULT '1' ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'bd_id')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `bd_id` INT(11) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('cjdc_user'), 'commission')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `commission` DECIMAL(10,2) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'hy_img')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `hy_img` VARCHAR(100) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'from_id')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `from_id` VARCHAR(50) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'rz_tid')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `rz_tid` VARCHAR(50) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_room'), 'classify')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_room')." ADD `classify` INT(4) NOT NULL DEFAULT '1' ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'open_member')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `open_member` INT(4) NOT NULL DEFAULT '1' ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'classify')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `classify` INT(4) NOT NULL DEFAULT '1' ;");
}

 if (!pdo_fieldexists(tablename('cjdc_user'), 'wallet')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `wallet` DECIMAL(10,2) NOT NULL;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'ye_open')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `ye_open` DECIMAL(10,2) NOT NULL;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'type')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `type` INT(4) NOT NULL DEFAULT '1';");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'wx_open')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `wx_open` INT(4) NOT NULL DEFAULT '1';");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'dd_open')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `dd_open` INT(4) NOT NULL DEFAULT '1';");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'code')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `code` VARCHAR(20) NOT NULL;");
}
 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'jjrz_tid')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `jjrz_tid` VARCHAR(50) NOT NULL;");
}
 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'jj_time')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `jj_time` INT(11) NOT NULL;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'is_sfz')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `is_sfz` INT(4) NOT NULL DEFAULT '2';");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_room'), 'rz_time')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_room')." ADD `rz_time` VARCHAR(4) NOT NULL;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'tpl_id2')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `tpl_id2` VARCHAR(10) NOT NULL;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'voice')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `voice` INT(4) NOT NULL DEFAULT '1' ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_account'), 'authority')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_account')." ADD `authority` TEXT NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'is_order')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `is_order` INT(4) NOT NULL DEFAULT '2' ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_order'), 'qr_fromid')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_order')." ADD `qr_fromid` VARCHAR(50) NOT NULL;");
}


 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'tid3')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `tid3` VARCHAR(100) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'tid4')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `tid4` VARCHAR(100) NOT NULL ;");
}

 if (!pdo_fieldexists(tablename('cjdc_user'), 'dj_money')) {
    pdo_query("ALTER TABLE".tablename('cjdc_user')." ADD `dj_money` DECIMAL(10,2) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'is_score')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `is_score` INT(4) NOT NULL DEFAULT '1';");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'jd_custom')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `jd_custom` VARCHAR(50) NOT NULL DEFAULT '酒店';");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'aliyun_appkey')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `aliyun_appkey` VARCHAR(50) NOT NULL ;");
}
if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'aliyun_appsecret')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `aliyun_appsecret` VARCHAR(50) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'aliyun_sign')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `aliyun_sign` VARCHAR(50) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'aliyun_id')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `aliyun_id` VARCHAR(50) NOT NULL ;");
}
if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'item')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `item` INT( 1 ) NOT NULL DEFAULT  '1' COMMENT  '1聚合,2阿里云';");
}
if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'aliyun_id2')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `aliyun_id2` VARCHAR(50) NOT NULL ;");
}
if (!pdo_fieldexists(tablename('zh_jdgjb_notice'), 'aliyun_appkey')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_notice')." ADD `aliyun_appkey` VARCHAR(50) NOT NULL ;");
}
if (!pdo_fieldexists(tablename('zh_jdgjb_notice'), 'aliyun_appsecret')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_notice')." ADD `aliyun_appsecret` VARCHAR(50) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_notice'), 'aliyun_sign')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_notice')." ADD `aliyun_sign` VARCHAR(50) NOT NULL ;");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_notice'), 'aliyun_id')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_notice')." ADD `aliyun_id` VARCHAR(50) NOT NULL ;");
}
if (!pdo_fieldexists(tablename('zh_jdgjb_notice'), 'item')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_notice')." ADD `item` INT( 1 ) NOT NULL DEFAULT  '1' COMMENT  '1聚合,2阿里云';");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'cityName')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `cityName` VARCHAR( 30 ) NOT NULL COMMENT  '城市名称';");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_seller'), 'provinceName')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_seller')." ADD `provinceName` VARCHAR( 30 ) NOT NULL COMMENT  '省名称';");
}

if (!pdo_fieldexists(tablename('zh_jdgjb_system'), 'openCity')) {
    pdo_query("ALTER TABLE".tablename('zh_jdgjb_system')." ADD `openCity` INT( 1 ) NOT NULL DEFAULT  '2' COMMENT  '多城市，1开启，2关闭';");
}



?>