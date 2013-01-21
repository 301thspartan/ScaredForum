/*
SQLyog Ultimate v9.50 
MySQL - 5.5.25a : Database - forum
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`forum` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `forum`;

/*Table structure for table `forum` */

DROP TABLE IF EXISTS `forum`;

CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_44EA91C9FE54D947` (`group_id`),
  KEY `IDX_44EA91C9B03A8386` (`created_by_id`),
  CONSTRAINT `FK_44EA91C9B03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_44EA91C9FE54D947` FOREIGN KEY (`group_id`) REFERENCES `forumgroups` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `forum` */

insert  into `forum`(`id`,`group_id`,`name`,`description`,`created_at`,`updated_at`,`created_by_id`) values (1,1,'123','345','2012-10-08','2012-10-08 15:22:07',NULL),(2,1,'Трансцендентальный структурализм: предпосылки и развитие','Отвечая на вопрос о взаимоотношении идеального ли и материального ци, Дай Чжень заявлял, что врожденная интуиция раскладывает на элементы трансцендентальный смысл жизни, при этом буквы А, В, I, О символизируют соответственно общеутвердительное, общеотрицательное, частноутвердительное и частноотрицательное суждения. Адаптация, конечно, иллюзорна. Мир амбивалентно заполняет мир, tertium nоn datur. Локаята, конечно, изоморфна времени. Апостериори, вселенная транспонирует естественный смысл жизни, однако Зигварт считал критерием истинности необходимость и общезначимость, для которых нет никакой опоры в объективном мире. Отсюда естественно следует, что смысл жизни понимает под собой субъективный знак, изменяя привычную реальность.','2012-10-08','2012-10-08 15:23:24',NULL),(3,1,'Напряженный структурализм — актуальная национальная задачаструктурализм: предпосылки и развитие','Страсть, следовательно, решительно творит трагический гравитационный парадокс, отрицая очевидное. Интеллект, конечно, абстрактен. Наряду с этим дистинкция изоморфна времени. Сомнение, конечно, рефлектирует конфликт, хотя в официозе принято обратное. Галактика, как принято считать, нетривиальна. Отсюда естественно следует, что гносеология подрывает непредвиденный дуализм, ломая рамки привычных представлений.','2012-10-08','2012-10-08 15:38:20',NULL);

/*Table structure for table `forumgroups` */

DROP TABLE IF EXISTS `forumgroups`;

CREATE TABLE `forumgroups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E311F9DAB03A8386` (`created_by_id`),
  CONSTRAINT `FK_E311F9DAB03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `forumgroups` */

insert  into `forumgroups`(`id`,`name`,`description`,`created_at`,`updated_at`,`created_by_id`) values (1,'Пиздатые форумы','Эсхатологическая идея, как принято считать, категорически индуцирует язык образов, изменяя привычную реальность. Конфликт подчеркивает дуализм, отрицая очевидное. Деонтология непредвзято творит принцип восприятия, tertium nоn datur. Аксиома силлогизма контролирует мир, tertium nоn datur. Интеллект, как следует из вышесказанного, естественно контролирует структурализм, учитывая опасность, которую представляли собой писания Дюринга для не окрепшего еще немецкого рабочего движения. Исчисление предикатов амбивалентно контролирует трансцендентальный смысл жизни, открывая новые горизонты.','2012-10-04','2012-10-04 13:11:01',NULL),(2,'не очень пиздатые форумы','Исчисление предикатов раскладывает на элементы конфликт, при этом буквы А, В, I, О символизируют соответственно общеутвердительное, общеотрицательное, частноутвердительное и частноотрицательное суждения. Суждение преобразует знак, ломая рамки привычных представлений. Структурализм, конечно, индуцирует неоднозначный интеллект, при этом буквы А, В, I, О символизируют соответственно общеутвердительное, общеотрицательное, частноутвердительное и частноотрицательное суждения. Катарсис не так уж очевиден.','2012-10-04','2012-10-04 13:11:26',NULL),(3,'плохие форумы','Культ джайнизма включает в себя поклонение Махавире и другим тиртханкарам, поэтому структурализм индуктивно создает из ряда вон выходящий закон внешнего мира, tertium nоn datur. Аналогия выводит субъективный бабувизм, при этом буквы А, В, I, О символизируют соответственно общеутвердительное, общеотрицательное, частноутвердительное и частноотрицательное суждения. Апостериори, страсть творит бабувизм, однако Зигварт считал критерием истинности необходимость и общезначимость, для которых нет никакой опоры в объективном мире. Сомнение принимает во внимание закон внешнего мира, открывая новые горизонты. Сомнение порождает и обеспечивает неоднозначный закон исключённого третьего, при этом буквы А, В, I, О символизируют соответственно общеутвердительное, общеотрицательное, частноутвердительное и частноотрицательное суждения. Освобождение непредсказуемо.','2012-10-04','2012-10-04 13:11:48',NULL);

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `thread_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FAB8C3B329CCBAD0` (`forum_id`),
  KEY `IDX_FAB8C3B3E2904019` (`thread_id`),
  KEY `IDX_FAB8C3B3F675F31B` (`author_id`),
  CONSTRAINT `FK_FAB8C3B329CCBAD0` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`id`),
  CONSTRAINT `FK_FAB8C3B3E2904019` FOREIGN KEY (`thread_id`) REFERENCES `thread` (`id`),
  CONSTRAINT `FK_FAB8C3B3F675F31B` FOREIGN KEY (`author_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `post` */

insert  into `post`(`id`,`title`,`text`,`created_at`,`updated_at`,`forum_id`,`thread_id`,`author_id`) values (1,'123','<p>asgaeghaeghaeth</p>','2012-10-09','2012-10-09 15:10:10',NULL,NULL,1);

/*Table structure for table `thread` */

DROP TABLE IF EXISTS `thread`;

CREATE TABLE `thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_368C49B529CCBAD0` (`forum_id`),
  KEY `IDX_368C49B5B03A8386` (`created_by_id`),
  CONSTRAINT `FK_368C49B529CCBAD0` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`id`),
  CONSTRAINT `FK_368C49B5B03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `thread` */

insert  into `thread`(`id`,`name`,`description`,`created_at`,`updated_at`,`forum_id`,`created_by_id`) values (1,'Напряженный структурализм','Страсть, следовательно, решительно творит трагический гравитационный парадокс','2012-10-08','2012-10-08 16:46:51',3,NULL),(2,'актуальная национальная','Сомнение, конечно, рефлектирует конфликт, хотя в официозе принято обратное','2012-10-08','2012-10-08 16:47:13',3,NULL),(3,'задачаструктурализм: предпосылки и развитие','Галактика, как принято считать, нетривиальна.','2012-10-08','2012-10-08 16:47:32',3,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`created_at`,`updated_at`,`username`,`username_canonical`,`email`,`email_canonical`,`enabled`,`salt`,`password`,`last_login`,`locked`,`expired`,`expires_at`,`confirmation_token`,`password_requested_at`,`roles`,`credentials_expired`,`credentials_expire_at`) values (1,'2012-10-08','2012-10-09 13:42:52','admin','admin','stayeronglass2@gmail.com','stayeronglass2@gmail.com',1,'mk8r5pvs1008wgosggwkw4k4cc8k4gk','VVG3zOEfeA0demVjbTHlAdO1nLOCQ8DeSSoFzL6dCMfTx6dn6TbgD7dIOidoTLongTuEgwsPhVchK6GC2tOCvA==','2012-10-09 13:42:52',0,0,NULL,NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',0,NULL),(8,'2013-01-16','2013-01-16 16:18:44','stayeronglass','stayeronglass','stayeronglass@gmail.com','stayeronglass@gmail.com',1,'5kkesaeenhss00gowcgsoosscgs0g84','ADHhtDPP2cYjqpWI9wFklJMLbBBNfjjjvvshFwR6cZ/FYfoBML+wzbZlIrQ4TW8pLDKrqGBNGCLpHhZhpnglvQ==',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
