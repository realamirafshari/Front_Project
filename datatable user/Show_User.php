<?php
    include 'Setting.php';
    include 'lib/db.php';
    include 'utils/security.php';


    // a. validate data
    // b. عملیات سلکت
    // 1. connect db
    $dbc =new DB ($dbHost,$dbUser,$dbPassword,$dbName,$dbcharset);
    // 2. SELECT Query
    $sql = "SELECT * FROM user
            ORDER BY Id DESC
            LIMIT 15";
    // 3. execute query
    $result = $dbc -> query( $sql );
    $users = $dbc -> fetchAll();
    // var_dump($products);
    // 4. close connection
    $dbc -> close();
  //  var_dump( $tickets );

    // include a view
    
    include 'view/Show_User.php'
?>