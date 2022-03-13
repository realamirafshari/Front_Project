<?php

include 'Setting.php' ;

if( isset( $_POST['submit'] ) ){

   //connect database
    $dbc =new mysqli($dbHost,$dbUser,$dbPassword,$dbName);
    $dbc -> set_charset('utf8_mb4');

    //create query 
    $sql="INSERT INTO user (Email,UserName,Password) VALUES ('{$_POST['email']}','{$_POST['username']}','{$_POST['password']}')";

    //execute query
    $result=$dbc->query($sql);

    //close connection
    $dbc->close();

    echo'با موفقیت درج شد';
}
else {
    include 'view/Add_User.php' ;
}
?>



