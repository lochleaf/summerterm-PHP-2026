 <?php
   class database{
    //replace values with the information you received in the email 
    private $host = '172.31.22.43';
    private $username = ' Ruhana200655651';
    private $password = '0WP9hgAiej';
    private $database = 'Ruhana200655651';
    protected $connection;

    /*
     
Constructor Method*/
  public function __construct(){
      if(!isset($this->connection)){$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
          if(!$this->connection){
              echo '<p>Could not connect to the databse.</p>';
              exit;}}}
  public function getConnection(){
      return $this->connection;}}