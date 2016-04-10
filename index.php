<!DOCTYPE html>
<?php 
//Incluimos todas las clases y funciones del proyecto
require_once 'includes/functions.php';

?>
<html>
    <?php include 'includes/head.php'; ?>
    <body>
        <p>Hola</p>
        <?php
        //Mostramos todos los datos de la tabla1
        $table1 = new Table1();
        print_r($table1->getAllInfo());
        $connect = new Tools();
        //print_r($connect->mostrarArray($table1));
        ?>
    </body>
    <footer><?php include 'includes/footer.php';?></footer>
    <?php    include 'includes/script.php'; ?>
</html>
