<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesion");
                window.location="index.php"
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bienvenida.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Bienvenida</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <p>Zalazar</p>
                <a href="php/cerrar_sesion.php" class="btn">Cerrar Sesion</a>
            </div>
        </nav>        
    </header>
    <main>
        <div class="container">
            <h1 class="titulo">Bienvenido/a a mi primer pagina con PHP</h1>
            <p class="parrafo">
            ¡Bienvenido a nuestro rincón virtual! Explora, descubre y forma parte de una comunidad donde las ideas se entrelazan. Sumérgete en experiencias únicas, comparte tu pasión y crea conexiones significativas. Este espacio es tuyo para explorar, contribuir y hacer crecer juntos este tejido digital. ¡Haz de esta página web tu hogar en la red, donde cada clic te acerca a nuevas posibilidades!
            </p>
        </div>
    </main>
</body>
</html>