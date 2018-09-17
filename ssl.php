<?php
   //Connecting to Redis server on localhost
   require_once('predis/autoload.php');
   $redis = new Predis\Client([
                       'scheme' => 'tls',
                       'host' => 'master.begogreensecured.2szzqi.usw2.cache.amazonaws.com',
                       'port' => 6379,
			'password' => 'iloveawsiloveaws'
               ]);
   echo "Connection to server sucessfully";
   $redis->lpush("tutorial-list", "Redis");
   $redis->lpush("tutorial-list", "Mongodb");
   $redis->lpush("tutorial-list", "Mysql");
   $redis->lpush("book", "My Book");
   // Get the stored keys and print it
   $arList = $redis->keys("*");
   echo "Stored keys in redis:: ";
   print_r($arList);
?>
