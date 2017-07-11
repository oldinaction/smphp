/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50612
Source Host           : 127.0.0.1:3306
Source Database       : oihao

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-09-10 20:09:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `englishname` char(255) NOT NULL DEFAULT '',
  `hit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '北京', 'beijing', '0');
INSERT INTO `city` VALUES ('2', '天津', 'tianjin', '0');
INSERT INTO `city` VALUES ('3', '上海', 'shanghai', '0');
INSERT INTO `city` VALUES ('4', '重庆', 'chongqing', '0');
INSERT INTO `city` VALUES ('5', '河北', 'hebei', '0');
INSERT INTO `city` VALUES ('6', '河南', 'henan', '0');
INSERT INTO `city` VALUES ('7', '云南', 'yunnan', '0');
INSERT INTO `city` VALUES ('8', '辽宁', 'liaoning', '0');
INSERT INTO `city` VALUES ('9', '黑龙江', 'heilongjiang', '0');
INSERT INTO `city` VALUES ('10', '湖南', 'hunan', '0');
INSERT INTO `city` VALUES ('11', '安徽', 'anhui', '0');
INSERT INTO `city` VALUES ('12', '山东', 'shandong', '0');
INSERT INTO `city` VALUES ('13', '新疆', 'xinjiang', '0');
INSERT INTO `city` VALUES ('14', '江苏', 'jiangsu', '0');
INSERT INTO `city` VALUES ('15', '浙江', 'zhejiang', '0');
INSERT INTO `city` VALUES ('16', '江西', 'jiangxi', '0');
INSERT INTO `city` VALUES ('17', '湖北', 'hubei', '0');
INSERT INTO `city` VALUES ('18', '广西', 'guangxi', '0');
INSERT INTO `city` VALUES ('19', '甘肃', 'gansu', '0');
INSERT INTO `city` VALUES ('20', '山西', 'shanxi1', '0');
INSERT INTO `city` VALUES ('21', '内蒙古', 'neimenggu', '0');
INSERT INTO `city` VALUES ('22', '陕西', 'shanxi3', '0');
INSERT INTO `city` VALUES ('23', '吉林', 'jilin', '0');
INSERT INTO `city` VALUES ('24', '福建', 'fujian', '0');
INSERT INTO `city` VALUES ('25', '贵州', 'guizhou', '0');
INSERT INTO `city` VALUES ('26', '广东', 'guangdong', '0');
INSERT INTO `city` VALUES ('27', '青海', 'qinghai', '0');
INSERT INTO `city` VALUES ('28', '西藏', 'xizang', '0');
INSERT INTO `city` VALUES ('29', '四川', 'sichuan', '0');
INSERT INTO `city` VALUES ('30', '宁夏', 'ningxia', '0');
INSERT INTO `city` VALUES ('31', '海南', 'hainan', '0');
INSERT INTO `city` VALUES ('32', '香港', 'xianggang', '0');
INSERT INTO `city` VALUES ('33', '澳门', 'aomen', '0');
INSERT INTO `city` VALUES ('34', '台湾', 'taiwan', '0');

-- ----------------------------
-- Table structure for oihao_blog_class
-- ----------------------------
DROP TABLE IF EXISTS `oihao_blog_class`;
CREATE TABLE `oihao_blog_class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `parent_id` int(3) NOT NULL COMMENT '这个分类的父分类ID',
  `classname` char(20) DEFAULT NULL COMMENT '分类名称',
  `path` varchar(255) NOT NULL COMMENT '分类目录',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of oihao_blog_class
-- ----------------------------
INSERT INTO `oihao_blog_class` VALUES ('1', '0', 'IT综合', 'itzh');
INSERT INTO `oihao_blog_class` VALUES ('2', '0', '开发设计', 'kfsj');
INSERT INTO `oihao_blog_class` VALUES ('3', '0', '网站建设', 'wzjs');
INSERT INTO `oihao_blog_class` VALUES ('4', '0', '休闲娱乐', 'xxyl');
INSERT INTO `oihao_blog_class` VALUES ('5', '0', '公司机构', 'gsjg');
INSERT INTO `oihao_blog_class` VALUES ('6', '1', '互联网资讯', '');
INSERT INTO `oihao_blog_class` VALUES ('7', '1', '资源分享', '');
INSERT INTO `oihao_blog_class` VALUES ('8', '1', '网络营销', '');
INSERT INTO `oihao_blog_class` VALUES ('9', '1', '数码产品', '');
INSERT INTO `oihao_blog_class` VALUES ('10', '1', '手机通讯', '');
INSERT INTO `oihao_blog_class` VALUES ('11', '1', '互联网安全', '');
INSERT INTO `oihao_blog_class` VALUES ('12', '1', '电脑硬件', '');
INSERT INTO `oihao_blog_class` VALUES ('13', '1', '其他', '');
INSERT INTO `oihao_blog_class` VALUES ('14', '2', '网站开发', '');
INSERT INTO `oihao_blog_class` VALUES ('15', '2', '移动开发', '');
INSERT INTO `oihao_blog_class` VALUES ('16', '2', '游戏开发', '');
INSERT INTO `oihao_blog_class` VALUES ('17', '2', '数据库开发', '');
INSERT INTO `oihao_blog_class` VALUES ('18', '2', '编程语言', '');
INSERT INTO `oihao_blog_class` VALUES ('19', '2', '平面设计', '');
INSERT INTO `oihao_blog_class` VALUES ('20', '2', '影视特效', '');
INSERT INTO `oihao_blog_class` VALUES ('21', '2', '其他', '');
INSERT INTO `oihao_blog_class` VALUES ('22', '3', '建站程序', '');
INSERT INTO `oihao_blog_class` VALUES ('23', '3', '前端设计', '');
INSERT INTO `oihao_blog_class` VALUES ('24', '3', '网站优化', '');
INSERT INTO `oihao_blog_class` VALUES ('25', '3', '域名空间', '');
INSERT INTO `oihao_blog_class` VALUES ('26', '3', '网站运营', '');
INSERT INTO `oihao_blog_class` VALUES ('27', '3', '其他', '');
INSERT INTO `oihao_blog_class` VALUES ('28', '4', '生活旅游', '');
INSERT INTO `oihao_blog_class` VALUES ('29', '4', '电影音乐', '');
INSERT INTO `oihao_blog_class` VALUES ('30', '4', '游戏动漫', '');
INSERT INTO `oihao_blog_class` VALUES ('31', '4', '文学人生', '');
INSERT INTO `oihao_blog_class` VALUES ('32', '4', '兴趣爱好', '');
INSERT INTO `oihao_blog_class` VALUES ('33', '4', '其他', '');
INSERT INTO `oihao_blog_class` VALUES ('34', '5', '公益机构', '');
INSERT INTO `oihao_blog_class` VALUES ('35', '5', '商业公司', '');
INSERT INTO `oihao_blog_class` VALUES ('36', '5', '其他', '');

-- ----------------------------
-- Table structure for oihao_blog_sites
-- ----------------------------
DROP TABLE IF EXISTS `oihao_blog_sites`;
CREATE TABLE `oihao_blog_sites` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` char(40) NOT NULL DEFAULT '' COMMENT '网站名称',
  `url` char(60) NOT NULL DEFAULT '' COMMENT '网站URL',
  `tag` char(60) NOT NULL DEFAULT '' COMMENT '网站标签',
  `description` text NOT NULL COMMENT '网站描述(不能命名为desc，与关键字冲突)',
  `class_id` char(4) NOT NULL DEFAULT '0' COMMENT '网站分类id',
  `city_id` char(2) NOT NULL COMMENT '身份ID',
  `email` char(60) NOT NULL,
  `add_time` datetime NOT NULL COMMENT '提交时间',
  `is_deal` char(1) NOT NULL DEFAULT '0' COMMENT '是否审核（1代表审核，0代表未审核）',
  `is_active` char(1) NOT NULL DEFAULT '0' COMMENT '是否审核通过（1代表审核通过，0代表审核不通过）',
  `hit` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of oihao_blog_sites
-- ----------------------------
INSERT INTO `oihao_blog_sites` VALUES ('1', 'T客邦', 'http://www.techbang.com', '', '每天都有科技新鮮事，3C勁爆新聞、酷炫的零組件、平板電腦、數位相機測試、當紅網路話題、手機app介紹、勸敗、團購，來T客邦只看得到好東西。', '0', '34', '', '2015-04-09 16:42:53', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('2', 'Circle', 'http://www.circle.tw', '', '談論網路發展、行動生活、新創產業、行銷趨勢', '0', '34', '', '2015-04-09 16:44:21', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('3', '香腸炒魷魚', 'http://sofree.cc', '', '「香腸炒魷魚」提供最新的 WordPress、網站架設、免費軟體、軟體技巧應用教學，以及提供專業的WordPress網頁設計、虛擬主機服務。', '0', '34', '', '2015-04-09 16:45:44', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('4', 'awoo SEO', 'http://www.awoo.com.tw/blog', '', 'awoo SEO 網路行銷誌。在全球，搜尋引擎行銷已成為網路行銷最重要的工具。在台灣，搜尋引擎行銷已占了總體網路行銷廣告預算的二分之一。在過去，搜尋引擎行銷造就了Google, 改寫了大者恆大的商業秩序。在未來，搜尋引擎行銷將會用更不一樣的姿態, 走入我們生活的每個角落。', '0', '34', '', '2015-04-09 16:49:02', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('5', '阿物 SEO', 'http://www.awooseo.com', '', 'SEO 搜尋引擎最佳化 領導品牌 - awoo 阿物國際，為提供更實用的 SEO 搜尋引擎最佳化 知識而成立本網站。市面上的SEO公司林立，相關的操作手法更是五花八門，awoo 將提供您一系列關鍵字行銷方法，幫助您改善網站的缺點，提升網站排名。awoo SEO 搜尋引擎最佳化 是您關鍵字行銷的好幫手。', '0', '34', '', '2015-04-09 16:51:39', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('6', '癮科技', 'http://www.cool3c.com', '', '癮科技網站不是樓上Engadget中文版網站，我們是正式擁有台灣商標權的癮科技科技3C媒體網站，介紹的科技3C內容最在地化，包證你每天看得都笑呵呵喔！', '0', '34', '', '2015-04-09 16:52:33', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('7', '自由草', 'http://zycao.com', '', '爱互联，爱技术，爱分享，自由草分享平台', '0', '13', '', '2015-04-09 16:54:02', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('8', '克拉玛依seo', 'http://www.seo0990.com', '', '★SEO认证工程师★利为汇联盟成员★SEO技术创业，seo赚钱，提供新疆SEO，乌鲁木齐SEO，昌吉SEO，克拉玛依SEO，石河子SEO，博乐SEO，油城seo，克拉玛依网站制作，优化推广，网络营销，策划服务，为你的网站迅速提升排名!', '0', '13', '', '2015-04-09 16:54:41', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('9', '孙小浩', 'http://www.suncnn.com', '', '忙碌生活，点滴记录', '0', '13', '', '2015-04-09 16:55:29', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('10', 'maicoo', 'http://www.maicoo.cn', '', '麦客 80年代二逼青年自留地，热爱摄影、旅行，这里有情绪宣泄、作品展示、生活纪实. . .', '0', '13', '', '2015-04-09 16:58:23', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('11', '爱设计', 'http://aisheji.org', '', '把最好读的书，推荐给最想读的读者', '0', '13', '', '2015-04-09 16:59:30', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('12', '陈豪杰', 'http://www.chenhaojie.com', '', '陈豪杰个人独立博客。各类精品微商运营教程，微商运营案例分享。帮助微商解决微信运营问题。', '0', '13', '', '2015-04-09 17:02:31', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('13', '爱折腾的技术宅', 'http://deer.911sky.com', '', 'King2deer 的折腾/搞机/DIY', '0', '28', '', '2015-04-09 17:03:59', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('14', '张松SEO博客', 'http://zhangsongseo.com', '', '西藏张松SEO博客_搜索引擎优化资源分享|互联网建站优化|西藏网站制作|掌握别人掌握的SEO手法，尝试别人不懂的SEO手法_没有SEO才是最好的SEO|专注于网站的UEO', '0', '28', '', '2015-04-09 17:05:08', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('15', '九秒记忆', 'http://www.9sep.org', '', '九秒记忆-分享时下精彩有趣的互联网资讯！分享各种好看有意思的视频、音乐、图片、软件等网络资源。', '0', '28', '', '2015-04-09 17:05:51', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('16', '烫姆的博客', 'http://www.tangmucat.info', '', '烫姆的博客 | 新起点', '0', '28', '', '2015-04-09 17:06:42', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('17', '琴剑居', 'http://www.zbhcn.com', '', '琴剑居...', '0', '28', '', '2015-04-09 17:07:41', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('18', '本来清净', 'http://www.gnxz.net', '', '无疑净信之心、远离烦恼之无垢心、自性清净之心。', '0', '28', '', '2015-04-09 17:08:44', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('19', 'Go读物', 'http://www.goduwu.com', '', 'Go读物 | 打发无聊时光', '0', '28', '', '2015-04-09 17:09:22', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('20', '云南SEO', 'http://www.ynseoer.com', '', '云南seo_曲靖seo_昆明seo_小宝博客专注于网站优化技巧分享，SEO网站优化，网站推广，网站数据挖掘分析处理，SEO案例分析，站内SEO、站外SEO、新闻源、微博营销、微信营销等。是一个关注互联网、搜索引擎、网络推广的个人博客。', '0', '7', '', '2015-04-09 17:11:07', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('21', '崔凯', 'http://uicss.cn', '', '崔凯博客（ck’s blog）,创建于2005年7月30日。目前正在进行“网站运营”和“前端开发”的研究。', '0', '7', '', '2015-04-09 17:11:43', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('22', 'MAGI小站', 'http://www.magity.com', '', '关注操作系统与软件工具，分享学习生活中的经验技巧。', '0', '7', '', '2015-04-09 17:12:51', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('23', 'MK站长网', 'http://www.lxsnq.com', '', 'MK站长网_网络营销师必看的网站_网络营销讲师Mark在这里跟您分享和讨论互联网最新资讯、搜索引擎营销技巧、电子商务运营策略、社会化媒体营销策划技巧、营销型网站建设技巧、搜索引擎最新算法研究和个人站长感悟等相关行业知识。', '0', '7', '', '2015-04-09 17:14:30', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('24', 'CY技术分享交流博客', 'http://wapik.cn', '', 'CYblog提供丰富的教程，资源，APK，网游技术，PHP源码等，基于SAE搭建，使用emlog博客系统。', '0', '7', '', '2015-04-09 17:15:12', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('25', '营销路上', 'http://www.sem63.com', '', '营销路上-专注于网络营销,网站建设,网站托管,网站运营、网站优化解决方案，是与广大网络营销爱好者一同学习网络营销、网站建设、网站托管、网站运营、网站优化的首选网站。', '0', '7', '', '2015-04-09 17:16:15', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('26', '笨笨.Blog', 'http://www.myluoluo.com', '', 'ら.花舞花落泪 | ら.花哭花瓣飞 人生不如意事十有八九，要勇敢去面对', '0', '1', '', '2015-04-09 17:17:59', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('27', '任鸟飞网站设计博客', 'http://renniaofei.com', '', '任鸟飞网站设计博客是一个关注网页设计、网站建设、前端开发、美工设计、推广优化、网站博客赚钱、互联网趣味信息及搜素引擎等的原创设计类网站。', '0', '1', '', '2015-04-09 17:18:45', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('28', '李冰', 'http://blog.libing.org', '', '李冰 | 一个山东人', '0', '1', '', '2015-04-09 17:19:56', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('29', 'Geodesigner', 'http://gaodaojing.com', '', '一个网站、一个角落；一份收获、一份纪录、一份分享；爱好平淡、爱好折腾', '0', '1', '', '2015-04-09 17:23:30', '1', '1', '1');
INSERT INTO `oihao_blog_sites` VALUES ('30', '小伙部落', 'http://www.lihuoqing.cn', '', '小伙部落...', '0', '1', '', '2015-04-09 17:24:51', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('31', '奇笛网', 'http://www.qidic.com', '', '奇笛网是一个关注物联网创业的科技媒体', '0', '1', '', '2015-04-09 17:26:06', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('32', 'WMA互联网营销分析', 'http://www.godsem.com', '', 'WMA,web marketing analytics', '0', '1', '', '2015-04-09 17:26:59', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('33', '小鬼哥', 'http://www.ebeta.org', '', '小鬼哥博客是个纯粹的自媒体，没有既定的核心，想到什么就写什么，只要觉得有价值的东西就分享出来，甚至还会分享一些出格的观点，还请鬼鬼们多多支持。', '0', '26', '', '2015-04-09 17:28:14', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('34', '刘志仕个人博客', 'http://www.liuzhishi.com', '', '深圳SEO刘志仕博客，喜欢研究百度SEO优化技术，做以用户体验为中心的SEO，记录SEO技巧。分享网站建设、网站SEO优化、关键词排名、SEO数据分析、SEO项目实战经验等。', '0', '26', '', '2015-04-09 17:32:15', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('35', '爱Java', 'http://www.aijava.cn', '', '爱Java。原名为：AiJava 交流吧。由晨风²º¹⁴维护，还有一些好友投稿共同维护,感谢他们,爱Java专注java开发,Java技术交流,同时也分享一些好玩的有趣的新鲜事务、这里是小伙伴的聚集地,一起做技术探讨,关注趋势,优质分享,关注科学探索和最新发现新鲜事务,欢迎来到本博客共同分享乐趣,一起探讨和研究 | aijava.cn', '0', '26', '', '2015-04-09 17:32:54', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('36', '老钟博客', 'http://www.laoz.net', '', '记录源于生活，分享生活点滴', '0', '26', '', '2015-04-09 17:33:52', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('37', '乐晨博客', 'http://www.ilechen.com', '', '乐晨博客，一个关注互联网、建站运营、SEO、SEM、网络推广等知识交流学习和工作经验分享的媒体博客；是一个热爱互联网知识的新人学习成长的平台。博主：乐晨！', '0', '26', '', '2015-04-09 17:34:29', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('38', '马海祥博客', 'http://www.mahaixiang.cn', '', 'SEO思维博客就是要帮助初学seo的创业者,如何在网站制作的同时把seo技术、网页优化、网站管理、团队合作以及多方面的因素融合到sem网络营销中,把周围接触到的新鲜事物敏锐的跟seo联系起来,全方位展示给访客最新的、最有价值的信息,进而从一个全新的层次上提升seo优化的水平,达到网络信息最佳化的展示效果.', '0', '14', '', '2015-04-09 19:49:43', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('39', 'Prower', 'http://www.prower.cn', '', '专注于互联网潮流，可用性分析，以用户为中心的设计，软件设计，网页设计等的专业博客', '0', '14', '', '2015-04-09 19:50:25', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('40', '分文网', 'http://www.ifenwen.com', '', '分文网 | 爱分享 爱分文', '0', '14', '', '2015-04-09 19:52:07', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('41', '玛雅UI-Maya UI', 'http://mayaui.com', '', '玛雅UI是为UI设计师提供最优的UI设计创意、灵感、资源,Gui设计欣赏,web ui设计欣赏,app ui设计欣赏,软件界面设计欣赏,icon设计欣赏,ui设计配色,UED用户体验设计,Maya UI为您的UI设计变得有个性有品味。', '0', '14', '', '2015-04-09 19:52:50', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('42', 'AYOU部落', 'http://ayou.info', '', 'AYOU部落2006年建站，专注互联网科技，内容丰富，提供免费资源、搞笑视频、互联网技术、数码外设等专业原创文章。', '0', '14', '', '2015-04-09 19:54:37', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('43', '百家网络博客', 'http://www.wuover.com', '', '百家网络博客是专注网络技术，网站建设与SEO优化的互联网个人博客，属为秋叶的独立博客，包括博主的个人原创经验以及优秀资源分享，一个注重创新与互动的网站。', '0', '14', '', '2015-04-09 19:56:25', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('44', 'IT校园博客', 'http://www.xtii.org', '', '专注于互联网，对java，各类操作系统下载，软件分享，IT视频分享', '0', '14', '', '2015-04-09 19:56:58', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('45', '任丰华博客', 'http://www.renfenghua.com', '', '关注草根站长和自媒体的个人站长博客', '0', '3', '', '2015-04-09 19:57:49', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('46', '骷髅猫博客', 'http://www.kuloumao.com', '', '记录骷髅猫和藕花的生活点滴，分享我们的旅途精彩片段和户外野营爬山感受，分享我们阳台上种的花草的近况。推荐经典好用的软件、网站或商品等。博客大全收录优秀博客。', '0', '3', '', '2015-04-09 19:58:25', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('47', '技术小站', 'http://www.techcpp.com', '', '技术分享与交流的平台', '0', '3', '', '2015-04-09 20:02:43', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('48', '上海SEO', 'http://www.seoweb-sh.com', '', '上海SEO顾问专业服务,为上海地区公司与企业网站提供优质全方位的网站优化,SEO顾问,SEO培训服务,上海SEO咨询电话:15921222870', '0', '3', '', '2015-04-09 20:04:12', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('49', '张飒的博客', 'http://zhangsa.net', '', '张飒的博客专注于以SEO为基础的网络推广与营销相关知识的研究，包括搜索营销、用户体验、社交化营销推广、内容营销等等，提供精品电子书、创意广告、微电影、创意图片、信息图等干货下载。', '0', '3', '', '2015-04-09 20:07:03', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('50', '高时银博坛', 'http://wanlimm.com', '', '高时银博客着手wordpress中文CMS主题开发(作品有：ssmay主题、dream主题等),其中作为主打产品的ssmay主题非常成熟,尤其是ssmay主题3.0版更是深受用户的喜爱，ssmay主题3.0版的布局和功能都是非常人性化的。高时银博客将会在未来的时间里，为广大支持高时银博客的朋友开发更加像ssmay主题一样精美的wordpress中文主题。怎样使用wordpress中文CMS主题做网站？怎样通过wordpress快速建站？在高时银博客里你将会找到答案。', '0', '3', '', '2015-04-09 20:08:05', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('51', '快乐分享', 'http://www.fly-tang.com', '', '快乐分享，是一个关注互联网、IT、网络维护、信息共享、程序学习、电子商务等领域的个人IT信息博客。作者：Thomson', '0', '3', '', '2015-04-09 20:09:41', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('52', '妮妮猫', 'http://linqiu.net', '', '手绘 卡通头像绘画，手绘吧, 手绘教程 ,手绘漫画 ,手绘动漫-手绘吧_ 手绘_手绘教程_手绘漫画_六一居士', '0', '24', '', '2015-04-09 20:11:11', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('53', '阿北的博客', 'http://www.abeion.com', '', '阿北的博客，关注互联网和分享网络技术的IT博客,专注c#开发，分享C#教程，C#源的博客', '0', '24', '', '2015-04-09 20:12:06', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('54', '张华的电子商务网站', 'http://www.xiao76.com', '', '张华的电子商务网站是专注于电子商务网站的市场分析,网站策划,营销推广和运营管理的专业电子商务网站,张华主要分享电子商务网站运营的经验和方法.张华QQ:42888672.', '0', '24', '', '2015-04-09 20:14:01', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('55', '老五说', 'http://www.laowushuo.com', '', '老五说（www.laowushuo.com）讲述原创前沿的SEO技术与网络营销知识。这里分享网站优化、网络推广、网络营销、网站建设等网络技术知识，并谈论社会、闲聊人生。请关注老五说！', '0', '24', '', '2015-04-09 20:15:49', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('56', '小桥流水人家', 'http://baiqiuyi.com', '', '小桥流水人家', '0', '24', '', '2015-04-09 20:16:48', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('57', '快乐编程', 'http://www.01happy.com', '', '陈杰斌的网络日志，喜欢折腾新鲜东西，努力朝架构师的方向前进。最近在研究GO语言，有兴趣的可以互相交流。', '0', '24', '', '2015-04-09 20:17:21', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('58', '闲思录', 'http://dbanotes.net', '', 'DBA Notes | 闲思录 - 创业感悟 网站架构 性能优化 技术评论', '0', '15', '', '2015-04-09 20:20:24', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('59', '√别处再无囧囧博客', 'http://www.jjseoblog.com', '', '囧囧,一典型IT苦逼男.关注SEO、网络营销、电商.顺便聊聊囧囧生活在嘉兴那点事儿,就是这个博客的全部.', '0', '15', '', '2015-04-09 20:20:54', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('60', '爱我所爱', 'http://i5si.com', '', '分享软件,开发,设计,编程,生活经验。', '0', '15', '', '2015-04-09 20:22:10', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('61', '优图斯', 'http://utors.com', '', '优图斯 - ◎爱设计 爱思考 ◎爱生活 爱分享 ◎不装B 少犯2 新地盘：dlmao.com 大脸猫', '0', '15', '', '2015-04-09 20:23:51', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('62', '杨红林博客', 'http://www.yanghonglin.com', '', '杨红林博客是一个关注网站SEO优化，网站优化咨询诊断学习、SEM百度竞价推广、网站运营分享、互联网电子商务、移动互联网新鲜事和自己的文学写作的博客。嗯，值得收藏的个人博客。', '0', '15', '', '2015-04-09 20:24:29', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('63', 'IT工作生活这点事', 'http://www.suchso.com', '', '项目实战经验总结会有好处；工作太累看看段子快乐工作；主营jquery、web、asp.net产品开发设计；项目开源代码共享。', '0', '12', '', '2015-04-09 20:25:29', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('64', 'PHP二次开发', 'http://www.php2.cc', '', 'php二次开发，ecshop二次开发，dedecms二次开发，discuz二次开发，wordpress二次开发，SEO，php2.cc，让我们共同学习。', '0', '12', '', '2015-04-09 20:26:22', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('65', '光的传人博客', 'http://www.liu16.com', '', '我是一个搞IT的人，也是一个被IT搞的人，大家都是华夏炎黄子孙，是龙的传人，而我，既是龙的传人，同时也是光的传人！传递爱的光芒，让光彩照亮所有的黑暗角落！本博主专注网站建设技术、SEO技术、网络推广等，欢迎各位朋友前来交流！', '0', '12', '', '2015-04-09 20:26:57', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('66', '极乐鸟博客', 'http://jileniao.net', '', '极乐鸟博客,极乐鸟物语,极乐鸟的传说,极乐鸟的微博,极乐鸟资源下载提供', '0', '12', '', '2015-04-09 20:28:17', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('67', 'dudo博客', 'http://dudo.org', '', 'dudo博客专注于网站SEO优化技术、社交网络和网站开发技术。SEO是一个网站通过搜索引擎让用户发现自己的最佳实践，而随着智能客户端的兴趣社交网络让现在人际关系虚拟化，同时也使商业营销变得更加容易。', '0', '12', '', '2015-04-09 20:29:11', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('68', 'I&#039;m Online', 'http://jiwanqiang.com', '', 'Record the issues and some articles for develop.', '0', '12', '', '2015-04-09 20:30:50', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('69', '堕落的鱼', 'http://www.duoluodeyu.com', '', '堕落的鱼,是一个专注于电脑技术、网站架设、搜索引擎、互联网、智能卡等行业的原创IT技术博客,希望你能在本站得到你所需要的信息。作者堕落的鱼', '0', '6', '', '2015-04-09 20:32:31', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('70', '来客阿达', 'http://www.likeada.com', '', '来客阿达...', '0', '6', '', '2015-04-09 20:34:00', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('71', 'moon&#039;s blog', 'http://www.92csz.com', '', '分享网络技术,服务器技术,网站架构及编程相关技术知识的运用技巧！', '0', '6', '', '2015-04-09 20:34:43', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('72', '搜优中国', 'http://www.soocn.cn', '', '搜优中国Search office optimization China-专注SEO优化,网站推广,关注搜索引擎优化,分享SEO推广经验,为企业提供专业的SEO推广服务,网站建设,赢商科技致力于提供河南最具影响力的SEO顾问服务！', '0', '6', '', '2015-04-09 20:35:46', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('73', '森林的博客', 'http://www.hiloong.com', '', '森林的博客...', '0', '6', '', '2015-04-09 20:37:02', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('74', 'IT技术吧', 'http://www.itjsb.com', '', 'IT技术吧为广大电脑技术爱好者提供一流的电脑技术,办公软件,电脑基础知识,笔记本电脑,平板电脑以及手机推荐等,致力于提供包括提供电脑组装配置,网络安全维护,电脑故障维修,操作系统相关教程,SEO网站优化,网站运营,以及电脑故障全方面电脑知识,是国内更新最快最好的IT技术网。', '0', '6', '', '2015-04-09 20:38:27', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('75', '站长谈', 'http://www.tan51.com', '', '站长谈网络营销博客为大家提供更多更全面的网站优化排名，网络推广，网络营销方法，大家可以共同来探，一起学习更有效的网站排名方法。', '0', '6', '', '2015-04-09 20:40:05', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('76', 'AEZO · 部落阁', 'http://www.aezo.cn', '', 'AEZO · 部落阁励志站在WordPress的肩膀上学习分享PHP技术，草根站长小易希望和大家一起交流更多的互联网技术！', '0', '17', '', '2015-04-09 20:47:08', '1', '1', '1');
INSERT INTO `oihao_blog_sites` VALUES ('77', 'PHPthink', 'http://www.phpthink.cn', '', 'PHPthink！一个专门研究PHP开发语言的BLOG，欢迎广大PHPer一起交流，一起研究，LAMP等各种问题。Phpthink，全球最小的PHP交流基地(www.phpthink.cn)', '0', '17', '', '2015-04-09 20:47:47', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('78', '卡农的后花园', 'http://www.ikanon.cn', '', '一个专注于IT硬件、计算机故障及维修、互联网技术等的原创性质技术博客，是一个值得网民收藏的IT博客。', '0', '17', '', '2015-04-09 20:48:22', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('79', '七七博客', 'http://djiaqi.com', '', '七七博客是佳祺学习Excel表格的基本操作、Excel函数，交流Word、ERP系统应用，发布Excel教程、Word教程、学习心得的原创博客，是值得大家收藏的博客。', '0', '17', '', '2015-04-09 20:48:56', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('80', 'Web编程技术交流网', 'http://www.lamp99.com', '', 'Web编程技术交流网，是一个专注于电脑技术、PHP技术开发，网站架设互联网、搜索引擎行业、Google Earth、Web 2.0等的原创IT技术博客。，PHP研究，PHP博客，前端设计，网站开发！- Web编程技术交流网', '0', '17', '', '2015-04-09 20:49:30', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('81', '黄冈SEO', 'http://www.chengjinseo.com', '', '黄冈seo博客，专业提供企业网站建设，网站优化百度排名等服务', '0', '17', '', '2015-04-09 20:50:04', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('82', '592雨站', 'http://www.592yu.com', '', '关注网络推广和互联网营销', '0', '5', '', '2015-04-09 20:51:38', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('83', 'ITLee', 'http://www.itlee.name', '', '专注于互联网（PHP、Python、MySQL、JavaScript）等各种技术', '0', '5', '', '2015-04-09 20:52:22', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('84', '松林&#039;s blog', 'http://www.songlin51.com', '', 'php,dedecms,各种php一次开发与二次开发程序交流,thinkphp教程，thinkphp开发， 专注于php技术文章与原创文章', '0', '5', '', '2015-04-09 20:53:50', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('85', '垂钓愚溪', 'http://www.seozyx.com', '', '简单的快乐', '0', '5', '', '2015-04-09 20:55:08', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('86', '湛蓝天空', 'http://skyhome.cn', '', '湛蓝天空博客是一个关注互联网Web开发和SEO的独立原创博客，湛蓝天空博客所关注领域：Web开发、网站建设、搜索引擎、站长、SEO、网站营销、社会化网络等，是一个值得个人站长和网站爱好者收藏和订阅的博客。', '0', '5', '', '2015-04-09 20:55:48', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('87', '正思维', 'http://www.zhengsiwei.com', '', '一种世界观，指积极的、面向目标的、力图解决问题的思维方法。', '0', '5', '', '2015-04-09 20:57:08', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('88', '彬娃儿的博客', 'http://binwaer.com', '', '关注网络热点资讯,互联网IT站长资讯,分享经验心得', '0', '29', '', '2015-04-09 21:00:23', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('89', '赖林林博客', 'http://lailinlin.com', '', '赖林林博客-是一个关注IT技术、站长、搜索引擎、网赚、SEO、网络营销的IT博客，也是一个记录工作、学习、技术的成长博客，是一个值得IT从业者收藏的IT博客', '0', '29', '', '2015-04-09 21:01:04', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('90', '盐科技', 'http://www.yankeji.cn', '', '盐科技...', '0', '29', '', '2015-04-09 21:02:10', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('91', '邹志强个人网站', 'http://www.zouzhiqiang.com', '', '关于邹志强的学习、工作、生活、情感以及创作、收集的文章。欢迎大家光临，多多交流！', '0', '29', '', '2015-04-09 21:02:40', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('92', '枫叶博客', 'http://www.qyuef.com', '', '枫叶的网站建设博客-专注分享网站建设经验|枫叶博客,一个专注于分享成都网站建设，成都网站制作，织梦模板开发，ecshop模板开发的网站建设博客，在这里博主为大家分享一些自己学习和工作中的心得体会,欢迎大家光临！..', '0', '29', '', '2015-04-09 21:03:48', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('93', 'IT那些事', 'http://www.itnxs.com', '', 'IT那些事是一个关注互联网发展,分享互联网精彩资讯,体会互联网成功感悟,记录互联网创新成长,让更多的人关注互联网,了解互联网的博客平台', '0', '4', '', '2015-04-10 08:38:32', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('94', 'IT博客', 'http://column.iresearch.cn', '', '艾瑞网专栏频道是众多网络专家的IT博客，IT行业数据专家观点，发布最新最全的电子商务、搜索引擎等网络行业动态，概述网络发展趋势，总结最新热门技术等专题的网络平台。', '0', '4', '', '2015-04-10 09:41:46', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('95', '乌帮图的博客', 'http://wubangtu.com', '', '这是乌帮图使用WordPress搭建的一个独立博客，分享一些WordPress经验和无关痛痒的牢骚。', '0', '4', '', '2015-04-10 09:43:52', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('96', '佳友博客', 'http://www.caijiayou.com', '', '佳友博客，是一个专注于互联网、前端开发、IT技术的科技博客，作者蔡佳友（www.caijiayou.com）。', '0', '4', '', '2015-04-10 09:44:25', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('97', 'Netsh', 'http://blog.netsh.org', '', '一个IT、计算机、网络应用，关注网页设计、Wordpress、前端技术，以及生活娱乐的交流和分享独立博客，大多数为原创文章。', '0', '4', '', '2015-04-10 09:46:31', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('98', '朝军的php博客', 'http://www.choujone.com', '', '这是我的个人博客，本博客以java/php/前端开发为主的独立的综合性博客，纯jsp，servlet编写，架设在GAE平台上。本博客不定期更新java，php等技术上的文章，另外增加json在线视图查看工具、cakephp技术专区。', '0', '4', '', '2015-04-10 09:47:57', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('99', '小春 \' s blog', 'http://94fzb.com:8080', '', '小春博客(blog) JAVA程序猿一只，爱技术，爱闲逛，爱妹子，博客的主要目的在于记录自己遇到的问题，让遇到坑的人能更快的爬出来。同时也记录一些自己工作，学习，生活。正在努力让自己成为一个全栈工程师中。', '0', '4', '', '2015-04-10 09:48:59', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('100', '放羊博客', 'http://www.keege.com', '', '放羊博客是一个关注国内外IT、搜索引擎、SNS、移动互联网、web2.0、电子商务领域的科技博客，作者joojen.', '0', '16', '', '2015-04-10 09:49:45', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('101', '北漂书生博客', 'http://www.361blog.com', '', '热衷网络营销,注重网站运营思路和策略,而非简单网络推广技巧.分享网站运营推广知识,传播实用的网络营销技巧,剖析热门网络推广案例', '0', '16', '', '2015-04-10 09:50:17', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('102', '向日葵网志', 'http://www.blog1984.com', '', '那一抹温暖的阳光，是我们永恒的向往。——向日葵网志内容包括向日葵介绍、向日葵花语、最新向日葵图片照片摄影等，是一个个人博客，同时分享、记录作者的心情、思想和生活，文学艺术，电影音乐，以及wordpress相关内容。', '0', '16', '', '2015-04-10 09:51:33', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('103', '老赵点滴', 'http://blog.zhaojie.me', '', '老赵点滴 - 追求编程之美', '0', '16', '', '2015-04-10 09:56:02', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('104', '黄朔的博客', 'http://www.nojjyy.com', '', '专注于研究信息发布和展现及用户体验的博客', '0', '16', '', '2015-04-10 09:57:24', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('105', '设计2点半', 'http://www.2dianban.com', '', '设计2点半 分享广告创意设计,平面设计知识,创意标识设计,是设计师不得不看的平面设计精华整理、知识分享博客！', '0', '11', '', '2015-04-10 09:58:34', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('106', '张某林博客', 'http://www.zhangmoulin.com', '', '张某林，一个坚持写日志并关注站长创业、电子商务、网站运营、网络推广、搜索引擎优化（SEO）、微信营销、品牌营销、新媒体营销、资源整合的自媒体人。这个博客是我的精神家园,收录我多数的生活信息和学习笔记,致力于互联网技术的应用分享。能够得到大家的支持是种荣幸,也是我更新的动力,欢迎加我QQ：4087408，交流经验.', '0', '11', '', '2015-04-10 10:00:05', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('107', '缄默', 'http://www.windsays.com', '', 'Ovtavius Liu的博客', '0', '11', '', '2015-04-10 10:00:36', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('108', '宿松在线', 'http://www.susongzx.cn', '', '宿松在线——宿松人的博客-宿松在线，宿松SEO，宿松论坛', '0', '11', '', '2015-04-10 10:02:26', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('109', '梦三秋', 'http://www.skygq.com', '', '梦三秋博客提供jquery基础教程，非常适合新入门的jquery学习者，另外还提供最新的很优秀的jquery实用插件教程，这里是个非常适合学习交流jquery的好地方。', '0', '11', '', '2015-04-10 10:02:59', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('110', 'Sam Sun', 'http://www.83sun.com', '', '专注互联网，电子商务和搜索引擎的原创博客，作者孙欢（Sam）在这里分享每一天，感谢有你与我相伴。', '0', '11', '', '2015-04-10 10:03:58', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('111', 'Icecream冰淇淋', 'http://www.fisherv.com', '', 'icecream为用户和读者提供优质的创意设计资讯，内容涵盖设计、创意、科技、家居、奇趣和摄影等几大方面，通过介绍优秀的国外创意作品和获奖作品，做到天天有看点，新鲜每一天。', '0', '8', '', '2015-04-10 10:05:57', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('112', '毕扬博客', 'http://laob.me', '', '毕扬博客 | 雕刻时光，网络生活！', '0', '8', '', '2015-04-10 10:06:42', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('113', '54dev.com', 'http://www.54dev.com', '', '54dev.com', '0', '8', '', '2015-04-10 10:08:47', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('114', '我爱平铺', 'http://ilovetile.com', '', '我爱平铺...', '0', '8', '', '2015-04-10 10:12:09', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('115', '雨樹&amp;烏鴉', 'http://yushuwuya.com', '', '雨树乌鸦的个人博客', '0', '8', '', '2015-04-10 10:15:05', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('116', '粉偶吧', 'http://www.fenouba.com', '', '微博营销经常是一个令人头疼的事情，粉偶吧博主经过多年实践，总结出独到的微博营销技巧、微博营销方案，并结合微博营销案例详细讲解，让更多从事微博营销的人得到实惠。', '0', '23', '', '2015-04-10 10:17:34', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('117', '设计癖', 'http://www.shejipi.com', '', '推动设计创业', '0', '23', '', '2015-04-10 10:18:34', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('118', 'IT时代周刊', 'http://news.ittime.com.cn', '', 'IT时代网，解读信息时代的商业变革；以调查见深度；以商业故事见功力。是CEO/CIO/CFO以及政府官员、商业领袖首选刊物!', '0', '23', '', '2015-04-10 10:19:19', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('119', '502建站', 'http://www.502jz.com', '', '502建站为全国各地中小企业及个人提供免费建站教程，免费网站建设，方便0基础的人群学习，建站教程易学易懂，用户只需会上网、不需学习编程及任何语言，只要使用该教程，只要会打字，即可在线直接完成建站所有工作。', '0', '23', '', '2015-04-10 10:20:20', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('120', '长春SEO', 'http://www.zhaozijian.com', '', '长春SEO、吉林SEO探索者赵子健【QQ792138】:致力于SEO技术研究与分享；提供长春网络推广、网站优化服务、SEO顾问服务。', '0', '23', '', '2015-04-10 10:23:01', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('121', '锐观网', 'http://www.iruiguan.com', '', '锐观网是一个有态度、个性化的科技新锐媒体。以新锐的视角全方位的解读当下创业、科技、互联网金融、电商等事件，致力于独立、前瞻、深入的分析评论。', '0', '23', '', '2015-04-10 10:24:14', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('122', 'gOxiA', 'http://goxia.maytide.net', '', 'gOxiA,苏繁,sufan,微软最有价值专家,Microsoft MVP', '0', '9', '', '2015-04-10 10:26:38', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('123', '小众软件', 'http://www.appinn.com', '', '小众软件，分享免费、小巧、实用、有趣、绿色的软件。', '0', '9', '', '2015-04-10 10:27:24', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('124', 'IT人生', 'http://www.aiti123.com', '', 'IT人生官方,IT资讯,软件博客,破解软件,PC技术,软件分享,活动福利等—AiTi123.com', '0', '9', '', '2015-04-10 10:32:41', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('125', '动力火柴’s 手札', 'http://hyear.net', '', '不要因为走得太快而忘记为什么出发!', '0', '9', '', '2015-04-10 10:33:26', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('126', '陈忠岩个人博客', 'http://www.chenzhongyan.com', '', '幸福：没有捷径，只有用心经营。', '0', '9', '', '2015-04-10 10:34:10', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('127', '若兮为尘', 'http://www.rccoder.net', '', '若兮为尘-若兮 有何 为尘 浮烟|若兮为尘,致力于Web开发，WordPress技巧以及IT业界的动态发展。站点内容丰富，有WordPress的优化，IT业界的动态，手机行情的追踪，网站SEO的评说，提高收录的技巧，大学生生活的记述，博主心情的记载，codering（C,C++,JAVA，php,ruby,html,css……）中的分享..', '0', '9', '', '2015-04-10 10:34:46', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('128', '晨露博客', 'http://www.chenlublog.com', '', '致力于关注计算机视觉与图形图像处理和相关算法的博客,提供计算机视觉源代码下载,国内外最新计算机视觉发展前沿以及计算机视觉相关资源下载,作者山景城的城（Morningdew）。', '0', '2', '', '2015-04-10 10:39:14', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('129', '王望奎博客', 'http://www.wangwangkui.com', '', '王望奎博客是关注搜索引擎网络营销(SEM)，专注百度竞价推广，竞价推广技巧，竞价推广优化和竞价推广排名等竞价推广方法，并记录望奎生活滴滴点点的个人博客。', '0', '2', '', '2015-04-10 10:39:53', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('130', '老刁博客', 'http://nb386.com/blog/', '', '淘宝店铺【老刁的苹果店】掌柜的博客，老刁毕业于大连理工大学，专注于销售高性价比的苹果产品。', '0', '2', '', '2015-04-10 10:40:44', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('131', '鸡啄米', 'http://www.jizhuomi.com', '', '鸡啄米博客致力于研究互联网、数码技术、数码产品、软件技术、软件开发和编程入门等领域，是一个提供互联网信息、数码资讯、软件编程等IT资讯的博客。', '0', '2', '', '2015-04-10 10:41:18', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('132', '亿度软件', 'http://blog.yiyidu.com', '', '一亿度为您提供最好用的免费软件，包括杀毒软件，刻录软件，翻译软件，录音软件，画图软件，看图软件，日记软件，录音软件，录像软件，看图软件，数据恢复软件等等', '0', '2', '', '2015-04-10 10:43:20', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('133', '酷冻博客', 'http://www.koodoon.com', '', '理财是一种生活态度，现在需要理财，未来更加需要理财。互联网是一个信息平台，合理利用这个平台，可以为生活带来更多的便利。酷冻博客，专注投资理财和互联网信息的IT博客。', '0', '2', '', '2015-04-10 10:44:10', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('134', '刘海强博客', 'http://www.liuhaiqiang.com', '', '刘海强个人博客，免费分享太原网站建设、太原网页设计、太原seo技术、太原网站制作、太原网站设计、太原网络公司、太原做网站公司、太原做优化公司、太原网站策划、太原网站优化技术、太原网站推广、太原网站评估、太原网站运营、太原网站改版等经验。太原网站建设找刘海强，专业技术团队,提供完整网站建设方案,拥有10年建站技术支持!网站建设一条龙,网站域名,空间,网站详细板块提供全套服务!', '0', '20', '', '2015-04-10 10:53:37', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('135', '醉风云博客', 'http://www.zuifengyun.com', '', '醉风云博客是专注于探索生活经验、成长感悟、创业就业、网络资讯的原创博客。另外你也可以在这里找到一些有价值的观点和评论。', '0', '20', '', '2015-04-10 10:54:27', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('136', '蜗牛工作室', 'http://www.liuyon.cn', '', '刘永,蜗牛,工作室,蜗牛工作室,蜗牛集市,网站模板,网站插件,阿里云服务器,阿里云维护,技术交流,分享互联网', '0', '20', '', '2015-04-10 10:57:26', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('137', '大同SEO', 'http://www.datongseo.org', '', '大同SEO张卫清从事SEO多年，学习分享SEO技巧与网站优化推广经验心得，并且专注于互联网营销，免费为企业网站做诊断，并且提供分析报告，为企业营销贡献自己的力量。', '0', '20', '', '2015-04-10 10:58:27', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('138', 'Channel', 'http://www.dbform.com', '', '面朝大海，春暖花开', '0', '20', '', '2015-04-10 11:00:03', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('139', '欧阳清宇博客', 'http://oyqy.info', '', '欧阳清宇博客是一个关注科技趣闻、电脑技巧的博客，在这里与你分享科技趣闻。值得业余人士和科技爱好者收藏。', '0', '18', '', '2015-04-10 11:01:23', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('140', 'YuZePeng  Blog', 'http://www.yuzepeng.com', '', '于泽鹏 BLOG 博客 SB SafeBrowsing GEZ鸽子', '0', '18', '', '2015-04-10 11:01:51', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('141', '苏建报博客', 'http://www.sujianbao.com', '', '苏建报的互联网营销博客,专注与分享网络营销技巧、网络推广解决方案、网络营销实战案例、中英文网站优化排名经验,为互联网发展提供动力。', '0', '18', '', '2015-04-10 11:03:09', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('142', '蓝扬网博', 'http://www.5zhome.com', '', '软件下载,破解软件,蓝扬,蓝扬网博,健康饮食,饮食与健康,资源分享,asp网站源码,php网站源码,单机游戏下载大全中文版下载,游戏下载,周易,电脑技巧,攻略游戏,健康小常识,美食,电影天堂,电影下载,2014最新电影', '0', '18', '', '2015-04-10 11:05:08', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('143', '资源坊', 'http://5kwz.com', '', '专注做网络资源分享', '0', '18', '', '2015-04-10 11:06:09', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('144', '电脑爱好者', 'http://www.cfan.com.cn', '', 'cfan网站隶属于中国发行量最大的IT技术普及媒体北京《电脑爱好者》杂志，立足于以鲜活的内容，让广大网民了解最新科技数码资讯，并关注科技新生活，更好的服务于广大网民。', '0', '31', '', '2015-04-10 11:07:44', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('145', 'WP酷', 'http://www.mywpku.com', '', 'WP酷提供免费的WordPress企业模板,淘宝客主题,博客主题等各种主题下载，并分享WordPress主题安装使用教程及模板制作的视频教程下载和实用插件。', '0', '31', '', '2015-04-10 11:10:23', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('146', '6D分享网', 'http://www.6dfx.com', '', '6D分享网（www.6dfx.com）从不生产文章，只是专注IT圈内的搬运工30年：站长段子，IT段子，SEO段子，网络圈子那点事儿', '0', '31', '', '2015-04-10 11:11:14', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('147', '三亚SEO优化', 'http://www.seopower.cn', '', 'SEOPOWER（优化力量）为您提供最全面的SEO知识、技巧及最新SEO资讯，SEO交流学习平台，SEO专业工作室。SEOPOWER是海南三亚地区顶级SEO工作室，是您网站优化，网络推广必不可或缺的得力助手。网络营销，当然选择SEOPOWER！', '0', '31', '', '2015-04-10 11:12:10', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('148', '手游那点事', 'http://www.sykong.com', '', '手游那点事关注手机游戏行业新闻,手机游戏运营,手机游戏推广,手机游戏渠道等手游行业资讯,做手游,就上手游那点事...', '0', '10', '', '2015-04-10 11:15:23', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('149', '嘘！一叶！', 'http://zhangzhao.me', '', '美剧,科幻,读书笔记,北漂,工作', '0', '10', '', '2015-04-10 11:17:17', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('150', '李玉美博客', 'http://www.liyumei.net.cn', '', '李玉美(liyumei)it博客是为职场新人讲解超级职场法则,职场礼仪,职场技巧,职场励志小故事的个人博客,分享IT职场笑话,成为职场好榜样,为职场新人提供一个良好发展的交流学习平台', '0', '10', '', '2015-04-10 11:21:23', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('151', 'No牛网', 'http://www.noniu.com', '', 'No牛网本着织梦内容管理系统免费开源的原则，分享织梦建站教程和织梦使用的经验技巧，提供商业收费或者免费的织梦DedeCMS模板下载，同时还有织梦整站源码或一些其他的CMS模板、源码等。', '0', '10', '', '2015-04-10 11:22:12', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('152', 'SEO技术分享', 'http://seoget.net', '', 'SEOGet.net致力于SEO原创技术分享.包含SEO技巧&工具&实验室,社会化营销和行业观察,主要为原创技术和翻译国外SEO优秀文章.欢迎联系QQ:8266248.', '0', '10', '', '2015-04-10 11:25:27', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('153', 'sunny个人博客', 'http://www.sunnyh.cn', '', 'sunny个人博客,一个IT爱好者的博客。记录了生活中，学习上的一些心得。用代码来诠释生命的意义。', '0', '25', '', '2015-04-10 12:38:20', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('154', '浅唱一曲工作室', 'http://www.iligang.cn', '', '浅唱一曲工作室[www.iligang.cn]是关注软件编程和移动互联的IT科技在线博客！浅唱一曲工作室[www.iligang.cn] - 有你更精彩！你的支持就是我们最大的动力！', '0', '25', '', '2015-04-10 12:54:37', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('155', 'Fuyuncat的技术分享网站', 'http://www.hellodba.com', '', 'Fuyuncat个人网站，创建于2005年。分享各种原创数据库技术文档、培训教程、解决方案、案例及工具。', '0', '25', '', '2015-04-10 13:25:38', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('156', '淘金小站', 'http://www.cashzhan.com', '', '淘金小站关注网赚，关注网络赚钱，关注网上赚钱，分享网赚经验，倾力打造网上赚钱第一平台，帮助新手赚友实现自己的网赚梦。', '0', '25', '', '2015-04-10 13:32:07', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('157', '野狼建都', 'http://longchaojun.cn', '', '野狼建都_Longgle — 生肖羊，星座白羊，崇尚狼性，欲如帝王建都，故自称野狼建都；不会设计，也不懂代码，典型互联网伪原创者！', '0', '25', '', '2015-04-10 13:37:53', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('158', '零零发', 'http://www.linglingfa.net', '', '零零发...', '0', '21', '', '2015-04-10 13:44:20', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('159', '李君南的博客', 'http://lijunnan.com', '', '互联网科技与饮食健康综合博客。内容贴近生活，拒绝网络谣言及软文稿，一个靠谱的博客。', '0', '21', '', '2015-04-10 13:45:15', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('160', '手记阁', 'http://blog.shoujige.com', '', '本博客成立宗旨,是为了本人能够更多的掌握网站制作技巧,熟练运用DEDECMS,能做出自己理想的网站.本博客内容大部分为原创,部分来源于网上.博客凝聚了博主使用DEDEcms将近2年的各种新得体会,希望也能给大家带来帮助', '0', '21', '', '2015-04-10 13:46:54', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('161', '先知互联', 'http://koooc.com', '', '先知互联是一个关注企业建站服务、提供网站推广、网站优化、满洲里网站制作等服务。', '0', '21', '', '2015-04-10 13:48:52', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('162', '电脑·生活', 'http://www.wangjie.name', '', '电脑·生活', '0', '21', '', '2015-04-10 13:51:06', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('163', 'IT耳朵', 'http://www.iterduo.com', '', 'IT耳朵——提供有趣、有价值，简单易懂的科技文章', '0', '22', '', '2015-04-10 13:52:15', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('164', '子叶IT手册', 'http://www.ziye001.com', '', '知识永无止境，所以要搜集并学习更多的内容', '0', '22', '', '2015-04-10 13:53:33', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('165', 'TAHOROOM', 'http://www.tahoroom.com', '', '华月凌衍·温故知新', '0', '22', '', '2015-04-10 13:55:34', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('166', '虫子窝', 'http://www.ainsect.com', '', '虫子窝...', '0', '22', '', '2015-04-10 13:57:50', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('167', '想象家', 'http://www.mysenz.com', '', '我们就是一群想象家，用想象寻觅隐匿在生活中的乐趣。想象家发现并分享美好的事物，我们关注艺术、摄影、独立出版、影视、图书、互联网。', '0', '22', '', '2015-04-10 14:00:27', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('168', '宋夏博客', 'http://www.isongxia.com', '', '宋夏的成长博客.热爱互联网,市场营销人,中国电子商务注册培训师,从事电子商务行业.专注于品牌营销&amp;网络营销的学习和分享.', '0', '30', '', '2015-04-10 14:04:08', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('169', '极客标签', 'http://www.gbtags.com', '', '在线编程知识分享学习平台', '0', '30', '', '2015-04-10 14:11:26', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('170', 'Hi9', 'http://www.hinine.com', '', '关注谷歌、安卓、Linux的原创IT科技博客', '0', '30', '', '2015-04-10 14:13:24', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('171', '黑色网魂', 'http://www.heisewanghun.com', '', '关注互联网，数码，智能硬件的IT科技博客', '0', '30', '', '2015-04-10 14:14:46', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('172', 'Tech Read', 'http://www.techread.cn', '', '阑夕的中文Blog', '0', '30', '', '2015-04-10 14:16:11', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('173', '维凯博客', 'http://www.zhangweikai.com', '', '岁月,如果能有点记录留下,就没有失去！', '0', '19', '', '2015-04-10 14:18:07', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('174', 'Oracle Life', 'http://www.eygle.com', '', '提供专业的技术支持,性能调整 及 Oracle 数据恢复服务 - 云和恩墨 - 数据综合服务领导者', '0', '19', '', '2015-04-10 14:20:26', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('175', 'SEM学习博客', 'http://www.xuesem.com', '', 'SEM学习博客是一个专注SEM、搜索引擎营销、SEO、百度医疗网络整合营销、网络推广的资源分享类网站，是一个值得sem搜索引擎营销从业者收藏的网站', '0', '19', '', '2015-04-10 14:21:30', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('176', '小丁笔记', 'http://www.404ym.com', '', '关注电子商务，关注前端设计', '0', '19', '', '2015-04-10 14:21:59', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('177', '挖站网', 'http://www.digwebsite.com', '', '挖掘和分享全球优秀网站', '0', '19', '', '2015-04-10 14:22:49', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('178', '怡然博客', 'http://yiranboke.com', '', '怡然博客是一个关注IT业界,互联网,搜索引擎,手机数码,网站建设营运,电商电信，企业管理等的科技博客', '0', '27', '', '2015-04-10 14:23:47', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('179', '坏男孩的博客', 'http://www.huaiboy.com', '', '关注IT，专注coding的坏男孩', '0', '27', '', '2015-04-10 14:24:46', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('180', '好域名', 'http://www.haoyu.me', '', 'GoDaddy优惠码_域名优惠码_域名注册_GoDaddy域名优惠码', '0', '27', '', '2015-04-10 14:25:43', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('181', 'IT Code', 'http://itcode.net', '', '一个伪程序员的个人博客网站，一个专注于IT技术的博客网站', '0', '27', '', '2015-04-10 14:26:11', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('182', '我爱玩应用', 'http://www.wooaii.com', '', '我爱玩游戏，我爱玩应用，爱分享的你就来吧！专注分享软件！IOS游戏软件，chrome扩展，绿色软件，搞笑视频。', '0', '27', '', '2015-04-10 14:26:37', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('183', '香港矽谷', 'http://www.hksilicon.com', '', '一個針對【IT網絡創業】的交流平台，透過滙聚世界各地 Bloggers 的精選文章，加以整理及分類，為有意創業的人仕提供實時及有用的資訊。', '0', '32', '', '2015-04-10 14:27:38', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('184', '當代科技', 'http://www.technow.com.hk', '', 'TechNow 當代科技 | 當代科技', '0', '32', '', '2015-04-10 14:28:17', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('185', 'ZZETAO&#039;s blog', 'http://www.zzetao.com', '', '进击前端的神经病', '0', '32', '', '2015-04-10 14:29:36', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('186', '凡奇博客', 'http://www.vanky.me', '', '凡奇博客是vanky的个人日志博客，为用户提供咨询、新闻、分享、经验、小说等优秀内容', '0', '32', '', '2015-04-10 14:30:14', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('187', '畅想资源', 'http://www.arefly.com', '', '畅想资源”是一个分享各种WordPress教程丶网络资源丶免费资源丶Linux丶Mac OS X及iOS技巧等实用资源的网站。在这里，一定能找到你想要的！', '0', '32', '', '2015-04-10 14:31:28', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('188', '木子超同学', 'http://www.muzichao.com', '', '木子超同学 | I can accept failure but I can&#039;t accept not trying!', '0', '33', '', '2015-04-10 14:32:44', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('189', '主题应用', 'http://www.zhutiapp.com', '', '题应用专注 安卓破解软件、安卓手机美化、安卓福利软件、手机应用推荐、苹果iphone美化、玩机技巧、福利资源分享', '0', '33', '', '2015-04-10 14:33:19', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('190', '投稿网', 'http://www.pbdm88.cn', '', '【投稿网】Pbdm88.cn专注笔记本电脑配置知识分享,是游戏攻略、电脑知识、手机技术学习的资料收集网站,欢迎投稿!', '0', '33', '', '2015-04-10 14:34:02', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('191', 'Fser', 'http://youger.github.io', '', 'Fser...', '0', '33', '', '2015-04-10 14:34:50', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('192', 'BCD', 'http://www.bcd.ren', '', '站在世界之上看看这个世界', '0', '33', '', '2015-04-10 14:36:02', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('193', '風佑兲个人博客', 'http://www.fengyoutian.com', '', 'fengyoutian.com是李秀光的个人博客,使用java开发,采用jfinal mvc框架,后台管理使用dwz、权限管理使用shiro,前台页面使用bootstrap,数据库使用mysql', '0', '31', '', '2015-04-10 14:38:53', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('194', 'Yangz博客', 'http://www.yangzblog.com', '', '该站是博主的精神家园,收录其多数的生活信息和学习笔记,致力于互联网技术的应用分享.此博能够得到大家的支持是种荣幸,也是其更新的动力,欢迎访问交流.', '0', '26', '', '2015-05-06 13:01:03', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('195', '吾忆江南', 'http://www.5yjn.com', '', '一个管理人的心历路程', '0', '14', '', '2015-05-06 13:15:29', '1', '1', '0');
INSERT INTO `oihao_blog_sites` VALUES ('196', '重华部落格', 'http://hechonghua.com', '', '致力于分享自己所感兴趣的电脑知识,宣传开源免费的软件,以及各种计算机,互联网知识!', '7', '14', '', '2015-05-06 13:20:49', '1', '1', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'smalle', '2935203f3f40f52ea81729ee75f4fd0e5636c781');
