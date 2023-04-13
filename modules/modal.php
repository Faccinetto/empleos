
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Advertencia.</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                       Este examen fue culminado. Las respuestas fueron enviadas
                    </a>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
           
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modTemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel">Instrucciones para realizar el examen.</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">
                        Lee con detalle y atención cada instruccion.
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">1) Lea las instrucciones de cada pregunta con cuidado y luego compruebe si las ha entendido correctamente. Cualquier error cometido al marcar su respuesta, hará que se le califique como incorrecta.</a>
                    <a href="#" class="list-group-item list-group-item-action">2) Regule su tiempo de manera adecuada; trate de seguir las sugerencias de tiempo dadas para cada sección y, recuerde que no es la velocidad sino el número de respuestas correctas y el de respuestas incorrectas lo que se tomará en cuenta para la calificación. No pase demasiado tiempo en la misma pregunta. Si no está seguro de la respuesta correcta, abandone y continúe con la siguiente. Al final tendrá tiempo de revisar las preguntas que no haya contestado y de detenerse más tiempo en ellas.</a>
                    <a href="#" class="list-group-item list-group-item-action">3) Puede recurrir a diagramas o esquemas que le ayuden a recordar las respuestas. Trabaje de manera limpia y sistemática, de modo que si tiene algún error pueda apreciar donde lo cometió y no sea necesario repetir todo el problema.</a>
                    <a href="#" class="list-group-item list-group-item-action">4) Asista al examen en las mejores condiciones físicas. Procure descansar lo suficiente la noche anterior y no trate de aprender en un repaso apresurado lo que requiere más de 4 años de estudio.</a>
                </div>

                <div class="form-check mt-5">
                   <button type="button" class="btn btn-primary btn-sm col-sm-3 checksa rounded-circle"><i class="fa fa-check" aria-hidden="true"></i></button>
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Acepto que leí correctamente las instrucciones.
                    </label>
                </div>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary inicios2" >Comenzar el examen</button>
            </div>
        </div>
    </div>
    <script src="../js/mostrarExamen.js"></script>
</div>

<style>
    .modal-content {
        width: 60vw;
        max-width: 70vw;
        min-width: 70vw;
        transform: translate(-30%);
    }

    h4 {
        margin-bottom: 5%;
        text-align: 4px;
    }
    .form-check-input{
        width: 17px;
        height: 17px;
    }
    .inicios2{
        pointer-events: none !important;
        background-color: red;
        opacity: .6;
    }
    .inicios_active{
        pointer-events: painted !important;
        background-color: lightskyblue;
        opacity: 1;
    }
    .checksa {
        width: 40px;
        height: 40px;
        border-radius: solid 2px black !important;
        background: none !important;
    }
    .checksa:hover{
        background-color: greenyellow;
    }
    .checksa:focus{
        background-color: greenyellow !important;
    }
    .fa-check:hover{
        color: white;
    }
    .fa-check:focus{
        color: white;
    }
</style>
<script>
   
    let chek= document.querySelector(".checksa")
    let bot= document.querySelector(".inicios2");
    let bandera=false

    chek.addEventListener("click",e=>{
        bandera=true
        if(bandera==true){
            bot.classList.toggle("inicios_active")
        }else{
            bot.classList.toggle("inicios2")
        }
    })

 /* 
    bot.addEventListener("click",e =>{
        window.location.href="/empleos/pages/formExamen.php"
    })
  */

</script>