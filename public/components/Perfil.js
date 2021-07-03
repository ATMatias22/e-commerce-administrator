export function Perfil(root) {
  root.appendChild(CrearPerfil());
  document.querySelectorAll('.links').forEach((link) => { link.classList.remove('color') })
  document.getElementById('Perfil').classList.add('color');
}

function CrearPerfil() {

  let $perfil = document.createElement('section');
  $perfil.classList.add('mt-5', 'mx-5');

  $perfil.innerHTML = `  <div class="card mb-3 mx-auto" style="max-width: 1024px;">
      <div class="row g-0 ">
        <div class="col-md-4">
          <img class="w-100" src="http://placeimg.com/640/480/animals" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Bienvenido</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>`
  return $perfil;
}

