// scripts/main.js

// Smooth scroll for navigation links & collapse mobile menu
const navLinks = document.querySelectorAll("nav ul li a");
const nav = document.querySelector("nav");
navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute("href"));
    target.scrollIntoView({ behavior: "smooth", block: "start" });

    // Collapse mobile menu after click
    if (nav.classList.contains("open")) {
      nav.classList.remove("open");
    }

    // Add click animation effect
    link.classList.add("active");
    setTimeout(() => link.classList.remove("active"), 300);
  });
});

// Mobile menu toggle
const menuToggle = document.querySelector(".menu-toggle");
menuToggle.addEventListener("click", () => {
  nav.classList.toggle("open");
});

// Section reveal on scroll
const sections = document.querySelectorAll("section");
const observerOptions = { threshold: 0.15 };
const revealOnScroll = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observer.unobserve(entry.target);
    }
  });
}, observerOptions);
sections.forEach((sec) => {
  sec.classList.add("hidden");
  revealOnScroll.observe(sec);
});

// Lightbox gallery effect
const galleryImages = document.querySelectorAll(".gallery img");
galleryImages.forEach((img) => {
  img.addEventListener("click", () => {
    const overlay = document.createElement("div");
    overlay.classList.add("lightbox-overlay");
    const enlarged = document.createElement("img");
    enlarged.src = img.src;
    enlarged.alt = img.alt;
    overlay.appendChild(enlarged);
    document.body.appendChild(overlay);
    overlay.addEventListener("click", () => document.body.removeChild(overlay));
  });
});

// Scroll to top button
const toTopBtn = document.createElement("button");
toTopBtn.classList.add("to-top");
toTopBtn.textContent = "⤴";
document.body.appendChild(toTopBtn);
toTopBtn.addEventListener("click", () =>
  window.scrollTo({ top: 0, behavior: "smooth" })
);
window.addEventListener("scroll", () => {
  if (window.scrollY > 500) toTopBtn.classList.add("show");
  else toTopBtn.classList.remove("show");
});

// Typing effect in hero
const heroText = document.querySelector(".hero h1");
const messages = [
  "Willkommen bei Princess Beauty & Nail",
  "Glamour für Ihre Nägel",
  "Entspannung und Beauty",
];
let msgIndex = 0,
  charIndex = 0;
function type() {
  if (charIndex < messages[msgIndex].length) {
    heroText.textContent += messages[msgIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, 100);
  } else setTimeout(erase, 2000);
}
function erase() {
  if (charIndex > 0) {
    heroText.textContent = messages[msgIndex].substring(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, 50);
  } else {
    msgIndex = (msgIndex + 1) % messages.length;
    setTimeout(type, 500);
  }
}
type();

// Parallax effect for hero background
window.addEventListener("scroll", () => {
  const scrolled = window.pageYOffset;
  document.querySelector(".hero").style.backgroundPositionY = `${
    scrolled * 0.5
  }px`;
});
link.classList.add("active");
setTimeout(() => link.classList.remove("active"), 300);

//HIỆU ỨNG SHRINK
document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const navLinks = document.querySelectorAll("nav ul li a");

  // Shrink when scroll
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      header.classList.add("shrink");
    } else {
      header.classList.remove("shrink");
    }
  });

  // Shrink when clicking any nav item (for mobile/smooth transition)
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      header.classList.add("shrink");
    });
  });
});
document
  .querySelector(".booking-form")
  .addEventListener("submit", async function (e) {
    e.preventDefault();
    const data = {
      name: document.getElementById("name").value,
      phone: document.getElementById("phone").value,
      service: document.getElementById("service").value,
      date: document.getElementById("date").value,
      notes: document.getElementById("notes").value,
    };

    const response = await fetch("/api/booking", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(data),
    });

    const result = await response.json();
    alert(result.message);
    if (response.ok) {
      this.reset();
    }
  });

document
  .querySelector(".booking-form")
  .addEventListener("submit", async (e) => {
    e.preventDefault(); // Ngăn form gửi truyền thống

    const data = {
      name: document.getElementById("name").value,
      phone: document.getElementById("phone").value,
      service: document.getElementById("service").value,
      date: document.getElementById("date").value,
      notes: document.getElementById("notes").value,
    };

    try {
      const response = await fetch("/api/booking", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(data),
      });

      const result = await response.json();
      alert(result.message);
    } catch (error) {
      console.error("Fehler beim Senden:", error);
      alert("❌ Fehler beim Senden der Anfrage.");
    }
  });
