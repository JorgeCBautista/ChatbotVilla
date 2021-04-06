
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumWeb | Estudiante</title>
    <meta name="title" content="SumWeb | Estudiante">
    <meta name="description" content="Bienvenido a SumWeb: Administra a tus alumnos, matriculas virtuales,Record Academicos, gestión de notas y Aulas Virtuales. Somos la Mejor Plataforma Digital de Aprendizaje para tu Universidad.">
    <meta name="author" content="SumWeb Solutions S.A.C">
 
    <script type="text/javascript">
    var siteRoot = "/";
    </script>
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    
    <script src="js/JS-CONTROLADOR.js" type="text/javascript"></script>
    
</head>

  
<body class="gray-bg bg-principal" style="background-image: url('img/fondo.png');">
    
 <form name="form">
  <div class="row no-margins" style=" right: 0;left: 0;position: absolute;z-index: 2;">
        <div class="col col-10 col-sm-3 col-md-3 text-center">
            <div class="row no-margins">
                <div class="col col-8 text-center">
                    <img src="img/logo-sum.png" alt=""  style="width: 190px;height: auto;max-width: 200px;margin-top: 10px;"/>
                </div>
                <div class=" ">
                    
                    <strong style="color: #413f3f;">Avalado Por:<img src="img/logo_sunedu.png" alt="" style="width: 100px;height: auto;max-width: 100px;margin-top: 10px;"></strong>
                </div>
            </div>
        </div>
        <div class=" "></div>
        <div class=" ">
            <img src=" " alt="" style="width: 170px;height: auto;max-width: 180px;margin-top: 10px;">
        </div>
    </div>
    <span>&nbsp;</span>
    <div class="text-center loginscreen">
        <div class="contenedorprincipal white-bg">
            <div>
                <h1 class="logo-name">E+</h1>
            </div>
            <h3>Bienvenido a SUM ESTUDIANTE+</h3>
         
                
             <input type="hidden" name="op"> 
             <input type="hidden" name="idusuario"> 
             <input type="hidden" name="contra">
                
                
                <div class="form-group">
                    <input type="text" class="form-control" id="Usuario" name="Usuario"
                    placeholder="Código de Estudiante" required="" style="border: 1px solid #1ab394;">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="Clave" name="Clave" 
                    placeholder="Contraseña" required="" style="border: 1px solid #1ab394;">
                </div>
               
                <input type="button" value="Iniciar Sesión" class="btnIngreso btn-primary block full-width m-b"  onclick="ingresoPrincipal()">
             
                <a href=""><small>¿Olvidaste tu contrase&ntilde;a?</small></a>
            
        </div>
    </div>
    </form>
</body>
</html>