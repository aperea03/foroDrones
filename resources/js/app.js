import './bootstrap';

window.addEventListener('load', function() {
    // Efecto logo de carga
    const contenedor_loader = this.document.querySelector('.contenedor_loader');
    contenedor_loader.style.opacity = 0;
    contenedor_loader.style.visibility = 'hidden';
});