/*LE JS*/
const loader = document.getElementById('loader');


const loaded = ()=>{
	loader.classList.add('active');
    $('.img-accueil').addClass('active');
    $('.first-nilk').addClass('active');
}

$('.burger-container').click(()=>{
	$('.burger').toggleClass('active');
	$('.menu-container').toggleClass('active');
})




window.onload = setTimeout(loaded, 3000);