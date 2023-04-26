<?php

  include('views/connection.php');
  connection::payment();

?>

<!DOCTYPE html>
<html lang="en" dir='ltr'>
<head>
    <title>Serv5</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- 
        ____________________SERV5___________________________________
                        BOOTSTRAP FILES
     -->
     <link rel="stylesheet" href="public/packages/css/bootstrap/bootstrap.min.css">
    <!-- 
        ____________________SERV5___________________________________
                         WOW FILE STYLE
     -->
     <link rel="stylesheet" href="public/packages/wow/css/libs/animate.css">
    
</head>
<body>
  <a href="views/datatables.php">Payments</a>
     
    <!-- 
        ____________________SERV5___________________________________
                        PAYMENT FORM
     -->
     <?php require("views/payment_form.php");?>

    <!-- 
        ____________________SERV5___________________________________
                        JAVASCRIPT FILES
     -->
     <script src="public/packages/js/jquery/jquery.js"></script>
     <script src="public/packages/js/bootstrap/bootstrap.min.js"></script>
     <script src="public/packages/js/wow/src/WOW.js"></script>
     <script>
        new WOW().init();
     </script>
</body>
</html>