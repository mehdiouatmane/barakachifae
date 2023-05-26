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
(`id`, `datetime`, `ip`, `img`, `gallery`, `title`, `price1` , `price2`, `quantity`, `color`, `sizee`, `shipping` , `description`) 
VALUES
(1, '11/01/2022 02:49:19', '129.932.323.32', 'ntafatzrb1.jpg', 'ntafatzrb1.jpg,ntafatzrb2.jpg,ntafatzrb3.jpg', 'title1',  '12' , '14' , '303' , 'ntafatzrb1.jpg,ntafatzrb2.jpg,ntafatzrb3.jpg'  , '12' , '0' , 'KJDFJKD FDFKJDFJ'),
(2, '11/01/2022 03:49:19', '129.932.323.32', 'kask1.jpg'     , 'kask1.jpg,kask2.jpg,kask3.jpg'               , 'title2',  '43' , '50' , '100' , 'kask1.jpg,kask2.jpg,kask3.jpg'                 , '20' , '0' , 'KKKDK KKKKD');




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




CREATE TABLE `codesmsorderclien` 
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




