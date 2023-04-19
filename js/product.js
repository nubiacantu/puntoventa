"use strict"
// Obtener una referencia al botón que muestra el modal
const btnMostrarModal = document.getElementById('myBtn');

// Obtener una referencia al modal
const myModal = new bootstrap.Modal(document.getElementById('myModal'));


// Obtener una referencia al contenido del modal
const contenidoCodigo = document.getElementById('modal-codigo');
const contenidoNombre = document.getElementById('modal-nombre');
const contenidoCategoria = document.getElementById('modal-categoria');
const contenidoVenta = document.getElementById('modal-venta');
const contenidoCompra = document.getElementById('modal-compra');
const formulario= document.getElementById('form1');

// Obtener una los div de los input
const divDatos = document.getElementById('datos');

// Agregar un evento click al botón que muestra el modal
btnMostrarModal.addEventListener('click', () => {
	
	var codigo=document.form1.codigo.value;
	var nombre=document.form1.nombre.value;
	var categoria=document.form1.categoria.value;
	var venta=document.form1.venta.value;
	var compra=document.form1.compra.value;

	
	//validaciones
	if (codigo=="" || nombre=="" || categoria=="" || venta=="" || compra=="" ) {
		divDatos.classList.add('was-validated');
		return false;
	}
	//agregar los datos al modal
	contenidoCodigo.innerHTML = "Código: #" + codigo;
    contenidoNombre.innerHTML = "Nombre: " + nombre;
    contenidoCategoria.innerHTML = "Categoría: " + categoria;
    contenidoVenta.innerHTML = "Precio de Venta: $" + venta;
    contenidoCompra.innerHTML = "Precio de Compra: $" + compra;
	// Mostrar el modal
	myModal.show();

	//reiniciar formulario¿
	divDatos.classList.remove('was-validated');

	formulario.codigo.value=formulario.nombre.value=formulario.categoria.value=formulario.venta.value=formulario.compra.value='';

});
