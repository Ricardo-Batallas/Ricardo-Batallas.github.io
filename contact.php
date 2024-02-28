<!-- FORM -->
        <?php include('templates/head.php'); ?>

        <div class="contact_form">
            <form id="idform" action="" method="POST">
                <h2 class="contact__newsletter">Contáctenos</h2>
                <label for="nombreApellido">Nombre y Apellido</label>
                <input type="text" id="contact_name" name="name" required/>
    
                <label for="correo">Correo</label>
                <input type="email" id="contact_email" name="email" required />
    
                <label for="telefono">Teléfono</label>
                <input type="number" id="contact_phone" name="phone" required />
    
                <label for="comentario">Comentario</label>
                <textarea id="contact_area" name="comment" rows="4" required></textarea>
                <hr>
                <button id="contact_button" type="submit">Enviar</button>
            </form>
        </div>
        
<?php include('templates/footer.php'); ?>