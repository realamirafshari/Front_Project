<?php

include 'Setting.php' ;

if( isset( $_POST['submit'] ) ){

   //connect database
    $dbc =new mysqli($dbHost,$dbUser,$dbPassword,$dbName);
    $dbc -> set_charset('utf8_mb4');

    //create query 
    $sql="INSERT INTO contact (Title,Message) VALUES ('{$_POST['Title']}','{$_POST['Message']}')";

    //execute query
    $result=$dbc->query($sql);

    //close connection
    $dbc->close();

    echo'پیام شما با موفقیت ارسال گردید ';
}
else {
    include 'view/Contact_Us.php' ;
}
?>



