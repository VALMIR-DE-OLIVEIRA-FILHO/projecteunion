<?php

require_once 'DatabaseConnection.php'; // Importa a classe DatabaseConnection
require_once 'Usuario.php';

class Router {
    private $dbConnection;

    public function __construct(DatabaseConnection $dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function route() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['route'])) {
                $route = $_POST['route'];

                switch ($route) {
                    case 'cadastro':
                        $db = $this->dbConnection->getConnection();
                        $usuario = new Usuario($db);
                        $usuario->processarFormulario();
                        break;

                    default:
                        // Lógica para outras rotas, se necessário
                        break;
                }
            }
        }
    }
}

// Parâmetros de conexão
$host = 'localhost';
$username = 'root';
$password = '';
$Db = 'ecomerce';

$databaseConnection = new DatabaseConnection($host, $username, $password, $Db);
$router = new Router($databaseConnection);
$router->route();
