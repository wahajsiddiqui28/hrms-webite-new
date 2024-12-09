/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 5.7.44-log : Database - forms_submit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`forms_submit` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `forms_submit`;

/*Table structure for table `contact_messages` */

DROP TABLE IF EXISTS `contact_messages`;

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

/*Data for the table `contact_messages` */

insert  into `contact_messages`(`id`,`name`,`email`,`subject`,`message`,`created_at`) values 
(1,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','sadsd','dsfsdf','2024-12-07 10:07:40'),
(2,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','sadsd','dsfsdf','2024-12-07 10:08:02'),
(3,'Wahaj Siddiqui','wahajsiddiqui22@gmail.com','sadsd','dasdasdsadsad','2024-12-07 10:12:31'),
(4,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','sadsad','asdsadsaddsa','2024-12-07 10:16:58'),
(5,'Wahaj Siddiqui Siddiqui','wahajsiddiqui28@gmail.com','sdfdsf','fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf fdsfdsfdsffdsf ','2024-12-07 10:19:10'),
(6,'Wahaj Siddiqui Siddiqui','wahajsiddiqui28@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd ','fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS fdsfsd DSVDSFS ','2024-12-07 10:22:12'),
(7,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','asdsadasdv dfgfdfdggfd asdsadasdv dfgfdfdggfd asdsadasdv dfgfdfdggfd asdsadasdv dfgfdfdggfd ','fdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfg fdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfg fdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfg fdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfgfdgfdg dfgdfg ','2024-12-07 10:24:38'),
(8,'Wahaj Siddiqui Siddiqui dsfsdf','wahajsiddiqui22@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd ','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd ','2024-12-07 10:26:34'),
(9,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','asd sdfg fgfdgd','dter fdgdfg','2024-12-07 10:50:55'),
(10,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','asd sdfg fgfdgd','dter fdgdfg','2024-12-07 11:36:34'),
(11,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','asd sdfg fgfdgd','dter fdgdfg','2024-12-07 11:37:04'),
(12,'asdsd Wahaj Siddiqui Siddiqui dsfsdf','wahajsiddiqui22@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','2024-12-07 11:39:51'),
(13,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','dsasdf dsfds','f sdfdsffdsf','2024-12-07 11:52:40'),
(14,'Wahaj Siddiqui Siddiqui','wahajsiddiqui28@gmail.com','dsfd','fdsfdsf','2024-12-07 11:55:01'),
(15,'asdsd Wahaj Siddiqui Siddiqui dsfsdf','wahajsiddiqui22@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','2024-12-07 11:59:12'),
(16,'asdsd Wahaj Siddiqui Siddiqui dsfsdf','wahajsiddiqui22@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','2024-12-07 12:05:40'),
(17,'asdsd Wahaj Siddiqui Siddiqui dsfsdf','wahajsiddiqui22@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','2024-12-07 12:05:51'),
(18,'asdsd Wahaj Siddiqui Siddiqui dsfsdf','wahajsiddiqui22@gmail.com','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd  ','2024-12-07 12:06:25'),
(19,'Aliyar','wahajsiddiqui28@gmail.com','Hello Frontend Developer ','Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test ','2024-12-07 12:13:51'),
(20,'Ali Muhammad','alimuhammad28@gmail.com','Hi','Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello ','2024-12-07 12:17:11'),
(21,'Test','test@gmail.com','Test ','Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test ','2024-12-07 12:19:45'),
(22,'A Test','atest@gmail.com','Hello A','A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi A Hi ','2024-12-07 12:21:41'),
(23,'A one','aone@gmail.com','A one Hello ','A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello A One Hello ','2024-12-07 12:24:28'),
(24,'Hadassah Bowen','qaxinenyvy@mailinator.com','Aute ea sed ad labor','Excepturi amet null','2024-12-07 12:28:51'),
(25,'Ivan Santos','bibubafid@mailinator.com','Dignissimos amet ac','Porro dicta velit r','2024-12-07 12:29:54'),
(26,'Tanner Head','codov@mailinator.com','Voluptas modi tempor','Vel ipsum deleniti ','2024-12-07 12:32:01'),
(27,'Mollie Douglas','heqofanefy@mailinator.com','Quisquam perspiciati','Nostrum aliquam culp','2024-12-07 12:33:27'),
(28,'Alan Russo','wiwaniv@mailinator.com','Rerum quia tempore ','Deserunt exercitatio','2024-12-07 12:33:53'),
(29,'Brittany Mcintosh','sazihypu@mailinator.com','Natus duis mollitia ','Eum porro aut in qua','2024-12-07 12:34:20'),
(30,'May Gonzalez','modylexom@mailinator.com','Doloremque nihil dol','Consectetur eum volu','2024-12-07 12:34:26'),
(31,'May Gonzalez','modylexom@mailinator.com','Doloremque nihil dol','Consectetur eum volu','2024-12-07 12:34:45'),
(32,'May Gonzalez','modylexom@mailinator.com','Doloremque nihil dol','Consectetur eum volu','2024-12-07 12:34:56'),
(33,'May Gonzalez','modylexom@mailinator.com','Doloremque nihil dol','Consectetur eum volu','2024-12-07 12:38:28'),
(34,'May Gonzalez','modylexom@mailinator.com','Doloremque nihil dol','Consectetur eum volu','2024-12-07 12:39:21'),
(35,'May Gonzalez','modylexom@mailinator.com','Doloremque nihil dol','Consectetur eum volu','2024-12-07 12:39:57'),
(36,'Martina Henderson','vicu@mailinator.com','Repellendus Aut atq','Molestias aut ullam ','2024-12-07 12:40:52'),
(37,'Martina Henderson','vicu@mailinator.com','Repellendus Aut atq','Molestias aut ullam ','2024-12-07 12:41:16'),
(38,'aColby Bernard','axunocinujy@mailinator.com','aQui sed aute aperiam','aUt inventore commodi','2024-12-07 12:45:36'),
(39,'aColby Bernard','axunocinujy@mailinator.com','aQui sed aute aperiam','aUt inventore commodi','2024-12-07 12:45:53'),
(40,'aColby Bernard','axunocinujy@mailinator.com','aQui sed aute aperiam','aUt inventore commodi','2024-12-07 12:46:16'),
(41,'Claire Daugherty','fyki@mailinator.com','Velit quos iste illo','Labore et qui ullamc','2024-12-07 12:51:24'),
(42,'Lois Lancaster','tezehami@mailinator.com','Quos temporibus comm','Expedita ipsum quis ','2024-12-07 12:53:24'),
(43,'Charlotte Schwartz','dijahad@mailinator.com','Cum sed dolores veli','Et dolore similique ','2024-12-07 12:54:50'),
(44,'aaaaYael Blevins','aaaaacapetohid@mailinator.com','aaaQuibusdam accusantiu','aaaaNostrud cumque sunt','2024-12-07 12:56:09'),
(45,'Raya Burris','nakimevud@mailinator.com','Sint incididunt fac','Ad et exercitation e','2024-12-07 12:59:37'),
(46,'Amy Rice','fotekadug@mailinator.com','Ut adipisicing inven','Neque corrupti omni','2024-12-07 13:04:45'),
(47,'Marsden Mayo','lonydanum@mailinator.com','Voluptate maxime pro','Voluptatibus ex cupi','2024-12-07 13:12:36'),
(48,'Elijah Shaw','nivyx@mailinator.com','Consequatur Volupta','Cupiditate molestiae','2024-12-07 13:14:12'),
(49,'Charissa Walsh','jubabavol@mailinator.com','Quibusdam lorem exer','Molestiae repudianda','2024-12-07 13:14:42'),
(50,'Tarik Moon','sihypoqowy@mailinator.com','Expedita distinctio','Non sint non adipisi','2024-12-07 13:15:07'),
(51,'Reece Schroeder','hafewyler@mailinator.com','Qui exercitation fug','Ducimus cum occaeca','2024-12-07 13:15:19'),
(52,'Troy Stephenson','xajoke@mailinator.com','Reprehenderit nemo ','Rerum qui est perfe','2024-12-07 13:54:50'),
(53,'Tatum Castillo','rykorype@mailinator.com','Aut laboriosam repr','Qui sed quo aute ea ','2024-12-07 13:56:53'),
(54,'Byron Joseph','zidah@mailinator.com','Irure sint impedit','Laboris in reprehend','2024-12-07 13:59:34'),
(55,'Byron Joseph','zidah@mailinator.com','Irure sint impedit','Laboris in reprehend','2024-12-07 13:59:39'),
(56,'Xander Terrell','culozo@mailinator.com','Vel voluptatibus asp','Dolor eum ullam face','2024-12-07 14:00:14'),
(57,'Melvin Serrano','waqucynim@mailinator.com','Ut impedit est et c','Neque duis accusanti','2024-12-07 14:01:59'),
(58,'Regina Mcconnell','horexaluh@mailinator.com','Repudiandae ab dolor','Veritatis laborum S','2024-12-07 15:17:33'),
(59,'Fredericka Blanchard','hikih@mailinator.com','Ut quo qui officia m','Cumque qui cupiditat','2024-12-07 15:20:27'),
(60,'Simone Carey','gowu@mailinator.com','Est odit quisquam f','Est officia eius di','2024-12-07 15:30:39'),
(61,'Delilah Lopez','pyjujozu@mailinator.com','Sint molestias repr','Voluptatem culpa off','2024-12-07 16:16:26'),
(62,'Wade Marks','xuxo@mailinator.com','Aliquip deserunt pra','Qui anim unde nisi a','2024-12-07 16:31:58'),
(63,'Penelope Byrd','dugepoja@mailinator.com','Totam tenetur vel iu','Quis minima voluptas','2024-12-07 16:33:38'),
(64,'Dorothy Snow','vavo@mailinator.com','Adipisci et soluta t','Libero velit sed sin','2024-12-07 16:34:39'),
(65,'Zorita Coffey','fawo@mailinator.com','Aliquam non sint por','Mollit enim deleniti','2024-12-07 16:48:38'),
(66,'Dolan Ferguson','mizuzupec@mailinator.com','Laborum voluptatibus','Omnis ut in ut illum','2024-12-07 16:49:24'),
(67,'Gillian Ford','jowa@mailinator.com','Et omnis consequuntu','Quia unde cum et fac','2024-12-09 10:29:32');

/*Table structure for table `demo_requests` */

DROP TABLE IF EXISTS `demo_requests`;

CREATE TABLE `demo_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `demo_requests` */

insert  into `demo_requests`(`id`,`name`,`email`,`number`,`subject`,`message`,`created_at`) values 
(1,'Yoko Hebert','gypitobit@mailinator.com','356','Rerum consequatur a','Irure nostrud cillum','2024-12-07 14:18:35'),
(2,'Amelia Spencer','syzutu@mailinator.com','705','Eos pariatur Labor','Sint non in totam a','2024-12-07 14:36:26'),
(3,'Karina Bonner','poje@mailinator.com','196','Est unde culpa elit','Est pariatur Commod','2024-12-07 14:42:26'),
(4,'Justin Fischer','xinet@mailinator.com','144','Consequat Architect','Fuga Delectus in e','2024-12-07 14:43:57'),
(5,'Morgan Steele','colyqude@mailinator.com','802','Voluptate officia ad','Sit vitae aperiam c','2024-12-07 14:46:58'),
(6,'Harlan Saunders','fofacikuq@mailinator.com','510','Sunt iure labore off','Sed voluptatibus ame','2024-12-07 14:48:28'),
(7,'Olga Curtis','cicitamyn@mailinator.com','686','Aut qui cupidatat mi','Eos nobis fugit is','2024-12-07 14:49:31'),
(8,'Rafael Moody','hepytic@mailinator.com','669','Molestias magni vero','Praesentium cum et t','2024-12-07 15:03:31'),
(9,'Kenyon Bolton','vylices@mailinator.com','862','Sit id voluptatem E','Quod rerum voluptas ','2024-12-07 15:05:45'),
(10,'Tatiana Dickerson','bilusylir@mailinator.com','445','Ad ratione consequat','Vero ea accusantium ','2024-12-07 15:07:10'),
(11,'Celeste Osborn','zimaciki@mailinator.com','790','Deserunt velit eaque','Laboriosam laborios','2024-12-07 15:08:03'),
(12,'Dana Thomas','symo@mailinator.com','959','Laborum molestias ab','Quis id id in aut a','2024-12-07 15:10:43'),
(13,'Sage Moss','setibyju@mailinator.com','667','Expedita dolore nost','Ut quae eum in quod ','2024-12-07 15:14:15'),
(14,'Amal Day','vybo@mailinator.com','834','Necessitatibus ea si','Modi error aut sunt','2024-12-07 15:16:53'),
(15,'Brynne Hill','hucy@mailinator.com','790','Similique in rerum f','Ut soluta non offici','2024-12-07 15:18:19'),
(16,'Ezekiel Burgess','punimip@mailinator.com','409','Odit officiis quia u','Odit id et corrupti','2024-12-07 15:18:46'),
(17,'Lamar Knowles','juzamaze@mailinator.com','832','Quis ad quos dolor v','Eos quo totam nesci','2024-12-07 15:19:04'),
(18,'Moses Robbins','watyfydale@mailinator.com','863','Amet laboris nisi s','Dolorem velit iusto','2024-12-07 15:19:33'),
(19,'Mark Leonard','xunehum@mailinator.com','920','Sapiente eaque corru','Accusantium nesciunt','2024-12-07 15:21:20'),
(20,'Ferris Cox','pecipaxute@mailinator.com','510','Laborum Ullam iste ','Qui voluptas molliti','2024-12-07 15:28:16'),
(21,'Wahaj Siddiqui','wahajsiddiqui28@gmail.com','2343535','sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd   ','fdgdfgsdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd   sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd   sdfsfsd sdfsfsd sdfsfsd sdfsfsd sdfsfsd   ','2024-12-07 16:18:05'),
(22,'Daphne Shaffer','kywuqi@mailinator.com','538','Veritatis temporibus','Ullam maxime hic ita','2024-12-07 16:18:47'),
(23,'Cody Mcdonald','sorus@mailinator.com','689','Totam molestiae moll','Ducimus et impedit','2024-12-07 16:20:23'),
(24,'Teegan Aguirre','gocicaw@mailinator.com','160','Elit dolor rerum of','Facilis corporis ani','2024-12-07 16:20:57'),
(25,'Timon Parks','bigazokazu@mailinator.com','765','Sunt voluptas unde n','Veritatis eaque poss','2024-12-07 16:21:29'),
(26,'Guy Sparks','nocohud@mailinator.com','758','Suscipit rem est al','Eu culpa Nam elit ','2024-12-07 16:39:29'),
(27,'Hermione Lowery','juloliver@mailinator.com','944','Quidem et enim sed t','Hic deserunt officia','2024-12-07 16:40:34'),
(28,'Beau Delacruz','gixo@mailinator.com','664','Qui dicta necessitat','Consequatur Amet e','2024-12-07 16:48:12'),
(29,'Sybil Mayo','libi@mailinator.com','913','Non voluptate rerum ','Omnis pariatur Et u','2024-12-07 16:48:27'),
(30,'Jade Clark','wovedefem@mailinator.com','692','Fugit similique in ','Sunt eaque sed non ','2024-12-07 16:48:59'),
(31,'Ella Reed','sozolezo@mailinator.com','739','Iure saepe repellend','Qui fugiat culpa re','2024-12-09 10:20:21'),
(32,'Nero Raymond','hodyf@mailinator.com','823','Et et dolor recusand','Rerum autem sunt exe','2024-12-09 10:23:10'),
(33,'Karen Walsh','huguhyran@mailinator.com','53','Inventore aut modi c','Sunt aliqua Blandit','2024-12-09 10:28:12'),
(34,'Wallace Middleton','gynevegyw@mailinator.com','135','Qui iste sint tempor','Ratione ratione numq','2024-12-09 12:42:05'),
(35,'Jamalia Bennett','kypup@mailinator.com','681','Sit sit nostrum dol','Ad irure qui ex cons','2024-12-09 13:48:12'),
(36,'Zachery Bowen','qijanifo@mailinator.com','445','Eaque est quis quae ','Unde a et delectus ','2024-12-09 13:53:25');

/*Table structure for table `subscribers` */

DROP TABLE IF EXISTS `subscribers`;

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `subscribed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `subscribers` */

insert  into `subscribers`(`id`,`email`,`subscribed_at`) values 
(15,'wahajsiddiqui28@gmail.com','2024-12-07 16:13:16'),
(16,'wahajsiddiqui22@gmail.com','2024-12-07 16:21:50'),
(17,'superadmin@frdp.org.pk','2024-12-07 16:22:55'),
(18,'halepotosarwan@gmail.com','2024-12-07 16:31:46'),
(19,'hodyf@mailinator.com','2024-12-09 10:24:03'),
(20,'gumyvida@mailinator.com','2024-12-09 12:30:10'),
(21,'test33@gmail.com','2024-12-09 13:50:55'),
(22,'dugepoja@mailinator.com','2024-12-09 13:54:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
