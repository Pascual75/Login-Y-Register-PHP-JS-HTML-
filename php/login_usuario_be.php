<?php

    session_start();

    include 'conexion_be.php';
    
    $correo = $_POST['correo1'];
    $contrasena = $_POST['contrasena2'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
    and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("Datos Incorrecto, Por Favor verificar los datos colocado");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>