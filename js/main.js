/*LE JS*/
const loader = document.getElementById('loader');
const cursor = document.getElementById('cursor');


const loaded = () => {
    loader.classList.add('active');
    $('.img-accueil').addClass('active');
    $('.first-nilk').addClass('active');
}

$('.burger-container').click(() => {
    $('.burger').toggleClass('active');
    $('.menu-container').toggleClass('active');
})



window.addEventListener('mousemove', (e) => {
    var x = e.clientX;
    var y = e.clientY;
    cursor.style.top = y + "px";
    cursor.style.left = x + "px";
})

$('a ,.espacement_qr_code, .croix_coffe_oat, .croix_chocolate_banana, .croix_coconut_mango, input, textarea, button').hover(() => {
    cursor.classList.toggle('active');
})


window.onload = setTimeout(loaded, 3000);