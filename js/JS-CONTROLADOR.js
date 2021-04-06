function ingresoPrincipal()
{
    var usuario=window.document.form.Usuario.value;
    var clave=window.document.form.Clave.value;
    
       if(usuario.length==0)
    {
        alert("Ingrese su usuario porfavor");
        window.document.form.txtusuario.focus();
        return;
    }else{
            
        if(clave.length==0){
        alert("Ingrese clave porfavor");
        window.document.form.txtclave.focus();
        return;
    }
    else{
       if(usuario=="jorge" && clave=="123"){
       window.document.form.action="Controlador/ControladorLogin.php";  
       window.document.form.method="post";
       window.document.form.op.value="1";
       window.document.form.submit();
        }
        else{
  
    }  
       
        
    }
    } 
     
 } 
 
