<?php
include 'Setting.php' ;
include 'lib/db.php';


    $Id = $_GET['id'];

   //connect database
    $dbc =new DB ($dbHost,$dbUser,$dbPassword,$dbName,$dbcharset);

    //create query 

    $sql = " UPDATE ticket 
   SET Status = 'Delete'  
    WHERE Id=?";
  
    // (Email,UserName,Password) VALUES (?,?,?)
    //execute query

    $result=$dbc->query($sql,$_GET['id']);

    //close connection
    $dbc->close();

    echo' بلیط مورد نظر با موفقیت حذف شد ';



?>



