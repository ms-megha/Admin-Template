<?php

$hostname = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'datingdb';
 $conn = mysqli_connect($hostname,$username,$password,$dbname);
 if (!$conn) {
   echo "no database found";
   die;
 }
  ?>
