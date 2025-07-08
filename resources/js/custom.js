// Faq accordion functionality
document.querySelectorAll(".accordion-toggle").forEach((button) => {
    button.addEventListener("click", () => {
        const content = button.nextElementSibling;
        const icon = button.querySelector(".icon");

        content.classList.toggle("hidden");

        if (content.classList.contains("hidden")) {
            icon.textContent = "+";
        } else {
            icon.textContent = "−"; // minus sign
        }
    });
});

//Octagon slider js
document.addEventListener("DOMContentLoaded", () => {
    const sliders = document.querySelectorAll(".emotions-slider");

    if (!sliders.length) return;

    const list = [];

    sliders.forEach((element) => {
        const [slider, prevEl, nextEl, pagination] = [
            element.querySelector(".swiper"),
            element.querySelector(".slider-nav__item_prev"),
            element.querySelector(".slider-nav__item_next"),
            element.querySelector(".slider-pagination"),
        ];

        list.push(
            new Swiper(slider, {
                slidesPerView: "auto",
                spaceBetween: 20,
                speed: 600,
                observer: true,
                watchOverflow: true,
                watchSlidesProgress: true,
                centeredSlides: true,
                initialSlide: 1,
                navigation: { nextEl, prevEl, disabledClass: "disabled" },
                pagination: {
                    el: pagination,
                    type: "bullets",
                    modifierClass: "slider-pagination",
                    bulletClass: "slider-pagination__item",
                    bulletActiveClass: "active",
                    clickable: true,
                },
                breakpoints: {
                    768: { spaceBetween: 40 },
                },
            })
        );
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const carousel = document.getElementById("carousel");
    const prev = document.getElementById("prev");
    const next = document.getElementById("next");
    const cardWrappers = document.querySelectorAll(".card-wrapper");
    const cards = document.querySelectorAll(".card");

    let angle = 0;
    const cardCount = cardWrappers.length;
    const angleIncrement = 360 / cardCount;

    // Function to update active card border
    function updateActiveCard() {
        const activeIndex = Math.round((-angle / angleIncrement) % cardCount);
        const normalizedIndex =
            activeIndex < 0
                ? (cardCount + (activeIndex % cardCount)) % cardCount
                : activeIndex % cardCount;

        cards.forEach((card, index) => {
            card.style.border = "1px solid rgba(255, 255, 255, 0.2)";
            card.classList.remove("active-card"); // Remove active class from all
        });

        if (normalizedIndex >= 0 && normalizedIndex < cards.length) {
            const activeCard = cards[normalizedIndex];
            activeCard.style.border = "1px solid rgba(255, 62, 62, 0.3)";
            activeCard.classList.add("active-card"); // Add active class to front card
        }
    }

    function rotateTo(newAngle) {
        angle = newAngle;
        carousel.style.transition = "transform 0.5s ease";
        carousel.style.transform = `rotateX(-10deg) rotateY(${angle}deg)`;

        // Update active card styling
        updateActiveCard();

        setTimeout(() => {
            carousel.style.transition = "none";
        }, 500);
    }

    prev.addEventListener("click", () => rotateTo(angle + angleIncrement));
    next.addEventListener("click", () => rotateTo(angle - angleIncrement));

    // Initial render
    carousel.style.transform = `rotateX(-10deg) rotateY(${angle}deg)`;
    updateActiveCard(); // Set initial active card

    // Add keyboard navigation
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") {
            rotateTo(angle + angleIncrement);
        } else if (e.key === "ArrowRight") {
            rotateTo(angle - angleIncrement);
        }
    });
});
