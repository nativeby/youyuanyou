-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: YYY
-- ------------------------------------------------------
-- Server version	5.1.73

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `province` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `city`
--

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` VALUES (1,'北京','北京市','0010'),(2,'天津','天津市','0022'),(3,'河北','石家庄市','0311'),(4,'河北','保定市','0312'),(5,'河北','张家口市','0313'),(6,'河北','承德市','0314'),(7,'河北','唐山市','0315'),(8,'河北','廊坊市','0316'),(9,'河北','沧州市','0317'),(10,'河北','衡水市','0318'),(11,'河北','邢台市','0319'),(12,'河北','邯郸市','0310'),(13,'河北','秦皇岛市','0335'),(14,'山西','朔州市','0349'),(15,'山西','太原市','0351'),(16,'山西','大同市','0352'),(17,'山西','阳泉市','0353'),(18,'山西','晋中市','0354'),(19,'山西','长治市','0355'),(20,'山西','晋城市','0356'),(21,'山西','临汾市','0357'),(22,'山西','吕梁市','0358'),(23,'山西','运城市','0359'),(24,'山西','忻州市','0350'),(25,'内蒙古','呼和浩特市','0471'),(26,'内蒙古','包头市','0472'),(27,'内蒙古','乌海市','0473'),(28,'内蒙古','乌兰察布市','0474'),(29,'内蒙古','通辽市','0475'),(30,'内蒙古','赤峰市','0476'),(31,'内蒙古','鄂尔多斯市','0477'),(32,'内蒙古','巴彦淖尔市','0478'),(33,'内蒙古','锡林郭勒盟市','0479'),(34,'内蒙古','呼伦贝尔市','0470'),(35,'内蒙古','兴安盟市','0482'),(36,'内蒙古','阿拉善盟市','0483'),(37,'辽宁','沈阳市','0024'),(38,'辽宁','大连市','0411'),(39,'辽宁','鞍山市','0412'),(40,'辽宁','抚顺市','0413'),(41,'辽宁','本溪市','0414'),(42,'辽宁','丹东市','0415'),(43,'辽宁','锦州市','0416'),(44,'辽宁','营口市','0417'),(45,'辽宁','阜新市','0418'),(46,'辽宁','辽阳市','0419'),(47,'辽宁','铁岭市','0410'),(48,'辽宁','朝阳市','0421'),(49,'辽宁','盘锦市','0427'),(50,'辽宁','葫芦岛市','0429'),(51,'吉林','长春市','0431'),(52,'吉林','吉林市','0432'),(53,'吉林','延边市','0433'),(54,'吉林','四平市','0434'),(55,'吉林','通化市','0435'),(56,'吉林','白城市','0436'),(57,'吉林','辽源市','0437'),(58,'吉林','松原市','0438'),(59,'吉林','白山市','0439'),(60,'吉林','珲春市','0440'),(61,'吉林','通化─梅河口市','0448'),(62,'浙江','杭州市','0571'),(63,'浙江','湖州市','0572'),(64,'浙江','嘉兴市','0573'),(65,'浙江','宁波市','0574'),(66,'浙江','绍兴市','0575'),(67,'浙江','台州市','0576'),(68,'浙江','温州市','0577'),(69,'浙江','丽水市','0578'),(70,'浙江','金华市','0579'),(71,'浙江','衢州市','0570'),(72,'浙江','舟山市','0580'),(73,'黑龙江','哈尔滨市','0451'),(74,'黑龙江','齐齐哈尔市','0452'),(75,'黑龙江','牡丹江市','0453'),(76,'黑龙江','佳木斯市','0454'),(77,'黑龙江','绥化市','0455'),(78,'黑龙江','黑河市','0456'),(79,'黑龙江','大兴安岭地区市','0457'),(80,'黑龙江','伊春市','0458'),(81,'黑龙江','大庆市','0459'),(82,'黑龙江','七台河市','0464'),(83,'黑龙江','鸡西市','0467'),(84,'黑龙江','鹤岗市','0468'),(85,'黑龙江','双鸭山市','0469'),(86,'上海','上海市','0021'),(87,'江苏','南京市','0025'),(88,'江苏','镇江市','0511'),(89,'江苏','苏州市','0512'),(90,'江苏','南通市','0513'),(91,'江苏','扬州市','0514'),(92,'江苏','盐城市','0515'),(93,'江苏','徐州市','0516'),(94,'江苏','淮安市','0517'),(95,'江苏','连云港市','0518'),(96,'江苏','常州市','0519'),(97,'江苏','无锡市','0510'),(98,'江苏','泰州市','0523'),(99,'江苏','宿迁市','0527'),(100,'安徽','合肥市','0551'),(101,'安徽','蚌埠市','0552'),(102,'安徽','芜湖市','0553'),(103,'安徽','淮南市','0554'),(104,'安徽','马鞍山市','0555'),(105,'安徽','安庆市','0556'),(106,'安徽','宿州市','0557'),(107,'安徽','阜阳市','0558'),(108,'安徽','亳州市','0558'),(109,'安徽','黄山市','0559'),(110,'安徽','滁州市','0550'),(111,'安徽','淮北市','0561'),(112,'安徽','铜陵市','0562'),(113,'安徽','宣城市','0563'),(114,'安徽','六安市','0564'),(115,'安徽','巢湖市','0565'),(116,'安徽','池州市','0566'),(117,'福建','福州市','0591'),(118,'福建','厦门市','0592'),(119,'福建','宁德市','0593'),(120,'福建','莆田市','0594'),(121,'福建','泉州市','0595'),(122,'福建','漳州市','0596'),(123,'福建','龙岩市','0597'),(124,'福建','三明市','0598'),(125,'福建','南平市','0599'),(126,'江西','南昌市','0791'),(127,'江西','九江市','0792'),(128,'江西','上饶市','0793'),(129,'江西','抚州市','0794'),(130,'江西','宜春市','0795'),(131,'江西','吉安市','0796'),(132,'江西','赣州市','0797'),(133,'江西','景德镇市','0798'),(134,'江西','萍乡市','0799'),(135,'江西','新余市','0790'),(136,'江西','鹰潭市','0701'),(137,'山东','济南市','0531'),(138,'山东','青岛市','0532'),(139,'山东','淄博市','0533'),(140,'山东','德州市','0534'),(141,'山东','烟台市','0535'),(142,'山东','潍坊市','0536'),(143,'山东','济宁市','0537'),(144,'山东','泰安市','0538'),(145,'山东','临沂市','0539'),(146,'山东','菏泽市','0530'),(147,'山东','滨州市','0543'),(148,'山东','东营市','0546'),(149,'山东','威海市','0631'),(150,'山东','枣庄市','0632'),(151,'山东','日照市','0633'),(152,'山东','莱芜市','0634'),(153,'山东','聊城市','0635'),(154,'河南','郑州市','0371'),(155,'河南','安阳市','0372'),(156,'河南','新乡市','0373'),(157,'河南','许昌市','0374'),(158,'河南','平顶山市','0375'),(159,'河南','信阳市','0376'),(160,'河南','南阳市','0377'),(161,'河南','开封市','0378'),(162,'河南','洛阳市','0379'),(163,'河南','商丘市','0370'),(164,'河南','焦作市','0391'),(165,'河南','济源市','0391'),(166,'河南','鹤壁市','0392'),(167,'河南','濮阳市','0393'),(168,'河南','周口市','0394'),(169,'河南','漯河市','0395'),(170,'河南','驻马店市','0396'),(171,'河南','三门峡市','0398'),(172,'湖北','武汉市','0027'),(173,'湖北','鄂州市','0711'),(174,'湖北','孝感市','0712'),(175,'湖北','黄冈市','0713'),(176,'湖北','黄石市','0714'),(177,'湖北','咸宁市','0715'),(178,'湖北','荆州市','0716'),(179,'湖北','宜昌市','0717'),(180,'湖北','恩施土家族苗族自治州市','0718'),(181,'湖北','十堰市','0719'),(182,'湖北','襄樊市','0710'),(183,'湖北','随州市','0722'),(184,'湖北','荆门市','0724'),(185,'湖北','江汉─仙桃市','0728'),(186,'湖北','天门市','0728'),(187,'湖北','潜江市','0728'),(188,'湖南','长沙市','0731'),(189,'湖南','株洲市','0731'),(190,'湖南','湘潭市','0731'),(191,'湖南','株洲（曾用）市','0732'),(192,'湖南','湘潭（曾用）市','0733'),(193,'湖南','衡阳市','0734'),(194,'湖南','郴州市','0735'),(195,'湖南','常德市','0736'),(196,'湖南','益阳市','0737'),(197,'湖南','娄底市','0738'),(198,'湖南','邵阳市','0739'),(199,'湖南','岳阳市','0730'),(200,'湖南','湘西土家族苗族自治州市','0743'),(201,'湖南','张家界市','0744'),(202,'湖南','怀化市','0745'),(203,'湖南','永州市','0746'),(204,'广东','广州市','0020'),(205,'广东','江门市','0750'),(206,'广东','韶关市','0751'),(207,'广东','惠州市','0752'),(208,'广东','梅州市','0753'),(209,'广东','汕头市','0754'),(210,'广东','深圳市','0755'),(211,'广东','珠海市','0756'),(212,'广东','佛山市','0757'),(213,'广东','肇庆市','0758'),(214,'广东','湛江市','0759'),(215,'广东','中山市','0760'),(216,'广东','河源市','0762'),(217,'广东','清远市','0763'),(218,'广东','云浮市','0766'),(219,'广东','潮州市','0768'),(220,'广东','东莞市','0769'),(221,'广东','汕尾市','0660'),(222,'广东','阳江市','0662'),(223,'广东','揭阳市','0663'),(224,'广东','茂名市','0668'),(225,'广西','南宁市','0771'),(226,'广西','崇左市','0771'),(227,'广西','柳州市','0772'),(228,'广西','来宾市','0772'),(229,'广西','桂林市','0773'),(230,'广西','梧州市','0774'),(231,'广西','贺州市','0774'),(232,'广西','贵港市','0775'),(233,'广西','玉林市','0775'),(234,'广西','百色市','0776'),(235,'广西','钦州市','0777'),(236,'广西','河池市','0778'),(237,'广西','北海市','0779'),(238,'广西','防城港市','0770'),(239,'四川','成都市','0028'),(240,'四川','攀枝花市','0812'),(241,'四川','自贡市','0813'),(242,'四川','绵阳市','0816'),(243,'四川','南充市','0817'),(244,'四川','达州市','0818'),(245,'四川','遂宁市','0825'),(246,'四川','广安市','0826'),(247,'四川','巴中市','0827'),(248,'四川','宜宾市','0831'),(249,'四川','内江市','0832'),(250,'四川','资阳市','0832'),(251,'四川','乐山市','0833'),(252,'四川','眉山市','0833'),(253,'四川','凉山彝族自治州市','0834'),(254,'四川','雅安市','0835'),(255,'四川','甘孜藏族自治州市','0836'),(256,'四川','阿坝藏族羌族自治州市','0837'),(257,'四川','德阳市','0838'),(258,'四川','广元市','0839'),(259,'四川','泸州市','0830'),(260,'海南','海口市','0898'),(261,'海南','三亚市市','0898'),(262,'海南','五指山市市','0898'),(263,'海南','琼海市市','0898'),(264,'海南','儋州市市','0898'),(265,'海南','文昌市市','0898'),(266,'海南','万宁市市','0898'),(267,'海南','东方市市','0898'),(268,'海南','澄迈县市','0898'),(269,'海南','定安县市','0898'),(270,'海南','屯昌县市','0898'),(271,'海南','临高县市','0898'),(272,'海南','白沙黎族自治县市','0898'),(273,'海南','昌江黎族自治县市','0898'),(274,'海南','乐东黎族自治县市','0898'),(275,'海南','陵水黎族自治县市','0898'),(276,'海南','保亭黎族苗族自治县市','0898'),(277,'海南','琼中黎族苗族自治县市','0898'),(278,'海南','西沙群岛市','0898'),(279,'海南','南沙群岛市','0898'),(280,'海南','中沙群岛市','0898'),(281,'海南','洋浦经济开发区市','0898'),(282,'重庆','重庆市','0023'),(283,'贵州','贵阳市','0851'),(284,'贵州','遵义市','0852'),(285,'贵州','安顺市','0853'),(286,'贵州','黔南布依族苗族自治州市','0854'),(287,'贵州','黔东南苗族侗族自治州市','0855'),(288,'贵州','铜仁地区市','0856'),(289,'贵州','毕节地区市','0857'),(290,'贵州','六盘水市','0858'),(291,'贵州','黔西南布依族苗族自治州市','0859'),(292,'云南','昆明市','0871'),(293,'云南','大理白族自治州市','0872'),(294,'云南','红河哈尼族彝族自治州市','0873'),(295,'云南','曲靖市','0874'),(296,'云南','保山市','0875'),(297,'云南','文山壮族苗族自治州市','0876'),(298,'云南','玉溪市','0877'),(299,'云南','楚雄彝族自治州市','0878'),(300,'云南','思茅市','0879'),(301,'云南','昭通市','0870'),(302,'云南','临沧市','0883'),(303,'云南','怒江傈僳族自治州市','0886'),(304,'云南','迪庆藏族自治州市','0887'),(305,'云南','丽江市','0888'),(306,'云南','西双版纳傣族自治州市','0691'),(307,'云南','德宏傣族景颇族自治州市','0692'),(308,'西藏','拉萨市','0891'),(309,'西藏','日喀则地区市','0892'),(310,'西藏','山南地区市','0893'),(311,'西藏','林芝地区市','0894'),(312,'西藏','昌都地区市','0895'),(313,'西藏','那曲地区市','0896'),(314,'西藏','阿里地区市','0897'),(315,'陕西','西安市','029'),(316,'陕西','延安市','0911'),(317,'陕西','榆林市','0912'),(318,'陕西','渭南市','0913'),(319,'陕西','商洛市','0914'),(320,'陕西','安康市','0915'),(321,'陕西','汉中市','0916'),(322,'陕西','宝鸡市','0917'),(323,'陕西','铜川市','0919'),(324,'甘肃','兰州市','0931'),(325,'甘肃','定西市','0932'),(326,'甘肃','平凉市','0933'),(327,'甘肃','庆阳市','0934'),(328,'甘肃','武威市','0935'),(329,'甘肃','金昌市','0935'),(330,'甘肃','张掖市','0936'),(331,'甘肃','酒泉市','0937'),(332,'甘肃','嘉峪关市','0937'),(333,'甘肃','天水市','0938'),(334,'甘肃','陇南市','0939'),(335,'甘肃','临夏回族自治州市','0930'),(336,'甘肃','甘南藏族自治州市','0941'),(337,'甘肃','白银市','0943'),(338,'青海','西宁市','0971'),(339,'青海','海东地区市','0972'),(340,'青海','黄南藏族自治州市','0973'),(341,'青海','海南藏族自治州市','0974'),(342,'青海','果洛藏族自治州市','0975'),(343,'青海','玉树藏族自治州市','0976'),(344,'青海','海西蒙古族藏族自治州─德令哈市','0977'),(345,'青海','海西蒙古族藏族自治州─格尔木市','0979'),(346,'青海','海北藏族自治州市','0970'),(347,'宁夏','银川市','0951'),(348,'宁夏','石嘴山市','0952'),(349,'宁夏','吴忠市','0953'),(350,'宁夏','固原市','0954'),(351,'宁夏','中卫市','0955'),(352,'新疆','乌鲁木齐市','0991'),(353,'新疆','伊犁哈萨克自治州─奎屯市','0992'),(354,'新疆','石河子市','0993'),(355,'新疆','昌吉回族自治州市','0994'),(356,'新疆','吐鲁番地区市','0995'),(357,'新疆','巴音郭楞蒙古自治州市','0996'),(358,'新疆','阿克苏地区市','0997'),(359,'新疆','喀什地区市','0998'),(360,'新疆','伊犁哈萨克自治州─伊宁市','0999'),(361,'新疆','克拉玛依市','0990'),(362,'新疆','塔城地区市','0901'),(363,'新疆','哈密地区市','0902'),(364,'新疆','和田地区市','0903'),(365,'新疆','阿勒泰地区市','0906'),(366,'新疆','克孜勒苏柯尔克孜自治州市','0908'),(367,'新疆','博尔塔拉蒙古自治州市','0909');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guide`
--

DROP TABLE IF EXISTS `guide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `birth` varchar(50) DEFAULT NULL COMMENT '出生年月',
  `origin` varchar(50) DEFAULT NULL COMMENT '籍贯',
  `live_city` varchar(50) DEFAULT NULL COMMENT '常驻城市',
  `live_years` varchar(50) DEFAULT NULL COMMENT '生活年限',
  `identity` varchar(50) DEFAULT NULL COMMENT '目前身份',
  `education` varchar(50) DEFAULT NULL COMMENT '最高学历',
  `email` varchar(50) DEFAULT NULL,
  `qq` varchar(50) DEFAULT NULL,
  `wechat` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) NOT NULL,
  `avatar` varchar(100) DEFAULT NULL COMMENT '头像',
  `cert_picture` text COMMENT '证件照片',
  `can_drive_car` enum('0','1') DEFAULT NULL COMMENT '是否会开车：0不会，1会',
  `car_style` varchar(100) DEFAULT NULL COMMENT '汽车品牌及型号',
  `car_seat` varchar(20) DEFAULT NULL COMMENT '几座汽车',
  `car_picture` varchar(200) DEFAULT NULL COMMENT '汽车照片',
  `life_picture` text COMMENT '生活照片',
  `language` varchar(100) DEFAULT NULL COMMENT '语言能力',
  `intro` text COMMENT '个人介绍',
  `travel_picture` text COMMENT '旅游照片',
  `audit_status` enum('-1','0','1') DEFAULT '0' COMMENT '审核状态：-1审核失败，0审核未通过，1审核通过',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  `service_city` varchar(50) DEFAULT NULL COMMENT '服务城市',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='导游(有缘人)表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guide`
--

LOCK TABLES `guide` WRITE;
/*!40000 ALTER TABLE `guide` DISABLE KEYS */;
INSERT INTO `guide` VALUES (1,'闫江波','1982年9月','河南','纽约','6年','律师','硕士学历','','','boscoyan','18210962756','20160324180641597.jpg','20160324180653970.jpg','1','','五座','20160324180708354.jpg',NULL,'汉语（普通话）','下一秒就是你','20160328144448616.jpg,20160328144451667.jpg,20160328144454391.jpg','1','2016-03-24 10:07:24','2016-03-28 14:44:55','纽约',NULL),(2,'dasfad','1962年3月','辽宁','纽约','2年','律师','本科学历','','adsfad','','18q324','20160324184937179.jpg','20160324184941770.jpg','1','','五座','20160324184945162.jpg',NULL,NULL,NULL,NULL,'0','2016-03-24 10:49:46',NULL,NULL,NULL);
/*!40000 ALTER TABLE `guide` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `adult_num` int(11) DEFAULT NULL COMMENT '成人数',
  `child_num` int(11) DEFAULT NULL COMMENT '儿童数',
  `contact_phone` varchar(50) DEFAULT NULL COMMENT '联系手机号',
  `reserved_guide_id` int(11) DEFAULT NULL COMMENT '预定的导游ID',
  `reserved_service` text COMMENT '预定的服务信息，json串',
  `serve_location` varchar(50) DEFAULT NULL COMMENT '服务城市',
  `total_price` varchar(50) DEFAULT NULL COMMENT '总费用',
  `pre_price` varchar(50) DEFAULT NULL COMMENT '预定金费用',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'18210962756',2,3,'233333322',1,'[\"\\u57fa\\u672c\\u670d\\u52a1|2016-03-28,2016-03-29,2016-03-30|9\"]','东京','9','1.80','2016-03-28 08:38:47',NULL),(2,'18210962756',2,3,'233333322',1,'[\"\\u57fa\\u672c\\u670d\\u52a1|2016-03-28,2016-03-29,2016-03-30|9\"]','东京','9','1.80','2016-03-28 08:47:32',NULL);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(50) DEFAULT NULL COMMENT '目的地',
  `place_image` varchar(50) DEFAULT NULL COMMENT '目的地照片',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='目的地照片表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `place`
--

LOCK TABLES `place` WRITE;
/*!40000 ALTER TABLE `place` DISABLE KEYS */;
INSERT INTO `place` VALUES (1,'纽约','/static/images/place03.jpg','2016-03-18 03:43:02'),(2,'东京','/static/images/place02.jpg','2016-03-18 03:43:11');
/*!40000 ALTER TABLE `place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guide_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT '服务类型名称',
  `unit` varchar(50) DEFAULT NULL COMMENT '服务单位',
  `list` text COMMENT '服务明细',
  `location` varchar(50) DEFAULT NULL COMMENT '服务位置',
  `duration` varchar(50) DEFAULT NULL COMMENT '每天服务时长',
  `normal_price` varchar(50) DEFAULT NULL COMMENT '正常服务价格',
  `overtime_price` varchar(50) DEFAULT NULL COMMENT '超时服务价格',
  `max_people` int(11) DEFAULT NULL COMMENT '接待最多人数',
  `serve_expense` varchar(50) DEFAULT NULL COMMENT '服务消费',
  `food_expense` varchar(50) DEFAULT NULL COMMENT '餐补费',
  `live_expense` varchar(50) DEFAULT NULL COMMENT '异地住宿补贴',
  `travel_expense` varchar(50) DEFAULT NULL COMMENT '交通费',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='导游(有缘人)服务表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,2,'基本服务','天','伴有向导','东京','5','200','4',56,'41','55','67','56','2016-03-15 04:25:57',NULL),(2,1,'基本服务','天','行程规划','东京','5','3','32',4,'3','2','2','1','2016-03-17 11:30:23',NULL),(3,1,'接送机服务','天','伴有向导','东京','3','21','1',22,'4','0','0','0','2016-03-17 11:31:22',NULL);
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL COMMENT '姓名',
  `idcard` varchar(50) DEFAULT NULL COMMENT '身份证号',
  `avatar` varchar(100) DEFAULT NULL COMMENT '头像',
  `cert_picture` text COMMENT '证件照片',
  `audit_status` enum('-1','0','1') DEFAULT '0' COMMENT '审核状态：-1审核失败，0审核中，1审核通过',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='用户表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'18210962756',NULL,NULL,NULL,NULL,'0','2016-03-18 10:25:02',NULL),(2,'',NULL,NULL,NULL,NULL,'0','2016-03-18 10:48:08',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-27 11:40:34
