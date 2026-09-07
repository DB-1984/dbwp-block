export default class FormHandler {
  constructor() {
    this.form = document.getElementById("contact-form");

    if (!this.form) {
      return;
    }

    this.status = this.form.querySelector("[data-form-status]");
    this.form.addEventListener("submit", this.handleSubmit.bind(this));
  }

  async handleSubmit(event) {
    event.preventDefault();

    if (!this.form.reportValidity()) {
      return;
    }

    const submitButton = this.form.querySelector('[type="submit"]');
    const formData = new FormData(this.form);

    submitButton.disabled = true;
    this.setStatus("Sending…");

    try {
      const response = await fetch("/wp-json/dbwp/v1/contact-form", {
        method: "POST",
        body: formData,
        headers: {
          Accept: "application/json",
        },
      });

      const data = await response.json().catch(() => null);

      if (!response.ok) {
        throw new Error(data?.message || "Your message could not be sent.");
      }

      this.form.reset();
      this.setStatus(
        data?.message || "Thank you. We will get back to you soon.",
        "success"
      );
    } catch (error) {
      this.setStatus(error.message, "error");
    } finally {
      submitButton.disabled = false;
    }
  }

  setStatus(message, state = "") {
    if (!this.status) {
      return;
    }

    this.status.textContent = message;
    this.status.dataset.state = state;
  }
}
