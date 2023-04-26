$(function (){

             
 
/**
 *  ____________________SERV5___________________________________
 *        Fetch Payment Informations using ajax
 * 
 */

    
    $.ajax({
        url:"connection.php",
        dataType:'json',
        type:"post",
        data:{action:'fetch'},
        success:function (res){
            let resp = JSON.parse(JSON.stringify(res));
            var dataTable = $(".datatables").DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy','csv' ,'excel','pdf','print'
                ],
                order:[[2,'asc']],
                rowGroup:{
                    dataSrc:2
                }
            });
            
            dataTable.clear().draw();
            $.each(resp, function(index, value) {
                dataTable.row.add([
                    value.id,
                    value.payer_email,
                    value.product_id,
                    value.amount,
                    value.currency,
                    value.status,
                    value.created_at
                ]).draw();
            });
        },
        error:function (err){
            console.log(err);  
        }
    });
 


});