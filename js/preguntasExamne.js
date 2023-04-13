



$(document).ready(function () {
    
    
    mostrarPregutnas();
    mostrarPregutnas2();
    mostrarPregutnas3();
    mostrarPregutnas4();
    mostrarPregutnas5();
    mostrarTipoExamen();
    tiempo();
    $('.parte2').hide()
    $('.parte3').hide()
    $('.parte4').hide()
    $('.parte5').hide()
   
});

    let temporisador = false;
    let timer = 59;
    let segundos=60;
    let mostrarTiempo = document.getElementById('Horas')
    let mostrarSeguns= document.getElementById('Segundos')
function init() {

}
let APreguntar = true;
function cerrar(){
    let respuesta;
    
    if ( APreguntar ) {
        respuesta = confirm ( "¿Seguro que quieres termianar? \n Si sales el examen se enviara con el resuldo obtenido \n Ya no podras realizar el examen"  );
        if ( respuesta ) {
            window.onunload = function () {
               
                return true; 
            }
            if(respuesta == true){
                $.post("../controller/controllerExamen.php?op=examenAcalificar", function (data) {

                });
                $.post("../controller/controllerExamen.php?op=EliminaUsuario", function (data) {

                });
                $.post("../controller/controllerExamen.php?op=reactiva", function (data) {
        
                });
                window.location.href="../pages/exaTerminado.php"
                
            }
        } else {
            return false;
            
        }
		
	}
}
 
//Enviar respuestas



//TEMPORISADOR

function tiempo() {

    if (temporisador == false) {
        contarTiempo()
        temporisador = true;
    }
}

function contarTiempo() {

    setInterval(() => {

        if(timer >=0 && segundos>=0){
            if(segundos == 0){
                segundos=60;
                timer--;
            }else{
                if(timer==2 && segundos==58){
                 window.alert("Quedan 2 minutos \n al terminar el tiempo el examen se cerrara y se enviaran las respuestas")

            }
           
            }
            
            segundos--;

        }else  {
            na(); 
        }

    
        if(segundos>=0 && segundos<=9){
            mostrarSeguns.innerHTML=`${'0'+segundos} mn`;    
        }else{
            mostrarSeguns.innerHTML=`${segundos} mn`; 
             
        }
        mostrarTiempo.innerHTML = `${timer} :`;
         
        
    }, 1000);

}

function convertir(timer) {

    let horas = Math.floor(timer / 60)
    timer = timer / 60 % 60;
    return { horas, minutos };

}

//TEMPORISADOR


//pregutas
function mostrarPregutnas() {
    $.post("../controller/controllerExamen.php?op=mostarPreguntas", function (data) {
        
        $('#laPregunta').html(data);

    });
}
function mostrarPregutnas2() {
    $.post("../controller/controllerExamen.php?op=mostarPreguntas2", function (data) {
        
        $('#laPregunta1').html(data);

    });
}
function mostrarPregutnas3() {
    $.post("../controller/controllerExamen.php?op=mostarPreguntas3", function (data) {
        
        $('#laPregunta2').html(data);

    });
}
function mostrarPregutnas4() {
    $.post("../controller/controllerExamen.php?op=mostarPreguntas4", function (data) {
        
        $('#laPregunta3').html(data);

    });
}

function mostrarPregutnas5() {
    $.post("../controller/controllerExamen.php?op=mostarPreguntas5", function (data) {
        
        $('#laPregunta4').html(data);

    });
}

//preguntas
function mostrarTipoExamen() {
    $.post("../controller/controllerExamen.php?op=redireccionExamen", function (data) {
        
        $('#datoExamen').html(data);

    });
}
let bPreguntar = true;
function calificaExamne() {
    let respuesta;
    if ( bPreguntar ) {
        respuesta = confirm ( "¿Seguro que quieres termianar? \n Si sales el examen se enviara con el resuldo obtenido \n Ya no podras realizar el examen"  );
        if ( respuesta ) {
            window.onunload = function () {
               
                return true; 
            }
            if(respuesta == true){
                $.post("../controller/controllerExamen.php?op=examenAcalificar", function (data) {

                });
                window.location.href="../pages/exaTerminado.php"
                
            }
        } else {
            return false;
            
        }
    }

}
function na(){
    $.post("../controller/controllerExamen.php?op=examenAcalificar", function (data) {

    });
    window.location.href="../pages/exaTerminado.php"
}

function decoracion(){
    divs=document.getElementById(id).childNodes;
    divs[1].style.backgroundColor="black"
}


/* BT SIGUIENTE EXAM */

function aSegundoExamen(){
            $('.asa').hide() 
            $('.parte2').show()
           
}
  function aTercer(){
    
    $('.asa').hide() 
    $('.parte2').hide()
    $('.parte3').show()
        
  }
    
function aCuatro(){
    $('.asa').hide() 
    $('.parte2').hide()
    $('.parte3').hide()
    $('.parte4').show()
    
}
   
function aCinco(){
    $('.asa').hide() 
    $('.parte2').hide()
    $('.parte3').hide()
    $('.parte4').hide()
    $('.parte5').show()
}
/* BT SIGUIENTE EXAM */


