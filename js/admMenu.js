document.addEventListener('DOMContentLoaded', function () {
    cargarPagina('home.html');
});

function cargarPagina(pagina) {
    fetch(pagina)
        .then(response => response.text())
        .then(html => {
            document.getElementById('contenidoDinamico').innerHTML = html;
        })
        .catch(error => console.error('Error al cargar la página:', error));
}

