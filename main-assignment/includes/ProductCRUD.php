<?php
//this fo the to connect to the database info
require_once 'database.php';

//made class for crud 
    class OrderCRUD{
      //store the database connection
      private PDO $conn;
  //the constructor will run automatically when a new ordercrud object is created/it will connect and save to the database
      public function __construct(Database $db){
        $this->conn = $db->connect();
      }

      //made function to create insert the html information to the sql table
      public function create_order($name, $email, $phone, $address, $size, $shape, $type, $toppings, $breads, $drinks, $sauces, $request){
        $query = "INSERT INTO orderRequestTable(name, email, phone, address, size, shape, type, toppings, breads, drinks, sauces, request) VALUES (:name, :email, :phone, :address, :size, :shape, :type, :toppings, :breads, :drinks, :sauces, :request)";
        
        //prepare the SQL statement before it executes 
        $stmt = $this->conn->prepare($query);

        //execute the query and pass to the values for each placeholder for the table 
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

<?php 
    require_once 'database.php';
    
    class UserCRUD{
      private PDO $conn;
      private string $table_name = 'users';
      public function __construct(Database $db){
        $this->conn = $db->connect();
      }
      public function create_user(string $username, string $email, string $hashed_password) : bool{
        $query = "INSERT INTO " . $this->table_name . "(username, email, password) VALUES (:username, :email, :password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        if($stmt->execute()){
          return true;
        }
        // The Failsafe: If something went wrong and MySQL didn't insert the row, we halt the execution and throw an Exception
        throw new Exception("Something failed inside the UserCRUD Class");
      }
    }
?>