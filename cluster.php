<?php
   //Connecting to Redis server on localhost
   require_once('predis/autoload.php');
   $parameter = ['tls://clustercfg.begogreengroup.2szzqi.usw2.cache.amazonaws.com'];
   $options = ['cluster' => 'redis', 
	'parameters' => [
		'password' => 'iloveawsiloveaws',
		'scheme' => 'tls',
		'port' => 6379,
		'database' => 0
        ]
   ];
   $redis = new Predis\Client($parameter, $options);
   echo "Connection to server sucessfully";
   $redis->set("name", "Tom Tom");
   $redis->set("email", "tom@mail.com");
   // Get the stored keys and print it
   echo "Stored keys in redis:: ";
   print($redis->get('name'));
   print($redis->get('email'));
//   $arList = $redis->keys("*");
//   print_r($arList);
?>
