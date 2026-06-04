<?php
/**
 * Database connection class
 * note that this does not run SQL queries.... it acts as a safe highway between PHP and your database
 */
class Database{
    private $host;
    private $dbName;
    private $username;
    private $password;
    //this property will hold our actual active connection link once it is created 
    private $pdoInstance = null;
    /**
     * The constructoe Method 
     * this //magic method//this term might on the midterm//automatically rund the connection 
     */
    public function __construct($host, $dbName, $username, $password){
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
    }
    public function connect(){
        if($this->pdoInstance !== null){
            return $this->pdoInstance;
        }
        //Create a DNS (data source name) string
        $dsn = "mysql:host={$this->host};dbname={$this->dbName};charset=utf8mb4";
        //2. Configure PDO options array
        //we configure PDO to change its default behaviours to be safer and easier to work with
        $options = [
            //this setting tells PHP if anything goes wrong with sql crash with an explicit readable error
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            //this formats the database rows as objects rather than multi-dimensinal arrays.
            // it lets us type out $movie->tittle instead of $movie['title'] in our HTML view.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            // Disables "emulated" prepares forcing MySQL to natively sanitize our database queries.
            PDO::ATTR_EMULATE_PREPARES => false,
        ];
        // 3. the try/catch block
        try{
            $this->pdoInstance = new PDO($dsn, $this->username, $this->password, $options);
            return $this->pdoInstance;
        }
        catch(PDOException $e){
            die("Datebase connection failed: " . $e->message());
        }
    }
}
?>