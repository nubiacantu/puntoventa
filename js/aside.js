// Obtén la URL de la página actual
var currentUrl = window.location.href;

// Array con las URLs de las páginas a las que deseas que el aside cambie de color
var targetUrls = ['dashboard.php', 'usuarios.php', 'categorias.php'];

// Compara la URL actual con las URLs de las páginas objetivo
if (targetUrls.includes(currentUrl)) {
  // Selecciona los elementos del aside con la clase "sidebar-button"
  var sidebarButtons = document.getElementsByClassName('sidebar-button');

  // Cambia el color de los elementos del aside
  for (var i = 0; i < sidebarButtons.length; i++) {
    sidebarButtons[i].style.color = '#ff0000'; // Cambia el color a rojo
  }
}