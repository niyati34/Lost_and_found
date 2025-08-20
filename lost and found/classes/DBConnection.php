<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = DB_SERVER;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_NAME;
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
            // Ensure proper charset and throw exceptions on errors
            if (method_exists($this->conn, 'set_charset')) {
                @$this->conn->set_charset('utf8mb4');
            }
            if (class_exists('mysqli_sql_exception')) {
                mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            }
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>