require('./bootstrap');
window.Swal = require('sweetalert2')

/* ---------- Reveal animación ----------------- */

let sr = ScrollReveal({
    duration: 2500,
    distance: "60px",
});

sr.reveal(".showcase-info",{delay: 600});
sr.reveal(".showcase-image",{origin: "top", delay: 700});
