var urlSite = document.querySelector('#UrlSite').value; 
/**
 * Lottie animaciones
 */
var loader = lottie.loadAnimation({
    container: document.getElementById('loader'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/Logo/date3s.json',
});

var lottieBus = lottie.loadAnimation({
    container: document.getElementById('animateBus'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/Bus/data.json',
});

var lottieMarker = lottie.loadAnimation({
        container: document.getElementById('animateMarker'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/marker.json',
});

var lottieNotificacion = lottie.loadAnimation({
    container: document.getElementById('animateNotificacion'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/notificacion2.json',
});

var lottieUser = lottie.loadAnimation({
    container: document.getElementById('animateUser'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/user.json',
});

var lottieSchool = lottie.loadAnimation({
    container: document.getElementById('animateSchool'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/school/school.json',
});

var lottieBooks = lottie.loadAnimation({
    container: document.getElementById('animateBooks'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/books.json',
});

var lottieBulb = lottie.loadAnimation({
    container: document.getElementById('animateBulb'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/bulb.json',
});

var lottieChat = lottie.loadAnimation({
    container: document.getElementById('animateChat'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/chat.json',
});

var lottieMarkerCheck = lottie.loadAnimation({
    container: document.getElementById('animateMarkerCheck'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/markercheck.json',
});

var lottieReport = lottie.loadAnimation({
    container: document.getElementById('animateReport'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path:urlSite+'/wp-content/themes/sersoluciones/assets/app/animaciones/Lottie/iconos/report.json',
    goToAndStop: 2
});

lottieReport.addEventListener('click', function() {
    lottieReport.playSegments([1, 2], true);
});

