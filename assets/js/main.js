document.addEventListener("DOMContentLoaded", function () {
  const hero = document.querySelector("h1.sl-hero__headline");
  if (hero) {
    hero.setAttribute("data-aos", "fade-down");
  }

  const tag = document.querySelector(".sl-hero__subhead");
  if (tag) {
    Object.assign(tag.dataset, {
      aos: "fade-in",
      duration: "1000",
    });
  }

  const services = document.querySelector(".services-shell");
  if (services) {
    services.setAttribute("data-aos", "fade-left");
  }

  const servicesCta = document.querySelector(".services-cta");
  if (servicesCta) {
    servicesCta.setAttribute("data-aos", "fade-up");
  }

  const contactForm = document.querySelector(".contact-form-panel");
  if (contactForm) {
    Object.assign(contactForm.dataset, {
      aos: "fade-in",
      duration: "2000",
    });
  }

  requestAnimationFrame(function () {
    AOS.init({
      duration: 700,
      once: true,
      offset: 60,
    });
  });
});
