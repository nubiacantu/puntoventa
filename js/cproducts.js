"use strict"
// Obtener una referencia al botón que muestra el modal
const btnMostrarModal = document.getElementById('myBtn');

// Obtener una referencia al modal
const myModal = new bootstrap.Modal(document.getElementById('myModal'));


// Obtener una referencia al contenido del modal
const contenidoCodigo = document.getElementById('modal-codigo');
const contenidoNombre = document.getElementById('modal-nombre');
const formulario= document.getElementById('form1');

// Obtener una los div de los input
const divDatos = document.getElementById('datos');

// Agregar un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
	
	var codigo=document.form1.codigo.value;
	var nombre=document.form1.nombre.value;

	
	//validaciones
	if (codigo=="" || nombre=="" ) {
		divDatos.classList.add('was-validated');
		return false;
	}
	//agregar los datos al modal
	contenidoCodigo.innerHTML = "Clave: #" + codigo;
    contenidoNombre.innerHTML = "Nombre: " + nombre;
	// Mostrar el modal
	myModal.show();

	//reiniciar formulario¿
	divDatos.classList.remove('was-validated');

	formulario.codigo.value=formulario.nombre.value='';

});
