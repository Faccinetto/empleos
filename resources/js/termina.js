
function termi(){
    setInterval(() => {
        window.location.href="../pages/index.php"
        $.post("../controller/controllerExamen.php?op=EliminaUsuario", function (data) {

        });
        $.post("../controller/controllerExamen.php?op=reactiva", function (data) {

        });
       
    }, 2000);
}
