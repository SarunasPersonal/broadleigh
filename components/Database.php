<?php
// components/Database.php
class Database {
    private $host = "localhost";
    private $db_name = "broadleigh";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            // Log the error message to a file or error log instead of echoing it
            error_log("Connection error: " . $exception->getMessage());
            echo "Connection error. Please check the logs for more details.";
        }
        return $this->conn;
    }
}
?>
