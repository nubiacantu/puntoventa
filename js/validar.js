
function registrarTienda() {

	// Se obtiene una div de los campos de el dato de nombre de tienda y sus input
	divNombre = document.getElementById("nombrediv");
	const camposNombre = divNombre.querySelectorAll("input");

	// Se obtiene una div de los campos de el dato de si l tienda esta activa y sus input
	divActiva = document.getElementById("activadiv");
	// Obtener los elementos del radio button
	var activaRadio = document.getElementsByName('activaRadio');

	//arreglo para guardar los datos ingresado por el usuario
  	var inicio = {};

  	//Validacion de nombre
  	camposNombre.forEach(function(n) {
		inicio[n.id] = n.value;
	});
	//se verifica que que no se tengan valores vacios
		var vacio = Object.values(inicio).some(function(valor) {
		return valor.trim() === "";//retorna true si hay campos vacios
	});
	//si hay campos vacios se regresa a la seccion que no se lleno y se agrega la clase de validacion de bootstrap
	if (vacio) {
		divNombre.classList.add('was-validated');
		divNombre.scrollIntoView({behavior: "smooth"});
		return false
	}

	
	// Verificar si se ha seleccionado un radio button
	var seleccionado = false;
	for (var i = 0; i < activaRadio.length; i++) {
	    if (activaRadio[i].checked) {
	        seleccionado = true;
	        break;
	    }
	}

	// Agregar la clase "was-validated" si no se ha seleccionado un radio button
	if (!seleccionado) {
	    var divActiva = document.getElementById('activadiv');
	    divActiva.classList.add('was-validated');
	    return false
	}

	
}