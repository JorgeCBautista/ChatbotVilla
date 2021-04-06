
 function ingresochat()
 {
       window.document.form.action="../Controlador/ControladorBot.php";  
       window.document.form.method="post";
       window.document.form.op1.value="1";
       window.document.form.submit();
   
 }