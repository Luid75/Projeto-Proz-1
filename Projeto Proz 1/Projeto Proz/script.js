const navbara = document.querySelector(".navbar");
const menuButton = document.querySelector(".menu-button");

menuButton.addEventListener('click', () => {
    navbara.classList.toggle("show-menu");
});

const botaoInicio = document.querySelectorAll('a[href="#inicio"]');

function scrollParaInicio(event) {
    event.preventDefault();
    document.querySelector('section').scrollIntoView({ behavior: 'smooth' });
}

botaoInicio.forEach(botao => {
    botao.addEventListener('click', scrollParaInicio);
});
