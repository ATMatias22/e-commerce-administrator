export function FormularioAgregarProducto() {


  return `

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method='POST' id='formularioAgregarProducto'>

        <div class="modal-body">
          <div class="form-group">
            <label for="nombreProducto">Nombre del producto</label>
            <input type="text" class="form-control" id="nombreProducto" name='nombreProducto'>
          </div>
          <div class="form-group mt-3">
            <label for="precioProducto">Precio</label>
            <input type="text" class="form-control" id="precioProducto" placeholder="EJ: 1020.00" name='precioProducto'>
          </div>

          <label class="form-check-label d-block">
            <div class="form-group form-control mt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="popularProducto" name='popularProducto'>
                Popular
              </div>
            </div>
          </label>

          <label class="form-check-label d-block">
            <div class="form-group form-control mt-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="nuevoProducto" name='nuevoProducto'>
                Nuevo
              </div>
            </div>
          </label>


          <div class="form-group mt-3">
            <label for="descripcionProducto">Descripcrion</label>
            <textarea class="form-control" id="descripcionProducto" rows="3" name='descripcionProducto'></textarea>
          </div>

          <div class="form-group mt-3">
            <label for="imagenProducto ">Colocar una foto del producto</label>
            <input type="file" class="form-control-file" id="imagenProducto" name='imagenProducto'>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" id="botonFormularioAgregarProducto">Save changes</button>
        </div>
      </form>

    </div>
  </div>


</div>
  
`

}