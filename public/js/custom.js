const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", function () {
    menu.classList.toggle("hidden");
});

var navdropdown = document.getElementById('navdropdown');
var navinput = document.getElementById('navinput');

document.addEventListener('click', function(e) {
    
    var isClickInsideElement = navdropdown.contains(e.target);

    var animeSearch = document.getElementById('animesearch');

    if (isClickInsideElement && animeSearch) {
        
        animeSearch.style.display = 'block';
    }
    
    if (!isClickInsideElement && animeSearch) {

        animeSearch.style.display = 'none';
        
    }
});

document.addEventListener('keydown', function(e) {

    var animeSearch = document.getElementById('animesearch');

    if(e.key === 'Escape' && animeSearch || e.shiftKey && animeSearch && e.key === 'Tab'){
        
        animeSearch.style.display = 'none';
	}
    
    
});

document.addEventListener('keydown', function(e) {

    if(e.keyCode === 191 ){

        e.preventDefault();
       
        
        navinput.focus();
    }

});

function hideSuccess() {setTimeout(function () {
   
    document.getElementById('success').style.display='none';
}, 4000)
}










