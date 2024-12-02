document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 0) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  const handleScrollAnimation = () => {
    const elementsToAnimate = document.querySelectorAll(".animate-on-scroll");

    elementsToAnimate.forEach((element) => {
      const rect = element.getBoundingClientRect();
          const isVisible = rect.top < window.innerHeight && rect.bottom >= 0;

          if (isVisible) {
            element.classList.add("animate");
          } else {
            element.classList.remove("animate");
          }
    });
  };

  window.addEventListener("scroll", handleScrollAnimation);
  handleScrollAnimation();
});
