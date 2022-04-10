<?php
    include 'Setting.php';
    include 'lib/DB.php';

if( isset( $_POST['submit']) ){ // اگر از فرم آمده
    // a. validate data
   // $id = $_GET['id'];
    // b. عملیات درج
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPassword, $dbName, $dbcharset);
    if($_POST['password'] == ''){
        // 2. create query
        $sql = "UPDATE product SET
                Name = ?,
                Date = ?,
                type = ?,
                WHERE ID = ?";
        // 3. execute query
        $result = $dbc -> query( $sql, $_POST['email'], $_POST['username'],$_POST['type'], $_GET['id'] );
    }
    else{
        // 2. create query
        $sql = "UPDATE product SET
                Name = ?,
                Date = ?,
                type = ?,
                WHERE ID = ?";
        // 3. execute query
        $result = $dbc -> query( $sql, $_POST['email'], $_POST['username'], $_POST['password'],$_POST['type'],$_GET['id'] );
    }
    // 4. close connection
    $dbc -> close();

    // include a view
    echo 'با موفقیت ویرایش شد';
}
else{
    // دریافت اطلاعات فرم
    
    // 1. connect db
    $dbc = new DB( $dbHost, $dbUser, $dbPassword, $dbName, $dbcharset);
    // 2. create query
    $sql = "SELECT * FROM product
            WHERE ID = ?";
    // 3. execute query
    $result = $dbc -> query( $sql, $_GET['ID'] );
    $row = $result -> fetchArray();
    // 4. close connection
    $dbc -> close();

    // نمایش فرم
    //var_dump( $row );
    include 'view/Edit_Product.php';
}
?>