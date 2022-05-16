<?php
include 'Setting.php' ;
include 'lib/db.php';

//if( isset( $_POST['submit'] ) ){
    $Id = $_GET['id'];

   //connect database
    $dbc =new DB ($dbHost,$dbUser,$dbPassword,$dbName,$dbcharset);

    //create query 

    $sql = " UPDATE user 
   SET Status = 'Delete'  
    WHERE Id=?";
  
    // (Email,UserName,Password) VALUES (?,?,?)
    //execute query

    $result=$dbc->query($sql,$_GET['id']);

    //close connection
    $dbc->close();

    echo'با موفقیت حذف شد';

/*else {
    include 'view/Add_User.php' ;
}*/

?>



