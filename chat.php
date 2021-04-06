<html lang ="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SumWeb| Estudiante</title>
        <script scr="../jquery/jquery-3.6.0.js"></script> 
        <script src="../js/JS-CONTROLADORCHAT.js" type="text/javascript"></script>
        <link href="css/FrmPrincipal.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
<script>
    $(document).on("keypress", "input", function(e){
        if(e.which == 13){
            var inputVal = $(this).val();
            
        }
    });
</script>
    </head>
    <body>
        
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
                <div id="foto"><img src="img/usuariojorge.jpg" " alt =""></div><br>
                <div id="name"><span>EQUIPO 3</span></div>
            </div>
            <br>
            
            <div id ="menu-items">
            
                <div class="item">
                   <input type="hidden" name="op1">
                   
                        <div class="icon"><img src="img/campa.png"  alt =""></div>
                        <input type="" value="CONSULTAS"  style="background-color: transparent;border-style: none;font-weight: 600;color:white; width:40%" onclick="ingresochat()">
                       

                    </a>
                
                </div>
                
                
                 <div class="item separator">
                   
                 
                </div>
                
                <div class="item">
                    <a href ="" style="text-decoration:none">
                        <div class="icon"><img src="img/apagar.png"  alt =""></div>
                      
                         <div class="title"  ><span style="font-size: 16px ; color: white">Salir</span></div>
                
                    </a>
                 
                </div>
                
             
            </div>
            
        </div>
            
             </form>
           
            <div class= "containera">
                <button id ="esconder" style ="border-radius: 25px;" onclick="ShowHideElement()">Hablar</button> 
            </div>
        
      
           <div class="container">

            <div class="chatbox">
                    <div class="header">
                        <h4> <img src='img/icono_unfv_chat.jpg' class='imgRedonda'/> CHATBOTVILLA </h4>
                                    
                    </div>
                    
                        <div class="body" id="chatbody">
                            <transition name="fade">
                            <p class="alicia">Hola soy CHATBOTVILLA encargado de solucionar tus dudas</p>
                            <p class="alicia2">Por el momento tengo
                            información acerca de la matricula presencia y virtual</p>
                            <p class="alicia3">
                             Digite la alternativa que quiera consultar:<br>
                            * presencial<br>
                            * virtual</p>  
                            </transition>
                            
                            
                       
                            <div class="scroller"></div>
                        </div>

                    <form class="chat" method="post" autocomplete="off">
                    
                                <div>
                                    <input type="text" name="chat" id="chat" placeholder="Consulte su duda" style=" font-family: cursive;border-radius: 25px;width:83%; font-size: 20px;">
                                </div>
                                <div>
                                    <input type="submit" value="Enviar" style=" border-radius: 25px;width:20%;height:10%" id="btn" onkeypress="">
                                </div><br>
           
           
        </div>
               
    </div>
    </form>
    <script src="app.js"></script>      
            
            
        
        
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
        
        
        <script type="text/javascript">
        
        $(".container").hide();
        
        function ShowHideElement(){
           let text ="";
           
           if($("#esconder").text() === "Hablar"){
               $(".container").show();
               text = "Ocultar";
               
           }else{
            $(".container").hide();
            text ="Hablar";       
           }
           
           $("#esconder").html(text);
         
        
        }
        </script>
     
        
        
     
    </body>
</html>
