-- MySQL dump 10.11
--
-- Host: localhost    Database: zend
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt

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
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `author` (
  `author_id` char(5) NOT NULL,
  `name` varchar(25) default NULL,
  PRIMARY KEY  (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES ('A0001','山田祥寛'),('A0002','うえがき麻矢'),('A0003','佐藤匡剛');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `book` (
  `isbn` char(17) NOT NULL,
  `author_id` char(5) default NULL,
  `title` varchar(100) default NULL,
  `price` int(11) default NULL,
  `publish` varchar(20) default NULL,
  `published` date default NULL,
  PRIMARY KEY  (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES ('978-4-7741-2950-1','A0003','ソースコードリーディングから学ぶJavaの設計と実装',2604,'技術評論社','2006-11-29'),('978-4-7980-1875-1','A0001','今日からつかえるJSP＆サーブレットサンプル集　JavaSE6＋Tomcat6対応版',2310,'秀和システム','2008-01-24'),('978-4-7980-2004-4','A0001','今日からつかえるPHP5サンプル集　PEAR＆Zend Framework活用版',3360,'秀和システム','2008-06-26'),('978-4-7981-1206-0','A0001','サーバサイドAjax入門',2940,'翔泳社','2006-09-20'),('978-4-7981-1257-2','A0001','独習ASP.NET 2.0',4179,'翔泳社','2007-02-20'),('978-4-7981-1329-6','A0002','これならわかる Web標準サイトの作り方 入門の入門',1890,'翔泳社','2007-06-20'),('978-4-7981-1427-9','A0001','Visual Studio 2005でいってみよう～ASP.NET 2.0編',2520,'翔泳社','2007-07-31'),('978-4-7981-1495-8','A0001','PHPライブラリコレクション',2520,'翔泳社','2008-01-24'),('978-4-8399-2188-0','A0001','MySQL逆引きクイックリファレンス',2730,'マイコミ','2006-12-01'),('978-4-8399-2438-6','A0001','ASP.NET AJAXプログラミング',3780,'マイコミ','2007-09-22');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book_inf_tbl`
--

DROP TABLE IF EXISTS `book_inf_tbl`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `book_inf_tbl` (
  `isbn` char(17) NOT NULL,
  `author_id` char(5) default NULL,
  `title` varchar(100) default NULL,
  `price` int(11) default NULL,
  `publish` varchar(20) default NULL,
  `published` date default NULL,
  PRIMARY KEY  (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `book_inf_tbl`
--

LOCK TABLES `book_inf_tbl` WRITE;
/*!40000 ALTER TABLE `book_inf_tbl` DISABLE KEYS */;
INSERT INTO `book_inf_tbl` VALUES ('978-4-7741-2950-1','A0003','ソースコードリーディングから学ぶJavaの設計と実装',2604,'技術評論社','2006-11-29'),('978-4-7980-1875-1','A0001','今日からつかえるJSP＆サーブレットサンプル集　JavaSE6＋Tomcat6対応版',2310,'秀和システム','2008-01-24'),('978-4-7980-2004-4','A0001','今日からつかえるPHP5サンプル集　PEAR＆Zend Framework活用版',3360,'秀和システム','2008-06-26'),('978-4-7981-1206-0','A0001','サーバサイドAjax入門',2940,'翔泳社','2006-09-20'),('978-4-7981-1257-2','A0001','独習ASP.NET 2.0',4179,'翔泳社','2007-02-20'),('978-4-7981-1329-6','A0002','これならわかる Web標準サイトの作り方 入門の入門',1890,'翔泳社','2007-06-20'),('978-4-7981-1427-9','A0001','Visual Studio 2005でいってみよう～ASP.NET 2.0編',2520,'翔泳社','2007-07-31'),('978-4-7981-1495-8','A0001','PHPライブラリコレクション',2520,'翔泳社','2008-01-24'),('978-4-8399-2188-0','A0001','MySQL逆引きクイックリファレンス',2730,'マイコミ','2006-12-01'),('978-4-8399-2438-6','A0001','ASP.NET AJAXプログラミング',3780,'マイコミ','2007-09-22');
/*!40000 ALTER TABLE `book_inf_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `contents` (
  `url` varchar(255) NOT NULL default '',
  `title` varchar(100) default NULL,
  `author` varchar(30) default NULL,
  `category` varchar(20) default NULL,
  `descript` text,
  `cnt` int(11) default NULL,
  `updated` date default NULL,
  PRIMARY KEY  (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
INSERT INTO `contents` VALUES ('http://codezine.jp/a/article/aid/1452.aspx','XMLDBとJavaAPI、JAXB2.0を活用したWebアプリケーション開発（実装編）','佐藤治夫','codezine','XMLデータベース「Cyber Luxeon」を使ったJavaアプリケーションについて、Cyber Luxeon上のデータを操作するサンプルアプリケーションを例に解説します。今回は実際にアプリケーションを実装します。',1804,'2007-07-17'),('http://codezine.jp/a/article/aid/1545.aspx','ASP.NET AJAXで学ぶAJAX対応コントロール実装の基本（後篇）','ナオキ','codezine','ASP.NET AJAXと同様に、ASP.NET AJAX Control Toolkitも非常に便利な開発ツールです。開発の幅を広げるのに役立ちますが、使っているうちにもう少し利用しやすいコントロールが欲しいと思うことがあるかもしれません。本稿では前篇で作成したExtenderコントロールを拡張する方法や、ASP.NET AJAX Control Toolkitの最新動向について紹介します。',2814,'2007-08-10'),('http://codezine.jp/a/article/aid/1572.aspx','WF（Windows Workflow Foundation）チュートリアル 前編','土井 毅','codezine','.NET Framework 3.0を構成する「Windows Workflow Foundation（WF）」は、ワークフローをWindows上で扱うためのフレームワークです。ワークフローは大きく「シーケンシャルワークフロー」と「ステートマシンワークフロー」の2つに分けられますが、前編となる本稿では、主に前者についてサンプルを交えながら紹介します。',2400,'2007-08-17'),('http://codezine.jp/a/article/aid/1586.aspx','ASP.NET Futuresで次世代ASP.NETを体験しよう ','ナオキ','codezine','ASP.NET AJAXの登場はASP.NET利用者にとって大変な衝撃があったかと思います。ASP.NET開発チームはASP.NET 3.5とは別に将来的にASP.NETに組み込むためのコントロールや新機能の開発を進めています。これらの新機能の登場はユーザーにとって再度大きな衝撃を与えると言っても過言ではありません。本稿ではASP.NETの新機能を提供するASP.NET Futures CTPで利用可能な代表的なコントロールの扱い方について学習したいと思います。',3300,'2007-08-23'),('http://codezine.jp/a/article/aid/1629.aspx','動的SQLによる数独の超高速解法','矢吹 太朗','codezine','SQLを使って数独を解くことを通じて、SQLが持つ宣言的な言語の特徴を紹介します。最後の第3部では、動的にSQL文を生成する、メタ・プログラミング的なアプローチにより、たった1行のSELECT文で数独の問題を高速に解く方法を解説します。',4580,'2007-09-18'),('http://codezine.jp/a/article/aid/2480.aspx','PEAR MDB2でPHPからデータベースを操作する','矢吹太朗','codezine','PHPでデータベースにアクセスするには、いくつかの方法が用意されています。本稿では、いま注目の「PEAR MDB2」を用いて、PHPからMySQLを操作する基本的な方法を紹介します。',1006,'2008-05-26'),('http://codezine.jp/a/article/aid/2626.aspx','POCO::Foundationでデザインパターン - マルチスレッド編 -','高江賢','codezine','POCO::Foundationライブラリの締めくくりとして、スレッド関連のクラスを説明します。応用例としては、Worker Thread（ワーカースレッド）パターンというデザインパターンを用いたサンプルコードをとりあげます。',2306,'2008-07-04'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/621aspajaxdynamicpopulate/aspajaxdynamicpopulate.html','DynamicPopulateコントロール','山田祥寛','dotnet','DynamicPopulateコントロール（DynamicPopulateExtender）は、ASP.NET AJAX Control Toolkitで提供されるコントロールの1つで、あらかじめ用意されたXML Webサービス・メソッドを呼び出し、その結果でページ内の任意のコンテンツを差し替えるためのコントロールです。本稿では、DynamicPopulateコントロール活用のための具体的な方法をサンプルを交えながら紹介します。',3005,'2007-07-19'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/638aspajaxpwdstrength/aspajaxpwdstrength.html','PasswordStrengthコントロール','山田祥寛','dotnet','PasswordStrengthコントロールは、ASP.NET AJAX Control Toolkitで提供されるコントロールの1つで、新規パスワード設定時にテキストボックスに入力されたパスワード文字列の「強度」を判定し、その結果をテキスト、または棒グラフで視覚的に示すためのコントロールです。',6218,'2007-08-30'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/641aspajaxconfirmbtn/aspajaxconfirmbtn.html','ConfirmButtonコントロール','山田祥寛','dotnet','ConfirmButtonコントロール（ConfirmButtonExtender）は、ASP.NET AJAX Control Toolkitで提供されるコントロールの1つで、標準のボタン系コントロール（Button、LinkButton、ImageButton）に確認ダイアログを表示する機能を追加します。',4700,'2007-09-06'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/644aspajaxresizablectrl/aspajaxresizablectrl.html','ResizableControlコントロール','山田祥寛','dotnet','ResizableControlコントロール（ResizableControlExtender）は、ASP.NET AJAX Control Toolkitで提供されるコントロールの1つで、名前のとおり、コントロールの幅／高さをページ上で変更するためのリサイズ機能を提供します。',3200,'2007-09-13'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/647aspajaxfilteredtxtbox/aspajaxfilteredtxtbox.html','FilteredTextBoxコントロール','山田祥寛','dotnet','FilteredTextBoxコントロール（FilteredTextBoxExtender）は、ASP.NET AJAX Control Toolkitで提供されるコントロールの1つで、テキストボックスに入力可能な（あるいは入力できない）文字の種類を規定するものです。',2150,'2007-09-20'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/729aspajaxnotbot/aspajaxnotbot.html','NoBotコントロールでページにボット対策機能を追加するには？','山田祥寛','dotnet','NoBotコントロールは、ASP.NET AJAX Control Toolkitで提供されるコントロールの1つで、簡易なボット対策を実装するためのコントロールです。具体的にNoBotコントロールを利用したサンプルを作成しながら解説します。',4300,'2008-04-10'),('http://www.atmarkit.co.jp/fdotnet/dotnettips/755aspajaxgmaps/aspajaxgmaps.html','Googleマップを操作するには？','山田祥寛','dotnet','Googleマップを、ASP.NET AJAXアプリケーションから操作する方法について紹介します。',3746,'2008-06-19'),('http://www.wings.msn.to/index.php/-/A-03/978-4-7980-2004-4/','今日からつかえるPHP5サンプル集　PEAR＆Zend Framework活用版 ','山田祥寛','book','PHP 5.x をベースに、PHP プログラミングのテクニックを紹介するサンプル集です。本書では、前版の膨大なサンプルを完全リライト。さらに、Web API やAjax、RSS など新しいキーワードに基づく新規サンプルも多数用意。後半では、Zend Framework ＋ Smartyを用いた本格的なアプリケーション開発にも言及。付録には、各リファレンス付。',7167,'2008-06-26'),('http://www.wings.msn.to/index.php/-/A-03/978-4-7981-1329-6/','これならわかる Web標準サイトの作り方 入門の入門','うえがき麻矢','book','Web業界では、もはやスタンダードとなりつつある「Web標準」。\nこの「Web標準」に対応するサイト制作の考え方・作り方・デザインについて、やさしく読みやすく解説します。XHTML／CSSやアクセシビリティ＆SEOなどに関する技術解説のみならず、ナビゲーション／視覚表現のコツやテクニックなども紹介します。',7056,'2007-06-20'),('http://www.wings.msn.to/index.php/-/A-03/978-4-7981-1363-0/','10日でおぼえるSQL Server 2005入門教室','山田祥寛','book','定評のある「10日でおぼえる」シリーズにSQL Serverが登場。自分で動かして確かめながら、SQL Server2005の機能をがっちり学べる入門書です。インストールからデータベース操作、運用管理までステップアップ形式で身につきます。付属ツールManagement Studio、Plofiler、Business Intelligence Development Studioなどの使用方法も紹介。',8004,'2007-09-19'),('http://www.wings.msn.to/index.php/-/A-03/978-4-7981-1427-9/','Visual Studio 2005でいってみよう～ASP.NET 2.0編','山田祥寛','book','text',7834,'2007-07-31'),('http://www.wings.msn.to/index.php/-/A-03/978-4-8399-2438-6/','ASP.NET AJAX プログラミング','山田祥寛','book','ASP.NET AJAX 1.0、ASP.NET AJAX Control Toolkit対応。AJAXに二の足を踏んでいる方も、JavaScriptが苦手な方も、次期Visual Studio 2008（ASP.NET 3.5）で標準導入される予定のフレームワークをいち早くキャッチ。基本的なサーバコントロールの用法、JavaScriptライブラリにおける型システムの概念などを学び、最終的に自前のAJAX対応コントロールを構築できるようになるまでを目標とします。',8200,'2007-09-22'),('http://www.wings.msn.to/index.php/-/A-03/978-4-8399-2708-0/','JavaScriptマスターブック','山田祥寛','book','Ajaxの普及に伴い、JavaScriptのプログラミングスタイルも大きく変わりつつあります。従来の手続き的な手法は残しつつも、オブジェクト指向的な記述が求められています。本書では、JavaScriptをこれから始める方はもちろん、「なんとなく」理解している方、「とりあえず」動かせる方が改めてJavaScriptをきちんと学ぶための一冊です。豊富なサンプルや付録「jQueryリファレンス」にも注目です。',7468,'2008-05-30');
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_table`
--

DROP TABLE IF EXISTS `log_table`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `log_table` (
  `id` int(11) NOT NULL auto_increment,
  `logtime` varchar(30) default NULL,
  `level` int(11) NOT NULL,
  `level_str` varchar(10) default NULL,
  `msg` varchar(200) default NULL,
  `useragent` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `log_table`
--

LOCK TABLES `log_table` WRITE;
/*!40000 ALTER TABLE `log_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metadata`
--

DROP TABLE IF EXISTS `metadata`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `metadata` (
  `id` int(11) NOT NULL,
  `module` varchar(15) default NULL,
  `controller` varchar(15) default NULL,
  `action` varchar(15) default NULL,
  `title` varchar(50) default NULL,
  `keywords` varchar(50) default NULL,
  `description` varchar(100) default NULL,
  `roles` varchar(50) default NULL,
  `parent` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `metadata`
--

LOCK TABLES `metadata` WRITE;
/*!40000 ALTER TABLE `metadata` DISABLE KEYS */;
INSERT INTO `metadata` VALUES (1,'default','metainfo','index','自作アクションヘルパー1','メタ情報 ,自作アクションヘルパー, トップ','トップページです','',0);
/*!40000 ALTER TABLE `metadata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo`
--

DROP TABLE IF EXISTS `photo`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(50) default NULL,
  `data` blob,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `photo`
--

LOCK TABLES `photo` WRITE;
/*!40000 ALTER TABLE `photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quest`
--

DROP TABLE IF EXISTS `quest`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `quest` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `sex` tinyint(4) default NULL,
  `age` int(11) default NULL,
  `comment` varchar(255) default NULL,
  `updated` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `quest`
--

LOCK TABLES `quest` WRITE;
/*!40000 ALTER TABLE `quest` DISABLE KEYS */;
/*!40000 ALTER TABLE `quest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `user` (
  `uid` char(7) NOT NULL,
  `passwd` varchar(32) default NULL,
  `name` varchar(50) default NULL,
  `roles` varchar(50) default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('skakeya','f400e38d6c08c2e7d51e25cca48d8a95','掛谷真吾','Member'),('tsuzuki','f400e38d6c08c2e7d51e25cca48d8a95','鈴木太郎','Guest'),('yyamada','f400e38d6c08c2e7d51e25cca48d8a95','山田祥寛','SuperAdministrator,Administrator');
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

-- Dump completed on 2008-07-21 16:47:32
