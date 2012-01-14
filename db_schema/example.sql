CREATE TABLE `example` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `email` varchar(200) default NULL,
  `phone` varchar(60) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

insert  into `example`(`id`,`name`,`email`,`phone`) values (1,'User 1','user1@example.com','07900 123456');
insert  into `example`(`id`,`name`,`email`,`phone`) values (2,'User 2','user2@example.com','07900 234567');
insert  into `example`(`id`,`name`,`email`,`phone`) values (3,'User 3','user3@example.com','07900 345678');