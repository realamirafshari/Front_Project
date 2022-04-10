<?php

include 'Setting.php';
include 'lib/DB.php';

if( isset( $_POST['submit'] ) ){

    //connect database
     $dbc =new DB ($dbHost,$dbUser,$dbPassword,$dbName,$dbcharset);
 
     //create query 
     $sql="INSERT INTO product (Name,Date,type) VALUES (?,?,?)";
 
     //execute query
     $result=$dbc->query($sql,$_POST['name'],$_POST['date'],$_POST['type']);
 
     //close connection
     $dbc->close();
 
     echo'با موفقیت درج شد';
 }
 else {
     include 'view/Add_Product.php' ;
 }
 ?>













?>