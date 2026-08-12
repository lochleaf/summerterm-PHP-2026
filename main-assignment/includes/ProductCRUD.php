<?php
//this fo the to connect to the database info
require_once 'database.php';

//made class for crud 
    class ProductCRUD{
      //store the database connection
      private PDO $conn;
  //the constructor will run automatically when a new productcrud object is created/it will connect and save to the database
      public function __construct(Database $db){
        $this->conn = $db->connect();
      }

      //made function to create insert the html information to the sql table
      public function products_info($productName, $description, $price, $quantity, $image){
      //sql query to add product info to table
      $query = "INSERT INTO products(productName, description, price, quantity, image) VALUES (:productName, :description, :price, :quantity, :image)";
        
        //prepare the SQL statement before it executes 
        $stmt = $this->conn->prepare($query);

        //execute the query and pass to the values for each placeholder for the table 
        return $stmt->execute([":productName"=>$productName,":description"=>$description,":price"=>$price,":quantity"=>$quantity,":image"=>$image]);
        
      }

      public function getAllProducts(){
        $query = "SELECT * FROM products";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
      }


    }

?>
