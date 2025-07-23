document.addEventListener("DOMContentLoaded", () => {
  const carousels = [
    {
      containerId: "testimonial-carousel",
      nextId: "next-review",
      prevId: "prev-review",
    },
    {
      containerId: "kingtech-carousel",
      nextId: "kingtech-next",
      prevId: "kingtech-prev",
    },
    {
      containerId: "kingbot-carousel",
      nextId: "kingbot-next",
      prevId: "kingbot-prev",
    },
    {
      containerId: "kingpay-carousel",
      nextId: "kingpay-next",
      prevId: "kingpay-prev",
    },
    {
      containerId: "kingmedia-carousel",
      nextId: "kingmedia-next",
      prevId: "kingmedia-prev",
    },
  ];

  carousels.forEach(({ containerId, nextId, prevId }) => {
    const container = document.getElementById(containerId);
    const nextBtn = document.getElementById(nextId);
    const prevBtn = document.getElementById(prevId);
    if (!container || !nextBtn || !prevBtn) return;

    const total = container.children.length;
    let currentIndex = 0;

    function getVisible() {
      return window.innerWidth < 1024 ? 1 : 3;
    }

    function updateCarousel() {
      const visible = getVisible();
      const maxIndex = total - visible;
      if (currentIndex < 0) currentIndex = 0;
      if (currentIndex > maxIndex) currentIndex = maxIndex;
      const translateX = -(currentIndex * (100 / visible));
      container.style.transform = `translateX(${translateX}%)`;
    }

    nextBtn.addEventListener("click", () => {
      currentIndex++;
      updateCarousel();
    });

    prevBtn.addEventListener("click", () => {
      currentIndex--;
      updateCarousel();
    });

    // Recalculate on resize
    window.addEventListener("resize", updateCarousel);

    // Initial update
    updateCarousel();
  });
});