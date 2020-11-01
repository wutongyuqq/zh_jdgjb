<?php


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_ad')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '轮播图标题',
  `logo` varchar(200) NOT NULL COMMENT '图片',
  `status` int(11) NOT NULL COMMENT '1.开启  2.关闭',
  `src` varchar(100) NOT NULL COMMENT '链接',
  `orderby` int(11) NOT NULL COMMENT '排序',
  `xcx_name` varchar(20) NOT NULL,
  `appid` varchar(20) NOT NULL,
  `uniacid` int(11) NOT NULL COMMENT '小程序id',
  `type` int(11) NOT NULL COMMENT '1开屏',
  `wb_src` varchar(300) NOT NULL COMMENT '外部链接',
  `state` int(4) NOT NULL DEFAULT '1' COMMENT '1内部，2外部,3跳转'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_assess')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL COMMENT '商家ID',
  `score` int(11) NOT NULL COMMENT '分数',
  `content` text NOT NULL COMMENT '评价内容',
  `img` varchar(1000) NOT NULL COMMENT '图片',
  `time` int(11) NOT NULL COMMENT '创建时间',
  `user_id` int(11) NOT NULL COMMENT '用户ID',
  `uniacid` varchar(50) NOT NULL,
  `reply` varchar(1000) NOT NULL COMMENT '商家回复',
  `status` int(4) NOT NULL COMMENT '评价状态1，未回复，2已回复',
  `reply_time` int(11) NOT NULL COMMENT '回复时间'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='评价表';"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_coupons')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL COMMENT '门店ID',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `name` varchar(50) NOT NULL COMMENT '优惠券名称',
  `start_time` varchar(20) NOT NULL COMMENT '开始时间',
  `end_time` varchar(20) NOT NULL COMMENT '结束时间',
  `conditions` varchar(100) NOT NULL COMMENT '优惠条件',
  `number` int(11) NOT NULL COMMENT '发布数量',
  `cost` decimal(10,2) NOT NULL COMMENT '金额',
  `type` int(4) NOT NULL COMMENT '发布类型1,平台,2门店',
  `introduce` varchar(100) NOT NULL COMMENT '说明',
  `lq_num` int(11) NOT NULL COMMENT '领取数量',
  `klqzs` int(11) NOT NULL DEFAULT '1' COMMENT '每人可领取张数',
  `time` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL COMMENT '小程序id'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='优惠券';"
);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_dyj')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `dyj_title` varchar(50) NOT NULL COMMENT '打印机标题',
  `dyj_id` varchar(50) NOT NULL COMMENT '打印机编号',
  `dyj_key` varchar(50) NOT NULL COMMENT '打印机key',
  `uniacid` varchar(50) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1.365  2.易联云，3飞蛾',
  `name` varchar(20) NOT NULL COMMENT '打印机名称',
  `mid` varchar(100) NOT NULL COMMENT '打印机终端号',
  `api` varchar(100) NOT NULL COMMENT 'API密钥',
  `seller_id` int(11) NOT NULL COMMENT '商家ID',
  `state` int(11) NOT NULL COMMENT '1开启2关闭',
  `yy_id` varchar(20) NOT NULL COMMENT '用户id',
  `token` varchar(50) NOT NULL COMMENT '打印机终端密钥',
  `dyj_title2` varchar(50) NOT NULL,
  `dyj_id2` varchar(50) NOT NULL,
  `dyj_key2` varchar(50) NOT NULL,
  `fezh` varchar(40) NOT NULL COMMENT '飞蛾账号',
  `fe_ukey` varchar(50) NOT NULL COMMENT 'ukey',
  `fe_dycode` varchar(20) NOT NULL COMMENT '打印机编号'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_jftype')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `num` int(11) NOT NULL,
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='积分商城分类';"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_level')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL COMMENT '商家ID',
  `name` varchar(50) NOT NULL COMMENT '会员名称',
  `value` decimal(10,2) NOT NULL COMMENT '设置金额',
  `icon` varchar(100) NOT NULL COMMENT '图标',
  `discount` varchar(10) NOT NULL COMMENT '折扣',
  `orderby` int(4) NOT NULL COMMENT '排序',
  `uniacid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='会员等级表';"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_nav')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '名称',
  `logo` varchar(200) NOT NULL COMMENT '图标',
  `status` int(11) NOT NULL COMMENT '1.开启  2.关闭',
  `src` varchar(100) NOT NULL COMMENT '内部链接',
  `orderby` int(11) NOT NULL COMMENT '排序',
  `xcx_name` varchar(20) NOT NULL COMMENT '小程序名称',
  `appid` varchar(20) NOT NULL COMMENT 'APPID',
  `uniacid` int(11) NOT NULL COMMENT '小程序id',
  `wb_src` varchar(300) NOT NULL COMMENT '外部链接',
  `state` int(4) NOT NULL DEFAULT '1' COMMENT '1内部，2外部,3跳转'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_notice')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL COMMENT '商家ID',
  `js_tel` varchar(20) NOT NULL COMMENT '接收人手机号',
  `tpl_id` varchar(10) NOT NULL COMMENT '模板id',
  `appkey` varchar(50) NOT NULL COMMENT '应用密钥',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='通知表';"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_order')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL COMMENT '房ID',
  `user_id` int(11) NOT NULL,
  `coupons_id` int(11) NOT NULL COMMENT '优惠券ID',
  `order_no` varchar(50) NOT NULL,
  `seller_name` varchar(50) NOT NULL,
  `seller_address` varchar(100) NOT NULL COMMENT '商家地址',
  `coordinates` varchar(50) NOT NULL COMMENT '经纬度',
  `arrival_time` datetime NOT NULL COMMENT '入住时间',
  `departure_time` datetime NOT NULL COMMENT '离店时间',
  `dd_time` varchar(10) NOT NULL COMMENT '到店时间',
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  `num` int(4) NOT NULL COMMENT '房间数量',
  `days` int(4) NOT NULL COMMENT '入住天数',
  `room_type` varchar(30) NOT NULL COMMENT '房型',
  `room_logo` varchar(100) NOT NULL COMMENT '房间主图',
  `bed_type` varchar(20) NOT NULL COMMENT '床型',
  `name` varchar(30) NOT NULL COMMENT '预定人',
  `tel` varchar(20) NOT NULL,
  `status` int(4) NOT NULL COMMENT '1未付款,2已付款，3取消,4完成,5已入住,6申请退款,7退款,8拒绝退款',
  `out_trade_no` varchar(32) NOT NULL COMMENT '商户订单号',
  `dis_cost` decimal(10,2) NOT NULL COMMENT '折扣后的价格',
  `yj_cost` decimal(10,2) NOT NULL COMMENT '押金金额',
  `yhq_cost` decimal(10,2) NOT NULL COMMENT '优惠券价格',
  `yyzk_cost` decimal(10,2) NOT NULL COMMENT '会员折扣金额',
  `total_cost` decimal(10,2) NOT NULL COMMENT '总价格',
  `is_delete` int(4) NOT NULL DEFAULT '0' COMMENT '是否删除,1删除',
  `time` int(11) NOT NULL COMMENT '创建时间',
  `uniacid` varchar(50) NOT NULL,
  `ytyj_cost` decimal(10,2) NOT NULL COMMENT '已退押金'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);



pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_room')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `seller_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL COMMENT '价格',
  `img` text NOT NULL,
  `floor` varchar(100) NOT NULL,
  `people` int(4) NOT NULL,
  `bed` int(4) NOT NULL,
  `breakfast` int(4) NOT NULL,
  `facilities` varchar(200) NOT NULL,
  `windows` int(4) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `total_num` int(4) NOT NULL,
  `uniacid` varchar(50) NOT NULL,
  `size` varchar(30) NOT NULL,
  `is_refund` int(4) NOT NULL COMMENT '押金是否可退,1否，2是',
  `yj_state` int(4) NOT NULL COMMENT '1在线,2到店,3入住+到店',
  `yj_cost` decimal(10,2) NOT NULL COMMENT '押金金额'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_roomnum')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `nums` int(11) NOT NULL,
  `dateday` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_roomprice')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `rid` int(11) NOT NULL,
  `dateday` int(11) NOT NULL,
  `mprice` decimal(10,2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_score')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `order_id` int(11) NOT NULL COMMENT '订单id',
  `assess_id` int(11) NOT NULL COMMENT '评论id',
  `score` int(11) NOT NULL COMMENT '积分',
  `note` varchar(100) NOT NULL COMMENT '备注',
  `time` int(11) NOT NULL COMMENT '时间',
  `uniacid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='积分明细表';"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_seller')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `owner` int(4) NOT NULL COMMENT '1后台添加,2入住',
  `name` varchar(100) NOT NULL,
  `star` varchar(30) NOT NULL COMMENT '星级',
  `address` varchar(100) NOT NULL,
  `link_name` varchar(20) NOT NULL COMMENT '联系人',
  `link_tel` varchar(20) NOT NULL COMMENT '联系电话',
  `tel` varchar(50) NOT NULL COMMENT '酒店电话',
  `handle` varchar(100) NOT NULL,
  `open_time` datetime NOT NULL,
  `wake` int(4) NOT NULL,
  `wifi` int(4) NOT NULL,
  `park` int(4) NOT NULL,
  `breakfast` int(4) NOT NULL,
  `unionPay` int(4) NOT NULL,
  `gym` int(4) NOT NULL,
  `boardroom` int(4) NOT NULL,
  `water` int(4) NOT NULL,
  `policy` varchar(1000) NOT NULL,
  `introduction` text NOT NULL,
  `img` text NOT NULL,
  `rule` varchar(1000) NOT NULL,
  `prompt` varchar(1000) NOT NULL,
  `bq_logo` varchar(100) NOT NULL,
  `support` varchar(300) NOT NULL,
  `ewm_logo` varchar(100) NOT NULL,
  `time` int(11) NOT NULL COMMENT '时间',
  `coordinates` varchar(100) NOT NULL COMMENT '经纬度',
  `scort` int(4) NOT NULL COMMENT '排序',
  `sfz_img1` varchar(100) NOT NULL COMMENT '身份证正面照',
  `sfz_img2` varchar(100) NOT NULL COMMENT '身份证反面照',
  `yy_img` varchar(100) NOT NULL COMMENT '营业执照',
  `other` text NOT NULL COMMENT '补充说明',
  `zd_money` decimal(10,2) NOT NULL COMMENT '房间最低价格',
  `state` int(4) NOT NULL DEFAULT '1' COMMENT '1待审核,2通过，3拒绝',
  `sq_time` int(11) NOT NULL COMMENT '申请时间',
  `uniacid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);


pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_system')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `appid` varchar(100) NOT NULL COMMENT 'appid',
  `appsecret` varchar(200) NOT NULL COMMENT 'appsecret',
  `mchid` varchar(20) NOT NULL COMMENT '商户号',
  `wxkey` varchar(100) NOT NULL COMMENT '商户秘钥',
  `uniacid` varchar(50) NOT NULL,
  `jf_rule` text NOT NULL COMMENT '积分规则',
  `bq_name` varchar(50) NOT NULL COMMENT '版权名称',
  `link_name` varchar(30) NOT NULL COMMENT '网站名称',
  `link_logo` varchar(100) NOT NULL COMMENT '网站logo',
  `support` varchar(20) NOT NULL COMMENT '技术支持',
  `bq_logo` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `tz_appid` varchar(30) NOT NULL,
  `tz_name` varchar(30) NOT NULL,
  `pt_name` varchar(30) NOT NULL COMMENT '平台名称',
  `tel` varchar(20) NOT NULL COMMENT '平台电话',
  `total_num` int(11) NOT NULL COMMENT '访问量',
  `appkey` varchar(50) NOT NULL COMMENT '短信appkey',
  `tpl_id` varchar(20) NOT NULL COMMENT '短信模板id',
  `seller_id` int(11) NOT NULL COMMENT '默认门店ID',
  `apiclient_cert` text NOT NULL COMMENT '证书',
  `apiclient_key` text NOT NULL COMMENT '证书',
  `zd_money` decimal(10,2) NOT NULL COMMENT '最低提现金额',
  `tx_sxf` varchar(10) NOT NULL COMMENT '提现手续费',
  `rc_tk` text NOT NULL COMMENT '认筹条款',
  `tid1` varchar(50) NOT NULL COMMENT '报名成功通知模板id',
  `tx_notice` text NOT NULL COMMENT '提现须知',
  `type` int(4) NOT NULL DEFAULT '1' COMMENT '风格设置,1单店,2多店',
  `tx_mode` int(4) NOT NULL COMMENT '1手动打款,2自动打款',
  `is_sjrz` int(4) NOT NULL DEFAULT '1' COMMENT '商家入住1开通,2不开通',
  `client_ip` varchar(30) NOT NULL COMMENT 'IP地址',
  `rz_notice` text NOT NULL COMMENT '认证须知',
  `hy_rule` text NOT NULL COMMENT '会员规则',
  `bj_logo` varchar(100) NOT NULL COMMENT '首页背景logo',
  `map_key` varchar(50) NOT NULL COMMENT '地图key',
  `is_dxyz` int(4) NOT NULL DEFAULT '1' COMMENT '短信验证1开启,2关闭',
  `pl_score` int(11) NOT NULL COMMENT '评论积分',
  `xf_score` int(11) NOT NULL COMMENT '消费积分'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjdc_user')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `join_time` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `openid` varchar(200) NOT NULL,
  `uniacid` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL COMMENT '手机号',
  `type` int(4) NOT NULL DEFAULT '1' COMMENT '1不是会员,2是会员',
  `level_id` int(11) NOT NULL COMMENT '会员等级id',
  `score` int(11) NOT NULL COMMENT '积分',
  `zs_name` varchar(20) NOT NULL COMMENT '真是姓名',
  `number` varchar(30) NOT NULL COMMENT '会员卡号'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('zh_jdgjb_usercoupons')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `coupons_id` int(11) NOT NULL COMMENT '优惠券id',
  `state` int(11) NOT NULL COMMENT '1领取, 2使用',
  `time` int(11) NOT NULL COMMENT '领取时间',
  `sy_time` int(11) NOT NULL COMMENT '使用时间',
  `uniacid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;"

);

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

pdo_query("CREATE TABLE IF NOT EXISTS".tablename('cjpt_mail')."(
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT '发送帐号用户名',
  `password` varchar(50) NOT NULL COMMENT 'smtp客户端授权密码',
  `type` varchar(10) NOT NULL COMMENT 'qq/163',
  `sender` varchar(50) NOT NULL COMMENT '发件人名称',
  `signature` text NOT NULL COMMENT '邮件签名',
  `uniacid` varchar(50) NOT NULL,
  `is_email` int(4) DEFAULT '2' COMMENT '1开启，2关闭',
  `body` text NOT NULL COMMENT '内容'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='邮件配置表';"

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

 if (!pdo_fieldexists(tablename('cjpt_rider'), 'email')) {
    pdo_query("ALTER TABLE".tablename('cjpt_rider')." ADD `email` VARCHAR(50) NOT NULL ;");
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