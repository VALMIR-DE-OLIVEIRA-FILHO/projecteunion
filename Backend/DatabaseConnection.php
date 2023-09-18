<?php



class DatabaseConnection {
    private $conn;

    public function __construct($host, $username, $password, $Db) {
        $this->conn = new mysqli($host, $username, $password, $Db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function close() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
