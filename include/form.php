<?php
/**
 * Created by PhpStorm.
 * User: Guillermo
 * Date: 26/02/2017
 * Time: 14:45
 */
?>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="user" placeholder="Usuario">
    <a href="#"><p>Comprobar disponibilidad</p></a>
    <input type="password" name="password" placeholder="Contraseña">
    <input type="password" name="password2" placeholder="Repite contraseña">
    <input type="email" name="email" placeholder="Correo electrónico">
    <input type="submit" name="enviar" value="Enviar">
</form>
