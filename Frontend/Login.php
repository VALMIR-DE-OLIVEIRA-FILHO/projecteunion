<?php
include 'includes/_head.php';

require_once '../Backend/DatabaseConnection.php';


?>
<script>// Obtém a referência para o elemento <nav>
        const navElement = document.querySelector(".navigation");
        const body = document.body;
        const rowElement = document.querySelector(".row");

        
        
        body.style.background = "#c9c9c966";
       
        // Define a propriedade "display" para "none"
        navElement.style.display = "none";</script>
        


</div>

 
 
    <main>
    <div class=" imgastro">
    <img id="astroLogin" src="../Imgs/Logo.png" alt="">
    </div>
  </main>
  <aside>
  <div id="frase">
    <h4 id="ola">Hello!</h4>
     <h4 id="mudanca">Quem faz a mudança é você!</h3>

     </div>
    <div class="container formularioOne">
    
    <form action="../backend/router.php" method= "POST" class="formLogin">
        <input type="hidden" name="route" value="login">
        <h1 id="titleformulario">Login</h1>
        <label class="labelin" for="userInput">Username:</label>
        <input type="text" class="form-control inputsL" id="user" name="user">
        <label class="labelin" for="passwordInput">password:</label>
        <input type="password" class="form-control inputsL" id="pass" name="pass">
        <button type="submit" class="btn btnForm">Enviar</button>

    </form>
    </div>
  </aside>











<?php
include './includes/_footer.php'

?>