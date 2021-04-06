<?php
include "Bot.php";
$bot = new Bot;



/*preguntas del chatbot*/
if(isset($_GET['msg'])) {  
$msg = strtolower($_GET['msg']);
$bot->hears($msg, function (Bot $botty) {
global $msg;
      
switch($msg) {   
    
case 'presencial':{
echo  $botty->reply('Escriba la modalidad de matrìcula que desee consultar:<br><br> '
                    . '-> Ingresante <br>'
                    . '-> Quinto Superior<br>'
                    . '-> Ultimo Año<br>'
                    . '-> Repitente por 3era vez<br>'
                    . '-> Traslado <br><br>'
                    . 'Si desea volver a las opciones anteriores escriba "volver" '); 

}break;

//INGRESANTE PRESENCIAL 
case 'ingresante':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso Ingresante <br>'
                     . '-> Documentos Ingresante<br>'
                     . '-> Funcion de la escuela y OSA<br><br>'
                     . 'Escriba la opcion que necesite ayuda(si desea volver a las opciones anteriores escriba "presencial"):');
}break;

 case 'proceso ingresante':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Entrega de carpeta al estudiante> <br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Presentar documentos a la escuela profesional <br><br>'
                     . '-> Entrega de la boleta de matricula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "ingresante" para volver a la opciones<br>'
                     . 'anteriores ');
 

}break;

 case 'documentos ingresante':{
    echo  $botty->reply(' -> Recibo del pago de matrícula<br>
         -> Constancia de estudios<br> 
         -> Copia del DNI<br><br> '
         . 'Escriba "ingresante" para volver a la opciones<br>'
                     . 'anteriores');
}break;

 case 'funcion de la escuela y osa':{
    echo  $botty->reply(' ->Publicación de fechas del proceso de matrícula (escuela)<br>
        -> Entrega de la boleta de matrícula (escuela)<br>
        -> Registro de matrícula del estudiante (OSA)<br><br> '
        . 'Escriba "ingresante" para volver a la opciones '
                     . 'anteriores');
}break;

//-------------------------------------------------------------------------------
case 'quinto superior':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso quinto sup <br>'
                     . '-> Documentos quinto sup<br>'
                     . '-> Funcion de la escuela y OCRACC<br><br>'
                     . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "presencial"):');
}break;

 case 'proceso quinto sup':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Presentar documentos a la escuela profesional <br><br>'
                     . '-> Entrega de la boleta de matricula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "quinto superior" para volver a la opciones anteriores');
 

}break;

 case 'documentos quinto sup':{
    echo  $botty->reply(' - Recibo del pago de matrícula<br>
        - Constancia de estudios<br> 
        - Copia del DNI <br><br>'
        . 'Escriba "quinto superior" para volver a la opciones<br>'
                     . 'anteriores');
}break;

 case 'funcion de la escuela y ocracc':{
    echo  $botty->reply(' - Verificación de cursos disponibles (escuela)<br>
        - Ratificación de documentos (escuela)<br>
        - Registro de la matrícula del estudiante (OCRACC)<br><br>'
        . 'Escriba "quinto superior" para volver a la opciones anteriores');
}break;


//-------------------------------------------------------------------------------
case 'ultimo año':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso Ultimo Año <br>'
                     . '-> Documentos ultimo año<br>'
                     . '-> Funcion de escuela y OCRACC<br><br>'
                     . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "presencial"):');
}break;

 case 'proceso ultimo año':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Presentar documentos a la escuela profesional <br><br>'
                     . '-> Entrega de la boleta de matricula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "ultimo año" para volver a la opciones '
                     . 'anteriores');
 

}break;

 case 'documentos ultimo año':{
    echo  $botty->reply(' - Recibo del pago de matrícula<br>
        - Constancia de estudios<br> 
        - Copia del DNI<br>
        - Solicitud de créditos en el FUT<br><br> '
        . 'Escriba "ultimo año" para volver a la opciones '
                     . 'anteriores');
}break;

 case 'funcion de escuela y ocracc':{
    echo  $botty->reply(' - Verificación de cursos disponibles (escuela)<br>
        - Ratificación de documentos (escuela)<br>
        - Registro de la matrícula del estudiante (OCRACC)<br><br>'
        . 'Escriba "ultimo año" para volver a la opciones '
                     . 'anteriores');
}break;

//-------------------------------------------------------------------------------

case 'repitente por 3era vez':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso repitente por 3era vez <br>'
                     . '-> Documentos repitente por 3era vez<br>'
                     . '-> Funcion de OCRACC y escuela<br><br>'
                      . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "presencial"):');
}break;

 case 'proceso repitente por 3era vez':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Espera a que se matriculen todos<br><br>'
                     . '-> Presentar documentos a la escuela profesional <br><br>'
                     . '-> Entrega de la boleta de matricula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "repitente por 3era vez" para volver a la opciones '
                     . 'anteriores');
 
}break;

 case 'documentos repitente por 3era vez':{
    echo  $botty->reply('- Recibo del pago de matrícula<br>
        - Constancia de estudios<br> 
        - Copia del DNI<br><br>'
        . 'Escriba "repitente por 3era vez" para volver a la opciones '
                     . 'anteriores');
}break;

 case 'funcion de ocracc y escuela':{
    echo  $botty->reply(' - Verificación de cursos disponibles (escuela)<br>
        - Ratificación de documentos (escuela)<br>
        - Registro de la matrícula del estudiante (OCRACC)<br><br>'
        . 'Escriba "repitente por 3era vez" para volver a la opciones '
                     . 'anteriores');
}break;

//-------------------------------------------------------------------------------

case 'traslado':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso traslado <br>'
                     . '-> Documentos para traslado nacional<br>'
                     . '-> Documentos para traslado extranjero<br>'
                     . '-> Funcion de la escuela y OSA para traslado<br><br>'
                     . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "presencial"):');
}break;

 case 'proceso traslado':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Entrega de carpeta al estudiante> <br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Presentar documentos a la escuela profesional <br><br>'
                     . '-> Entrega de la boleta de matricula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "traslado" para volver a la opciones '
                     . 'anteriores');
 

}break;

 case 'documentos para traslado nacional':{
    echo  $botty->reply(' - Constancia de universidad de procedencia<br>
        - Certificados originales de la universidad de procedencia <br> 
        - Silabus de asignaturas <br>
        - Constancia de no haber sido separado de la universidad de procedencia<br>
        - Certificado de estudios secundarios <br>
        - Copia del DNI<br><br>
        '. 'Escriba "traslado" para volver a la opciones '
                     . 'anteriores');
}break;


 case 'documentos para traslado extranjero':{
    echo  $botty->reply(' - Certificado de estudios legalizados <br>
        - Copia de carné de extranjería<br><br>
        '. 'Escriba "traslado" para volver a la opciones '
                     . 'anteriores');
}break;

 case 'funcion de la escuela y osa para traslado':{
    echo  $botty->reply(' - Verificar documentos (escuela)<br>
        - Entrega de boleta de matrícula (escuela)<br>
        - Registro de matrícula de estudiante (OSA)<br><br> 
        '. 'Escriba "traslado" para volver a la opciones '
                     . 'anteriores');
}break;

//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------
//-------------------------------------------------------------------------------

case 'virtual':{
echo  $botty->reply('Escriba la modalidad de matrìcula que desee consultar:<br><br> '
                    . '-> Ingresante Virtual <br>'
                    . '-> Quinto Superior Virtual<br>'
                    . '-> Ultimo Año Virtual<br>'
                    . '-> Repitente por 3era vez Virtual<br>'
                    . '-> Traslado Virtual<br><br>'
                    . 'Si desea volver a las opciones anteriores escriba "volver" ');

}break;

//INGRESANTE VIRTUAL
case 'ingresante virtual':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso Ingresante Virtual<br>'
                     . '-> Funcion de la SumWeb, OSA y OCRACC<br><br>'
                     . 'Escribe la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "virtual"):');
}break;

 case 'proceso ingresante virtual':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Dirigirse a la seccion de la SumWeb "Matrícula en línea"<br><br>'
                     . '-> Registro del váucher de pago<br><br>'
                     . '-> Pago registrado correctamente<br><br>'
                     . '-> Inicia el proceso de matrícula<br><br>'
                     . '-> Seleccionar los cursos<br><br>'
                     . '-> Registrar cursos<br><br>'
                     . '-> Esperar validación de matrícula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "ingresante virtual" para volver a la opciones '
                     . 'anteriores');
 

}break;


 case 'funcion de la sumweb, osa y ocracc':{
    echo  $botty->reply(' - Publicación de fechas del proceso de matrícula (SumWeb)<br>
        - Verificar el pago realizado por el alumno(SumWeb)<br> 
        - Verificar si tiene créditos insuficientes(SumWeb)<br> 
        - Solucion de error en proceso de matricula (OCRACC)<br> 
        - Registro de matrícula (SumWeb)<br> 
        - Validación de matrícula (OSA)<br> 
        - Nivelación de quinto superior (OCRACC)<br> 
        - Solucion cuando no aparecen sus cursos para matricularse(OCRACC)<br><br>  
        '. 'Escriba "ingresante virtual" para volver a la opciones '
                     . 'anteriores');
}break;


//-------------------------------------------------------------------------------
case 'quinto superior virtual':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso quinto sup virtual <br>'
                     . '-> Funcion de la SumWeb, OCRACC y OSA <br><br>'
                     . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "virtual"):');
}break;

 case 'proceso quinto sup virtual':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Dirigirse a la seccion de la SumWeb "Matrícula en línea"<br><br>'
                     . '-> Registro del váucher de pago<br><br>'
                     . '-> Pago registrado correctamente<br><br>'
                     . '-> Inicia el proceso de matrícula<br><br>'
                     . '-> Seleccionar los cursos<br><br>'
                     . '-> Registrar cursos<br><br>'
                     . '-> Esperar validación de matrícula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "quinto superior virtual" para volver a la opciones '
                     . 'anteriores');
 

}break;


case 'funcion de la sumweb, ocracc y osa':{
    echo  $botty->reply(' - Publicación de fechas del proceso de matrícula (SumWeb)<br>
        - Verificar el pago realizado por el alumno(SumWeb)<br> 
        - Verificar si tiene créditos insuficientes(SumWeb)<br> 
        - Solucion de error en proceso de matricula (OCRACC)<br> 
        - Registro de matrícula (SumWeb)<br> 
        - Validación de matrícula (OSA)<br> 
        - Nivelación de quinto superior (OCRACC)<br> 
        - Solucion cuando no aparecen sus cursos para matricularse(OCRACC)<br><br>  
        '. 'Escriba "quinto superior virtual" para volver a la opciones '
                     . 'anteriores');
}break;



//-------------------------------------------------------------------------------
case 'ultimo año virtual':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso ultimo año Virtual<br>'
                     . '-> Documentos ultimo año Virtual<br>'
                     . '-> Funcion de la OCRACC, Sumweb y OSA<br><br>'
                     . 'Escriba la opción que necesita ayuda(si desea volver a las opciones anteriores escriba "virtual"):');
}break;

 case 'proceso ultimo año virtual':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Dirigirse a la seccion de la SumWeb "Matrícula en línea"<br><br>'
                     . '-> Registro del váucher de pago<br><br>'
                     . '-> Pago registrado correctamente<br><br>'
                     . '-> Inicia el proceso de matrícula<br><br>'
                     . '-> Seleccionar los cursos<br><br>'
                     . '-> Registrar cursos<br><br>'
                     . '-> Esperar validación de matrícula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "ultimo año virtual" para volver a la opciones '
                     . 'anteriores');
 

}break;

 case 'documentos ultimo año virtual':{
    echo  $botty->reply(' - Ficha de solicitud de matrícula <br>
        - Récord académico <br><br>
        '. 'Escriba "ultimo año virtual" para volver a la opciones '
                     . 'anteriores');
}break;

case 'funcion de la ocracc, sumweb y osa':{
    echo  $botty->reply(' - Publicación de fechas del proceso de matrícula (SumWeb)<br>
        - Verificar el pago realizado por el alumno(SumWeb)<br> 
        - Verificar si tiene créditos insuficientes(SumWeb)<br> 
        - Solucion de error en proceso de matricula (OCRACC)<br> 
        - Registro de matrícula (SumWeb)<br> 
        - Validación de matrícula (OSA)<br> 
        - Nivelación de quinto superior (OCRACC)<br> 
        - Solucion cuando no aparecen sus cursos para matricularse(OCRACC)<br><br>  
        '. 'Escriba "ultimo año virtual" para volver a la opciones '
                     . 'anteriores');
}break;



//-------------------------------------------------------------------------------

case 'repitente por 3era vez virtual':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso repitente por 3era vez virtual<br>'
                     . '-> Documentos para repitente por 3era vez virtual<br>'
                     . '-> Funcion de la OSA,OCRACC Y SumWeb<br><br>'
                      . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "virtual"):');
}break;

 case 'proceso repitente por 3era vez virtual':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Dirigirse a la seccion de la SumWeb "Matrícula en línea"<br><br>'
                     . '-> Registro del váucher de pago<br><br>'
                     . '-> Pago registrado correctamente<br><br>'
                     . '-> Inicia el proceso de matrícula<br><br>'
                     . '-> Seleccionar los cursos<br><br>'
                     . '-> Registrar cursos<br><br>'
                     . '-> Esperar validación de matrícula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "repitente por 3era vez virtual" para volver a la opciones '
                     . 'anteriores');
 

}break;

 case 'documentos para repitente por 3era vez virtual':{
    echo  $botty->reply(' - Declaración jurada a la OCRACC, para que pueda validar sus documentos. <br><br>
        '. 'Escriba "repitente por 3era vez virtual" para volver a la opciones '
                     . 'anteriores');
}break;

case 'funcion de la osa,ocracc y sumweb':{
    echo  $botty->reply(' - Publicación de fechas del proceso de matrícula (SumWeb)<br>
        - Verificar el pago realizado por el alumno(SumWeb)<br> 
        - Verificar si tiene créditos insuficientes(SumWeb)<br> 
        - Solucion de error en proceso de matricula (OCRACC)<br> 
        - Registro de matrícula (SumWeb)<br> 
        - Validación de matrícula (OSA)<br> 
        - Nivelación de quinto superior (OCRACC)<br> 
        - Solucion cuando no aparecen sus cursos para matricularse(OCRACC)<br><br>  
        '. 'Escriba "repitente por 3era vez virtual" para volver a la opciones '
                     . 'anteriores');
}break;


//-------------------------------------------------------------------------------

case 'traslado virtual':{
     echo $botty->reply('Te puedo brindar informaciòn acerca de:<br><br>'
                     . '-> Proceso traslado Virtual<br>'
                     . '-> Documentos para traslado nacional Virtual<br>'
                     . '-> Documentos para traslado extranjero Virtual<br>'
                     . '-> Funcion de SumWeb, OSA y OCRACC<br><br>'
                     . 'Escriba la opcion en que necesite ayuda(si desea volver a las opciones anteriores escriba "virtual"):');
}break;

 case 'proceso traslado virtual':{
    echo  $botty->reply('El proceso de la matricula consta de lo siguiente :<br><br>'
                     . '-> Entrega de carpeta al estudiante> <br><br>'
                     . '-> Pago al banco <br><br>'
                     . '-> Presentar documentos a la escuela profesional <br><br>'
                     . '-> Entrega de la boleta de matricula<br><br>'
                     . '-> Matricula registrada correctamente<br><br>'
                     . 'Escriba "traslado virtual" para volver a la opciones '
                     . 'anteriores');
 

}break;

 case 'documentos para traslado nacional virtual':{
    echo  $botty->reply(' - Constancia de universidad de procedencia<br>
        - Certificados originales de la universidad de procedencia <br> 
        - Silabus de asignaturas <br>
        - Constancia de no haber sido separado de la universidad de procedencia<br>
        - Certificado de estudios secundarios <br>
        - Copia del DNI<br><br>
        '. 'Escriba "traslado virtual" para volver a la opciones '
                     . 'anteriores');
}break;


 case 'documentos para traslado extranjero virtual':{
    echo  $botty->reply(' - Certificado de estudios legalizados <br>
        - Copia de carné de extranjería<br><br>
        '. 'Escriba "traslado virtual" para volver a la opciones '
                     . 'anteriores');
}break;

case 'funcion de sumweb, osa y ocracc':{
    echo  $botty->reply(' - Publicación de fechas del proceso de matrícula (SumWeb)<br>
        - Verificar el pago realizado por el alumno(SumWeb)<br> 
        - Verificar si tiene créditos insuficientes(SumWeb)<br> 
        - Solucion de error en proceso de matricula (OCRACC)<br> 
        - Registro de matrícula (SumWeb)<br> 
        - Validación de matrícula (OSA)<br> 
        - Nivelación de quinto superior (OCRACC)<br> 
        - Solucion cuando no aparecen sus cursos para matricularse(OCRACC)<br><br>  
        '. 'Escriba "traslado virtual" para volver a la opciones '
                     . 'anteriores');
}break;


case 'volver':{
    echo  $botty->reply(' Hola soy CHATBOTVILLA encargado de solucionar tus dudas<br><br>');
    echo  $botty->reply(' Digite la alternativa que quiera consultar:<br> '
            . '* presencial<br>'
            . '* virtual');
}break;
 
default : {
     echo $botty->reply('Esta consulta no se encuentra en las opciones recomendadas <br><br>'
                      . 'Porfavor escribe algunas de las opciones recomendadas anteriormente.<br><br>'
                      . 'Si desea volver a consultar sobre la matricula presencial o virtual<br>'
                      . 'Digite "volver"');

}break;

    }
    
});
}

   