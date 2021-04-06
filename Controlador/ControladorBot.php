<?php

$op=$_POST["op1"];
$pagina=""; 


switch($op)
        {
            case 1:
            {   
                $pagina="../chat.php";
                break;
            }
          

        }
           
   header("Location:".$pagina);

?>