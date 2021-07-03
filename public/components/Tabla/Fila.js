import { TablaBotonEliminar } from "./TablaBotonEliminar.js";


export function Fila(props) {
  let $fila = document.createElement('tr');
  let $fragment = document.createDocumentFragment();


  Object.keys(props).forEach((prop) => {
    let $td = document.createElement('td');
    $td.innerHTML = props[prop];
    $fragment.appendChild($td);
  })


  $fragment.appendChild(TablaBotonEliminar());
  $fila.appendChild($fragment);

  return $fila;

}

