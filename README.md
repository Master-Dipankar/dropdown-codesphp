# Dropdown-codes-php
#Simple php html js dropdown menu.


Step 1: Here to support all this code you have created a database named 'drop' in you localhost, using software eg: XAMPP;
Step 2: Create Country State City Table: Go to  sql command menu in you php myadmin  and run this sql query:
  
Country Table:

            CREATE TABLE `countries` (
                     `id` int(11) NOT NULL AUTO_INCREMENT,
                     `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                     `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
                     PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

State Table:

        CREATE TABLE `states` (
         `id` int(11) NOT NULL AUTO_INCREMENT,
         `country_id` int(11) NOT NULL,
         `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
         `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
         PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

City table:

CREATE TABLE `cities` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `state_id` int(11) NOT NULL,
 `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


Step 3: Insert Data Into Country State City Table:
  
  //countries table insert
  
      INSERT INTO `countries` VALUES (1, 'India', 1); //here id:1, name:USA, active status: 1;
      INSERT INTO `countries` VALUES (2, 'India2', 1);

  //states table insert 

      INSERT INTO `states` VALUES (1, 1, 'Assam', 1); //heres 1st 1 is id, 2nd 1 is country_id,name:New York, active status: 1;
      INSERT INTO `states` VALUES (2, 1, 'Delhi', 1);
      INSERT INTO `states` VALUES (3, 2, 'Assam2', 1);
      INSERT INTO `states` VALUES (4, 2, 'Delhi2', 1);


   //cities table insert 


      INSERT INTO `cities` VALUES (1, 2, 'New Delhi', 1);//heres 1st 1 is id, 2nd 2 is state_id, name:Los Angales, active status: 1;
      INSERT INTO `cities` VALUES (2, 1, 'Guwahati', 1);
      INSERT INTO `cities` VALUES (3, 4, 'New Delhi2', 1);
      INSERT INTO `cities` VALUES (4, 3, 'Guwahati2', 1);

Step 4: Create DB Connection PHP File. //db.php //not required here.



Step 5: Create Html Form For Display Country, State and City Dropdown //index.php

                   
Step 6: Get States by Selected Country from MySQL Database in Dropdown List using PHP script //states-by-country.php 


Step 7: Get Cities by Selected State from MySQL Database in DropDown List using PHP script  //cities-by-state.php


