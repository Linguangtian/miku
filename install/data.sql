-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2020-01-19 22:17:52
-- 服务器版本： 5.6.46-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs`
--

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_ad`
--

CREATE TABLE `mkcms_ad` (
  `id` smallint(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `pic` text,
  `catid` varchar(255) DEFAULT NULL,
  `miaoshu` varchar(255) DEFAULT NULL,
  `picurl` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_ad`
--

INSERT INTO `mkcms_ad` (`id`, `title`, `url`, `pic`, `catid`, `miaoshu`, `picurl`, `link`) VALUES
(9, '首页导航下方，虎牙，播放页广告位', '', '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '2', NULL, NULL, NULL),
(10, '首页抢先看上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '3', NULL, NULL, NULL),
(11, '首页电影上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '4', NULL, NULL, NULL),
(12, '首页剧集上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '5', NULL, NULL, NULL),
(13, '首页娱乐资讯上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '6', NULL, NULL, NULL),
(14, '首页综艺上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '7', NULL, NULL, NULL),
(15, '首页搞笑视频上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '8', NULL, NULL, NULL),
(16, '首页动漫上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '9', NULL, NULL, NULL),
(17, '友情链接上方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '10', NULL, NULL, NULL),
(18, '电影幻灯片下方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '11', NULL, NULL, NULL),
(19, '剧集幻灯片下方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '12', NULL, NULL, NULL),
(20, '动漫幻灯片下方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '13', NULL, NULL, NULL),
(21, '综艺幻灯片下方广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '14', NULL, NULL, NULL),
(22, '美女舞曲页面广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '15', NULL, NULL, NULL),
(23, '娱乐综合视频广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '16', NULL, NULL, NULL),
(24, '音乐界面广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '17', NULL, NULL, NULL),
(25, '娱乐搞笑页面广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '18', NULL, NULL, NULL),
(26, 'MV页面广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '19', NULL, NULL, NULL),
(27, '直播页面广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '20', NULL, NULL, NULL),
(28, '尝鲜页面广告位', NULL, '<a href=\"网址\" target=\"_blank\"><img src=\"/images/guanggao.gif\" style=\"width:100%\"></a>', '21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_adclass`
--

CREATE TABLE `mkcms_adclass` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_adclass`
--

INSERT INTO `mkcms_adclass` (`id`, `name`) VALUES
(2, '首页导航下方广告'),
(3, '首页抢先看上方广告'),
(4, '首页电影上方广告'),
(5, '首页剧集上方广告'),
(6, '首页娱乐资讯上方广告'),
(7, '首页综艺上方广告'),
(8, '首页搞笑视频上方广告'),
(9, '首页动漫上方广告'),
(10, '友情链接上方广告'),
(11, '电影栏目页广告'),
(12, '剧集栏目页广告'),
(13, '动漫栏目页广告'),
(14, '综艺栏目页广告'),
(15, 'YY栏目页广告'),
(16, '娱乐栏目页广告'),
(17, '音乐栏目页广告'),
(18, '搞笑栏目页广告'),
(19, '音乐MV栏目页广告'),
(20, '电视直播页面广告'),
(21, '尝鲜栏目页面广告');

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_book`
--

CREATE TABLE `mkcms_book` (
  `id` int(11) NOT NULL,
  `content` text,
  `userid` varchar(11) DEFAULT NULL,
  `Reply` text,
  `time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_fav`
--

CREATE TABLE `mkcms_fav` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_link`
--

CREATE TABLE `mkcms_link` (
  `l_id` smallint(6) UNSIGNED NOT NULL,
  `l_name` varchar(64) NOT NULL DEFAULT '',
  `l_url` varchar(255) NOT NULL DEFAULT '',
  `l_logo` varchar(255) NOT NULL DEFAULT '',
  `l_type` tinyint(1) NOT NULL DEFAULT '0',
  `l_sort` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_link`
--

INSERT INTO `mkcms_link` (`l_id`, `l_name`, `l_url`, `l_logo`, `l_type`, `l_sort`) VALUES
(2, '丫同乐影视网', 'http://www.yatongle.com', '', 0, 5);

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_manager`
--

CREATE TABLE `mkcms_manager` (
  `m_id` smallint(6) UNSIGNED NOT NULL,
  `m_name` varchar(32) NOT NULL DEFAULT '',
  `m_password` varchar(32) NOT NULL DEFAULT '',
  `m_levels` varchar(32) NOT NULL DEFAULT '',
  `m_random` varchar(32) NOT NULL DEFAULT '',
  `m_status` tinyint(1) NOT NULL DEFAULT '0',
  `m_logintime` int(10) NOT NULL DEFAULT '0',
  `m_loginip` int(15) NOT NULL DEFAULT '0',
  `m_loginnum` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_manager`
--

INSERT INTO `mkcms_manager` (`m_id`, `m_name`, `m_password`, `m_levels`, `m_random`, `m_status`, `m_logintime`, `m_loginip`, `m_loginnum`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'b,c,d,e,f,g,h,i,j', '897de67740645ef418d8915547298d4c', 1, 1503380295, 2130706433, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_nav`
--

CREATE TABLE `mkcms_nav` (
  `id` int(11) NOT NULL,
  `n_name` varchar(255) DEFAULT NULL,
  `n_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_play`
--

CREATE TABLE `mkcms_play` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `userid` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_slideshow`
--

CREATE TABLE `mkcms_slideshow` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_parent` varchar(255) DEFAULT NULL,
  `s_order` int(11) DEFAULT NULL,
  `s_url` varchar(255) DEFAULT NULL,
  `s_picture` varchar(255) DEFAULT NULL,
  `s_content` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_system`
--

CREATE TABLE `mkcms_system` (
  `id` int(11) NOT NULL,
  `s_name` varchar(255) DEFAULT NULL,
  `s_domain` varchar(255) DEFAULT NULL,
  `s_seoname` varchar(255) DEFAULT NULL,
  `s_keywords` varchar(255) DEFAULT NULL,
  `s_description` varchar(255) DEFAULT NULL,
  `s_cache` varchar(255) DEFAULT NULL,
  `s_wei` varchar(255) DEFAULT NULL,
  `s_user` varchar(255) DEFAULT NULL,
  `s_slow` varchar(255) DEFAULT NULL,
  `s_logo` varchar(255) DEFAULT NULL,
  `s_weixin` varchar(255) DEFAULT NULL,
  `s_dashang` varchar(255) DEFAULT NULL,
  `s_mjk` varchar(255) DEFAULT NULL,
  `s_jiekou` text,
  `s_copyright` text,
  `s_changyan` text,
  `s_alipay` varchar(255) DEFAULT NULL,
  `s_appid` varchar(255) DEFAULT NULL,
  `s_appkey` varchar(255) DEFAULT NULL,
  `s_shoukuan` varchar(255) DEFAULT NULL,
  `s_qqun` varchar(255) DEFAULT NULL,
  `s_token` varchar(255) DEFAULT NULL,
  `s_bdyun` varchar(255) DEFAULT NULL,
  `s_tongji` text,
  `s_qianxian` varchar(255) DEFAULT NULL,
  `s_dianying` varchar(255) DEFAULT NULL,
  `s_dianshi` varchar(255) DEFAULT NULL,
  `s_zongyi` varchar(255) DEFAULT NULL,
  `s_dongman` varchar(255) DEFAULT NULL,
  `s_tuiguang` varchar(255) DEFAULT NULL,
  `s_shoufei` text,
  `s_cishu` varchar(255) DEFAULT NULL,
  `s_gx` varchar(255) DEFAULT NULL,
  `s_hong` varchar(255) DEFAULT NULL,
  `s_gonggao` text,
  `s_bofang` varchar(255) DEFAULT NULL,
  `s_guanzhu` text,
  `s_fengmian` varchar(255) DEFAULT NULL,
  `s_mail` varchar(255) DEFAULT NULL,
  `s_smtp` varchar(255) DEFAULT NULL,
  `s_muser` varchar(255) DEFAULT NULL,
  `s_mpwd` varchar(255) DEFAULT NULL,
  `s_wappid` varchar(255) DEFAULT NULL,
  `s_wkey` varchar(255) DEFAULT NULL,
  `s_tixing` varchar(255) DEFAULT NULL,
  `s_appewm` varchar(255) DEFAULT NULL,
  `s_appbt` varchar(255) DEFAULT NULL,
  `s_apppic` varchar(255) DEFAULT NULL,
  `s_appurl` varchar(255) DEFAULT NULL,
  `s_gg` varchar(255) DEFAULT NULL,
  `s_hctime` varchar(255) DEFAULT NULL,
  `s_beijing` varchar(255) DEFAULT NULL,
  `s_dianyingnew` varchar(255) DEFAULT NULL,
  `s_dongmannew` varchar(255) DEFAULT NULL,
  `s_zongyinew` varchar(255) DEFAULT NULL,
  `s_zhifu` varchar(255) DEFAULT NULL,
  `s_tuijian` text,
  `s_wxguanzhu` varchar(255) DEFAULT NULL,
  `s_smsname` varchar(255) DEFAULT NULL,
  `s_smspass` varchar(255) DEFAULT NULL,
  `s_miaoshu` varchar(255) DEFAULT NULL,
  `s_hz` varchar(255) DEFAULT NULL,
  `s_yq` varchar(255) DEFAULT NULL,
  `s_autoqx` varchar(255) DEFAULT NULL,
  `s_mv` varchar(255) DEFAULT NULL,
  `s_zixun` varchar(255) DEFAULT NULL,
  `s_yy` varchar(255) DEFAULT NULL,
  `s_cxzy` varchar(255) DEFAULT NULL,
  `s_dataoke` varchar(255) DEFAULT NULL,
  `s_dataokeid` varchar(255) DEFAULT NULL,
  `s_tk` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_system`
--

INSERT INTO `mkcms_system` (`id`, `s_name`, `s_domain`, `s_seoname`, `s_keywords`, `s_description`, `s_cache`, `s_wei`, `s_user`, `s_slow`, `s_logo`, `s_weixin`, `s_dashang`, `s_mjk`, `s_jiekou`, `s_copyright`, `s_changyan`, `s_alipay`, `s_appid`, `s_appkey`, `s_shoukuan`, `s_qqun`, `s_token`, `s_bdyun`, `s_tongji`, `s_qianxian`, `s_dianying`, `s_dianshi`, `s_zongyi`, `s_dongman`, `s_tuiguang`, `s_shoufei`, `s_cishu`, `s_gx`, `s_hong`, `s_gonggao`, `s_bofang`, `s_guanzhu`, `s_fengmian`, `s_mail`, `s_smtp`, `s_muser`, `s_mpwd`, `s_wappid`, `s_wkey`, `s_tixing`, `s_appewm`, `s_appbt`, `s_apppic`, `s_appurl`, `s_gg`, `s_hctime`, `s_beijing`, `s_dianyingnew`, `s_dongmannew`, `s_zongyinew`, `s_zhifu`, `s_tuijian`, `s_wxguanzhu`, `s_smsname`, `s_smspass`, `s_miaoshu`, `s_hz`, `s_yq`, `s_autoqx`, `s_mv`, `s_zixun`, `s_yy`, `s_cxzy`, `s_dataoke`, `s_dataokeid`, `s_tk`) VALUES
(1, '米酷影视', 'http://你的网址/', '米酷影视 - 在线免费高清电影！', '电影,视频大全,在线高清电影,付费电影,免费电影,剧集,电影,在线观看,VIP高清电影直播', '米酷影视，是专门做剧集,电影等在线播放服务，本页面提供电影的相关内容。', '', '', '0', '', '/images/logo.png', '/images/code.jpg', '/images/qrcode.png', 'https://jx.yatongle.com/?url=', '线路一$https://api.yatongle.com/?url=\r\n线路二$https://api.yatongle.com/vip/?url=\r\n线路三$https://api.yatongle.com/svip/?url=\r\n官网$', '米酷影院不承担任何由于个人原因非法运盈所引起的争议和法律责任<br />\r\n本网站内容收集于互联网，本站只提供web页面服务,并不提供影片资源存储录制、上传,播放功能<br />\r\nCopyright &copy;&nbsp; 米酷影视 版权所有', '', '', '', '', '', '', '1222', 'jingpin', '', '1', '1', '1', '1', '1', '0', '鸭王,鸭王2,', '5', '1', '', '公告：欢迎光临米酷影院，建议手机安装app观看，为了本站的收入，广告是必不可少的，请点击一下广告！让本站走的更远！', '10', NULL, NULL, '0', 'ssl://smtp.163.com', '', '', NULL, NULL, '', '后台系统设置APP设置修改', '/images/code.jpg', '后台系统设置APP设置修改', '后台系统设置APP设置修改', '', '', '', '', '', '', '1', NULL, NULL, '', '', '', '1', '1', '1', '1', '1', '1', 'http://www.123ku.com/inc/feifei3.4/', '', '', '0');

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_user`
--

CREATE TABLE `mkcms_user` (
  `u_id` mediumint(8) UNSIGNED NOT NULL,
  `u_qid` varchar(32) NOT NULL DEFAULT '',
  `u_name` varchar(32) NOT NULL DEFAULT '',
  `u_password` varchar(32) NOT NULL DEFAULT '',
  `u_qq` varchar(16) NOT NULL DEFAULT '',
  `u_email` varchar(32) NOT NULL DEFAULT '',
  `u_phone` varchar(16) NOT NULL DEFAULT '',
  `u_status` tinyint(1) NOT NULL DEFAULT '0',
  `u_flag` tinyint(1) NOT NULL DEFAULT '0',
  `u_question` varchar(255) NOT NULL DEFAULT '',
  `u_answer` varchar(255) NOT NULL DEFAULT '',
  `u_group` smallint(6) NOT NULL DEFAULT '0',
  `u_points` smallint(6) NOT NULL DEFAULT '0',
  `u_regtime` char(255) NOT NULL DEFAULT '0',
  `u_logintime` char(255) NOT NULL DEFAULT '0',
  `u_loginnum` smallint(6) NOT NULL DEFAULT '0',
  `u_extend` smallint(6) NOT NULL DEFAULT '0',
  `u_loginip` char(15) NOT NULL DEFAULT '0',
  `u_random` varchar(32) NOT NULL DEFAULT '',
  `u_fav` text NOT NULL,
  `u_plays` text NOT NULL,
  `u_downs` text NOT NULL,
  `u_start` int(10) NOT NULL DEFAULT '0',
  `u_end` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_userka`
--

CREATE TABLE `mkcms_userka` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `money` varchar(255) DEFAULT NULL,
  `jifen` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_userka`
--

INSERT INTO `mkcms_userka` (`id`, `name`, `day`, `money`, `jifen`, `userid`) VALUES
(1, '包月会员', '30', '5', '50', 2);

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_user_card`
--

CREATE TABLE `mkcms_user_card` (
  `c_id` int(11) UNSIGNED NOT NULL,
  `c_number` varchar(16) NOT NULL DEFAULT '',
  `c_pass` varchar(8) NOT NULL DEFAULT '' COMMENT '分类',
  `c_money` int(11) NOT NULL DEFAULT '0' COMMENT '天数',
  `c_used` tinyint(1) NOT NULL DEFAULT '0',
  `c_sale` tinyint(1) NOT NULL DEFAULT '0',
  `c_user` varchar(255) DEFAULT '0',
  `c_addtime` int(10) NOT NULL DEFAULT '0',
  `c_usetime` int(10) NOT NULL DEFAULT '0',
  `c_userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_user_cardclass`
--

CREATE TABLE `mkcms_user_cardclass` (
  `id` int(11) NOT NULL,
  `uniacid` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `card_id` varchar(255) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_user_group`
--

CREATE TABLE `mkcms_user_group` (
  `ug_id` smallint(6) NOT NULL,
  `ug_name` varchar(32) NOT NULL DEFAULT '',
  `ug_type` varchar(255) NOT NULL DEFAULT '',
  `ug_popedom` varchar(32) NOT NULL DEFAULT '',
  `ug_upgrade` smallint(6) NOT NULL DEFAULT '0',
  `ug_popvalue` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `mkcms_user_group`
--

INSERT INTO `mkcms_user_group` (`ug_id`, `ug_name`, `ug_type`, `ug_popedom`, `ug_upgrade`, `ug_popvalue`) VALUES
(1, '普通会员', '', '', 0, 1),
(2, '金牌会员', '', '', 10, 0),
(3, '超级会员', '', '', 500, 0);

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_user_pay`
--

CREATE TABLE `mkcms_user_pay` (
  `p_id` int(11) NOT NULL,
  `p_order` varchar(255) NOT NULL DEFAULT '0',
  `p_uid` varchar(255) NOT NULL DEFAULT '0',
  `p_price` varchar(255) NOT NULL DEFAULT '0',
  `p_time` int(10) NOT NULL DEFAULT '0',
  `p_point` varchar(255) NOT NULL DEFAULT '0',
  `p_status` tinyint(1) NOT NULL DEFAULT '0',
  `p_group` smallint(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `mkcms_user_visit`
--

CREATE TABLE `mkcms_user_visit` (
  `uv_id` int(11) NOT NULL,
  `uv_uid` int(11) DEFAULT '0',
  `uv_ip` int(10) NOT NULL DEFAULT '0',
  `uv_ly` varchar(128) NOT NULL DEFAULT '',
  `uv_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mkcms_ad`
--
ALTER TABLE `mkcms_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_adclass`
--
ALTER TABLE `mkcms_adclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_book`
--
ALTER TABLE `mkcms_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_fav`
--
ALTER TABLE `mkcms_fav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_link`
--
ALTER TABLE `mkcms_link`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `l_sort` (`l_sort`),
  ADD KEY `l_type` (`l_type`);

--
-- Indexes for table `mkcms_manager`
--
ALTER TABLE `mkcms_manager`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `m_status` (`m_status`);

--
-- Indexes for table `mkcms_nav`
--
ALTER TABLE `mkcms_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_play`
--
ALTER TABLE `mkcms_play`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_slideshow`
--
ALTER TABLE `mkcms_slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_system`
--
ALTER TABLE `mkcms_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_user`
--
ALTER TABLE `mkcms_user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_group` (`u_group`),
  ADD KEY `u_status` (`u_status`);

--
-- Indexes for table `mkcms_userka`
--
ALTER TABLE `mkcms_userka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_user_card`
--
ALTER TABLE `mkcms_user_card`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `c_used` (`c_used`),
  ADD KEY `c_sale` (`c_sale`),
  ADD KEY `c_user` (`c_user`),
  ADD KEY `c_addtime` (`c_addtime`),
  ADD KEY `c_usetime` (`c_usetime`);

--
-- Indexes for table `mkcms_user_cardclass`
--
ALTER TABLE `mkcms_user_cardclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkcms_user_group`
--
ALTER TABLE `mkcms_user_group`
  ADD PRIMARY KEY (`ug_id`),
  ADD KEY `ug_upgrade` (`ug_upgrade`),
  ADD KEY `ug_popvalue` (`ug_popvalue`);

--
-- Indexes for table `mkcms_user_pay`
--
ALTER TABLE `mkcms_user_pay`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_order` (`p_order`),
  ADD KEY `p_uid` (`p_uid`),
  ADD KEY `p_status` (`p_status`);

--
-- Indexes for table `mkcms_user_visit`
--
ALTER TABLE `mkcms_user_visit`
  ADD PRIMARY KEY (`uv_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `mkcms_ad`
--
ALTER TABLE `mkcms_ad`
  MODIFY `id` smallint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- 使用表AUTO_INCREMENT `mkcms_adclass`
--
ALTER TABLE `mkcms_adclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `mkcms_book`
--
ALTER TABLE `mkcms_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `mkcms_fav`
--
ALTER TABLE `mkcms_fav`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `mkcms_link`
--
ALTER TABLE `mkcms_link`
  MODIFY `l_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `mkcms_manager`
--
ALTER TABLE `mkcms_manager`
  MODIFY `m_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `mkcms_nav`
--
ALTER TABLE `mkcms_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `mkcms_play`
--
ALTER TABLE `mkcms_play`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `mkcms_slideshow`
--
ALTER TABLE `mkcms_slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `mkcms_system`
--
ALTER TABLE `mkcms_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `mkcms_user`
--
ALTER TABLE `mkcms_user`
  MODIFY `u_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `mkcms_userka`
--
ALTER TABLE `mkcms_userka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `mkcms_user_card`
--
ALTER TABLE `mkcms_user_card`
  MODIFY `c_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=360;

--
-- 使用表AUTO_INCREMENT `mkcms_user_cardclass`
--
ALTER TABLE `mkcms_user_cardclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用表AUTO_INCREMENT `mkcms_user_group`
--
ALTER TABLE `mkcms_user_group`
  MODIFY `ug_id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `mkcms_user_pay`
--
ALTER TABLE `mkcms_user_pay`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `mkcms_user_visit`
--
ALTER TABLE `mkcms_user_visit`
  MODIFY `uv_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
