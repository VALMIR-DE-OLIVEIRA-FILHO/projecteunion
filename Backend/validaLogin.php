<?php
require_once 'DatabaseConnection.php';

$host = 'localhost';
$username = 'root';
$password = '';
$Db = 'ecomerce';

$objeto = new DatabaseConnection($host, $username, $password, $Db);

class validaLogin {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function processarFormulario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $this->cleanInput($_POST['user'] );
            $pass = $this->cleanInput($_POST['pass'] );
            
            $result = $this->read($user, $pass);

            if ($result->num_rows > 0) {
                session_start();
                $userData = $result->fetch_assoc();
                $_SESSION['user'] = $userData;

                header('Location: ../Frontend/home.php');
                exit;
            } else {
                header('Location: ../Frontend/index.php');
                exit;
            }
        }
    }
     private function cleanInput($input) {
          $input = stripcslashes($input);
          $input = htmlspecialchars($input);
   
           return $this->conn->real_escape_string($input);
       }

    public function read($user, $pass) {
        $sql = "SELECT user, pass FROM usuarios WHERE user='$user' AND pass='$pass'";
        $result = $this->conn->query($sql);
        return $result;
    }
}

$validador = new validaLogin($objeto->connect());

$validador->processarFormulario();
?>