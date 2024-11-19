<?php
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/vista/inc/session_star.php";


    if (isset($_GET['views'])) {
        $url=explode("/",$_GET['views']);
    } else {
        $url=["login"]; 
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <?php require_once "./app/vista/inc/head.php"; ?>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <?php 

        use app\controlador\viewsController;
        use app\controlador\loginController;

        $insLogin = new loginController();
        

        $viewsController= new viewsController();
        $vista=$viewsController->obtenerVistasControlador($url[0]);

        if($vista=="login" || $vista=="404"){
            require_once "./app/vista/content/".$vista."-view.php";
        }else{

            #Esto de aqui es un problema

            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                $insLogin->cerrarSesionControlador();
                exit();
            }

            #

            require_once "./app/vista/inc/navbar.php";
            require_once $vista;
        }

        
        require_once "./app/vista/inc/script.php"; 
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
