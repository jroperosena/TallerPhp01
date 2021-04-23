<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">            
    <link rel="stylesheet" href="../assets/css/misEstilos.css">
    <title>Document</title>
</head>

<body class="estiloBody">

    <header class="estiloHeader">
        <!-- header o encabezado-->
        <nav class="estiloNav">
            <ul class="estiloUl">
                <li class="estiloLi"><a  class="estiloLink"  href="layout.php"> Home </a></li>
                <li class="estiloLi"><a  class="estiloLink"  href="layout.php?opc=1"> Link1 </a></li>
                <li class="estiloLi"><a  class="estiloLink"  href="layout.php?opc=2"> Link2 </a></li>
            </ul>
        </nav>

        <img class="imgIco" src="../assets/images/logoSena.png" alt="">
        <!-- header o encabezado-->
    </header>

    <main class="estiloMain">
         <!-- esto es el contenido que cambia -->
        <?php 
        // defino varible opcion con el valor que viede por la URL  por el metodo GET 
       
       if (isset($_GET["opc"])) {

        $opcion =$_GET["opc"];
        switch ($opcion) {
                case 1:
                    include "link1.php";
                    break;
                case 2:
                    include "link2.php";
                    break;
                default:
                    echo ("Pngase serio !!!!!!!!!! ERROR ");
                    break;
            }

            /* if($opcion==1)
              include "link1.php";
              elseif ($opcion==2)
               include "link2.php";
                else
                 echo ("Pngase serio !!!!!!!!!! ERROR ");
                 */

           }

          else
          include "home.php";
        
        ?>
        <!-- esto es el contenido que cambia -->
    </main>
    <footer class="estiloFooter">
         <!--footer o pie de la pagina -->
         <h3 class="estiloH3"> by: Mi nommbre completo</h3>

         <div class="estiloGitHub">
             <img class="imgIco" src="../assets/images/github.png" alt="">
             <small class="estiloTxtSmall"> miUsuarioGitHub</small>

         </div>

          <!--footer o pie de la pagina -->
    </footer>
</body>

</html>