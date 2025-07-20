// Mobile navigation functionality
const hamburger = document.getElementById("hamburger");
const mobileNav = document.getElementById("mobile-nav");
const hamburgerLine1 = document.getElementById("hamburger-line-1");
const hamburgerLine2 = document.getElementById("hamburger-line-2");
const hamburgerLine3 = document.getElementById("hamburger-line-3");
const mobileServicesToggle = document.getElementById("mobile-services-toggle");
const mobileServicesMenu = document.getElementById("mobile-services-menu");

let isMenuOpen = false;

hamburger.addEventListener("click", () => {
  isMenuOpen = !isMenuOpen;

  if (isMenuOpen) {
    mobileNav.classList.remove("-translate-y-full");
    mobileNav.classList.add("translate-y-0");

    // Animate to X
    hamburgerLine1.style.transform = "rotate(45deg) translate(6px, 6px)";
    hamburgerLine2.style.opacity = "0";
    hamburgerLine3.style.transform = "rotate(-45deg) translate(6px, -6px)";
    hamburgerLine3.classList.add("w-7");
  } else {
    mobileNav.classList.remove("translate-y-0");
    mobileNav.classList.add("-translate-y-full");

    // Back to hamburger
    hamburgerLine1.style.transform = "rotate(0deg) translate(0px, 0px)";
    hamburgerLine2.style.opacity = "1";
    hamburgerLine3.style.transform = "rotate(0deg) translate(0px, 0px)";
    hamburgerLine3.classList.remove("w-7");
  }
});

// Mobile services submenu toggle
mobileServicesToggle.addEventListener("click", () => {
  const isOpen =
    mobileServicesMenu.style.maxHeight !== "0px" &&
    mobileServicesMenu.style.maxHeight !== "";
  const arrow = mobileServicesToggle.querySelector("svg");

  if (isOpen) {
    mobileServicesMenu.style.maxHeight = "0px";
    arrow.style.transform = "rotate(0deg)";
  } else {
    mobileServicesMenu.style.maxHeight = mobileServicesMenu.scrollHeight + "px";
    arrow.style.transform = "rotate(180deg)";
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const currentPath = window.location.pathname.split("/").pop();
  const navLinks = document.querySelectorAll(".nav-link");

  navLinks.forEach((link) => {
    const linkPath = link.getAttribute("data-path");
    if (linkPath === currentPath) {
      link.classList.add("active");
    }
  });
});

let currentSlide = 0;
const totalSlides = 3;
const carouselTrack = document.getElementById("carousel-track");
const indicators = document.querySelectorAll(".carousel-indicator");
const heroSlides = document.querySelectorAll(".hero-slide");

function goToSlide(index) {
  currentSlide = index;
  const translateX = -currentSlide * 100;
  carouselTrack.style.transform = `translateX(${translateX}%)`;
  updateIndicators();
  heroSlides.forEach((slide) => slide.classList.add("overflow-hidden"));
  heroSlides.forEach((slide) => slide.classList.remove("overflow-visible"));
  heroSlides[currentSlide].classList.add("overflow-visible");
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  goToSlide(currentSlide);
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  goToSlide(currentSlide);
}

function updateIndicators() {
  indicators.forEach((btn, idx) => {
    btn.classList.toggle("active", idx === currentSlide);
  });
}

// Auto-slide
let autoSlide = setInterval(nextSlide, 6000);

// Controls
document.getElementById("nextBtn").addEventListener("click", () => {
  nextSlide();
  resetAutoSlide();
});

document.getElementById("prevBtn").addEventListener("click", () => {
  prevSlide();
  resetAutoSlide();
});

indicators.forEach((btn) => {
  btn.addEventListener("click", () => {
    const slideIndex = parseInt(btn.dataset.slide);
    goToSlide(slideIndex);
    resetAutoSlide();
  });
});

function resetAutoSlide() {
  clearInterval(autoSlide);
  autoSlide = setInterval(nextSlide, 5000);
}

// Initial state
updateIndicators();

document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("testimonial-track");
  const cards = track.querySelectorAll("div.flex-shrink-0");
  const prevBtn = document.getElementById("testimonial-prev");
  const nextBtn = document.getElementById("testimonial-next");

  let currentIndex = 0;
  const visibleCards = 3;
  const totalCards = cards.length;

  function updateCarousel() {
    const cardWidth = cards[0].offsetWidth + 16; // includes px-2
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
  }

  function nextSlide() {
    if (currentIndex < totalCards - visibleCards) {
      currentIndex++;
    } else {
      currentIndex = 0;
    }
    updateCarousel();
  }

  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = totalCards - visibleCards;
    }
    updateCarousel();
  }

  prevBtn.addEventListener("click", prevSlide);
  nextBtn.addEventListener("click", nextSlide);

  // Auto-slide every 5 seconds
  setInterval(nextSlide, 5000);
});

// Initial setup
window.addEventListener("load", updateCarousel);
window.addEventListener("resize", updateCarousel);
