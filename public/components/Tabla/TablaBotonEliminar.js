export function TablaBotonEliminar() {

  let $td = document.createElement('td');
  let $button = document.createElement('button')

  $button.innerHTML = "Eliminar";
  $button.classList.add('btn', 'btn-danger', 'btnEliminar');
  $td.appendChild($button);

  return $td;

}