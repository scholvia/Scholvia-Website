<?php
/**
 * Scholvia Landing Theme Functions — Version D (2.0.0)
 */

// Let WordPress manage the document title
add_theme_support('title-tag');

// Remove unnecessary WordPress head output
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

// Hide admin bar on front-end to avoid pushing down the fixed nav
add_filter('show_admin_bar', '__return_false');

// Enqueue theme assets
function scholvia_enqueue_assets() {
    // Google Fonts — Outfit (300-800) + DM Sans (300,400,500,700 + italic 400)
    wp_enqueue_style(
        'scholvia-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style('scholvia-main', get_template_directory_uri() . '/assets/css/main.css', array(), '2.1.0');

    // Main script
    wp_enqueue_script('scholvia-main', get_template_directory_uri() . '/assets/js/main.js', array(), '2.1.0', true);

    // Localize AJAX URL for the contact form script
    wp_localize_script('scholvia-main', 'scholvia_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('scholvia_contact'),
    ));
}
add_action('wp_enqueue_scripts', 'scholvia_enqueue_assets');

// Dequeue default WordPress block styles (not needed for this theme)
function scholvia_dequeue_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('classic-theme-styles');
}
add_action('wp_enqueue_scripts', 'scholvia_dequeue_styles', 100);

// Contact form handler
function scholvia_handle_contact_form() {
    if (!isset($_POST['scholvia_contact_nonce']) || !wp_verify_nonce($_POST['scholvia_contact_nonce'], 'scholvia_contact')) {
        wp_send_json_error('Invalid request.');
    }

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $service = sanitize_text_field($_POST['service'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error('Please fill in all required fields.');
    }

    $to      = 'study@scholvia.com';
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );
    $body = '<p><strong>Name:</strong> ' . esc_html($name) . '</p>'
          . '<p><strong>Email:</strong> ' . esc_html($email) . '</p>'
          . '<p><strong>Phone:</strong> ' . esc_html($phone) . '</p>'
          . '<p><strong>Service:</strong> ' . esc_html($service) . '</p>'
          . '<p><strong>Subject:</strong> ' . esc_html($subject) . '</p>'
          . '<p><strong>Message:</strong><br>' . nl2br(esc_html($message)) . '</p>';

    $sent = wp_mail($to, 'Contact Form: ' . $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success('Message sent successfully!');
    } else {
        wp_send_json_error('Failed to send message. Please try again.');
    }
}
add_action('wp_ajax_scholvia_contact', 'scholvia_handle_contact_form');
add_action('wp_ajax_nopriv_scholvia_contact', 'scholvia_handle_contact_form');
