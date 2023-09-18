<?php


require_once 'DatabaseConnection.php';

class Usuario extends DatabaseConnection {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }
    private function cleanInput($input) {
        $input = stripcslashes($input);
        $input = htmlspecialchars($input);
        return $this->dbConnection->real_escape_string($input);
    }
    public function processarFormulario() {
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $this->cleanInput($_POST['nomecompleto']);
            $cpf = $this->cleanInput($_POST['cpf']);
            $senha = $this->cleanInput($_POST['senha']);
            $telefone = $this->cleanInput($_POST['telefone']);
            $endereco = $this->cleanInput($_POST['endereco']);
            $email = $this->cleanInput($_POST['email']);

            return $this->create($nome, $cpf, $senha, $telefone, $endereco, $email);
        }
    }

    public function create($nome, $cpf, $senha, $telefone, $endereco, $email) {
        // Certifique-se de substituir 'usuarios' pelo nome da sua tabela de usuários
        $sql = "INSERT INTO usuarios (Nome, CPF, Senha, Telefone, Endereço, Email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->dbConnection->prepare($sql);

        // Vincule os parâmetros à declaração preparada
        $stmt->bind_param("ssssss", $nome, $cpf, $senha, $telefone, $endereco, $email);

        // Execute a declaração preparada
        if ($stmt->execute()) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o usuário.";
        }

        // Feche a declaração preparada
        $stmt->close();
    }
}
