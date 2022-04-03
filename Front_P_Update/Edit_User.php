<?php
    include 'Setting.php' ;
    include 'lib/DB.php';



if( isset( $_POST['submit'] ) ){

    //a.Validate date
    $id=$_GET['id'];
   //connect database
    $dbc =new DB ($dbHost, $dbUser, $dbPassword, $dbName , $dbcharset);

    //2 .create query 
    $sql= "UPDATE  user SET 
     Email=?;
     Username=?;
     Password=?;
      WHERE id=?";
  //{$_GET['id']}
    //execute query
    $result=$dbc->query($sql,$_POST['email'], $_POST['username'], $_POST['password'],$_GET['id']);

    //close connection
    $dbc->close();

    echo'با موفقیت ویرایش شد';
}
   else {

       //connect database
        $dbc =new DB ($dbHost, $dbUser, $dbPassword, $dbName , $dbcharset);
    
        //2 .create query 
        $sql= " SELECT * FROM user 
                  WHERE id=?";

        //execute query
        $result=$dbc->query($sql,$_GET['id']);
        // $account = $dbc->query('SELECT * FROM user WHERE id = ?', array('id', 'id'))->fetchArray();
        $user=$result->fetchArray();
        // echo $account['name'];
        //close connection
        $dbc->close();
    

    var_dump($user);
    include 'view/Edit_User.php' ;
}
?>
