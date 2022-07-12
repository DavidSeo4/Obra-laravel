const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
document.body.classList.toggle('dark');
btnSwitch.classList.toggle('active');

}
);


const boton = document.querySelector('#boton');

boton.addEventListener('click', () => {
document.body.classList.toggle('fuente');
boton.classList.toggle('active');

}
);

