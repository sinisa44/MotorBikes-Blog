<?php


define('DB_NAME','motori');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');


spl_autoload_register(function($class){
    require "classes/".$class.".php";
});


define('GET_PAGE','index.php?page=');
define('GET_CATEGORY','index.php?page=news&cat=');
define('GET_SINGLE','index.php?page=single&catid=');
define('SITE_ROOT','C:\xampp\htdocs\motori2');
