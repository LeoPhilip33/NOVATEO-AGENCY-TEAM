/*LE JS*/
const loader = document.getElementById('loader');

const loaded = ()=>{
	loader.classList.add('active');
}


window.onload = setTimeout(loaded, 3000);