<div id="fondo">
    <div class="izquierda"><img src="http://smdigital.com.co/clientes/sistema_madre/images/fdogeneralizq.png" width="150" height="229" /></div>
    <div class="derecha"><img src="http://smdigital.com.co/clientes/sistema_madre/images/fdogeneralder.png" width="510" height="480" /></div>
</div>
<div id="wraper">
    <div id="header" class="nologin">
        <div class="logoMarca"><img src="http://smdigital.com.co/clientes/sistema_madre/images/logo.png" width="227" height="40" /></div>

        <div class="tituloAdmin">SMAcademy CodeIgniter &REG;</div>
    </div>
    <div id="contenido" style="height: 400px;">
        <div>
            Bienvenid@ <?php echo $this->session->userdata('name'); ?>
        </div>
        <div>
            <?php echo anchor('usuarios/logout', 'Salir'); ?>
        </div>
    </div>
</div>