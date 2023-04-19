

const menu = [
  {
    id: 1,
    title: "Divergente",
    category: "Fantasía",
    price: 252.87,
    img: "./img/item-1.jpg",
    desc: `En el Chicago distópico de Beatrice Prior, la sociedad está dividida en cinco facciones, cada una de ellas dedicada a cultivar una virtud concreta: Verdad (los sinceros), Abnegación (los altruistas), Osadía (los valientes), Cordialidad (los pacíficos) y Erudición (los inteligentes).`,
  },
  {
    id: 2,
    title: "Mujercitas",
    category: "Drama",
    price: 280.65,
    img: "./img/item-2.jpg",
    desc: `"Mujercitas" narra cómo cuatro niñas se convierten en mujeres, con la Guerra de Secesión norteamericana como telón de fondo. Son momentos difíciles, que la familia March, afrontará con fortaleza y dignidad. `,
  },
  {
    id: 3,
    title: "La chica del tren",
    category: "Suspenso",
    price: 278.00,
    img: "./img/item-3.jpg",
    desc: `La protagonista Rachel se ha sumido en el alcoholismo por una serie de desgracias. De manera casual en su viaje rutinario en el tren es testigo de una pieza que encajaría perfectamente en la desaparición de Megan, una mujer a quien ella llama Jess (pues no la conoce) y que es parte del paradigma de la pareja perfecta.`,
  },
  {
    id: 4,
    title: "Los juegos del hambre",
    category: "Fantasía",
    price: 486.00,
    img: "./img/item-4.jpg",
    desc: `En él, veinticuatro adolescentes de entre doce y dieciocho, un chico y una chica por cada distrito, son elegidos al azar para participar en los juegos. El objetivo es sencillo: luchar a muerte entre ellos, pues solo uno de los veinticuatro puede ganar. `,
  },
  {
    id: 5,
    title: "Orgullo y prejuicio",
    category: "Drama",
    price: 280.86,
    img: "./img/item-5.jpg",
    desc: `Orgullo y prejuicio narra las aventuras y desventuras amorosas de las hermanas Bennet, centrándose en el personaje de Elizabeth, a través de las cuales la autora nos presenta con comicidad la sociedad de su tiempo y coloca a la mujer en un lugar más notorio que el que le correspondía en su época con la figura de la protagonista. `,
  },
  {
    id: 6,
    title: "El código Da Vinci",
    category: "Suspenso",
    price: 328.00,
    img: "./img/item-6.jpg",
    desc: `El Código Da Vinci es una novela de ficción, en la que su autor, Dan Brown, desarrolla una trama de suspenso donde los personajes principales deben descifrar una serie de mensajes y claves para evitar que un importante secreto relacionado con la Iglesia Católica se pierda para siempre.`,
  },
  {
    id: 7,
    title: "Dune",
    category: "Fantasía",
    price: 206.25,
    img: "./img/item-7.jpg",
    desc: `Dune relata la historia del planeta desértico Arrakis, única fuente de melange, la especia necesaria para el viaje interestelar y que además garantiza longevidad y poderes psíquicos. La administración de Arrakis es transferida por el emperador de la noble Casa de Harkonnen a la Casa Atreides. `,
  },
  {
    id: 8,
    title: "Matar a un Ruiseñor",
    category: "Drama",
    price: 299.90,
    img: "./img/item-8.jpg",
    desc: `Matar a un ruiseñor muestra una comunidad dominada por los prejuicios raciales, la desconfianza hacia lo diferente, la rigidez de los vínculos familiares y vecinales. Y con un sistema judicial sin apenas garantías para la población negra. Un auténtico clásico de la literatura estadounidense del siglo XX que ha cautivado a millones de lectores. En 1962, Robert Mulligan la llevó al cine es una oscarizada producción con Horton Foote y Gregory Peck en los papeles protagonistas.`,
  },
  {
    id: 9,
    title: "El Señor de los anillos",
    category: "Fantasía",
    price: 305.78,
    img: "./img/item-9.jpg",
    desc: `La novela narra el viaje del protagonista principal, Frodo Bolsón, hobbit de la Comarca, para destruir el Anillo Único y la consiguiente guerra que provocará el enemigo para recuperarlo, ya que es la principal fuente de poder de su creador, el Señor oscuro Sauron.`,
  },
  {
    id: 10,
    title: "Harry Potter y la piedra filosofal",
    category: "Fantasía",
    price: 649.00,
    img: "./img/item-10.jpg",
    desc: `Harry toma un tren, y en el colegio se hace muy amigo de dos compañeros de clase, un chico (Ron) y una chica (Hermione). Descubren que hay un objeto precioso escondido en el colegio, la piedra filosofal, que permite convertir cualquier metal en oro, y producir el elixir de la vida eterna.`,
  },
];

// Obtener elemento principal
const sectionCenter = document.querySelector(".here");
const btnContainer = document.querySelector(".btn-container");


// mostrar todos los productos al cargar la página
//NOTA: "DOMContentLoaded" permite conocer el momento en el que todos los elementos del DOM, es decir, los elementos HTML de un proyecto, están cargados
window.addEventListener("DOMContentLoaded", function () {
  diplayMenuItems(menu);
  displayMenuButtons();
});

//Items de productos
function diplayMenuItems(menuItems) {
  let displayMenu = menuItems.map(function (item) {
    // console.log(item);

    return `<div class="col-sm-4 " style="height: 400px" >
            <div class="card m-2 product overflow-auto" style="max-height: 90% !important; width: 90%">
              <div class="card-body justify-content-center p-3">
                <h4 class="fs-3 mt-3 text-center fw-semibold" >${item.title}</h4>
                <div style="display: flex;justify-content: center;">
                  <img class="img" src="${item.img}" align="center">
                </div>
                <h5 class="fs-4 text-right fw-semibold m-2" style="color: #6411C2">$${item.price}</h5>
                <p class="fs-6 text-justify">${item.desc}</p>
                <br>
              </div> 
            </div>
          </div><!-- /.card -->`;
  });
  displayMenu = displayMenu.join("");
  // console.log(displayMenu);

  sectionCenter.innerHTML = displayMenu;
}

//Opciones de botones
function displayMenuButtons() {
  const categories = menu.reduce(
    function (values, item) {
      if (!values.includes(item.category)) {
        values.push(item.category);
      }
      return values;
    },
    ["Todas"]
  );
  //constructor del boton con el nombre de la categoría de los items del array
  const categoryBtns = categories
    .map(function (category) {
      
       return `<li><a class="dropdown-item filter-btn" data-id=${category}>${category}</a></li>`;
    })
    .join("");

  btnContainer.innerHTML = categoryBtns;
  const filterBtns = btnContainer.querySelectorAll(".filter-btn");
  console.log(filterBtns);

  filterBtns.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      // console.log(e.currentTarget.dataset);
      const category = e.currentTarget.dataset.id;
      const menuCategory = menu.filter(function (menuItem) {
        // console.log(menuItem.category);
        if (menuItem.category === category) {
          return menuItem;
        }
      });
      if (category === "Todas") {
        diplayMenuItems(menu);
      } else {
        diplayMenuItems(menuCategory);
      }
    });
  });
}
