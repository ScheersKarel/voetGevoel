document.addEventListener("DOMContentLoaded", function () {
  const hamburgerIcon = document.querySelector('.hamburger-icon');
  const navbar = document.getElementById('navbarMobile');

  function markCurrentPage() {
    const currentPage = window.location.pathname.split("/").pop();
    const links = document.querySelectorAll("#navbar a");

    for (let i = 0; i < links.length; i++) {
      const link = links[i];
      const linkPage = link.href.split("/").pop();

      if (currentPage === linkPage) {

        if (currentPage === "contact" || currentPage === "voetreflexologie" || currentPage === "vertebraal-correctie" || currentPage === "psychozone-harmonisering") {
          link.style.textDecoration = 'underline';
        }

        else {
          link.style.textDecoration = 'underline';
          link.style.color = '#10587B';
        }
      }
      // Check if the current page is the home page
      else if (currentPage === "" && linkPage === "voetGevoel") {
        link.style.textDecoration = 'underline';
        link.style.color = '#10587B';
      }
    }
  }

  if (window.innerWidth > 1024) {
    navbar.classList.add('active');
    markCurrentPage();
  }

  hamburgerIcon.addEventListener('click', function () {
    navbar.classList.toggle('active');
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 1024) {
      navbar.classList.add('active');
      markCurrentPage();
    } else {
      navbar.classList.remove('active');
    }
  });

});


document.addEventListener("DOMContentLoaded", function () {
  const dropdownButtons = document.querySelectorAll('.dropdown .dropbtn');
  const navbar = document.querySelector('#navbar');
  dropdownButtons.forEach(function (dropdownButton) {
    const dropdownContent = dropdownButton.nextElementSibling; // Zoek het bijbehorende dropdown-content element

    let dropdownVisible = false;

    dropdownButton.addEventListener('click', function () {
      dropdownVisible = !dropdownVisible;

      if (dropdownVisible) {
        dropdownContent.style.display = 'block';


      } else {
        dropdownContent.style.display = 'none';
        navbar.style.marginBottom = '0';
      }
    });
  });
});


let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) { slideIndex = 1 }
  if (n < 1) { slideIndex = slides.length }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
