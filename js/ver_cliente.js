
const clientes = [
  {
    id: 1,
    nombre: "Ana",
    apellidoP: "García",   
    apellidoM: "Pérez",
    email: "ana@gmail.com",
    telefono: "123 423 8989",
    direccion: `Calle Héroes de Nacozari #105, Col. Centro, C.P. 06000, Ciudad de México`,
    RFC:"BAPA880323FG6  ",
    categoria: "minorista"
  },
  {
    id: 2,
    nombre: "Juan",
    apellidoP: "Sánchez",   
    apellidoM: "Sánchez",
    email: "juan@gmail.com",
    telefono: "916 866 8920",
    direccion: `Av. 16 de Septiembre #502, Zona Centro, 22000 Tijuana, B.C.`,
    RFC:"CACX850915TX8 ",
    categoria: "biblioteca"
  },
  {
    id: 3,
    nombre: "Carlos",
    apellidoP: "Cantú",   
    apellidoM: "Pérez",
    email: "carlos@gmail.com",
    telefono: "678 567 3787",
    direccion: `Calle 45 #482, Col. Francisco de Montejo, 97203 Mérida, Yuc.`,
    RFC:"DASB8207121X9 ",
    categoria: "educacion"
  },
  {
    id: 4,
    nombre: "José",
    apellidoP: "Urbina",   
    apellidoM: "Gómez",
    email: "jose@gmail.com",
    telefono: "786 678 8975",
    direccion: `Blvd. Adolfo López Mateos #1000, Fracc. Santa Fe, 76087 Querétaro, Qro.`,
    RFC:"FOPG900611M41 ",
    categoria: "minorista"
  },
  {
    id: 5,
    nombre: "Nadia",
    apellidoP: "López",   
    apellidoM: "Hernádez",
    email: "nadia@gmail.com",
    telefono: "678 564 4533",
    direccion: `Paseo de la Reforma #505, Col. Cuauhtémoc, 06500 Ciudad de México, CDMX.`,
    RFC:"GIRM811214R36  ",
    categoria: "biblioteca"
  },
];

// referencia a la tabla en cuerpo y enzabezado
const tabla = document.querySelector(".table-body");
const encabezado = document.querySelector(".table-header");

// mostrar todos los clientes al cargar la página
window.addEventListener("DOMContentLoaded", function () {
  mostrarEncabezado(clientes);
  mostrarTabla(clientes);
});

//mostrar el cuerpo de la tabla con los valores del array
function mostrarTabla(clientes) {
  var tablaC='';
  for (let cliente of clientes){
    tablaC+=`<tr >
          <td>${cliente.id}</td>
          <td>${cliente.nombre}</td>
          <td>${cliente.apellidoP}</td>
          <td>${cliente.apellidoM}</td>
          <td>${cliente.email}</td>
          <td>${cliente.telefono}</td>
          <td>${cliente.direccion}</td>
          <td>${cliente.RFC}</td>
          <td>${cliente.categoria}</td>
        </tr>`;
  }
  //se modificia en contenido del cuerpo de l tabla
  tabla.innerHTML = tablaC;
}

//mostrar el encabezado de la tabla con las llaves del array
function mostrarEncabezado(clientes) {
  var tablaE='';
  for (var key in clientes[0]) {
    let valor=key
    if (valor=='apellidoP'){
      valor="apellido Paterno"
    }
    if (valor=='apellidoM'){
      valor="apellido Materno"
    }
    tablaE+=`<th class="text-uppercase">${valor}</th>`;
    
  }
  //se modificia en contenido del encabezado de la tabla
  encabezado.innerHTML = tablaE;

}

