<?php
//convoca al header
require_once('header.php');

?>
<main>
        <section class="login container">
            <h3>Ingresar</h3>
            <div class="login-extern">
              <img src="img/fb-icon.png" alt="Facebook">
              <img src="img/go-icon.png" alt="Google">
            </div>
            
            <form class="login-form" action="">
                <label for="account">Cuenta:</label>
                <input class="form-input form-row" type="text" name="account" placeholder="" required>
                <label for="password">Contraseña:</label>
                <a href="#">Olvidé mi Contraseña</a>
                <input class="form-input form-row" type="password" name="password" placeholder="" required>
                <input type="checkbox" name="connect">
                <label for="connect">Mantenerme conectado</label>
                <button class="form-row" type="submit" name="send">Enviar</button>
            </form>
        </section> 
        <!-- fin section class="login container"  -->
</main>

<?php
//convoca al footer
require_once('footer.php');

?>