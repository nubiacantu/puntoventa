"use strict"
// Obtener una referencia al botón que muestra el modal
const btnMostrarModal = document.getElementById('myBtn');

// Obtener una referencia al modal
const myModal = new bootstrap.Modal(document.getElementById('myModal'));


// Obtener una referencia al contenido del modal
const contenidoModal = document.getElementById('modal-content');

// Obtener una los div de los input
const divUser = document.getElementById('user');
const divContra = document.getElementById('contrad');
const formulario= document.getElementById('form1');

//usuario y contrasela validos
var user='admin'
var password='admin'

// Agregar un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
	
	var usuario=document.form1.usuario.value;
	var contraseña=document.form1.contra.value;
	//validaciones
	if (usuario==user && contraseña==password) {
		window.location.href = 'dashboard.html';
		//reiniciar formulario
		divUser.classList.remove('was-validated');
		divContra.classList.remove('was-validated');
		formulario.usuario.value=formulario.contra.value=''
		return true;
	}
	
	divUser.classList.add('was-validated');
	divContra.classList.add('was-validated');
	//agregar los datos al modal
	contenidoModal.innerHTML = "Usuario o contraseña incorrectos, Intente de Nuevo!"
	// Mostrar el modal
	myModal.show();
	
	return false;
	

});
