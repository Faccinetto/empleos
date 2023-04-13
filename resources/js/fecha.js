let mostrarFecha = document.getElementById('fecha');
let mostrarReloj = document.getElementById('reloj');

let fecha = new Date();
let diaSemana = [ 'Domingo','Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
let mesAyo = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
    'Agosto', 'Septiembre', 'Octubre', 'Nobiembre','Diciembre'];

mostrarFecha.innerHTML = `${diaSemana[fecha.getDay()]},${fecha.getDate()} de ${mesAyo[fecha.getMonth()]} de ${fecha.getFullYear()}`