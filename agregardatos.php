<?php

    include ("BaseDatos.php");
    if(isset($_POST["enviar"])){
           
        $nombre=$_POST["nombre"];
        $operacion=new BaseDatos();

        $consulta="INSERT INTO usuarios(nombre) VALUES ('$nombre')";
        $operacion->alterarBaseDatos($consulta);
        

         

    }














?>