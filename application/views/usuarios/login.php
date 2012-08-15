<div id="fondo">
    <div class="izquierda"><img src="http://smdigital.com.co/clientes/sistema_madre/images/fdogeneralizq.png" width="150" height="229" /></div>
    <div class="derecha"><img src="http://smdigital.com.co/clientes/sistema_madre/images/fdogeneralder.png" width="510" height="480" /></div>
</div>
<div id="wraper">
    <div id="header" class="nologin">
        <div class="logoMarca"><img src="http://smdigital.com.co/clientes/sistema_madre/images/logo.png" width="227" height="40" /></div>

        <div class="tituloAdmin">SMAcademy CodeIgniter &REG;</div>
    </div>
    <div id="contenido">
        <div id="login">
            <?php echo form_open('usuarios/login'); ?>
                <div id="tituloLogin">Iniciar Sesión</div>
                <div id="divLogin">
                    <div class="labelLogin">Usuario</div><div class="inputLogin">
                        <?php echo form_input($username); ?>
                    </div>
                    <div class="labelLogin">Contraseña</div><div class="inputLogin">
                        <?php echo form_password($password); ?>
                    </div>
                </div>
                <div id="botonLogin">
                    <?php echo form_submit('submit', 'Login'); ?>
                </div>
                 <?php echo anchor('usuarios/registar', 'Crear nueva cuenta', 'class="link"'); ?>
                <div id="mensajeLogin">
                    <?php echo validation_errors(); echo $message; ?>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
