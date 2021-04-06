

<html lang ="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SumWeb| Estudiante</title>
        <link href="../css/FrmPrincipal.css" rel="stylesheet" type="text/css"/>
        <script src="../js/JS-CONTROLADORCHAT.js" type="text/javascript"></script>
    </head>
    <body  style='background-image: url("../img/fondo.png")'>
        
        <form name="form">
        <div id="menudesplazable" class="menu-collapsed">
            <div id="header">
                
                <div id="title"><span>SUM WEB </span></div>
                    
                <div id ="menu-btn">
                    <div class="btn-cerrar"></div>
                    <div class="btn-cerrar"></div>
                    <div class="btn-cerrar"></div>
                    
                </div>    
             </div>
            
            
            <div id="profile">
                <div id="foto"><img src="../img/usuariojorge.jpg" " alt =""></div><br>
                <div id="name"><span>EQUIPO 3</span></div>
            </div>
            <br>
            
            <div id ="menu-items">
                
                
                
                
                <div class="item">
                   <input type="hidden" name="op1">
                   
                        <div class="icon"><img src="../img/campa.png"  alt =""></div>
                        <input type="" value="CONSULTA"  style="background-color: transparent;border-style: none;font-weight: 600;color:white;width:80%" onclick="ingresochat()">
                       

                    </a>
                
                </div>
                
                
                 <div class="item separator">
                   
                 
                </div>
                
                <div class="item">
                    <a href ="" style="text-decoration:none">
                        <div class="icon"><img src="../img/apagar.png"  alt =""></div>
                        <div class="title"  ><span style="font-size: 16px ; color: white">Salir</span></div>
               
                    </a>
                 
                </div>
                
             
            </div>
            
        </div> 
        
        
        <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#menudesplazable');
        
        btn.addEventListener('click', e =>{
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        }
     );
        </script>
        </form>
        
    </body>
</html>
