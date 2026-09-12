document.addEventListener("DOMContentLoaded", function () {
  const hero = document.querySelector("h1.sl-hero__headline");

  if (hero) {
    Object.assign(hero.dataset, {
      aos: "fade-down",
      aosDuration: "700",
    });
  }

  const tag = document.querySelector(".sl-hero__subhead");

  if (tag) {
    Object.assign(tag.dataset, {
      aos: "fade",
      aosDuration: "1000",
    });
  }

  const services = document.querySelector(".services-shell");

  if (services) {
    Object.assign(services.dataset, {
      aos: "fade-left",
      aosDuration: "900",
    });
  }

  const servicesCta = document.querySelector(".services-cta");

  if (servicesCta) {
    Object.assign(servicesCta.dataset, {
      aos: "fade-up",
      aosDuration: "700",
    });
  }

  const contactForm = document.querySelector(".contact-form-panel");

  if (contactForm) {
    Object.assign(contactForm.dataset, {
      aos: "fade",
      aosDuration: "2000",
    });
  }

  if (typeof window.AOS !== "undefined") {
    window.AOS.init({
      duration: 700,
      once: true,
      offset: 60,
    });
  } else {
    console.error("AOS has not loaded.");
  }
});
