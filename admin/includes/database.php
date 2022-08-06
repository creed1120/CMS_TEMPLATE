<?php
// configuration file for the Database
require_once("config.php");


class Database {

    public $connection;

    // Open database automacitally
    function __construct() {
        
        $this->open_db_connection();
        
    }

    //////////////////////////////
    //      Helper Methods      //
    //////////////////////////////

    /**
     * Creates the connection to database
     * @package    CMS_TEMPLATE
     * @param null
     * 
     */
    public function open_db_connection() {

        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if(mysqli_connect_errno()) {
            die("Database connection failed!" . mysqli_connect_error());
        }

    }

    /**
     * Query the SQL database
     * @package CMS_TEMPLATE
     * @param string $sql Takes in the SQL query
     * @return object $sql
     * 
     */
    public function query($sql) {
        
        $result = mysqli_query($this->connection, $sql);

        return $result;

    }

    /**
     * Comfirm the query
     * @package CMS_TEMPLATE
     * @param
     * @return
     * 
     */

     private function confirm_query($result) {

        if(!$result) {
            die("Query Faild.");
        }

     }

    /**
     * Escape special characters for entry into database
     * @package CMS_TEMPLATE
     * @param string $string
     * @return string
     * 
     */
     public function esc_string($string) {

        $escaped_string = mysqli_real_escape_string($this->connection, $string);

        return $escaped_string;

     }

}

// instantiate class
$database = new Database();

?>