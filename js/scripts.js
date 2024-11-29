document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", handleScroll);

  function handleScroll() {
    navbar.classList.add("scrolled");
  }
});
