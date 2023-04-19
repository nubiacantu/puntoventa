// Agregar la misma clase a todos los botones de eliminación
const botonesEliminar = document.querySelectorAll('#editarStock');

// Agregar un evento de clic a cada botón
botonesEliminar.forEach((boton) => {
  boton.addEventListener('click', () => {
    // Mostrar el primer modal de confirmación
    Swal.fire({
      title: 'Editar Stock',
      html: `
        <form>
          <label for="referencia" class="texto-modal">Referencia</label>
          <input type="number" id="referencia" name="referencia" class="swal2-input" required>

          <label for="unidades" class="texto-modal">Unidades</label>
          <input type="number" id="unidades" name="unidades" class="swal2-input" required>

        </form>
      `,
      showCancelButton: true,
      confirmButtonText: 'Agregar',
      cancelButtonText: 'Eliminar',
      focusCancel: true,
      customClass: {
        title: 'titulo-modal',  // Clase CSS para el contenedor del modal
        confirmButton: 'confirmar-modal',  // Clase CSS para el botón de confirmar
        cancelButton: 'confirmar-modal'  // Clase CSS para el botón de cancelar
      }
    }).then((result) => {
      if (result.value) {
        // Mostrar el segundo modal después de la confirmación
        Swal.fire({
          title: 'Stock Agregado',
          text: 'El stock ha sido agregado exitosamente.',
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
        // Mostrar el segundo modal después de la confirmación
        Swal.fire({
          title: 'Stock Eliminado',
          text: 'El stock ha sido eliminado exitosamente.',
          icon: 'error',
          confirmButtonText: 'Aceptar',
          customClass: {
            title: 'titulo-modal',  // Clase CSS para el contenedor del modal

          },

        });
      }
    });
  });
});