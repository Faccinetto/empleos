

let botonBandera=document.querySelector(".inicios2")
function mostarrExamen() {

    $.post("../controller/controllerExamen.php?op=verExamenes", function(data) {
        $('#verExamss').html(data);
        console.log(data);
       

    });
}

function n(){
   
    let psicometrico= $('#idExamen').val();
    let estatu=$('#estatus').val();
    let bandera=false;
    if(psicometrico==1 && estatu==1){
        $('#modTemp').modal('show');
        botonBandera.addEventListener("click",e=>{
            bandera=true;
            if(bandera==true){
                window.location.href="../pages/formExamen.php"
            }
        });
        //
    }else{
        window.location.href="../pages/verExamen.php"
    }
  
}




