<?php
    require('connection.php');
    $all = connection::connect()->all();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Serv5</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 
        ____________________SERV5___________________________________
                        BOOTSTRAP FILES
     -->
     <link rel="stylesheet" href="../public/packages/css/bootstrap/bootstrap.min.css">
     
    <!-- 
        ____________________SERV5___________________________________
        ____________________________________________________________
            DATATABLE CSS FILE
        ____________________________________________________________
     -->
     <link rel="stylesheet" href="../public/packages/data/datatables.css">


    <!-- 
        ____________________SERV5___________________________________
        ____________________________________________________________
            MAIN FILE
        ____________________________________________________________
     -->
     <link rel="stylesheet" href="../public/assets/css/index.css">
</head>
<body>
  <a href="../index.php">Products</a>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          
            <table class="table table-hover datatables ">
              <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">payer email</th>
                    <th scope="col">product id</th>
                    <th scope="col">amount</th>
                    <th scope="col">currency</th>
                    <th scope="col">status</th>
                    <th scope="col">created_at</th>
                </tr>
              </thead>
              <tbody class="ajax-tr">
                <?php // foreach( connection::connect()->all() as $value):?>
                    <tr>
                      <td><?php //echo $value->id;?></td>
                      <td><?php //echo $value->payer_email;?></td>
                      <td><?php //echo $value->product_id;?></td>
                      <td><?php //echo $value->amount;?></td>
                      <td><?php //echo $value->currency;?></td>
                      <td><?php //echo $value->status;?></td>
                      <td><?php //echo $value->created_at;?></td>
                    </tr>
                <?php // endforeach;?>
              </tbody>
            </table>
        </div>
      </div>
    </div>

      <!-- 
        ____________________SERV5___________________________________
                        JAVASCRIPT FILES
     -->
     <script src="../public/packages/js/jquery/jquery.js"></script>
     <script src="../public/packages/js/bootstrap/bootstrap.min.js"></script>
     <script src="../public/packages/data/datatables.js"></script>
     
     <script src="../public/packages/data/Buttons-2.3.6/js/buttons.print.js"></script>
     <script src="../public/packages/data/Buttons-2.3.6/js/buttons.html5.js"></script>
     <script src="../public/packages/data/Buttons-2.3.6/js/dataTables.buttons.js"></script>
     <script src="../public/packages/data/pdfmake-0.1.36/pdfmake.js"></script>
     <script src="../public/packages/data/pdfmake-0.1.36/vfs_fonts.js"></script>
     <script src="../public/packages/data/JSZip-2.5.0/jszip.js"></script>
     <script src="../public/packages/data/RowGroup-1.3.1/js/dataTables.rowGroup.js"></script>

     <script src="../public/assets/js/datatables.js"></script>
                  
</body>
</html>