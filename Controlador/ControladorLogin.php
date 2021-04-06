<?php
$op=$_POST["op"];
$pagina=""; 


switch($op)
        {
            case 1:
            {   
                $pagina="../vista/FrmPrincipal.php";
                break;
            }
          

        }
           
   header("Location:".$pagina);

?>