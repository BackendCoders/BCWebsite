import './bootstrap';

import Alpine from 'alpinejs';

const cspAlpinePage = document.querySelector('[data-alpine-csp]');

if (!cspAlpinePage) {
    window.Alpine = Alpine;
    Alpine.start();
}
