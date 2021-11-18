
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
const animeBtn= document.querySelector(".anime-dropdown");
const animeMenu = document.querySelector(".anime-dropdown-menu");
const profileBtn= document.querySelector(".profile-dropdown");
const profileMenu = document.querySelector(".profile-dropdown-menu");

btn.addEventListener("click", function () {
    menu.classList.toggle("hidden");
});

animeBtn.addEventListener("click", function (e) {
    animeMenu.classList.toggle("hidden");
    e.preventDefault();
});

if (profileBtn) {
profileBtn.addEventListener("click", function (e) {
    profileMenu.classList.toggle("hidden");
    e.preventDefault();
});
};

var navdropdown = document.getElementById('navdropdown');
var navinput = document.getElementById('navinput');

// Clicking outside when search list is open will close list

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

// Search list dissapears if certain keys are pressed

document.addEventListener('keydown', function(e) {

    var animeSearch = document.getElementById('animesearch');

    if(e.key === 'Escape' && animeSearch || e.shiftKey && animeSearch && e.key === 'Tab'){
        
        animeSearch.style.display = 'none';
	}
    
    
});

// Resets focus to search bar if '/' is pressed

document.addEventListener('keydown', function(e) {

    if(e.keyCode === 191 ){

        e.preventDefault();
       
        navinput.focus();
    }

});

// Timeout for success flash message

function hideSuccess() {setTimeout(function () {

    const success = document.getElementById('success');

    if(success) {

        success.style.display='none';
    }
   
    
}, 4000)
}

// Show anime dropdown

function animeDropown() {
    document.getElementById("animeDropdown").classList.toggle("show");
}

document.getElementById('animeNav').addEventListener('mouseover', function () {
    
    animeDropown();

})

// Toggle show and hide of profile dropdown

function dropdown() {
    document.getElementById("dropdownNav").classList.toggle("show");
}
  
// Close profile dropdown when user clicks outside  

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






