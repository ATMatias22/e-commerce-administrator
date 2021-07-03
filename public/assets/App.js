import { Routes } from './Routes.js';

export function App() {

  Routes();
  window.addEventListener('hashchange', () => {
    document.getElementById('root').innerHTML = null;
    Routes();
  })

}
