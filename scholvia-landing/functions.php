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
    wp_enqueue_style('scholvia-main', get_template_directory_uri() . '/assets/css/main.css', array(), '2.3.2');

    // Main script
    wp_enqueue_script('scholvia-main', get_template_directory_uri() . '/assets/js/main.js', array(), '2.3.2', true);

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

// =====================================================================
// Polylang: force correct templates for translated pages
// =====================================================================
add_filter('template_include', function ($template) {
    if (!function_exists('pll_current_language')) return $template;

    // Map translated slugs to their English template equivalents
    $slug = get_post_field('post_name', get_the_ID());
    $home_slugs = array('beranda', 'utama', 'shouye');
    $about_slugs = array('tentang', 'tentang-kami', 'guanyu');
    $services_slugs = array('layanan', 'perkhidmatan', 'fuwu');
    $contact_slugs = array('kontak', 'hubungi', 'lianxi');
    $partner_slugs = array('mitra', 'rakan-kongsi', 'hezuo');

    $theme_dir = get_template_directory();

    if (in_array($slug, $home_slugs)) {
        return $theme_dir . '/front-page.php';
    } elseif (in_array($slug, $about_slugs)) {
        return $theme_dir . '/page-about.php';
    } elseif (in_array($slug, $services_slugs)) {
        return $theme_dir . '/page-services.php';
    } elseif (in_array($slug, $contact_slugs)) {
        return $theme_dir . '/page-contact.php';
    } elseif (in_array($slug, $partner_slugs)) {
        return $theme_dir . '/page-partner.php';
    }

    return $template;
});

// =====================================================================
// Translation System (Polylang integration)
// =====================================================================

/**
 * Get all translation strings.
 * Loaded once and cached in a static variable for the request lifecycle.
 *
 * @return array Associative array of all translations keyed by string ID,
 *               each containing sub-arrays for 'en', 'id', 'ms', 'zh'.
 */
function scholvia_translations() {
    static $translations = null;
    if ($translations === null) {
        $translations = require get_template_directory() . '/inc/translations.php';
    }
    return $translations;
}

/**
 * Get a translated string for the current language.
 *
 * Uses Polylang's pll_current_language() to detect language, with 'en' as fallback.
 *
 * @param  string $key  The translation key (e.g. 'nav_home', 'hero_title_line1').
 * @return string       The translated string, or the English fallback, or the key itself if not found.
 */
function scholvia_t($key) {
    static $lang = null;
    if ($lang === null) {
        $lang = function_exists('pll_current_language') ? pll_current_language('slug') : 'en';
        if (empty($lang)) {
            $lang = 'en';
        }
    }
    $translations = scholvia_translations();
    if (!isset($translations[$key])) {
        return $key; // Key not found — return key itself for debugging
    }
    // Return current language, fall back to English
    if (isset($translations[$key][$lang])) {
        return $translations[$key][$lang];
    }
    return $translations[$key]['en'] ?? $key;
}

/**
 * Echo a translated string (convenience wrapper).
 *
 * @param string $key The translation key.
 */
function scholvia_te($key) {
    echo esc_html(scholvia_t($key));
}

/**
 * Echo a translated string without escaping (for strings containing HTML like <strong>).
 *
 * @param string $key The translation key.
 */
function scholvia_te_raw($key) {
    echo wp_kses_post(scholvia_t($key));
}

// Contact form handler
function scholvia_handle_contact_form() {
    if (!isset($_POST['scholvia_contact_nonce']) || !wp_verify_nonce($_POST['scholvia_contact_nonce'], 'scholvia_contact')) {
        wp_send_json_error(scholvia_t('ajax_invalid_request'));
    }

    $name    = sanitize_text_field($_POST['name'] ?? '');
    $email   = sanitize_email($_POST['email'] ?? '');
    $phone   = sanitize_text_field($_POST['phone'] ?? '');
    $service = sanitize_text_field($_POST['service'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(scholvia_t('ajax_fill_required'));
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
        wp_send_json_success(scholvia_t('ajax_success'));
    } else {
        wp_send_json_error(scholvia_t('ajax_fail'));
    }
}
add_action('wp_ajax_scholvia_contact', 'scholvia_handle_contact_form');
add_action('wp_ajax_nopriv_scholvia_contact', 'scholvia_handle_contact_form');
