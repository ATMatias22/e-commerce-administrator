export function BotonAgregar(root) {

  let $boton = document.createElement('button');
  $boton.innerHTML = 'Agregar producto';
  $boton.classList.add('my-5', 'btn', 'btn-primary', 'agregarProducto')
  $boton.setAttribute('data-bs-target', '#exampleModal');
  $boton.setAttribute('data-bs-toggle', 'modal');
  root.appendChild($boton);

}