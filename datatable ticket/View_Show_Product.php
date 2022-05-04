<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
      <link href="assets/css/style.css" type="text/css" rel="stylesheet">
      <link href="assets/css/Datatable.css" type="text/css" rel="stylesheet">
      <title>کاربران</title>
</head>
<body>
    <h1 class="H1">کاربران</h1>
<table class="datatable">
    <thead>
            <tr>
            <th>ردیف</th>
            <th>نام شرکت هواپیمایی   </th>
            <th>  نوع بلیط</th>
            <th>نوع پرواز  </th>
            <th>نوع هواپیما </th>
            <th>شهر مبدا</th>
            <th>شهر مقصد</th>
            <th>ساعت پرواز</th>
            <th>ساعت فرود</th>
            <th>قیمت</th>
            <th>عملیات</th>
            </tr>
</thead>
<tbody>
    <div class="grid grid-4 ">
    <?php
        if( count( $tickets) == 0 ){
            echo '<p>محصولی یافت نشد</p>';
        }
        else{
            foreach( $tickets as $ticket ){
            //    var_dump($user);               
                include 'template/Product_Row.php';
            }
        }
    ?>
</tbody>
</table>
</div>
</body>
</html>