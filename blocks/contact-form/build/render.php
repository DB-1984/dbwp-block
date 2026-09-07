<?php

if (!defined('ABSPATH')) {
	exit;
}

$wrapper_attributes = get_block_wrapper_attributes([
	'class' => 'contact-form-block',
]);
?>

<div <?php echo $wrapper_attributes; ?>>

    <form class="contact-form" data-contact-form
        data-endpoint="<?php echo esc_url(rest_url('dbwp/v1/contact-form')); ?>" method="post">
        <div class="contact-form-row">

            <div class="contact-form-field">
                <label for="contact-first-name">
                    First name <span aria-hiddenlir="true">*</span>
                </label>

                <input type="text" id="contact-first-name" name="firstName" autocomplete="given-name" required>
            </div>

            <div class="contact-form-field">
                <label for="contact-last-name">
                    Last name
                </label>

                <input type="text" id="contact-last-name" name="lastName" autocomplete="family-name">
            </div>

        </div>

        <div class="contact-form-row">

            <div class="contact-form-field">
                <label for="contact-email">
                    Email address <span aria-hidden="true">*</span>
                </label>

                <input type="email" id="contact-email" name="email" autocomplete="email" required>
            </div>

            <div class="contact-form-field">
                <label for="contact-url">
                    Website URL
                </label>

                <input type="url" id="contact-url" name="url" autocomplete="url" inputmode="url" placeholder="https://">
            </div>

        </div>

        <div class="contact-form-field">
            <label for="contact-message">
                How can we help? <span aria-hidden="true">*</span>
            </label>

            <textarea id="contact-message" name="message" rows="7" required></textarea>
        </div>

        <div class="contact-form-honeypot" aria-hidden="true">
            <label for="contact-company">Company</label>

            <input type="text" id="contact-company" name="company" tabindex="-1" autocomplete="off">
        </div>

        <div class="contact-form-actions">

            <button class="contact-form-submit" type="submit">
                Send message
            </button>

            <p class="contact-form-status" data-form-status role="status" aria-live="polite" aria-atomic="true"></p>

        </div>

    </form>

</div>