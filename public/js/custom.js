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

    const success = document.getElementById('success');

    if(success) {

        success.style.display='none';
    }
   
    
}, 4000)
}

function animeDropown() {
    document.getElementById("animeDropdown").classList.toggle("show");
}

document.getElementById('animeNav').addEventListener('mouseover', function () {
    
    animeDropown();

})




// Toggle show and hide of dropdown

function dropdown() {
    document.getElementById("dropdownNav").classList.toggle("show");
}
  

// Close dropdown when user clicks outside  

window.onclick = function(e) {
   
    if (!e.target.matches('.dropbtn')) {

      var dropdowns = document.getElementsByClassName("dropdown-content");
     
      var i;
     
      for (i = 0; i < dropdowns.length; i++) {
     
        var openDropdown = dropdowns[i];
     
        if (openDropdown.classList.contains('show')) {
     
            openDropdown.classList.remove('show');
        }
      }
    }
}


// Logout Form

const logoutLink = document.getElementById("logout")

logoutLink.addEventListener('click', function (e) {

    const logout = document.getElementById("logout-form")

    logout.submit();

    e.preventDefault();

})






