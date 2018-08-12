<?php

session_start();

$config = array(
//'defaultController' => (!isset($_GET['controller']) ? 'components' : 'welcome'),
'defaultController' => 'welcome',
'dbname' => 'fruits',
'dbpass' => 'root',
'dbuser' =>'root',
'baseurl' => 'http://127.0.0.1'
);


$str=$config["baseurl"]."/".$_SERVER['REQUEST_URI'];

$urlPathParts = explode('/', ltrim(parse_url($str,  PHP_URL_PATH), '/'));


//var_dump($urlPathParts);

include 'router.php';

 $route = new router($urlPathParts,$config);


?>
