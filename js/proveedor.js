"use strict"

// Obtener una referencia al botón que muestra el modal
const btnMostrarModal = document.getElementById('myBtn');

// Obtener una referencia al modal
const myModal = new bootstrap.Modal(document.getElementById('myModal'));


// Obtener una referencia al contenido del modal
const contenidoModal = document.getElementById('modal-content');

// Obtener una los div de los input
const divDatos = document.getElementById('datos');
const divEmail = document.getElementById('demail');
const divRFC = document.getElementById('rfc');
const divCategoria = document.getElementById('categoria');
const formulario= document.getElementById('form1');

// Agregar un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
	
	var id=document.form1.id.value;
	var nombre=document.form1.nombre.value;
	var apellidoP=document.form1.apellidoP.value;
	var apellidoM=document.form1.apellidoM.value;
	var email=document.form1.email.value;
	var telefono=document.form1.telefono.value;
	var direccion=document.form1.direccion.value;
	var rfc=document.form1.rfc.value;
	var categoria=document.form1.categoria.value;

	//validaciones
	if (id=="" || nombre=="" || apellidoP=="" || apellidoM=="") {
		divDatos.classList.add('was-validated');
		return false;
	}
	if(email =="") {
		divEmail.classList.add('was-validated');
		return false;
	}
    if(rfc ==""){
    	divRFC.classList.add('was-validated');
        return false;
    }
    if(categoria ==""){
    	divCategoria.classList.add('was-validated');
        return false;
    }

	//agregar los datos al modal
	contenidoModal.innerHTML = "ID: " + id+"<br>Nombre: "+nombre+"<br>APellido Paterno: "+apellidoP+"<br>APellido contenidoModalMaterno: "+apellidoM+"<br>Email: "+email+"<br>Telefono: "+telefono+"<br>Direccion: "+direccion+"<br>RFC: "+rfc+"<br> Categoria: "+categoria
	myModal.show();
	
	//reiniciar formulario
	divDatos.classList.remove('was-validated');
	divEmail.classList.remove('was-validated');
	divRFC.classList.remove('was-validated');
	divCategoria.classList.remove('was-validated');

	formulario.id.value=formulario.nombre.value=formulario.apellidoP.value=formulario.apellidoM.value=formulario.email.value=formulario.direccion.value=formulario.telefono.value=formulario.rfc.value=formulario.categoria.value='';

});
