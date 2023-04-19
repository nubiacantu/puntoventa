"use strict"

// Obtener una referencia al botón que muestra el modal
const btnMostrarModal = document.getElementById('myBtn');

// Obtener una referencia al modal
const myModal = new bootstrap.Modal(document.getElementById('myModal'));


// Obtener una referencia al contenido del modal
const contenidoModal = document.getElementById('modal-content');

// Obtener una los div de los input
const divDatos = document.getElementById('datos');
const formulario= document.getElementById('form1');

// Agregar un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
	
	var id=document.form1.id.value;
	var nombre=document.form1.nombre.value;

	//validaciones
	if (id=="" || nombre=="" ) {
		divDatos.classList.add('was-validated');
		return false;
	}
	

	//agregar los datos al modal
	contenidoModal.innerHTML = "ID: " + id+"<br>Nombre: "+nombre
	myModal.show();
	
	//reiniciar formulario
	divDatos.classList.remove('was-validated');

	formulario.id.value=formulario.nombre.value=''
});
