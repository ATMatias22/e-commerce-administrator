import { Fila } from "./Fila.js";

export function Tabla(props) {

  let { datos, th } = props

  let $tabla = document.createElement('table');
  $tabla.classList.add('table');
  $tabla.appendChild(headTabla(th));
  $tabla.appendChild(bodyTabla(datos));
  return $tabla;
}

function headTabla(nombreFilas) {
  let $headTabla = document.createElement('thead');
  let $tr = document.createElement('tr');
  $headTabla.classList.add('thead-dark');
  let $fragment = document.createDocumentFragment();
  nombreFilas.forEach((prop) => {
    let $th = document.createElement('th');
    $th.innerHTML = prop;
    $fragment.appendChild($th);
  })
  $tr.appendChild($fragment);
  $headTabla.appendChild($tr);
  return $headTabla;
}

function bodyTabla(datos) {
  let $bodyTabla = document.createElement('tbody');
  $bodyTabla.appendChild(insertarDatos(datos));
  return $bodyTabla;
}

function insertarDatos(datos) {
  let $fragment = document.createDocumentFragment();
  datos.forEach(fila => {
    $fragment.appendChild(Fila(fila));
  });

  return ($fragment);
}