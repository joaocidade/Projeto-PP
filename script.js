let ultimoScroll = window.scrollY;

const header = document.getElementById('header');
const logo = document.getElementById('logo');
const cadastro = document.getElementById('cadastro_header');
const entre = document.getElementById('entre');

window.addEventListener('scroll', () => {
    const scrollAtual = window.scrollY;

    if (scrollAtual < ultimoScroll && (ultimoScroll - scrollAtual > 10)) {
        // Usuário está scrollando para cima (mesmo que não esteja no topo)
        header.style.marginTop = '0px';
        logo.style.width = '60px';
        logo.style.marginTop = '11px';
        logo.style.marginBottom = '7px';
        cadastro.style.marginTop = '10px';
        entre.style.marginTop = '17px';
    } else if (scrollAtual > ultimoScroll && (scrollAtual - ultimoScroll > 10)) {
        // Usuário scrollando para baixo
        header.style.marginTop = '-30px';
        logo.style.width = '45px';
        logo.style.marginTop = '35px';
        cadastro.style.marginTop = '-10px';
        entre.style.marginTop = '-10px';
    }

    ultimoScroll = scrollAtual;
});