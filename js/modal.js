// Agregar la misma clase a todos los botones de eliminación
const botonesEliminar = document.querySelectorAll('.eliminar');

// Agregar un evento de clic a cada botón
botonesEliminar.forEach((boton) => {
  boton.addEventListener('click', () => {
    // Mostrar el primer modal de confirmación
    Swal.fire({
      title: 'Eliminar elemento',
      text: 'Ingresa la contraseña para eliminar',
      icon: 'warning',
      html: `
        <form>
          <label for="password" class="texto-modal">Ingrese la contraseña para eliminar</label>
          <input type="password" id="password" name="password" class="swal2-input" required>
        </form>
      `,
      showCancelButton: true,
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar',
      focusCancel: true,
      customClass: {
        title: 'titulo-modal',  // Clase CSS para el contenedor del modal
        confirmButton: 'confirmar-modal',  // Clase CSS para el botón de confirmar
        cancelButton: 'cancelar-modal'  // Clase CSS para el botón de cancelar
      }
    }).then((result) => {
      if (result.value) {
        // Mostrar el segundo modal después de la confirmación
        Swal.fire({
          title: 'Elemento eliminado',
          text: 'El elemento ha sido eliminado exitosamente.',
          icon: 'success',
          confirmButtonText: 'Aceptar',
          customClass: {
            title: 'titulo-modal',  // Clase CSS para el contenedor del modal

          },

        });
        
        // Aquí puedes agregar la lógica para realizar la eliminación del elemento
        // Puedes llamar a tu función de eliminación o hacer una petición AJAX, por ejemplo
        console.log('Elemento eliminado exitosamente');
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        // Si se hizo clic en el botón de cancelar en el primer modal
        console.log('Cancelado');
      }
    });
  });
});