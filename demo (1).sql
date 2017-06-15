-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 05 月 12 日 17:04
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `demo`
--

-- --------------------------------------------------------

--
-- 表的结构 `demo`
--

CREATE TABLE IF NOT EXISTS `demo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(21) NOT NULL DEFAULT '' COMMENT '这是字段的注释',
  `ttime` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `demo`
--

INSERT INTO `demo` (`id`, `username`, `ttime`) VALUES
(1, '陈胜', 1493102436),
(2, '吴广', 1493102479),
(3, '城里', 1493102505);

-- --------------------------------------------------------

--
-- 表的结构 `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `add` varchar(50) NOT NULL DEFAULT '',
  `media` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `tel` int(11) NOT NULL DEFAULT '0',
  `message` varchar(200) NOT NULL DEFAULT '',
  `pro` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `nname` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `shop`
--

INSERT INTO `shop` (`id`, `name`, `add`, `media`, `phone`, `tel`, `message`, `pro`) VALUES
(1, '技术部测试', '技术部测试', 'baidu', '1581616161', 11615161, '1616161', '116111'),
(2, '技术部测试', '广州市天河区999999号', 'baidu', '1516161616', 2147483647, '2151651', '13211651516'),
(3, 'qwe', 'qwe', 'qwe', 'qwe', 0, 'qwe', 'qwe'),
(4, 'qwe', 'qwe', 'qwe', 'qwe', 0, 'qwe', 'qwe'),
(5, 'qwe', 'qwe', 'qwe', 'qwe', 0, 'qwe', 'qwe'),
(6, 'qwe', 'qwe', 'qwe', 'qwe', 0, 'qwe', 'qwe'),
(7, 'qqq', '', '', 'qqqq', 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `wjs_admin`
--

CREATE TABLE IF NOT EXISTS `wjs_admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_user` varchar(40) NOT NULL,
  `admin_pass` varchar(40) NOT NULL,
  `admin_phone` varchar(20) NOT NULL DEFAULT '',
  `admin_email` varchar(30) NOT NULL DEFAULT '' COMMENT '邮箱',
  `admin_token` varchar(40) NOT NULL DEFAULT '' COMMENT 'token',
  `admin_yan` char(8) NOT NULL DEFAULT '' COMMENT 'yan',
  `admin_num` int(11) NOT NULL DEFAULT '0' COMMENT '员工号',
  `admin_name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `admin_class` varchar(5) NOT NULL DEFAULT '' COMMENT '部门',
  `admin_power` tinyint(1) NOT NULL DEFAULT '0' COMMENT '权限',
  `admin_lastime` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `admin_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `in_adminuser` (`admin_user`),
  UNIQUE KEY `in_phone` (`admin_phone`),
  KEY `in_adminpass` (`admin_pass`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wjs_admin`
--

INSERT INTO `wjs_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_phone`, `admin_email`, `admin_token`, `admin_yan`, `admin_num`, `admin_name`, `admin_class`, `admin_power`, `admin_lastime`, `admin_time`) VALUES
(1, 'username', 'bc0ac490e49a04222a002accfe1349b5', '16816816868', 'qq12345@qq.com', '0144712dd81be0c3d9724f5e56ce6685', 'nh!3*rao', 1, '技术部测试', '技术部', 0, 1494230699, 1494230699);

-- --------------------------------------------------------

--
-- 表的结构 `wjs_car`
--

CREATE TABLE IF NOT EXISTS `wjs_car` (
  `car_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `car_userid` int(11) NOT NULL COMMENT '用户ID',
  `car_goodsid` int(11) NOT NULL COMMENT '商品ID',
  `car_goodsname` varchar(20) NOT NULL DEFAULT '' COMMENT '购物车商品名',
  `car_goodsprices` decimal(12,2) NOT NULL DEFAULT '1.00' COMMENT '市场价',
  `car_goodsprice` decimal(12,2) NOT NULL DEFAULT '1.00' COMMENT '结缘价',
  `car_goodsstate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '购物车状态',
  `car_goodstime` int(11) NOT NULL DEFAULT '0' COMMENT '购物车时间',
  PRIMARY KEY (`car_id`),
  UNIQUE KEY `in_userid` (`car_userid`),
  UNIQUE KEY `in_cargoodsid` (`car_goodsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='购物车表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wjs_class`
--

CREATE TABLE IF NOT EXISTS `wjs_class` (
  `class_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL COMMENT '分类名',
  `class_da` varchar(20) NOT NULL DEFAULT '' COMMENT '大类',
  `class_xiao` varchar(20) NOT NULL DEFAULT '' COMMENT '小类',
  `class_goodsid` int(11) DEFAULT NULL COMMENT '产品ID',
  `class_time` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`class_id`),
  KEY `in_class` (`class_goodsid`),
  KEY `in_classname` (`class_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分类表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wjs_goods`
--

CREATE TABLE IF NOT EXISTS `wjs_goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(20) NOT NULL COMMENT '商品名',
  `goods_material` varchar(32) NOT NULL DEFAULT '' COMMENT '材质',
  `goods_prices` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '市场价',
  `goods_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '结缘价',
  `goods_stock` int(11) NOT NULL DEFAULT '0' COMMENT '库存',
  `goods_class` varchar(10) NOT NULL DEFAULT '' COMMENT '分类',
  `goods_effect` varchar(20) NOT NULL DEFAULT '' COMMENT '功效',
  `goods_hot` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1热卖',
  `goods_state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1为上架',
  `goods_img` varchar(100) NOT NULL DEFAULT '' COMMENT '原图',
  `goods_img220` varchar(100) NOT NULL DEFAULT '' COMMENT '展示图',
  `goods_img60` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `goods_remark` varchar(50) NOT NULL DEFAULT '' COMMENT '其他备注',
  `goods_time` int(10) unsigned DEFAULT '0' COMMENT '商品发布时间',
  `goods_admin` varchar(20) NOT NULL DEFAULT '' COMMENT '发布人',
  PRIMARY KEY (`goods_id`),
  KEY `in_goodsname` (`goods_name`),
  KEY `in_class` (`goods_class`),
  KEY `in_hot` (`goods_hot`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='商品表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wjs_goods`
--

INSERT INTO `wjs_goods` (`goods_id`, `goods_name`, `goods_material`, `goods_prices`, `goods_price`, `goods_stock`, `goods_class`, `goods_effect`, `goods_hot`, `goods_state`, `goods_img`, `goods_img220`, `goods_img60`, `goods_remark`, `goods_time`, `goods_admin`) VALUES
(3, '完修改貔貅', '完修改修改修改黄金1', '100.00', '100.00', 100, '完修改黄金1', '完修改招财1', 100, 1, '/Uploads/2017-05-12/591574e33d7ec.jpg', '/Thumb/Thumb_280/591574e33d7ec.jpg', '/Thumb/Thumb_60/591574e33d7ec.jpg', '完修改带你去玩你的份宁静1', 1494578352, '完修改技术部测试1');

-- --------------------------------------------------------

--
-- 表的结构 `wjs_order`
--

CREATE TABLE IF NOT EXISTS `wjs_order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_name` varchar(20) NOT NULL,
  `order_phone` varchar(20) NOT NULL,
  `order_area` varchar(61) NOT NULL DEFAULT '' COMMENT '地址',
  `order_goodsid` varchar(20) NOT NULL DEFAULT '' COMMENT '商品',
  `order_goodsname` varchar(20) NOT NULL DEFAULT '' COMMENT '商品名',
  `order_from` varchar(20) NOT NULL DEFAULT '' COMMENT '来源',
  `order_adminid` int(11) NOT NULL COMMENT '员工ID',
  `order_pay` varchar(10) NOT NULL DEFAULT '到付' COMMENT '付款方式',
  `order_kuaidi` varchar(20) NOT NULL DEFAULT '' COMMENT '快递',
  `order_qq` varchar(20) NOT NULL DEFAULT '' COMMENT '微信QQ',
  `order_ip` varchar(20) NOT NULL DEFAULT '' COMMENT 'IP地址',
  `order_intent` varchar(20) NOT NULL DEFAULT '' COMMENT '意向',
  `order_oid` char(15) NOT NULL DEFAULT '' COMMENT '订单号',
  `order_state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '订单状态',
  `order_time` int(11) NOT NULL DEFAULT '0' COMMENT '订单时间',
  `order_date` varchar(20) DEFAULT NULL COMMENT '订单日期',
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `in_oid` (`order_oid`),
  UNIQUE KEY `in_goodsid` (`order_goodsid`),
  UNIQUE KEY `in_adminid` (`order_adminid`),
  KEY `in_orderdate` (`order_date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='订单表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wjs_user`
--

CREATE TABLE IF NOT EXISTS `wjs_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL COMMENT '用户称呼',
  `user_num` varchar(40) NOT NULL COMMENT '用户名',
  `user_pass` varchar(40) NOT NULL COMMENT '用户密码',
  `user_phone` varchar(20) NOT NULL COMMENT '手机电话',
  `user_wechat` varchar(20) NOT NULL COMMENT '微信或QQ',
  `user_token` varchar(40) NOT NULL COMMENT '安全token',
  `user_yan` varchar(10) NOT NULL COMMENT '安全yan',
  `user_time` int(11) DEFAULT NULL COMMENT '时间',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `in_name` (`user_name`),
  UNIQUE KEY `in_phone` (`user_phone`),
  KEY `in_pw` (`user_pass`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `wjs_y3`
--

CREATE TABLE IF NOT EXISTS `wjs_y3` (
  `y3_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `y3_name` varchar(21) NOT NULL DEFAULT '' COMMENT 'Y3_name',
  `y3_phone` varchar(11) NOT NULL DEFAULT '' COMMENT 'Y3_�绰',
  `y3_area` varchar(61) NOT NULL DEFAULT '' COMMENT 'Y3_��ַ',
  `y3_goods` varchar(51) NOT NULL DEFAULT '' COMMENT 'Y3_������Ʒ',
  `y3_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT 'Y3_�Ӹ�',
  `y3_media` varchar(21) NOT NULL DEFAULT '' COMMENT 'Y3_�µ���Դ',
  `y3_text` varchar(81) NOT NULL DEFAULT '' COMMENT 'Y3_����������ע',
  `y3_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`y3_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `wjs_y3`
--

INSERT INTO `wjs_y3` (`y3_id`, `y3_name`, `y3_phone`, `y3_area`, `y3_goods`, `y3_price`, `y3_media`, `y3_text`, `y3_time`) VALUES
(1, '技术部测试导入', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相文殊菩萨 （兔）,，订购价格：198，客户留言：', '2017-05-10 07:44:57'),
(2, '技术部测试导入2', '12321321111', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '192.00', 'bmf.3pk2.com', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-10 08:09:31'),
(9, '技术部测试3', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:07'),
(8, '技术部测试4', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:07'),
(10, '技术部测试5', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:23'),
(11, '技术部测试6', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:23'),
(12, '技术部测试7', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:33'),
(13, '技术部测试8', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:33'),
(14, '技术部测试9', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:48'),
(15, '技术部测试10', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:48'),
(16, '技术部测试11', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:55'),
(17, '技术部测试12', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:28:55'),
(18, '技术部测试13', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:03'),
(19, '技术部测试14', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:03'),
(20, '技术部测试15', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:13'),
(21, '技术部测试16', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:13'),
(22, '技术部测试17', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:22'),
(23, '技术部测试18', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:22'),
(24, '技术部测试19', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:31'),
(25, '技术部测试20', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:31'),
(26, '技术部测试21', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:41'),
(27, '技术部测试22', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:41'),
(28, '技术部测试23', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:54'),
(29, '技术部测试24', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:29:54'),
(30, '技术部测试25', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:03'),
(31, '技术部测试26', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:03'),
(32, '技术部测试27', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:13'),
(33, '技术部测试28', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:13'),
(34, '技术部测试29', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:24'),
(35, '技术部测试30', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:24'),
(36, '技术部测试31', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:33'),
(37, '技术部测试32', '16816816868', '广东省广州市天河区凤凰软件园999', '黑曜石吊198元,', '198.00', 'laxice.8zking.cn', '附加属性：属相普贤菩萨 （蛇）,，订购价格：198，客户留言：华康电器(欧博特电子公司院内)', '2017-05-11 06:30:33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
