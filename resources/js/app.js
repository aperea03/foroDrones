import './bootstrap';

window.addEventListener('load', function() {
    // Efecto logo de carga
    const contenedor_loader = this.document.querySelector('.contenedor_loader');
    contenedor_loader.style.opacity = 0;
    contenedor_loader.style.visibility = 'hidden';
});

// Gestion de cookies
document.addEventListener('DOMContentLoaded', function() {
    const cookieNotice = document.getElementById('cookie-notice');
    const acceptCookiesBtn = document.getElementById('accept-cookies-btn');
  
    acceptCookiesBtn.addEventListener('click', function() {
      cookieNotice.style.display = 'none';
      setCookie('cookies_accepted', 'true', 365);
    });
  
    function setCookie(name, value, days) {
      const date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      const expires = 'expires=' + date.toUTCString();
      document.cookie = name + '=' + value + ';' + expires + ';path=/';
    }
  
    function getCookie(name) {
      const cookieName = name + '=';
      const cookies = document.cookie.split(';');
      for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
          cookie = cookie.substring(1);
        }
        if (cookie.indexOf(cookieName) === 0) {
          return cookie.substring(cookieName.length, cookie.length);
        }
      }
      return '';
    }
  
    const cookiesAccepted = getCookie('cookies_accepted');
    if (cookiesAccepted !== 'true') {
      cookieNotice.style.display = 'block';
    }
  });