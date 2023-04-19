
const proveedores = [
  {
    id: 1,
    nombre: "Maria",
    apellidoP: "García",   
    apellidoM: "Pérez",
    email: "maria@gmail.com",
    telefono: "123 423 8989",
    direccion: `Av. Lázaro Cárdenas 2225, Valle Oriente, San Pedro Garza García, N.L., C.P. 66269`,
    RFC:"RODA8011128H7  ",
    categoria: "Editor"
  },
  {
    id: 2,
    nombre: "Juan",
    apellidoP: "Sánchez",   
    apellidoM: "Sánchez",
    email: "juan@gmail.com",
    telefono: "916 866 8920",
    direccion: `Avenida Landana #34, Lote 12, México D.F., CP 01234 México.`,
    RFC:"AAEH8005027J8 ",
    categoria: "Diseñador"
  },
  {
    id: 3,
    nombre: "Lucía",
    apellidoP: "Cantú",   
    apellidoM: "Pérez",
    email: "lucia@gmail.com",
    telefono: "678 567 3787",
    direccion: `Av. Mariano Otero 2397, Fraccionamiento Residencial Victoria, 45050 Zapopan, Jal.`,
    RFC:"SUAM9709156X9 ",
    categoria: "Distribucion"
  },
  {
    id: 4,
    nombre: "Valentina",
    apellidoP: "Urbina",   
    apellidoM: "Gómez",
    email: "vale@gmail.com",
    telefono: "786 678 8975",
    direccion: `Av. Insurgentes Sur 1602, Col. Crédito Constructor, Del. Benito Juárez, C.P. 03940, Ciudad de México`,
    RFC:"CUPU800825569 ",
    categoria: "Editor"
  },
  {
    id: 5,
    nombre: "Hugo",
    apellidoP: "López",   
    apellidoM: "Hernádez",
    email: "hugo@gmail.com",
    telefono: "678 564 4533",
    direccion: `Calle Colima 268, Col. Roma Norte, Del. Cuauhtémoc, C.P. 06700, Ciudad de México`,
    RFC:"XAXX010101000 ",
    categoria: "Diseñador"
  },
  {
    id: 6,
    nombre: "César",
    apellidoP: "Rodríguez",   
    apellidoM: "Urbina",
    email: "cesar@gmail.com",
    telefono: "789 675 4547",
    direccion: `Paseo de la Reforma 222, Col. Juárez, Del. Cuauhtémoc, C.P. 06600, Ciudad de México`,
    RFC:"RODA8011128H7 ",
    categoria: "Distribucion"
  },
];

// referencia a la tabla en cuerpo y enzabezado
const tabla = document.querySelector(".table-body");
const encabezado = document.querySelector(".table-header");

// mostrar todos los proveedores al cargar la página
window.addEventListener("DOMContentLoaded", function () {
  mostrarEncabezado(proveedores);
  mostrarTabla(proveedores);
});

//mostrar el cuerpo de la tabla con los valores del array
function mostrarTabla(proveedores) {
  var tablaC='';
  for (let proveedor of proveedores){
    tablaC+=`<tr >
          <td>${proveedor.id}</td>
          <td>${proveedor.nombre}</td>
          <td>${proveedor.apellidoP}</td>
          <td>${proveedor.apellidoM}</td>
          <td>${proveedor.email}</td>
          <td>${proveedor.telefono}</td>
          <td>${proveedor.direccion}</td>
          <td>${proveedor.RFC}</td>
          <td>${proveedor.categoria}</td>
        </tr>`;
  }
  //se modificia en contenido del cuerpo de l tabla
  tabla.innerHTML = tablaC;
}

//mostrar el encabezado de la tabla con las llaves del array
function mostrarEncabezado(proveedores) {
  var tablaE='';
  for (var key in proveedores[0]) {
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

