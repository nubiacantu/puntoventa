"use strict"
// Obtener una referencia al botón que muestra el modal
const btnMostrarModal = document.getElementById('myBtn');

// Obtener una referencia al modal
const myModal = new bootstrap.Modal(document.getElementById('myModal'));


// Obtener una referencia al contenido del modal
const contenidoUser = document.getElementById('modal-user');
const contenidoNombre = document.getElementById('modal-nombre');
const contenidoApellido = document.getElementById('modal-apellido');
const contenidoEmail = document.getElementById('modal-email');
const contenidoContra = document.getElementById('modal-contra');
const contenidoHobbies = document.getElementById('modal-hobbies');

// Obtener una los div de los input
const divContra = document.getElementById('contra');
const divEmail = document.getElementById('demail');
const divDatos = document.getElementById('datos');
const divCheck = document.getElementById('check');
const formulario= document.getElementById('form1');

// Agregar un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
	
	var usuario=document.form1.usuario.value;
	var nombre=document.form1.nombre.value;
	var apellido=document.form1.apellido.value;
	var email=document.form1.email.value;
	var contra1=document.form1.contra1.value;
	var contra2=document.form1.contra2.value;

	var hobbies="";
	var b=document.form1.hobby.length;
	//Obtener los hobbies
	for(var a=0;a<b;a++){
		if (document.form1.hobby[a].checked) {
			hobbies+=document.form1.hobby[a].value+ ", "
		}
	}
	//validaciones
	if (usuario=="" || nombre=="" || apellido=="" ) {
		divDatos.classList.add('was-validated');
		return false;
	}
	if(email =="") {
		divEmail.classList.add('was-validated');
		return false;
	}
    if(contra1 != contra2 || contra1=="" || contra2==""){
    	divContra.classList.add('was-validated');
        return false;
    }
    if (hobbies.length==0){
    	divCheck.classList.add('was-validated');
        return false;
    }
	//agregar los datos al modal
	contenidoUser.innerHTML = "Usuario: " + usuario;
    contenidoNombre.innerHTML = "Nombre: " + nombre;
    contenidoApellido.innerHTML = "Apellido: " + apellido;
    contenidoEmail.innerHTML = "Email: " + email;
    contenidoContra.innerHTML = "Contraseña: " + contra1;
    contenidoHobbies.innerHTML = "Hobbies: " + hobbies;
	// Mostrar el modal
	myModal.show();

	//reiniciar formulario
	divCheck.classList.remove('was-validated');
	divContra.classList.remove('was-validated');
	divDatos.classList.remove('was-validated');
	divEmail.classList.remove('was-validated');

	formulario.usuario.value=formulario.nombre.value=formulario.apellido.value=formulario.email.value=formulario.contra1.value=formulario.contra2.value='';

});
