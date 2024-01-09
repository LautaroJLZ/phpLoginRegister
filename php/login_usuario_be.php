<?php


    session_start();
    include'conexion_be.php';


    $correo = $_POST ['correo'];
    $contrasenia = $_POST ['contrasenia'];
    $contrasenia = hash('sha512', $contrasenia);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasenia = '$contrasenia'");

    if(mysqli_num_rows($validar_login) > 0 ) {
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit;
    } else { 
        echo '
            <script>
                alert("Usuario no existe, verifique datos introducidos");
                window.location = "../index.php";
            </script>
        ';
        exit;
    }

?>