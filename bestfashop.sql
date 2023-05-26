dyal bestfashop barakachefae
https://www.cleardb.com/login.view  heroku_eac45f3ef65a15a //b5f045c90404ea//61ad1a3f//us-cdbr-east-06.cleardb.net  // us-mm-auto-dca-06-b.cleardb.net



CREATE DATABASE heroku_eac45f3ef65a15a CHARACTER SET utf8 COLLATE utf8_general_ci   


CREATE TABLE `product` 
(
  `id` int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `datetime` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `gallery` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price1` varchar(100) NOT NULL,
  `price2` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `sizee` varchar(100) NOT NULL,
  `shipping` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `product` 
(`id`, `datetime`, `ip`, `img`, `gallery`, `title`, `price1`, `price2`, `quantity`, `color`, `sizee`, `shipping`, `description`) 
VALUES
(235, '05/26/2023 02:26:56', '::1', 'siro3asalsoltan.jpg', 'siro3asalsoltan.jpg', 'عسل سلطان', '10', '12', '9', 'siro3asalsoltan.jpg', '0', '0', 'عسل سلطان'),
(245, '05/26/2023 02:27:49', '::1', 'siro9olon3asabi.jpg', 'siro9olon3asabi.jpg', 'قلون عصبي', '10', '12', '9', 'siro9olon3asabi.jpg', '0', '0', 'قلون عصبي'),
(255, '05/26/2023 02:28:35', '::1', 'sirobawasir.jpg', 'sirobawasir.jpg', 'البواسير', '10', '12', '9', 'sirobawasir.jpg', '0', '0', 'البواسير'),
(265, '05/26/2023 02:29:38', '::1', 'siroma3idawaam3ad.jpg', 'siroma3idawaam3ad.jpg', 'المعدة والامعاء', '10', '12', '9', 'siroma3idawaam3ad.jpg', '0', '0', 'المعدة والامعاء'),
(275, '05/26/2023 02:30:41', '::1', 'siromahlolchorb.jpg', 'siromahlolchorb.jpg', 'الضيقة والسعال', '10', '12', '9', 'siromahlolchorb.jpg', '0', '0', 'الضيقة والسعال'),
(285, '05/26/2023 02:31:31', '::1', 'siromahlolhasasiya1.jpg', 'siromahlolhasasiya1.jpg,siromahlolhasasiya2.jpg', 'محلول الحساسية', '10', '12', '9', 'siromahlolhasasiya1.jpg,siromahlolhasasiya2.jpg', '0', '0', 'محلول الحساسية'),
(295, '05/26/2023 02:32:18', '::1', 'siromotirlil9owa1.jpg', 'siromotirlil9owa1.jpg,siromotirlil9owa2.jpg', 'مثير القوة', '10', '12', '9', 'siromotirlil9owa1.jpg,siromotirlil9owa2.jpg', '0', '0', 'مثير القوة'),
(305, '05/26/2023 02:32:57', '::1', 'siroprostat.jpg', 'siroprostat.jpg', 'البروستات', '10', '12', '9', 'siroprostat.jpg', '0', '0', 'البروستات'),
(315, '05/26/2023 02:33:54', '::1', 'sirotabawollairadi.jpg', 'sirotabawollairadi.jpg,sirotabawollairadiatfal.jpg', 'تبول الارادي', '10', '12', '9', 'sirotabawollairadi.jpg,sirotabawollairadiatfal.jpg', '0', '0', 'تبول الارادي'),
(325, '05/26/2023 02:34:28', '::1', 'sirotwkal.jpg', 'sirotwkal.jpg', 'التوكال', '10', '12', '9', 'sirotwkal.jpg', '0', '0', 'التوكال');





CREATE TABLE `addtocart` 
(
  `id` int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idproduct` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price1` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `sizee` varchar(100) NOT NULL,
  `shipping` varchar(100) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `orderclien` 
(
  `id` int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `idproduct` varchar(100) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price1` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `sizee` varchar(100) NOT NULL,
  `shipping` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `totalitem` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `nameoncard` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `expmm` varchar(100) NOT NULL,
  `expyy` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL
  
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `ordercliencodesms` 
(
  `id` int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `datetime` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `totalitem` varchar(100) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
   `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `nameoncard` varchar(100) NOT NULL,
  `cardnumber` varchar(100) NOT NULL,
  `expmm` varchar(100) NOT NULL,
  `expyy` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `codesms` varchar(100) NOT NULL
  
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;





CREATE TABLE `utilisateur` 
(
  `id` int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `datetime` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `message` 
(
  `id` int(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `datetime` varchar(100) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `iplocationcity` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;




