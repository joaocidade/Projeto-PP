const header = document.getElementById('header');
const logo = document.getElementById('logo');
const cadastro = document.getElementById('cadastro');
const entre = document.getElementById('entre');

window.addEventListener('scroll', () => {
    if (window.scrollY > 10) {
        header.style.marginTop = '-30px';
        logo.style.width = '45px';
        logo.style.marginTop = '35px';
        cadastro.style.marginTop = '-10px';
        entre.style.marginTop = '-5px';

    } else {
        header.style.marginTop = '0px';
        logo.style.width = '60px';
        logo.style.marginTop = '11px';
        logo.style.marginBottom = '7px';
        cadastro.style.marginTop = '12px';
        entre.style.marginTop = '18px';
    }
});