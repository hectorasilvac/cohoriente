$(function() {

  const hamburger = document.querySelector("#hamburger");
  const navMenu = document.querySelector("#nav_menu");
  // const navLink = document.querySelectorAll(".nav-link");
  
  hamburger.addEventListener("click", mobileMenu);
  // navLink.forEach(n => n.addEventListener("click", closeMenu));
  
  function mobileMenu() {
      hamburger.classList.toggle("active");
      hamburger.classList.toggle("fa-bars");
      hamburger.classList.toggle("fa-times");
      navMenu.classList.toggle("active");
  }
  
  function closeMenu() {
      hamburger.classList.remove("active");
      navMenu.classList.remove("active");
  }
  // Partners Carousel
    $('.partner_carousel').flickity({
        contain: true,
        pageDots: false,
        autoPlay: true,
        freeScroll: false,
        wrapAround: true

      });
});