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
            <?php echo form_open('usuarios/registrar_usuario'); ?>
                <div id="tituloLogin">Nueva cuenta</div>
                <div id="divLogin">
                    <div class="labelLogin">Usuario</div><div class="inputLogin">
                        <?php echo form_input($username); ?>
                    </div>
                    <div class="labelLogin">Nombres</div><div class="inputLogin">
                        <?php echo form_input($name); ?>
                    </div>
                    <div class="labelLogin">eMail</div><div class="inputLogin">
                        <?php echo form_input($email); ?>
                    </div>
                    <div class="labelLogin">Password</div><div class="inputLogin">
                       <?php echo form_password($password); ?>
                    </div>
                    <div class="labelLogin">Re password</div><div class="inputLogin">
                        <?php echo form_password($re_password); ?>
                    </div>
                </div>
                <div id="botonLogin">
                    <?php echo form_submit('submit', 'Registrar'); ?>
                </div>
                 <?php echo anchor('usuarios/iniciar_sesion', 'Regresar a login', 'class="link"'); ?>
                <div id="mensajeLogin">
                    <?php echo validation_errors(); ?>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?php //echo anchor('users/retry_password', 'Recuperar Contraseña'); ?>