<?php get_header(); ?>
<style>
  /* About Page Specific Styles */
  .about-intro {
    padding: 100px 0;
    background: var(--white);
    position: relative;
  }
  .about-intro::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(at 30% 30%, rgba(232,93,58,0.04) 0%, transparent 50%),
      radial-gradient(at 80% 70%, rgba(232,93,58,0.03) 0%, transparent 50%);
    pointer-events: none;
  }
  .about-intro-grid {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
  }
  .about-photo-col {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 16px;
  }
  .about-photo-wrapper {
    position: relative;
    width: 300px;
    height: 380px;
    border-radius: var(--radius-lg);
    overflow: hidden;
    background: linear-gradient(160deg, #FFF5F0 0%, #FFE8D6 100%);
    box-shadow: var(--shadow-lg);
  }
  .about-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top center;
    display: block;
  }
  .about-photo-wrapper::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 30%;
    background: linear-gradient(to top, rgba(232,93,58,0.08), transparent);
    z-index: 1;
    pointer-events: none;
  }
  .photo-linkedin {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 8px 20px;
    border-radius: var(--radius-full);
    background: rgba(232,93,58,0.06);
    font-family: var(--font-heading);
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--royal-blue);
    transition: var(--transition);
  }
  .photo-linkedin svg {
    fill: var(--royal-blue);
  }
  .photo-linkedin:hover {
    background: rgba(232,93,58,0.12);
    transform: translateY(-2px);
  }
  .about-text h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 20px;
  }
  .about-text p {
    font-size: 1rem;
    color: #555;
    line-height: 1.8;
    margin-bottom: 16px;
    font-weight: 300;
  }

  /* Mission & Vision */
  .mission-section {
    padding: 100px 0;
    background: var(--lavender-white);
    position: relative;
  }
  .mission-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
  }
  .mission-card {
    padding: 48px 36px;
    text-align: center;
  }
  .mission-icon {
    width: 72px;
    height: 72px;
    margin: 0 auto 24px;
    background: rgba(232,93,58,0.08);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .mission-icon svg {
    width: 32px;
    height: 32px;
    color: var(--royal-blue);
  }
  .mission-card h3 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 16px;
  }
  .mission-card p {
    font-size: 0.95rem;
    color: var(--light-gray);
    line-height: 1.7;
    font-weight: 300;
  }

  /* Who We Support */
  .support-section {
    padding: 100px 0;
    background: var(--white);
  }
  .support-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
  }
  .support-card {
    text-align: center;
    padding: 40px 24px;
  }
  .support-card-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 20px;
    background: var(--lavender-white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.8rem;
  }
  .support-card h3 {
    font-size: 1.05rem;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .support-card p {
    font-size: 0.88rem;
    color: var(--light-gray);
    line-height: 1.6;
    font-weight: 300;
  }

  /* Founder Message */
  .founder-section {
    padding: 100px 0;
    background: var(--lavender-white);
    position: relative;
  }
  .founder-card {
    max-width: 800px;
    margin: 0 auto;
    padding: 48px;
    display: flex;
    gap: 36px;
    align-items: center;
  }
  .founder-card img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid var(--royal-blue);
    flex-shrink: 0;
  }
  .founder-card blockquote {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--deep-indigo);
    font-style: italic;
    font-weight: 400;
    border-left: 4px solid var(--royal-blue);
    padding-left: 24px;
    margin-bottom: 16px;
  }
  .founder-card .guide-name {
    font-family: var(--font-heading);
    font-size: 1rem;
    font-weight: 700;
  }
  .founder-card .guide-role {
    font-size: 0.85rem;
    color: var(--light-gray);
  }

  /* FAQ */
  .faq-section {
    padding: 100px 0;
    background: var(--white);
  }
  .faq-list {
    max-width: 760px;
    margin: 0 auto;
  }
  .faq-item {
    border-bottom: 1px solid rgba(232,93,58,0.08);
  }
  .faq-question {
    width: 100%;
    text-align: left;
    padding: 24px 0;
    font-family: var(--font-heading);
    font-size: 1.05rem;
    font-weight: 600;
    color: var(--deep-indigo);
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    transition: var(--transition);
  }
  .faq-question:hover { color: var(--royal-blue); }
  .faq-question .faq-icon {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    background: var(--lavender-white);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    transition: var(--transition);
  }
  .faq-question .faq-icon svg {
    width: 14px;
    height: 14px;
    color: var(--royal-blue);
    transition: var(--transition);
  }
  .faq-item.active .faq-icon { background: var(--royal-blue); }
  .faq-item.active .faq-icon svg { color: var(--white); transform: rotate(180deg); }
  .faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
  }
  .faq-answer p {
    padding: 0 0 24px;
    font-size: 0.95rem;
    color: #555;
    line-height: 1.8;
    font-weight: 300;
  }

  @media (max-width: 768px) {
    .about-intro-grid { grid-template-columns: 1fr; text-align: center; }
    .about-photo-col { margin: 0 auto; }
    .about-photo-wrapper { width: 220px; height: 280px; }
    .about-photo { width: 100%; height: 100%; }
    .mission-grid { grid-template-columns: 1fr; }
    .support-grid { grid-template-columns: 1fr 1fr; }
    .founder-card { flex-direction: column; text-align: center; }
    .founder-card blockquote { text-align: left; }
  }
  @media (max-width: 480px) {
    .support-grid { grid-template-columns: 1fr; }
    .founder-card { padding: 28px; }
  }
</style>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <h1><?php scholvia_te('about_hero_title_prefix'); ?> <span class="text-gradient"><?php scholvia_te('about_hero_title_gradient'); ?></span></h1>
    <p><?php scholvia_te('about_hero_subtitle'); ?></p>
  </div>
</section>

<!-- ========== WHO WE ARE ========== -->
<section class="about-intro">
  <div class="container">
    <div class="about-intro-grid">
      <div class="about-photo-col reveal-left">
        <div class="about-photo-wrapper">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/NEW.JPG" alt="<?php echo esc_attr(scholvia_t('guide_photo_alt')); ?>" class="about-photo">
        </div>
        <a href="https://www.linkedin.com/in/citragustina/" target="_blank" rel="noopener" class="linkedin-link photo-linkedin">
          <svg viewBox="0 0 24 24" width="18" height="18"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          <span>Citra Agustina</span>
        </a>
      </div>
      <div class="about-text reveal-right">
        <span class="section-label"><?php scholvia_te('about_label'); ?></span>
        <h2><?php scholvia_te('about_title'); ?></h2>
        <p><?php scholvia_te('about_text_1'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ========== MISSION & VISION ========== -->
<section class="mission-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('mission_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('mission_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('mission_subtitle'); ?></p>
    </div>
    <div class="mission-grid">
      <div class="glass-card mission-card reveal">
        <div class="mission-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/></svg>
        </div>
        <h3><?php scholvia_te('mission_card_title'); ?></h3>
        <p><?php scholvia_te('mission_card_text'); ?></p>
      </div>
      <div class="glass-card mission-card reveal" style="transition-delay: 0.1s;">
        <div class="mission-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3><?php scholvia_te('vision_card_title'); ?></h3>
        <p><?php scholvia_te('vision_card_text'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ========== WHO WE SUPPORT ========== -->
<section class="support-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('support_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('support_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('support_subtitle'); ?></p>
    </div>
    <div class="support-grid">
      <div class="glass-card support-card reveal">
        <div class="support-card-icon">&#127891;</div>
        <h3><?php scholvia_te('support_card1_title'); ?></h3>
        <p><?php scholvia_te('support_card1_text'); ?></p>
      </div>
      <div class="glass-card support-card reveal" style="transition-delay: 0.1s;">
        <div class="support-card-icon">&#128218;</div>
        <h3><?php scholvia_te('support_card2_title'); ?></h3>
        <p><?php scholvia_te('support_card2_text'); ?></p>
      </div>
      <div class="glass-card support-card reveal" style="transition-delay: 0.2s;">
        <div class="support-card-icon">&#128106;</div>
        <h3><?php scholvia_te('support_card3_title'); ?></h3>
        <p><?php scholvia_te('support_card3_text'); ?></p>
      </div>
      <div class="glass-card support-card reveal" style="transition-delay: 0.3s;">
        <div class="support-card-icon">&#127757;</div>
        <h3><?php scholvia_te('support_card4_title'); ?></h3>
        <p><?php scholvia_te('support_card4_text'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOUNDER MESSAGE ========== -->
<section class="founder-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('founder_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('founder_title'); ?></h2>
    </div>
    <div class="glass-card founder-card reveal">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/NEW.JPG" alt="<?php echo esc_attr(scholvia_t('guide_photo_alt')); ?>">
      <div>
        <blockquote><?php scholvia_te('founder_quote'); ?></blockquote>
        <p class="guide-name">Citra Agustina <a href="https://www.linkedin.com/in/citragustina/" target="_blank" rel="noopener" class="linkedin-link" aria-label="<?php echo esc_attr(scholvia_t('guide_linkedin_aria')); ?>"><svg viewBox="0 0 24 24" width="18" height="18" style="vertical-align: middle; margin-left: 6px; fill: #E85D3A;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a></p>
        <p class="guide-role"><?php scholvia_te('founder_role'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ========== FAQ ========== -->
<section class="faq-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('faq_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('faq_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('faq_subtitle'); ?></p>
    </div>
    <div class="faq-list">
      <div class="faq-item reveal">
        <button class="faq-question">
          <?php scholvia_te('faq_q1'); ?>
          <span class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg></span>
        </button>
        <div class="faq-answer">
          <p><?php scholvia_te('faq_a1'); ?></p>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question">
          <?php scholvia_te('faq_q2'); ?>
          <span class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg></span>
        </button>
        <div class="faq-answer">
          <p><?php scholvia_te('faq_a2'); ?></p>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question">
          <?php scholvia_te('faq_q3'); ?>
          <span class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg></span>
        </button>
        <div class="faq-answer">
          <p><?php scholvia_te('faq_a3'); ?></p>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question">
          <?php scholvia_te('faq_q4'); ?>
          <span class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg></span>
        </button>
        <div class="faq-answer">
          <p><?php scholvia_te('faq_a4'); ?></p>
        </div>
      </div>
      <div class="faq-item reveal">
        <button class="faq-question">
          <?php scholvia_te('faq_q5'); ?>
          <span class="faq-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg></span>
        </button>
        <div class="faq-answer">
          <p><?php scholvia_te('faq_a5'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA ========== -->
<section class="cta-section">
  <div class="container reveal">
    <h2><?php scholvia_te('cta_title'); ?></h2>
    <p><?php scholvia_te('cta_text'); ?></p>
    <div class="cta-buttons">
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary"><?php scholvia_te('cta_btn_consultation'); ?></a>
      <a href="https://wa.me/6281388666994" target="_blank" rel="noopener" class="btn btn-outline"><?php scholvia_te('cta_btn_whatsapp'); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
