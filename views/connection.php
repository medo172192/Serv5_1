<?php

final class connection{

    /**
     *  ____________________SERV5___________________________________
     *                  Make Variables
     */
   
    public static $mysql = 'mysql:host=localhost;dbname=serv5';
    public static $username = 'root';
    public static $password = '';
    public static $connect;
    public static $status;
    public static $_in=NULL;

    

    /**
     *  ____________________SERV5___________________________________
     *                  connect to mysql db
     * @return DATABASE_CONNECTION
     * @return STATIC
     */
   
  final  public static function connect(){
        if (self::$_in == NULL){
            self::$_in = new Self;
        }
        try {
            $pdo = new PDO(self::$mysql, self::$username, self::$password);
            self::$connect = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return self::$_in;
    }


    /**
     *  ____________________SERV5___________________________________
     *              create new payment process
     * @return INSERT
     * @return VoID
     */
  final  public static function create(array $data)
    {
       
        $sql = "INSERT INTO payments (`product_id`, `amount`, `currency`,`status`,`created_at`,`payer_email`) VALUES (:product_id,:amount,:currency,:status,:created_at,:payer_email)";
        self::$connect->prepare($sql)->execute($data);
        self::$status = 'success';
    }


    /**
     *  ____________________SERV5___________________________________
     *              Response Payment Status
     * @return VOID
    */

   final public static function status()
    {
       return self::$status;
    }


    /**
     *  ____________________SERV5___________________________________
     *                Payment Process
     * @return REDIRECT
     * @return VOID
    */

   final public static function payment()
    {
        try {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (strtolower($_REQUEST['payment_status']) == 'completed'){

                        $Reponse = [];
                        $Reponse['product_id']    =    e($_REQUEST['PayerID']);
                        $Reponse['amount']        =    e($_REQUEST['payment_gross']);
                        $Reponse['currency']      =    e($_REQUEST['mc_currency']);
                        $Reponse['status']        =    e($_REQUEST['payment_status']);
                        $Reponse['created_at']    =    e($_REQUEST['payment_date']);
                        $Reponse['payer_email']   =    e($_REQUEST['payer_email']);
                        $connection = connection::connect()->create($Reponse);
                        if ( $connection ) {
                            echo connection::status();
                        };
                        header("Location: views/datatables.php");


                }else{
                    header("Location: views/fails.php");
                }
                
            }
        } catch (\Exception $e) {
            return throw new Exception("ERROR PAYMENT INTEGRATION");
            
        }
        
    }

     /**
     *  ____________________SERV5___________________________________
     *                RESPONSE JSON ENCODE
     * @return JSON
     * @return VOID
    */
   final public static function json($value){
        return json_encode($value);
    }


    /**
     *  ____________________SERV5___________________________________
     *                RESPONSE JSON ENCODE
     * @return FETCH
     * @return VOID
    */
    final public static function all()
    {
        $sql  = "SELECT * from payments order by id desc";
        $query = self::$connect->prepare($sql);
        $query->execute();
       
        if ($query->rowCount()>0){
           return $query->fetchAll(PDO::FETCH_OBJ);
        }
        self::$status = 'success';
    }

    
}

    /**
     *  ____________________SERV5___________________________________
     *             ENCAPSOLUTION HTML ENTITIES
     * @return VOID
    */

function e($content){
    return htmlentities($content);
}


    /**
     *  ____________________SERV5___________________________________
     *             FETCH AJAX DATA TO DATATABLES
     * @return VOID
    */
function fetchAjax(){
    if(isset($_POST['action'])) {

        echo connection::json(
            connection::connect()->all()
        );

    }
}

fetchAjax();

