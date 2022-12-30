const botonAceptarCookies = document.getElementById('cookies__aceptar');

const cookies = document.getElementById('cookies');
const cookies__fondo= document.getElementById('cookies__fondo');


if (!localStorage.getItem('cookies-aceptadas')) {
    cookies.classList.add('activo');
    cookies__fondo.classList.add('activo');
}




botonAceptarCookies.addEventListener('click',()=>{

    cookies.classList.remove('activo');
    cookies__fondo.classList.remove('activo');

    localStorage.setItem('cookies-aceptadas',true);
});