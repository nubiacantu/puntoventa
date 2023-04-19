

const menu = [
  {
    id: 1,
    name: "Divergente",
    price: 252.87,    
    desc: `En el Chicago distópico de Beatrice Prior, la sociedad está dividida en cinco facciones, cada una de ellas dedicada a cultivar una virtud concreta: Verdad (los sinceros), Abnegación (los altruistas), Osadía (los valientes), Cordialidad (los pacíficos) y Erudición (los inteligentes).`,
  },
  {
    id: 2,
    name: "Mujercitas",
    price: 280.65,
    desc: `"Mujercitas" narra cómo cuatro niñas se convierten en mujeres, con la Guerra de Secesión norteamericana como telón de fondo. Son momentos difíciles, que la familia March, afrontará con fortaleza y dignidad. `,
  },
  {
    id: 3,
    name: "La chica del tren",
    price: 278.00,
    desc: `La protagonista Rachel se ha sumido en el alcoholismo por una serie de desgracias. De manera casual en su viaje rutinario en el tren es testigo de una pieza que encajaría perfectamente en la desaparición de Megan, una mujer a quien ella llama Jess (pues no la conoce) y que es parte del paradigma de la pareja perfecta.`,
  },
  {
    id: 4,
    name: "Los juegos del hambre",
    price: 486.00,
    desc: `En él, veinticuatro adolescentes de entre doce y dieciocho, un chico y una chica por cada distrito, son elegidos al azar para participar en los juegos. El objetivo es sencillo: luchar a muerte entre ellos, pues solo uno de los veinticuatro puede ganar. `,
  },
  {
    id: 5,
    name: "Orgullo y prejuicio",
    price: 280.86,
    desc: `Orgullo y prejuicio narra las aventuras y desventuras amorosas de las hermanas Bennet, centrándose en el personaje de Elizabeth, a través de las cuales la autora nos presenta con comicidad la sociedad de su tiempo y coloca a la mujer en un lugar más notorio que el que le correspondía en su época con la figura de la protagonista. `,
  },
  {
    id: 6,
    name: "El código Da Vinci",
    price: 328.00,
    desc: `El Código Da Vinci es una novela de ficción, en la que su autor, Dan Brown, desarrolla una trama de suspenso donde los personajes principales deben descifrar una serie de mensajes y claves para evitar que un importante secreto relacionado con la Iglesia Católica se pierda para siempre.`,
  },
  {
    id: 7,
    name: "Dune",
    price: 206.25,
    desc: `Dune relata la historia del planeta desértico Arrakis, única fuente de melange, la especia necesaria para el viaje interestelar y que además garantiza longevidad y poderes psíquicos. La administración de Arrakis es transferida por el emperador de la noble Casa de Harkonnen a la Casa Atreides. `,
  },
  {
    id: 8,
    name: "Matar a un Ruiseñor",
    price: 299.90,
    desc: `Matar a un ruiseñor muestra una comunidad dominada por los prejuicios raciales, la desconfianza hacia lo diferente, la rigidez de los vínculos familiares y vecinales. Y con un sistema judicial sin apenas garantías para la población negra. Un auténtico clásico de la literatura estadounidense del siglo XX que ha cautivado a millones de lectores. En 1962, Robert Mulligan la llevó al cine es una oscarizada producción con Horton Foote y Gregory Peck en los papeles protagonistas.`,
  },
  {
    id: 9,
    name: "El Señor de los anillos",
    price: 305.78,
    desc: `La novela narra el viaje del protagonista principal, Frodo Bolsón, hobbit de la Comarca, para destruir el Anillo Único y la consiguiente guerra que provocará el enemigo para recuperarlo, ya que es la principal fuente de poder de su creador, el Señor oscuro Sauron.`,
  },
  {
    id: 10,
    name: "Harry Potter y la piedra filosofal",
    price: 649.00,
    desc: `Harry toma un tren, y en el colegio se hace muy amigo de dos compañeros de clase, un chico (Ron) y una chica (Hermione). Descubren que hay un objeto precioso escondido en el colegio, la piedra filosofal, que permite convertir cualquier metal en oro, y producir el elixir de la vida eterna.`,
  },
];

// Obtener elemento principal
const sectionCenter = document.querySelector(".table-body");


// mostrar todos los productos al cargar la página
ver= function () {
  diplayMenuItems(menu);
};

//Items de productos
function diplayMenuItems(menuItems) {
  let displayMenu = menuItems.map(function (item) {
    //agregar filas de la tabla
    return `<tr >
          <td>${item.id}</td>
          <td>${item.name}</td>
          <td>$${item.price}</td>
          <td>${item.desc}</td>
        </tr>`;
  });
  displayMenu = displayMenu.join("");
  sectionCenter.innerHTML = displayMenu;
}

