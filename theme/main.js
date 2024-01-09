document.addEventListener("DOMContentLoaded", function () {
  const hamburgerIcon = document.querySelector('.hamburger-icon');
  const navbar = document.getElementById('navbar');

  // Functie om de huidige pagina te markeren
  function markCurrentPage() {
    const currentPage = window.location.pathname.split("/").pop();
    const links = document.querySelectorAll("#navbar a");

    for (let i = 0; i < links.length; i++) {
      const link = links[i];
      const linkPage = link.href.split("/").pop();

      if (currentPage === linkPage) {
        link.style.textDecoration = 'underline'; // Optioneel: voeg onderstreping toe
        link.style.color = '#10587B';
        break;
      }
    }
  }

  if (window.innerWidth > 1024) {
    navbar.classList.add('active');
    markCurrentPage(); // Markeer de huidige pagina als de site wordt geladen
  }

  hamburgerIcon.addEventListener('click', function () {
    navbar.classList.toggle('active');
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth > 1024) {
      navbar.classList.add('active');
      markCurrentPage(); // Markeer de huidige pagina bij het wijzigen van de schermgrootte
    } else {
      navbar.classList.remove('active');
    }
  });
});



document.addEventListener("DOMContentLoaded", function () {
  const dropdownButton = document.getElementById('dropdownButton');
  const dropdownContent = document.querySelector('.dropdown-content');

  let dropdownVisible = false;

  dropdownButton.addEventListener('click', function () {
    dropdownVisible = !dropdownVisible;

    if (dropdownVisible) {
      dropdownContent.style.display = 'block';
    } else {
      dropdownContent.style.display = 'none';
    }
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

