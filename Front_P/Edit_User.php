<?php

include 'Setting.php' ;

if( isset( $_POST['submit'] ) ){

    //Validate
    $id=$_GET['id'];
   //connect database
    $dbc =new mysqli($dbHost,$dbUser,$dbPassword,$dbName);
    $dbc -> set_charset('utf8_mb4');

    //create query 
    $sql="UPDATE  user SET Email='{$_POST['email']}',UserName='{$_POST['username']}', Password='{$_POST['password']}' WHERE id={$_GET['id']}";
    //execute query
    $result=$dbc->query($sql);

    //close connection
    $dbc->close();

    echo'با موفقیت ویرایش شد';
}
else {
    include 'view/Edit_User.php' ;
}
?>



