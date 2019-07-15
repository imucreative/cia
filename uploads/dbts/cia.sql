/*
SQLyog Community v12.2.6 (32 bit)
MySQL - 10.1.16-MariaDB : Database - cia
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cia` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cia`;

/*Table structure for table `tbl_distributor` */

DROP TABLE IF EXISTS `tbl_distributor`;

CREATE TABLE `tbl_distributor` (
  `distributor_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_distributor` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`distributor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_distributor` */

insert  into `tbl_distributor`(`distributor_id`,`nama_distributor`,`image`,`status_delete`) values 
(1,'Doowon','doowon.png',0),
(2,'Hanon System','hanon_system.png',0),
(3,'Mando','mando.png',0),
(4,'Mando Plus','mando_plus.png',0);

/*Table structure for table `tbl_info` */

DROP TABLE IF EXISTS `tbl_info`;

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_toko` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo` text NOT NULL,
  `logo_full` text NOT NULL,
  `about` text NOT NULL,
  `keunggulan` text NOT NULL,
  `siup` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_info` */

insert  into `tbl_info`(`id`,`nama_toko`,`alamat`,`telp`,`fax`,`email`,`logo`,`logo_full`,`about`,`keunggulan`,`siup`,`npwp`) values 
(1,'PT. CAKRA INDONESIA AUTOPART','Jl. H. Wahab Affan Km. 28, Pondok Ungu - Bekasi 17132, Indonesia ','(62-21)888-60979','(62-21)885-4205','salesmando@cakraautopart.com','logo_cia.png','logo_cia_full.png','<p>PT Cakra Indonesia Autopart adalah perusahaan yang bergerak di bidang perdagangan umum yang di dirikan pada bulan Juli tahun 2017 oleh para pemegang saham yang berpengalaman dibidangnya masing masing.</p>\r\n\r\n<p>Dengan jaringan penjualan yang luas, tenaga pemasaran yang professional, dan kerja sama team serta komitmen atas setiap pelayanan, kami percaya mampu memberikan product yang berkualitas, konsistensi dan terpercaya.</p>\r\n\r\n<p>PT Cakra Indonesia Autopart merupakan Sole Distributor untuk Product Aftermarket Part di bidang Automotive dengan merek dagang MANDO. Kami di tunjuk langsung oleh Halla Holding sebagai Official Distributor Mando Aftermarket Product untuk seluruh Indonesia.</p>\r\n','<p>Mando Plus Shock Absorber di produksi oleh Mando, Peringkat pertama OEM supplier, mempergunakan Technology yang muktahir dan melewati berbagai uji kualitas yang akan memberikan kepuasan beserta keselamatan kepada pelanggan.</p>\r\n\r\n<p>Mando memproduksi berbagai macam suspension parts dengan teknologi yang terkini yang dapat memberikan kualitas tertinggi untuk mobil penumoang maupun mobil komersial.</p>\r\n\r\n<p>Mando juga terkenal dalam hal kualitas dan system penyaluran oleh Pabrikan Otomotive dunia seperti GM dan lain nya. Sebagai tambahan bahwa Mando mendapatkan certificate ISO/TS 16949 yang mencerminkan kualitas dan ketahanan akan suspension parts.</p>\r\n','510/PK/1799/DPMPTSP.PPJU','82.342.148.2-427.000');

/*Table structure for table `tbl_kategori` */

DROP TABLE IF EXISTS `tbl_kategori`;

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  `link` varchar(40) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `nama_kategori_seo` varchar(100) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_kategori` */

insert  into `tbl_kategori`(`kategori_id`,`nama_kategori`,`link`,`parent`,`nama_kategori_seo`,`status_delete`) values 
(4,'Suspension Parts','',0,'suspension-parts',0),
(5,'Brake Parts','',0,'brake-parts',0),
(6,'Maintenance Parts','',0,'maintenance-parts',0),
(7,'Steering Parts','',0,'steering-parts',0),
(8,'Electrical Parts','',0,'electrical-parts',0);

/*Table structure for table `tbl_member` */

DROP TABLE IF EXISTS `tbl_member`;

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_telpon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_member` */

insert  into `tbl_member`(`member_id`,`nama_lengkap`,`email`,`no_hp`,`no_telpon`,`alamat`) values 
(2,'ucok','ucok76@gmail.com','082121473036','+021 (23652)','jalan budi no 45, bandung'),
(6,'nuris akbar','nuris.akbar@gmail.com','082121473036','082121473036','bandung'),
(7,'ojan','ojan@gmail.com','0877777777','08777888888','jakarta');

/*Table structure for table `tbl_menu` */

DROP TABLE IF EXISTS `tbl_menu`;

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(70) NOT NULL,
  `menu_eng` varchar(200) NOT NULL,
  `link` varchar(150) NOT NULL,
  `parent` int(11) NOT NULL,
  `menu_title_seo` varchar(150) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu` */

insert  into `tbl_menu`(`menu_id`,`menu_title`,`menu_eng`,`link`,`parent`,`menu_title_seo`,`icon`,`status_delete`) values 
(8,'Cara Pemesanan','How To Order','http://localhost/cia/p/cara-pemesanan',0,'cara-pemesanan','fa-info',1),
(9,'Testimoni Pelanggan','Customer Testimonials','http://localhost/cia/p/testimoni-pelanggan',0,'testimoni-pelanggan','fa-thumbs-up',1),
(10,'Konfirmasi Pembayaran','Payment Confirmation','http://localhost/cia/p/konfirmasi-pembayaran',0,'konfirmasi-pembayaran','fa-check',1),
(11,'Blog','Blog','http://localhost/cia/p/blog',0,'blog','fa-bars',1),
(12,'Contact','Contact','http://localhost/cia/contact/contact',0,'contact','fa-phone',1);

/*Table structure for table `tbl_menu_admin` */

DROP TABLE IF EXISTS `tbl_menu_admin`;

CREATE TABLE `tbl_menu_admin` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(100) NOT NULL,
  `icon` varchar(40) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu_admin` */

insert  into `tbl_menu_admin`(`menu_id`,`nama_menu`,`icon`,`link`,`parent`,`status_delete`) values 
(1,'Category','clip-puzzle','category',7,0),
(2,'Product','	clip-wrench','product',0,0),
(3,'Users','clip-users','users',0,1),
(4,'Information','clip-home','info',0,0),
(5,'Menu','clip-globe','menu',0,1),
(6,'Halaman','clip-keyboard','halaman',0,1),
(7,'Master','	clip-grid','#',0,0),
(8,'Tags','clip-tag','tags',7,0),
(9,'Transaksi','clip-phone-3','transaksi',0,1),
(10,'Distributor','clip-cube','distributor',7,0),
(11,'Widget','clip-paperclip','#',0,0),
(12,'Slider Image','clip-stack-empty','product_slider',11,0),
(13,'Widget','clip-images','product_widget',11,0),
(14,'Widget2','','',0,1),
(15,'Widget3','','',0,1);

/*Table structure for table `tbl_pages` */

DROP TABLE IF EXISTS `tbl_pages`;

CREATE TABLE `tbl_pages` (
  `pages_id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(120) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`pages_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pages` */

insert  into `tbl_pages`(`pages_id`,`judul`,`judul_seo`,`content`) values 
(4,'konfirmasi pembayaran','konfirmasi-pembayaran','<p>setelah anda melakukan transfer sejumlah yang telah kami sampaikan maka silahkan konfirmasi pembayaran anda</p>\r\n\r\n<ul>\r\n	<li>via sms ke no 082121473036</li>\r\n	<li>via BBM&nbsp;</li>\r\n	<li>via email nuris.akbar@gmail.com</li>\r\n</ul>\r\n'),
(5,'cara pemesanan','cara-pemesanan','<p><strong>anda bisa memesan kepada kami melalui 2 cara :</strong></p>\r\n\r\n<ul>\r\n	<li>dari website<br />\r\n	silahkan pilih product yang ingin anda beli dan ikuti panduan transaksinya</li>\r\n	<li>via sms/ telpon<br />\r\n	silahkan pilih dan sms kan nama product yang anda pilih, kami akan menginformasikan biaya yang harus anda transafer</li>\r\n</ul>\r\n'),
(6,'testimoni pelanggan','testimoni-pelanggan','<p>testimoni&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n'),
(7,'Contact','contact','<p>hubungi kami text&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n'),
(8,'Konfirmasi Pembayaran','konfirmasi-pembayaran','<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n'),
(9,'Blog','blog','<p>hubungi kami text&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n');

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `nama_product_seo` varchar(140) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `display_in_home` int(1) NOT NULL DEFAULT '0',
  `publish` int(1) NOT NULL DEFAULT '0',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`product_id`,`tgl_input`,`nama_product`,`nama_product_seo`,`keterangan`,`harga`,`kualitas`,`image`,`kategori_id`,`display_in_home`,`publish`,`status_delete`) values 
(4,'2017-11-24','ANTI LOOK BRAKE SYSTEM','anti-look-brake-system','<p>keterangan singkat produk</p>\r\n',430000,'Kualitas OEM','brake_anti_look_brake_system1.jpg',5,1,1,0),
(5,'2017-11-22','CALIPER','caliper','- Semua Shock Absorber di produksi dan di supply oleh Mando\r\n<br/>\r\n- Setiap item di kemas individually dalam kemasan Karton Box',35000,'Kualitas OEM ISO9001:2000 QS-9000','brake_caliper.jpg',5,1,1,0),
(6,'2017-11-24','MASTER CYLINDER','master-cylinder','keterangan singkat produk',67000,'Kualitas OEM','brake_master_cylinder.jpg',5,1,1,0),
(7,'2017-11-24','BRAKE PADS','brake-pads','- Back Plates terbuat dari Low carbon steel\r\n<br/>\r\n- Setiap item di kemas individually dalam kemasan Karton Box\r\n<br/>\r\n- Material NON Asbestos',45000,'Kualitas OEM ISO9001:2000 Euro Certification','brake_pads.jpg',5,0,1,0),
(8,'2017-11-24','BRAKE SENSOR','brake-sensor','keterangan singkat produk',46000,'Kualitas OEM','brake_sensor.jpg',5,2,1,0),
(9,'2017-11-24','ELECTRICAL ALTERNATOR','electrical-alternator','keterangan singkat produk',51000,'Kualitas OEM','electric_alternator.jpg',8,2,1,0),
(10,'2017-11-24','ELECTRIC STARTER','electric-starter','keterangan singkat produk',63000,'Kualitas OEM','electric_starter.jpg',8,2,1,0),
(11,'2017-11-24','MAINTENANCE BELTS','maintenance-belts','- Semua item di supply oleh Vendor Mando',34000,'Kualitas OEM ISO9001:2000','maintenance_belts.jpg',6,2,1,0),
(12,'2017-11-24','MAINTENANCE CHEMICAL','maintenance-chemical','- Tersedia saringan Oli, Saringan udara, saringan bahan bakar\r\n<br/>\r\n- Saringan Cabin AC yang dapat melindungi dari debu, polusi, spora, jelaga\r\n<br/>\r\n- Saringan Oli adalah saringan yang dapat memisahkan kotoran dari pelumas',34000,'Premium Quality','maintenance_chemicals.jpg',6,0,1,0),
(13,'2017-11-24','STEERING BOX','steering-box','keterangan singkat produk',90000,'Kualitas OEM','steering_box.jpg',7,3,1,0),
(14,'2017-11-24','STEERING JOINT','steering-joint','keterangan singkat produk',80000,'Kualitas OEM','steering_joint.jpg',7,3,1,0),
(15,'2017-11-24','STEERING PINION','steering-pinion','keterangan singkat produk',10000,'Kualitas OEM','steering_pinion.jpg',7,3,1,0),
(16,'2017-11-24','SUSPENSION ABSORBER','suspension-absorber','- Semua Shock Absorber di produksi dan di supply oleh Mando\r\n<br/>\r\n- Setiap item di kemas individually dalam kemasan Karton Box',90000,'Kualitas OEM ISO9001:2000 QS-9000','suspension_absorber.jpg',4,0,1,0),
(17,'2017-11-24','ELECTRONIC CONTROLLED SUSPENSION','electronic-controlled-suspension','keterangan singkat produk',120000,'Kualitas OEM','suspension_electronic.jpg',4,0,1,0);

/*Table structure for table `tbl_product_image` */

DROP TABLE IF EXISTS `tbl_product_image`;

CREATE TABLE `tbl_product_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_image` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_image` */

insert  into `tbl_product_image`(`image_id`,`nama_image`,`image`,`product_id`,`status_delete`) values 
(1,'ANTI LOOK BRAKE SYSTEM','brake_anti_look_brake_system.jpg',4,0),
(2,'CALIPER','brake_caliper.jpg',5,0),
(3,'MASTER CYLINDER','brake_master_cylinder.jpg',6,0),
(4,'BRAKE PADS','brake_pads.jpg',7,0),
(5,'BRAKE SENSOR','brake_sensor.jpg',8,0),
(6,'ELECTRICAL ALTERNATOR','electric_alternator.jpg',9,0),
(7,'ELECTRIC STARTER','electric_starter.jpg',10,0),
(8,'MAINTENANCE BELTS','maintenance_belts.jpg',11,0),
(9,'MAINTENANCE CHEMICAL','maintenance_chemicals.jpg',12,0),
(10,'STEERING BOX','steering_box.jpg',13,0),
(11,'STEERING JOINT','steering_joint.jpg',14,0),
(12,'STEERING PINION','steering_pinion.jpg',15,0),
(13,'SUSPENSION ABSORBER','suspension_absorber.jpg',16,0),
(14,'SUSPENSION ABSORBER','suspension_absorber.jpg',17,0),
(15,'ELECTRONIC CONTROLLED SUSPENSION','suspension_electronic.jpg',17,0);

/*Table structure for table `tbl_product_tags` */

DROP TABLE IF EXISTS `tbl_product_tags`;

CREATE TABLE `tbl_product_tags` (
  `product_tags_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tags` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_tags_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product_tags` */

insert  into `tbl_product_tags`(`product_tags_id`,`id_tags`,`product_id`,`status_delete`) values 
(1,1,5,0),
(2,2,5,0),
(3,3,5,0),
(4,4,5,0),
(5,1,6,0),
(6,2,4,0),
(7,3,6,0),
(8,4,7,0),
(9,1,8,0),
(10,2,6,0),
(11,3,7,0),
(12,4,9,0),
(13,1,10,0),
(14,2,11,0),
(15,3,12,0),
(16,4,13,0),
(17,1,16,0),
(18,2,16,0),
(19,3,16,0),
(20,4,16,0),
(21,1,7,0),
(22,2,7,0),
(23,3,11,0),
(24,4,11,0),
(25,1,11,0),
(26,2,17,0),
(27,3,17,0);

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_slider` varchar(100) NOT NULL,
  `nama_product_seo` varchar(140) NOT NULL,
  `keterangan` text NOT NULL,
  `image` text NOT NULL,
  `publish` int(1) NOT NULL DEFAULT '0',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`slider_id`,`nama_slider`,`nama_product_seo`,`keterangan`,`image`,`publish`,`status_delete`) values 
(1,'Anti Look Brake System','anti-look-brake-system','Deskripsi','brake_anti_look_brake_system.jpg',1,0),
(2,'Caliper','caliper','Deskripsi123','brake_caliper.jpg',1,0),
(3,'TES','brake-pads','<p>tes</p>\r\n','brake_master_cylinder2.jpg',1,1),
(4,'TES2','brake-sensor','<p>tes2</p>\r\n','brake_caliper2.jpg',0,1),
(5,'BRAKE PADS','brake-pads','<p>Brake Pads paling bagus</p>\r\n','brake_master_cylinder21.jpg',0,1);

/*Table structure for table `tbl_tags` */

DROP TABLE IF EXISTS `tbl_tags`;

CREATE TABLE `tbl_tags` (
  `id_tags` int(11) NOT NULL AUTO_INCREMENT,
  `tags` varchar(50) NOT NULL,
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_tags`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_tags` */

insert  into `tbl_tags`(`id_tags`,`tags`,`status_delete`) values 
(1,'HYUNDAI',0),
(2,'KIA',0),
(3,'GM DAEWOO',0),
(4,'SSANGYONG',0),
(5,'TES123QWE',1);

/*Table structure for table `tbl_transaksi` */

DROP TABLE IF EXISTS `tbl_transaksi`;

CREATE TABLE `tbl_transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=proses,2= sudah dikirim',
  `no_resi` varchar(20) NOT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi` */

insert  into `tbl_transaksi`(`transaksi_id`,`member_id`,`tanggal`,`status`,`no_resi`) values 
(1,1,'2015-03-13',2,'smr0045565656'),
(2,1,'2015-04-29',1,''),
(3,1,'2015-04-29',1,''),
(4,1,'2015-04-29',1,''),
(5,1,'2015-04-29',1,''),
(6,1,'2015-04-29',1,''),
(7,2,'2015-04-29',1,''),
(8,2,'2015-04-29',1,''),
(9,6,'2015-04-29',1,''),
(10,7,'2017-11-15',1,'');

/*Table structure for table `tbl_transaksi_detail` */

DROP TABLE IF EXISTS `tbl_transaksi_detail`;

CREATE TABLE `tbl_transaksi_detail` (
  `detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  PRIMARY KEY (`detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_transaksi_detail` */

insert  into `tbl_transaksi_detail`(`detail_id`,`transaksi_id`,`product_id`,`qty`,`ip`) values 
(16,7,5,6,'::1'),
(17,7,4,6,'::1'),
(19,8,9,6,'::1'),
(20,8,5,5,'::1'),
(21,9,5,1,'::1'),
(22,10,5,1,'::1'),
(23,9,8,1,'::1'),
(33,0,6,1,'::1'),
(39,0,8,1,'::1');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1= aktif, 2= tidak aktif',
  `status_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`user_id`,`nama_lengkap`,`username`,`password`,`status`,`status_delete`) values 
(1,'Administrator','admin','c93ccd78b2076528346216b3b2f701e6',1,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
