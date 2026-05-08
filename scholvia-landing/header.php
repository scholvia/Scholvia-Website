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
    <a href="<?php echo esc_url(function_exists('pll_home_url') ? pll_home_url() : home_url('/')); ?>" class="nav-logo">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-white.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-white">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo-color.png" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo-color">
    </a>
    <div class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="nav-links">
      <a href="<?php echo esc_url(function_exists('pll_home_url') ? pll_home_url() : home_url('/')); ?>"<?php if (is_front_page()) echo ' class="active"'; ?>><?php scholvia_te('nav_home'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>"<?php if (is_page('about') || is_page('tentang') || is_page('tentang-kami') || is_page('guanyu')) echo ' class="active"'; ?>><?php scholvia_te('nav_about'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>"<?php if (is_page('services') || is_page('layanan') || is_page('perkhidmatan') || is_page('fuwu')) echo ' class="active"'; ?>><?php scholvia_te('nav_services'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>"<?php if (is_page('contact') || is_page('kontak') || is_page('hubungi') || is_page('lianxi')) echo ' class="active"'; ?>><?php scholvia_te('nav_contact'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('partner'))); ?>"<?php if (is_page('partner') || is_page('mitra') || is_page('rakan-kongsi') || is_page('hezuo')) echo ' class="active"'; ?>><?php scholvia_te('nav_partner'); ?></a>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="nav-cta"><?php scholvia_te('nav_get_started'); ?></a>
      <?php if (function_exists('pll_the_languages')) : ?>
      <div class="lang-switcher">
        <?php
        $current_lang = pll_current_language('slug');
        $lang_labels = array('en' => 'EN', 'id' => 'ID', 'ms' => 'MS', 'zh' => '中文');
        ?>
        <button type="button" class="lang-current" aria-expanded="false" aria-haspopup="true"><?php echo esc_html($lang_labels[$current_lang] ?? 'EN'); ?> <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
        <div class="lang-dropdown">
          <?php
          $languages = pll_the_languages(array('raw' => 1));
          foreach ($languages as $lang) :
            if ($lang['slug'] === $current_lang) continue;
          ?>
            <a href="<?php echo esc_url($lang['url']); ?>"><?php echo esc_html($lang_labels[$lang['slug']] ?? $lang['name']); ?></a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</nav>
