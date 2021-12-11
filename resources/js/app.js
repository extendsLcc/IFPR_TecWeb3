require('./bootstrap');
require('./vendor.js');
require('./web-components.js');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
