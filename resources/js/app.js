import './bootstrap';

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

import AOS from 'aos'
import 'aos/dist/aos.css'

AOS.init({
  duration: 800,
  easing: 'ease-out-cubic',
  once: true,
})

import GLightbox from 'glightbox';
const lightbox = GLightbox({
    selector: '.gallery-lightbox'
});