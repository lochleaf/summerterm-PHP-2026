<?php
/**
 * MovieCrud Class
 * This class handles the actuel SQL data logic, It DOES NOT know how to 
 * connect to a database
 */
class MovieCrud{
    //this property will store the database connection
    private $dbConnecton;
    /**
     * Dependancy injection contructor 
     * we are forcing this class to only accept a valid, working instance of the built-in PDO class
     */
    public function __construct(PDO $activePdoConnection){
        $this->dbConnection = $activePdoConnection;
    }
    /**
     * READ OPERATION (with pagination)
     */
    public function readAllPopular($selectPage = 1){
        //Basic pagination math setup
        $recordsPerPage = 12;
        $offset = ($selectPage - 1) * $recordsPerPage;
        //Prepared stetements & named placeholders 
        $sqlQuery = "SELECT * FROM lessonMovies ORDER BY popularity DESC LIMIT :limit OFFSET :offset";
        try{
            // 1. prepare the query template with the database server
            $statement = $this->dbConnection->prepare($sqlQuery);
            // 2. bind the values to the placeholders
            $statement->bindValue(':limit', $recordsPerPage, PDO::PARAM_INT);
            // 3. Excute the safe statement  on the database server
            $statement->excute();
            // 4. Fetch the records 
            return $statement->fetchAll();
        }
        catch(PDOException $e){
            //if an SQL query breaks then return the error to the user
            return [];
        }
    }
}
?>