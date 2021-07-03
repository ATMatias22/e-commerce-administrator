import { Tabla } from "../components/Tabla/Tabla.js";
import { FormularioAgregarProducto } from "../components/FormularioAgregarProducto.js";

export function Ajax(props) {
  let { url, th, root, metodo } = props;
  fetch(url, {
    method: 'POST',
    body: JSON.stringify({ metodo })
  })
    .then(res => res.json())
    .then(json => {
      let props = {
        datos: json,
        th
      }
      root.appendChild(Tabla(props));
    });
  //aca ponemos el color a cada link del menu
  document.querySelectorAll('.links').forEach((link) => {
    link.classList.remove('color');
  })
  document.getElementById(location.hash.replace("#/", "")).classList.add('color');
}

export function EliminarDato(props) {
  let { title, metodo, url } = props;
  //title metodo url './model/Acciones/Acciones.php'
  document.addEventListener('click', e => {
    if (e.target.matches('.btnEliminar')) {
      let id = e.target.parentNode.parentNode.firstChild.innerText
      Swal.fire({
        title,
        showDenyButton: true,
        confirmButtonText: `Eliminar`,
        denyButtonText: `Cancelar`,
      }).then((result) => {
        if (result.isConfirmed) {
          fetch(url, {
            method: 'POST',
            body: JSON.stringify({ id, metodo })
          }).then(Swal.fire({
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: true,
          }).then(() => {
            location.reload();
          })
          )
        }
      })
    }
  })
}

export function AgregarDato(props) {

  let { url } = props
  document.addEventListener('click', async e => {
    if (e.target.matches('#botonFormularioAgregarProducto')) {
      e.preventDefault();
      let formData = new FormData(document.getElementById('formularioAgregarProducto'))
      fetch(url, {
        method: 'POST',
        body: formData
      }).then(Swal.fire({
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: true,
      }).then(() => {
        location.reload();
      })

      )
    }
  })
}