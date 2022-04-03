<?php

include 'Setting.php' ;
include 'lib/DB.php';

if( isset( $_POST['submit'] ) ){

   //connect database
    $dbc =new DB ($dbHost,$dbUser,$dbPassword,$dbName,$dbcharset);

    //create query 
    $sql="INSERT INTO user (Email,UserName,Password) VALUES (?,?,?)";

    //execute query
    $result=$dbc->query($sql,$_POST['email'],$_POST['username'],$_POST['password']);

    //close connection
    $dbc->close();

    echo'با موفقیت درج شد';
}
else {
    include 'view/Add_User.php' ;
}
?>



