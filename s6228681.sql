# SQL-Front 5.1  (Build 4.16)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: s6228681
# ------------------------------------------------------
# Server version 5.0.96-community

#
# Source for table admin
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tel` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

#
# Dumping data for table admin
#

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (47,'admin','admin','rew');
INSERT INTO `admin` VALUES (49,'123','123','123');
INSERT INTO `admin` VALUES (52,'zhong','jia','lin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table news
#

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(5) unsigned NOT NULL auto_increment,
  `title` varchar(100) NOT NULL,
  `typeid` int(5) NOT NULL,
  `author` varchar(30) NOT NULL,
  `com` varchar(30) NOT NULL,
  `hits` int(10) NOT NULL,
  `inputer` varchar(30) NOT NULL,
  `addtime` int(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

#
# Dumping data for table news
#

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (11,'假日办公布除夕值班电话',1,'新民网','新民网',2,'',1390981211,'<p>\r\n\t【新民网&middot;独家报道】 今年春节放假安排公布后，&ldquo;年三十要上班&rdquo;引来不少民众吐槽，不少网友纷纷称要在当天致电全国假日办，核实是否有工作人员上班。明天就是大年三十了，这么多网友要来电，假日办知道吗？今天上午(1月29日)，新民网记者提前拨打了全国假日办的电话。</p>\r\n');
INSERT INTO `news` VALUES (12,'春节7天加班费能拿多少:北京至少可获1094元',1,'人民网','人民网',2,'admin',1390981265,'<p>\r\n\t人民网北京1月29日电 (薛白)春节假期即将开始，但仍有不少人要坚守工作岗位，如何计算加班费成了大家关心的话题。那么，2014年春节的加班工资应该怎么算呢？</p>\r\n<p>\r\n\t　 　根据国务院办公厅下发的通知，2014年春节假期安排如下：1月31日至2月6日放假调休。1月26日(星期日)、2月8日(星期六)上班。《国务院办 公厅关于2014年部分节假日安排的通知》提到，根据相关法规，用人单位在此期间安排劳动者加班的，应按照不低于劳动者本人日或小时工资的300%另行支 付加班工资。2月3日到6日期间，用人单位安排劳动者加班的，可以选择给劳动者安排补休而不支付加班工资，如果不给补休，则应当按照不低于劳动者本人日或 小时工资的200%支付加班工资。</p>\r\n');
INSERT INTO `news` VALUES (16,'多个国家级贫困县耗资上亿元建豪华办公楼',1,'法制晚报 ','法制晚报 ',0,'admin',1390981410,'<p>\r\n\t　近日，新华社曝出黑龙江海伦市一边申报国家级扶贫重点县，一边建造价超亿元的豪华政府办公楼，引起一片哗然。同时，另外一条新闻也同样撞击着公众 敏感的神经，国家级贫困县河南台前县豪华办公大楼扎堆而建，且县领导配有&ldquo;别墅&rdquo;宿舍，与之形成鲜明对比的是该县600名学生的学校拥挤不堪，玻璃窗上的 窟窿用破木块遮挡，环境脏乱犹如&ldquo;难民营&rdquo;。</p>\r\n<p>\r\n\t　　事件经媒体曝光后，引起了纪检部门关注，并介入调查。</p>\r\n<p>\r\n\t　　专家表示，以&ldquo;贫困县&rdquo;为幌子，实施贪图享乐的作风很容易滋生腐败。中国政法大学法治政府研究院副院长王敬波接受《法制晚报》记者采访时表示， 在反腐力度不断加大的背景下，《关于创新机制扎实推进农村扶贫开发工作的意见》的出台，有望改变一些地方政府死活赖着贫困县的帽子不摘的情况。</p>\r\n');
INSERT INTO `news` VALUES (17,'中国成全球最大红酒消费国 每年人均1瓶多',1,'环球时报 ','环球时报 ',10,'admin',1390981495,'<p>\r\n\t【环球网综合报道】法国《回声报》1月29日援引法新社报道称，根据波尔多国际葡萄酒及烈酒展览会1月28日公布的就亚太地区及全球酒类市场进行的调查显示，中国已经取代法国，成为全球最大红酒消费国。</p>\r\n<p>\r\n\t　　报道称，在2013年，中国消费了约18.65亿瓶红酒，与2008年相比增加了136%，领先法国。法国在2013年的红酒消费量为约18亿瓶，随后是意大利、美国和德国。</p>\r\n<p>\r\n\t　　然而，就葡萄酒整体而言，中国是全球第五大消费国，远落后于美国、法国和意大利。与国际葡萄酒烈酒研究机构共同进行的这项调查显示，中国人对红 酒的兴趣自2005年开始增长。在2007年至2013年间，中国的红酒消费量增长了2.75倍。而同一时期，意大利和法国的红酒消费量则分别下降了 5.8%和18%。</p>\r\n');
INSERT INTO `news` VALUES (18,'中国电磁弹射器或已研发成功 进度仅次于美国',2,'环球网','环球网',10,'admin',1390981651,'<p>\r\n\t电力，无声又无形，却蕴含着惊人能量，而且能由人类随心所欲地控制、调节，风驰电掣的高铁便是一大象征。同样具备这些优点的电磁飞机弹射器，令传统的蒸汽弹射器相形见绌，有望成为航空母舰的新宠。</p>\r\n<p>\r\n\t　　近几年来，&ldquo;中国发展电磁弹射器&rdquo;的说法，一直存在于坊间的传说之中，留给无数网友&ldquo;不明觉厉&rdquo;的印象。</p>\r\n<p>\r\n\t　　日前，美国一网站公布的卫星照片，曝光了中国某地的露天电磁导轨高速牵引装置。该网站称其为继美国之后世界第二条电磁弹射器地面实验设施。这一消息，足够挑战人们的常识。</p>\r\n');
INSERT INTO `news` VALUES (19,'我国从利比亚撤侨靠唱国歌辨别国人与越菲人',2,'环球时报','环球时报',10,'admin',1390981798,'<p>\r\n\t【环球时报记者 刘 畅】&ldquo;领保&rdquo;，是政府为境外本国公民、企业提供领事保护和服务的简称。中国人口总量和走出去的发展趋势，决定了中国领保会有些特殊性。外交部28日发布数 据，2013年内地居民全年出境9818.7万人次，这一数字在过去4年连续保持年均1000多万的增量；另有2万余家中资企业分布在全球200个国家和 地区。同时，有可供查询的公开数字表明，中国驻外使领馆专门负责领事侨务工作的约有600人。外交部数据称，平均1名领事官为20万人提供保护。</p>\r\n');
INSERT INTO `news` VALUES (20,'普京表示俄罗斯不会干预乌克兰内政',1,'环球时报','环球时报',10,'admin',1390981847,'<p>\r\n\t【环球网综合报道】据俄罗斯&ldquo;消息岛&rdquo;新闻网1月28日消息，俄总统普京表示，俄罗斯不会干预乌克兰内政。</p>\r\n<p>\r\n\t　　俄总统普京在俄罗斯-欧盟峰会后的新闻发布会上提到：&ldquo;关于向乌克兰提供建议的问题，我认为乌克兰民众自己明白应该怎么做。无论任何情况、任何时间，俄罗斯都不会干预这件事。&rdquo;普京认为，大量的调停人只会导致更多问题。</p>\r\n<p>\r\n\t　　他还说道：&ldquo;我可以想象，在极度的危机之中，比如在希腊或塞浦路斯的一个反欧洲集会上出现我们的外交官，并且我们的外交官开始处理一些诉求时， 我们的欧洲伙伴会有什么样的反应。我们认为这种行为是不合适的，而在俄罗斯和乌克兰的一些特定关系中，这种行为对我们来说更是不可接受、不会存在的。&rdquo;</p>\r\n');
INSERT INTO `news` VALUES (21,'26省将大气污染治理列入政府工作报告',1,'第一财经日报 ','第一财经日报 ',12,'admin',1390981909,'<p>\r\n\t　随着地方两会的落幕，各省、直辖市、自治区的政府工作报告相继出炉。《第一财经日报》通过梳理各地政府工作报告发现，对于治理大气污染，各地政府工作报告不仅在篇幅方面，包括在指标和措施上都更加详尽，但在节能减排和经济发展的博弈中，态度不够鲜明。</p>\r\n');
INSERT INTO `news` VALUES (22,'尼日利亚武装袭击事件已致85人死亡',1,'新华网','新华网',12,'admin',1390981951,'<p>\r\n\t　新华网阿布贾1月28日电 (记者牛小溪 陈淑品)尼日利亚政府官员28日向媒体证实，尼北部博尔诺州26日发生的武装袭击事件死亡人数上升至85人。</p>\r\n<p>\r\n\t　　博尔诺州孔杜加地区政府官员阿里&middot;亚莱当天说，目前搜救人员已在袭击现场找到85具遗体，此外还有至少50人受伤、16人失踪。他表示，所有伤者已被送往附近医院，随着救援行动的继续展开，死亡人数还可能会上升。</p>\r\n<p>\r\n\t　　孔杜加地区一村镇26日遭不明身份武装分子袭击。据现场目击者27日说，袭击造成至少52人死亡，其中包括1名士兵。博尔诺州警察局局长拉万&middot;坦科27日晚证实了这一消息，并称这次袭击很可能是尼伊斯兰极端组织&ldquo;博科圣地&rdquo;所为。</p>\r\n');
INSERT INTO `news` VALUES (23,'小伙连倒7次车回家过节 横跨近半个中国(图)',1,'东北网','东北网',2,'admin',1390982026,'<p>\r\n\t东北网1月29日讯 过年回家，是中国人难以割舍的情节，在他乡混得再好、挣得再多，也无法阻挡回家过年的脚步。许多外出打拼的人，在年关前都会拼了命的往家奔。没有直达的车票，很多人选择曲线回家，从他们踏上返乡的旅途开始，带着年味的故事便接连上演。</p>\r\n<p>\r\n\t　　<strong>直达车没票了，慢车初一才能到</strong></p>\r\n<p>\r\n\t　　<strong>下决心&ldquo;倒短&rdquo;回家</strong></p>\r\n<p>\r\n\t　　到无锡工作的半年里，除了跟异地的女友说说知心话，东北小伙孙向楠几乎没和别人交流过。南方同事的生活习惯，让他很难和大伙打成一片，他开始想 念家乡大口干杯的豪迈劲、无话不谈的热闹氛围。距离春节还有1个月，归乡似箭的他便开始关注车票信息。&ldquo;直达哈市的票根本抢不着，逼得我只能曲线回家&rdquo;小 孙说，公司27日才放假，那时候回哈尔滨的快车票全没了，乘慢车得大年初一才到家，左右权衡，他决定以倒短途的方式回家。</p>\r\n');
INSERT INTO `news` VALUES (24,'大学生村官被村委会借走10万元 离职两年未要回',1,'现代快报 ','现代快报 ',12,'admin',1390982060,'<p>\r\n\t近日，徐州铜山区张集镇原大学生村官李新宇家人向现代快报反映，两年多前村委会借了他10万元钱至今不还。记者采访中发现，这10万元钱是以村委会 名义借的，月息2%。张集镇组织委员周女士说，已经多次协调，村支书承诺春节前支付本金两万元，其余欠款2014年内结清。&nbsp;&nbsp;</p>\r\n<p>\r\n\t　　<strong>上班两月被借&ldquo;高利贷&rdquo;</strong></p>\r\n<p>\r\n\t　　据李新宇的哥哥李明介绍，李新宇是2011年考上张集镇二陈村大学生村官，刚刚参加工作两个月便遇到村支书借钱。</p>\r\n');
INSERT INTO `news` VALUES (25,'四川遭大雾10余条高速路关闭',1,'中国新闻网 ','中国新闻网 ',12,'admin',1390982140,'<p>\r\n\t　中新网成都1月29日电(记者刘忠俊)29日，离春节还有两天，四川南充、资阳、内江、宜宾、乐山、成都、德阳、绵阳等地遭遇大雾袭击，导致10余条国、省道高速公路关闭，民众回家过年路漫漫。</p>\r\n<p>\r\n\t　 　29日6时30分，四川气象台发布大雾橙色预警，预计今晨至上午，达州、广安、南充、遂宁、资阳、内江、自贡、宜宾、泸州、眉山、乐山、成都、德阳和绵 阳等14城市有大雾，部分地方能见度将小于200米，局部地方小于50米。同时，四川气象台还发布了空气污染气象预报，预计从29日8时到30日8时，成 都、德阳、眉山、资阳、遂宁、南充、广安7市大部地方和绵阳市东部、乐山市北部、达州市南部不利于空气污染物稀释、扩散和清除，将出现中度污染天气。</p>\r\n');
INSERT INTO `news` VALUES (26,'重庆市两名干部严重违纪被开除党籍获刑',1,'人民网－中国共产党新闻网','人民网－中国共产党新闻网',12,'admin',1390982178,'<p>\r\n\t　中国共产党新闻网北京1月29日电 (李源) 据重庆市纪委网站消息，近日，重庆轻纺控股(集团)公司原副总裁卢卫平，潼南县合作经济联合社原党组书记、主任唐子旭2人严重违纪违法受到查处。具体情况如下：</p>\r\n<p>\r\n\t<strong>　　重庆轻纺集团原副总裁卢卫平严重违纪违法受到查处</strong></p>\r\n<p>\r\n\t　　近日，重庆轻纺控股(集团)公司原副总裁卢卫平，在担任市经济信息委规划与投资处处长期间，利用职务便利，为请托单位谋取利益，非法收受他人贿 赂共计人民币185万元；违反规定，以亲属名义入股公司，帮助亲属承揽咨询中介业务谋利。被开除党籍，司法机关以受贿罪判处其有期徒刑十一年六个月。</p>\r\n');
INSERT INTO `news` VALUES (27,'中央气象台首发烟花燃放指数 五省不适宜',1,'中央气象台','中央气象台',12,'admin',1390982217,'<p>\r\n\t明天就是除夕了，过年的气氛也越发浓郁。今天早晨，中央气象台首次发布了国家级烟花爆竹燃放气象指数预报。预计1月29日白天到夜间，河北中南部、河南南部、湖北中东部、湖南西北部、四川盆地中南部等地的部分地区气象条件不适宜燃放烟花爆竹，请尽量不要燃放。</p>\r\n<p>\r\n\t　　全国烟花爆竹燃放气象指数共分四级，1级为气象条件适宜(在非禁放区和非禁放时段)燃放烟花爆竹；2级、3级为气象条件不太适宜和不适宜燃放烟花爆竹，相关服务提示分别为尽量减少燃放和尽量不要燃放；4级为气象条件极不适宜燃放烟花，请公众不要燃放。</p>\r\n<p>\r\n\t　　中央气象台高级工程师张恒德表示，气象部门在计算该燃放指数时综合考虑了烟花爆竹燃放安全、污染物扩散、空气质量，以及风、湿度及降水等气象条件。此次发布烟花爆竹燃放气象指数预报为历年来首次，今年发布时间为1月29日至2月14日(大年二十九至正月十五)。</p>\r\n');
INSERT INTO `news` VALUES (28,'深圳5个四连号拍出643万 粤B8888R卖172万最高',1,'南方都市报','南方都市报',0,'admin',1390982278,'<p>\r\n\t南都讯 记者 王成波 深圳市优质车辆号牌拍卖仍在进行，目前5个&ldquo;四连号&rdquo;已经全部拍卖完，其中粤B8888R拍出172万元高价，另外4个车牌号码均在百万以上，总价为643万元。</p>\r\n<p>\r\n\t　　深圳市交警局相关民警表示，昨日拍出100个靓牌号码，今日是拍卖最后一天，最后100个车牌号码将被放出。南都记者发现，1月25日，优质车 牌号码拍卖首日中，两个&ldquo;四连号&rdquo;被放出，其中粤B&nbsp;6666Q的车牌拍得103万元，粤B&nbsp;3333P以47万元成交，当日100个车牌共拍得 1921.9万元，单价近20万元。</p>\r\n');
INSERT INTO `news` VALUES (30,'穗春节期间最高可达25度 或成历史排名第5暖年',1,'大洋网-广州日报','大洋网-广州日报',12,'admin',1390982355,'<p>\r\n\t本报讯(记者叶卡斯 通讯员杨群娜)春节期间广东天气比较理想，适宜大家在户外活动。广东省气象局昨天召开新闻发布会，正式通报春节天气预报，据广东省气象台首席预报员卢山介绍，今年春节期间广州天气之暖和，极有可能成为历史上排名第5的暖年。</p>\r\n<p>\r\n\t　　广州春节最高28.4℃</p>\r\n<p>\r\n\t　　近期广州天气暖和，水仙等花卉早早开放，市民身上的衣物也一天天在减负，不过综合整个月份的情况来看，1月至今广东的气温仍然偏低。据广东省气象局的统计，进入2014年以来，广东的平均气温为13℃，比历史同期平均气温略偏低0.4℃。</p>\r\n');
INSERT INTO `news` VALUES (31,'广州一日卖6宗地揽金60亿 2住宅地王保利拍得',1,'南方都市报','南方都市报',12,'admin',1390982386,'<p>\r\n\t　南都讯 记者张艳芬 实习生张琦 曾昊然 离马年春节还有3天，广州昨日一下卖出6宗住宅用地和商业用地，总建筑面积达38万平方米，总成交价为58.3亿元和配建21750平方米拆迁安置房，包 括广东保利、广州华昊在内22家房产商参与土地拍卖。其中黄埔、番禺共3宗宅地和商地刷新区域地王记录，揽金近40亿元。</p>\r\n');
INSERT INTO `news` VALUES (32,'深圳新增3个H7N9病例 累计报告13例为全省最多',1,'南方都市报','南方都市报',12,'admin',1390982427,'<p>\r\n\t南都讯 记者万蜜 昨日，省卫生计生委通报：深圳市新增报告3例人感染H7N9禽流感确诊病例。截至昨日，深圳已报告13例确诊病例，成为广东全省确诊病例最多的地区。</p>\r\n<p>\r\n\t　　根据通报，病例一曾某，女，43岁，籍贯广东深圳，现住深圳市宝安区沙井街道。1月27日确诊为人感染H&nbsp;7N&nbsp;9禽流感病例，目前患者病情稳定，在深圳市的定点收治医院住院。</p>\r\n');
INSERT INTO `news` VALUES (33,'123',34,'123','123',123,'admin',1608520377,'123');
INSERT INTO `news` VALUES (34,'123',34,'123','123',123,'admin',1608735545,'123');
INSERT INTO `news` VALUES (35,'123',34,'123','123',0,'',1610252969,'');
INSERT INTO `news` VALUES (36,'123',34,'','',0,'',1610253018,'');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table newstype
#

DROP TABLE IF EXISTS `newstype`;
CREATE TABLE `newstype` (
  `id` int(11) NOT NULL,
  `typename` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Dumping data for table newstype
#

LOCK TABLES `newstype` WRITE;
/*!40000 ALTER TABLE `newstype` DISABLE KEYS */;
INSERT INTO `newstype` VALUES (0,'bootstrap4');
INSERT INTO `newstype` VALUES (1,'产品新闻');
INSERT INTO `newstype` VALUES (2,'公司新闻');
INSERT INTO `newstype` VALUES (3,'产品资讯');
/*!40000 ALTER TABLE `newstype` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table product
#

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `numbers` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `typeid` int(11) NOT NULL,
  `kucun` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `content` varchar(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

#
# Dumping data for table product
#

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'1','小米11',1,12,3999,'upload/sp1.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (3,'2','小米12',1,12,3999,'upload/sp2.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (4,'3','小米13',1,13,3999,'upload/sp3.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (5,'4','小米14',1,13,3999,'upload/sp4.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (6,'5','小米15',1,13,3999,'upload/sp5.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (7,'6','小米16',1,13,3999,'upload/sp6.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (8,'7','小米17',1,13,3999,'upload/sp7.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (9,'8','小米18',1,13,3999,'upload/sp8.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (10,'9','小米19',1,13,3999,'upload/sp9.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (11,'10','小米00',1,13,3999,'upload/sp10.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (12,'11','小米99',1,13,9999,'upload/sp11.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (13,'12','小米88',1,13,12345,'upload/sp12.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (14,'13','大米电视',2,13,12345,'upload/sp13.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (15,'14','大米电视',2,13,12345,'upload/sp14.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (16,'15','大米电视',2,13,12345,'upload/sp15.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (17,'16','大米电视',2,13,12345,'upload/sp16.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (18,'17','大米电视',2,13,12345,'upload/sp17.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (19,'18','大米电视',2,13,12345,'upload/sp18.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (20,'19','大米电视',2,13,12345,'upload/sp19.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (21,'20','大米电视',2,13,12345,'upload/sp20.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (22,'21','大米电视',2,13,12345,'upload/sp21.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (23,'22','大米电视',2,13,12345,'upload/sp22.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (24,'23','大米冰箱',3,13,12345,'upload/sp23.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (25,'24','大米路由器',4,13,12345,'upload/sp24.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (26,'25','大米路由器',4,13,12345,'upload/sp25.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (27,'27','大米高级路由器',4,13,12345,'upload/sp27.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (28,'28','大米路由器',4,13,12345,'upload/sp28.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (29,'29','大米路由器',4,13,12345,'upload/sp29.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (30,'30','大米路由器',3,13,12345,'upload/sp30.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (31,'31','大米洗衣机',3,13,12345,'upload/sp31.png','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (32,'32','大米空调',3,13,12345,'upload/sp32.png','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (33,'33','大米洗衣机',3,13,12345,'upload/sp33.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (34,'34','大米空调',3,13,12345,'upload/sp34.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (35,'35','大米智能机',4,13,12345,'upload/sp35.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (36,'36','大米音箱',4,13,12345,'upload/sp36.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (37,'37','大米智能窗帘',4,13,12345,'upload/sp37.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (38,'38','大米123',4,13,12345,'upload/sp38.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (40,'40','大米耳机',4,13,12345,'upload/sp40.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (41,'41','大米充电器',4,13,12345,'upload/sp41.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (42,'42','大米耳机',4,13,12345,'upload/sp42.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (43,'43','大米耳机',4,13,12345,'upload/sp43.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (44,'44','大米充电宝',4,13,12345,'upload/sp44.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (45,'45','大米充电宝',4,13,12345,'upload/sp45.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (46,'46','大米耳机',4,13,12345,'upload/sp46.jpg','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (51,'5','小米15',1,13,3999,'upload/sp5.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (52,'2','小米12',1,12,3999,'upload/sp2.webp','麒龙8882k曲面屏');
INSERT INTO `product` VALUES (55,'牛逼手机','牛逼手机',1,123,123,'upload/jodie-comer-for-ellemen-fresh-april-2019-8.jpg','123');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table productype
#

DROP TABLE IF EXISTS `productype`;
CREATE TABLE `productype` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tid` int(11) NOT NULL,
  `typename` varchar(30) NOT NULL,
  `sd` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Dumping data for table productype
#

LOCK TABLES `productype` WRITE;
/*!40000 ALTER TABLE `productype` DISABLE KEYS */;
INSERT INTO `productype` VALUES (1,0,'手机通讯',0);
INSERT INTO `productype` VALUES (2,0,'智能家电',0);
INSERT INTO `productype` VALUES (3,0,'智能家居',0);
INSERT INTO `productype` VALUES (4,0,'智能搭配',0);
/*!40000 ALTER TABLE `productype` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table user
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tel` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

#
# Dumping data for table user
#

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (47,'admin','admin','rew');
INSERT INTO `user` VALUES (48,'123','123','123');
INSERT INTO `user` VALUES (51,'root','root','root');
INSERT INTO `user` VALUES (54,'zhong','jia','lin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
