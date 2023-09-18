<?php
include './includes/_head.php';
include '../Backend/DatabaseConnection.php';
?>




<div class="cadastrocont">
<form action="../backend/router.php" method="POST" class="cadastroForm">
    <input type="hidden" name="route" value="cadastro">
    <div class="row row1">
    <div class="col divcadastro1">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nomecompleto" placeholder="insira o seu nome completo" >
    <label for="cpf">Cpf:</label>
    <input type="text" class="form-control" name ="cpf" placeholder="insira o seu cpf">
    <label for="senha">Senha:</label>
    <input type="text" class="form-control" name="senha" placeholder="insira a sua senha">
    
    </div>
    <div class="col divcadastro2">
    <label for="nome">Telefone:</label>
    <input type="text" class="form-control" name ="telefone" placeholder="insira o seu telefone" >
    <label for="cpf">Endereço:</label>
    <input type="text" class="form-control" name="endereco" placeholder="insira o seu endereço">
    <label for="cpf">Email:</label>
    <input type="text" class="form-control" name ="email" placeholder="insira o seu email">
    
    </div>
    </div>
    <div class="container btncadastrodiv">
    <button type="submit" class="btn btncadastro">Enviar</button>
    </div>
</form>
</div>
    


<?php
include './includes/_footer.php'

?>