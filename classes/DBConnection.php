<?php
if(!class_exists('DBConnection')){
    require_once(__DIR__ . '/../initialize.php');
}
class DBConnection{
    private $host = DB_HOST;
    private $username = DB_USER;
    private $password = DB_PASS;
    private $database = DB_NAME;
    public $conn;
    public function __construct(){
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        $this->conn->set_charset('utf8mb4');
    }
    public function __destruct(){
        if(isset($this->conn)) $this->conn->close();
    }
}
?>
