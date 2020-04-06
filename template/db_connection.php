<?php 
$db['host']= 'localhost';
$db['user_name']='root';
$db['db_pass']='';
$db['db_name']='improve';

foreach($db as $key=>$value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(HOST,USER_NAME,DB_PASS,DB_NAME);
// if($connection){
//     echo 'we are connected';
// }



?>