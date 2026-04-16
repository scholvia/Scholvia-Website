<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(is_front_page() ? '' : 'inner-page'); ?>>

<!-- Scroll Progress -->
<div class="scroll-progress"></div>

<!-- Navigation -->
<nav class="navbar">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-white.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-white">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-color.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-color">
    </a>
    <div class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="nav-links">
      <a href="<?php echo esc_url(home_url('/')); ?>"<?php if (is_front_page()) echo ' class="active"'; ?>><?php esc_html_e('Home', 'scholvia-landing'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>"<?php if (is_page('about')) echo ' class="active"'; ?>><?php esc_html_e('About', 'scholvia-landing'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>"<?php if (is_page('services')) echo ' class="active"'; ?>><?php esc_html_e('Services', 'scholvia-landing'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>"<?php if (is_page('contact')) echo ' class="active"'; ?>><?php esc_html_e('Contact', 'scholvia-landing'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="nav-cta"><?php esc_html_e('Get Started', 'scholvia-landing'); ?></a>
    </div>
  </div>
</nav>
