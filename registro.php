<?php
//convoca al header
require_once('header.php');
?>
<main>
        <section class="signin container">
            <h3>Crea una cuenta</h3>
        <form class="signin-form" action="">
           
            <div class="signin-group-form">
                    <label for="firts-name">Nombre:</label>
                    <input class="form-input" type="text" name="firts-name" placeholder="" required>
            </div>
            <div class="signin-group-form">
                    <label for="last-name">Apellido:</label>
                    <input class="form-input" type="text" name="last-name" placeholder="" required>
            </div>
            <div class="signin-group-form">
                    <label for="email">Email:</label>
                    <input class="form-input" type="email" name="email" placeholder="" required>
            </div>
            <div class="signin-group-form">
                    <label for="password">Contraseña:</label>
                    <input class="form-input" type="password" name="password" placeholder="" required>
            </div>    
            <div class="politics">   
            <input type="checkbox" name="politics">
            <label for="politics">Al crear tu cuenta, estás aceptando los términos de servicio y la política de privacidad de ##.</label> 
            </div>        
            <button class="form-row" type="submit" name="send">Crear cuenta</button>
        </form>
    </section>
    </main>

<?php
//convoca al footer
require_once('footer.php');

?>