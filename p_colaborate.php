<!-- FORM -->
        <?php include('templates/head.php'); ?>

        <div class="contact_form">
            <form id="idform" action="" method="POST">
                <h2 class="contact__newsletter">Ingresar al Portal de Colaboradores </h2>
                <label for="nombreApellido">Identificacion</label>
                <input type="text" id="contact_name" name="name" required/>
    
                <label for="pass">Contraseña</label>
                <input type="password" id="contact_email" name="email" required />

                <label for="pass">Confirmar Contraseña</label>
                <input type="password" id="contact_email" name="email" required />

                <hr>
                <button id="contact_button" type="submit">Enviar</button>
                <div class="contact_link>
                    <a href="">¿ Olvidate tu contraseña ? </a></div>
                </div>
            </form>
        
<?php include('templates/footer.php'); ?>