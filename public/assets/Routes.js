import { AgregarDato, Ajax, EliminarDato } from "./Ajax.js";
import { Perfil } from "../components/Perfil.js";
import { BotonAgregar } from "../components/BotonAgregar.js";
import { FormularioAgregarProducto } from "../components/FormularioAgregarProducto.js";



export function Routes() {

  if (document.getElementById('root')) {
    let root = document.getElementById('root');
    let url = './model/Acciones/Acciones.php';

    if (location.hash == '#/Suscripciones') {

      Ajax({ url, th: ['ID', 'Mail', 'Fecha', 'Eliminar'], root, metodo: 'mostrarSuscripciones' })
      EliminarDato({ url, title: 'Desea eliminar suscripcion?', metodo: 'eliminarSuscripcion' });



    } else if (location.hash == '#/Usuarios') {



      Ajax({ url, th: ['ID', 'Usuario', 'Password', 'Eliminar'], root, metodo: 'mostrarUsuarios' })
      EliminarDato({ url, title: 'Queres eliminar ese usuario?', metodo: 'eliminarUsuario' });



    } else if (location.hash == '#/Productos') {

      let th = ['ID', 'Nombre', 'Precio', 'Descripcion', 'Nuevo', 'Popular', 'Eliminar'];
      BotonAgregar(root);
      root.innerHTML += FormularioAgregarProducto();
      AgregarDato({ url: './model/Acciones/AgregarProducto.php' })
      Ajax({ url, th, root, metodo: 'mostrarProductos' })
      EliminarDato({ url, title: 'Queres eliminar ese producto?', metodo: 'eliminarProducto' });


    } else if (location.hash == '#/Comentarios') {


      Ajax({ url, th: ['ID', 'ID_Producto', 'ID_Usuario', 'Comentario', 'Fecha', 'Eliminar'], root, metodo: 'mostrarComentarios' })
      EliminarDato({ url, title: 'Queres eliminar ese comentario?', metodo: 'eliminarComentario' });

    } else if (location.hash == '#/' || !location.hash || location.hash == '#/Perfil') {
      //PREDETERMINADO MENU AL LOGEARSE
      Perfil(root);
    } else {
      $root.innerHTML = '<h1>Error de ruta</h1>';
    }


  }



}