<?php
require_once 'database.php';

    class OrderCRUD{
      private PDO $conn;
      private string $table_name = 'orders';
      public function __construct(Database $db){
        $this->conn = $db->connect();
      }
      public function create_order($name, $email, $phone, $address, $size, $shape, $type, $toppings, $breads, $drinks, $sauces, $request){
        $query = "INSERT INTO orderRequestTable(name, email, phone, address, size, shape, type, toppings, breads, drinks, sauces, request) VALUES (:name, :email, :phone, :address, :size, :shape, :type, :toppings, :breads, :drinks, :sauces, :request)";
        
        // The Failsafe: If something went wrong and MySQL didn't insert the row, we halt the execution and throw an Exception
        $stmt = $this->conn->prepare($query);

        return $stmt->execute([
          ":name"=>$name,
          ":email"=>$email,
          ":phone"=>$phone,
          ":address"=>$address,
          ":size"=>$size,
          ":shape"=>$shape,
          ":type"=>$type,
          ":toppings"=>$toppings,
          ":breads"=>$breads,
          ":drinks"=>$drinks,
          ":sauces"=>$sauces,
          ":request"=>$request,
       ]);
        
      }
    }
?>