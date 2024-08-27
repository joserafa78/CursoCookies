<?php
namespace App\vistas;
require_once '../../config.php';
require_once '../../vendor/autoload.php';
use App\vistas\includes\Header;
new Header;

?>
<h1>¿Que son Las Sesiones?</h1>
<br>
<p>Las sesiones es muy Similar a las Cookies, nos permite personalizar la interfaz del usuairo</p>
<br>
<p>Las seciones de usuario de crean y se destruyen deacuredo a lo necesitado.La funcion <strong> sesion_star()</strong> </p>
<h3>Nos permite Personalizar sistemas de autenticacion dentro de la web </h3>
<h3>Ejempo de Sesion</h3>
<p>Comensamo con $_sesion("id")</p>
<p>Crendo una Arreglo asociativo que emula una Base de datos</p>
//Formulario
<form action='<?php htmlspecialchars( $_SERVER['PHP_SELF']) ?>' method='post' name='formulario'class="">
<!-- Contenido -->
 <div >
<input type='text' id='' name='id' placeholder='Id Usuario' class="form__input">
<label for=''class="form__label">Id Usuario</label>
</div>
<br>
<br>
<br>
<!-- Botones -->
<input type='reset' id='' value='Resetear' onclick='' class="btn secondary">
<input type='submit' id='' value='Enviar' onclick='' name='envia' class="btn primary">
</form>


$_user = $_GET["user"] ?? "";

<?php if(isset($_SESSION["id"])): ?>
    <h3>Hooola el es Nombre: <?= $_SESSION["username"] ?> </h3>
    <h3>Hooola el es Email: <?= $_SESSION["email"] ?> </h3>
    <?php else:?>    
    <h3>No has iniciado Sesion.chao. </h3>
        <?php endif;?>
        
<?php
use App\vistas\includes\Footer;
new Footer;
?>