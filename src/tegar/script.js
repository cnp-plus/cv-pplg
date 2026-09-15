"use strict";

/* =========================================================
   ELEMENT
========================================================= */

const header = document.querySelector("#site-header");
const navToggle = document.querySelector("#nav-toggle");
const mainNav = document.querySelector("#main-nav");

const navLinks = document.querySelectorAll(".nav-link");
const sections = document.querySelectorAll("main section[id]");

const revealElements = document.querySelectorAll(".reveal");
const skillItems = document.querySelectorAll(".skill-item");

const profileImage = document.querySelector("#profile-image");
const imagePlaceholder = document.querySelector("#image-placeholder");

const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
).matches;


/* =========================================================
   MOBILE NAVIGATION
========================================================= */

function closeMobileMenu() {
    if (!navToggle || !mainNav) return;

    navToggle.classList.remove("open");
    mainNav.classList.remove("open");

    navToggle.setAttribute("aria-expanded", "false");
    navToggle.setAttribute("aria-label", "Buka navigasi");
}

function openMobileMenu() {
    if (!navToggle || !mainNav) return;

    navToggle.classList.add("open");
    mainNav.classList.add("open");

    navToggle.setAttribute("aria-expanded", "true");
    navToggle.setAttribute("aria-label", "Tutup navigasi");
}

if (navToggle) {
    navToggle.addEventListener("click", () => {
        const isOpen = navToggle.classList.contains("open");

        if (isOpen) {
            closeMobileMenu();
        } else {
            openMobileMenu();
        }
    });
}


/* =========================================================
   CLOSE NAVIGATION
========================================================= */

navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        closeMobileMenu();
    });
});

document.addEventListener("click", (event) => {
    if (!mainNav || !navToggle) return;

    const clickedInside =
        mainNav.contains(event.target) ||
        navToggle.contains(event.target);

    if (!clickedInside) {
        closeMobileMenu();
    }
});

document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        closeMobileMenu();
    }
});


/* =========================================================
   HEADER SCROLL
========================================================= */

function updateHeader() {
    if (!header) return;

    header.classList.toggle(
        "scrolled",
        window.scrollY > 20
    );
}

window.addEventListener(
    "scroll",
    updateHeader,
    { passive: true }
);

updateHeader();


/* =========================================================
   ACTIVE NAVIGATION
========================================================= */

const sectionObserver = new IntersectionObserver(
    (entries) => {

        entries.forEach((entry) => {

            if (!entry.isIntersecting) {
                return;
            }

            const sectionId =
                entry.target.getAttribute("id");

            navLinks.forEach((link) => {

                const target =
                    link.getAttribute("href");

                link.classList.toggle(
                    "active",
                    target === `#${sectionId}`
                );

            });
        });
    },
    {
        root: null,
        rootMargin: "-35% 0px -55% 0px",
        threshold: 0
    }
);

sections.forEach((section) => {
    sectionObserver.observe(section);
});


/* =========================================================
   REVEAL ANIMATION
========================================================= */

if (prefersReducedMotion) {

    revealElements.forEach((element) => {
        element.classList.add("is-visible");
    });

} else {

    const revealObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach((entry) => {

                if (!entry.isIntersecting) {
                    return;
                }

                entry.target.classList.add("is-visible");

                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.12,
            rootMargin: "0px 0px -60px 0px"
        }
    );

    revealElements.forEach((element) => {
        revealObserver.observe(element);
    });
}


/* =========================================================
   SKILL ANIMATION
========================================================= */

function animateSkill(skillItem) {

    const progress =
        skillItem.querySelector(".skill-progress");

    const target =
        Number(skillItem.dataset.skill);

    if (!progress || Number.isNaN(target)) {
        return;
    }

    progress.style.width = `${target}%`;
}

if (prefersReducedMotion) {

    skillItems.forEach((skill) => {
        animateSkill(skill);
    });

} else {

    const skillObserver = new IntersectionObserver(
        (entries, observer) => {

            entries.forEach((entry) => {

                if (!entry.isIntersecting) {
                    return;
                }

                animateSkill(entry.target);

                observer.unobserve(entry.target);
            });
        },
        {
            threshold: 0.35
        }
    );

    skillItems.forEach((skill) => {
        skillObserver.observe(skill);
    });
}


/* =========================================================
   PROFILE IMAGE FALLBACK
========================================================= */

if (profileImage && imagePlaceholder) {

    profileImage.addEventListener("load", () => {
        imagePlaceholder.style.display = "none";
    });

    profileImage.addEventListener("error", () => {

        profileImage.classList.add("is-hidden");

        imagePlaceholder.style.display = "flex";
    });
}


/* =========================================================
   RESPONSIVE NAVIGATION RESET
========================================================= */

window.addEventListener("resize", () => {

    if (window.innerWidth > 760) {
        closeMobileMenu();
    }

});