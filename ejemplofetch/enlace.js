console.log('ingreso al archivo: enlace.js');
console.log('hola estoy en el archivo');


//Enlazar con formulario 
var formulario = document.getElementById('formulario');
//Enlazar con div donde se ve la respuesta
var divRespuesta = document.getElementById('divRespuesta');

//Enlazar los botones suma y resta (se puede utilizar el metodo getElementById)
const btnSuma = document.querySelector("#btnSuma");
const btnResta = document.querySelector("#btnResta");

//Variable utilizada para saber que boton se esta presionando
var botonPresionado = '';

btnSuma.addEventListener("click", function(e) {
    e.preventDefault();
    console.log('Click en el boton suma');
    botonPresionado = 'suma';
    obtenerDatos();
});

btnResta.addEventListener("click", function(e) {
    e.preventDefault();
    console.log('Click en el boton resta');
    botonPresionado = 'resta';
    obtenerDatos();
});

function obtenerDatos() {
    //Para obtener los datos de los objetos del formulario
    var datos = new FormData(formulario);
    console.log(datos);
    //mostrar los datos de cada elemento del formularo
    console.log('txtValor1: ', datos.get('txtValor1'));
    console.log('txtValor2: ', datos.get('txtValor2'));

    console.log('btnSuma: ', datos.get('btnSuma'))
    console.log('btnResta: ', datos.get('btnResta'))

    //agregar a los datos el tipo de operacion
    if (botonPresionado === 'suma') {
        datos.append("operacion", "suma");
    } else if (botonPresionado === 'resta') {
        datos.append("operacion", "resta");
    } else if (botonPresionado === 'resta') {
        datos.append("operacion", "multi");
    } else {
        datos.append("operacion", "divi");
    }
    //ver la operacion seleccionada
    console.log('Operación agregada para enviar a PHP: ', datos.get('operacion'));

    //enviar datos al archivo PHP
    fetch('operaciones.php', {
            method: 'POST',
            body: datos
        })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            if (data === 'vacio') {
                divRespuesta.innerHTML = 'favor agregar valores 1 y 2'
            } else {
                divRespuesta.innerHTML = data
            }

        });
};