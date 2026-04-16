<?php get_header(); ?>
<style>
  /* Partner Page Specific Styles */
  .partner-intro {
    padding: 80px 0 100px;
    background: var(--white);
    position: relative;
  }
  .partner-intro::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(at 20% 30%, rgba(232,93,58,0.04) 0%, transparent 50%),
      radial-gradient(at 80% 70%, rgba(232,93,58,0.03) 0%, transparent 50%);
    pointer-events: none;
  }
  .partner-intro-inner {
    max-width: 720px;
    margin: 0 auto;
    text-align: center;
    position: relative;
  }
  .partner-intro-inner h2 {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 20px;
  }
  .partner-intro-inner p {
    font-size: 1.05rem;
    color: #555;
    line-height: 1.8;
    font-weight: 300;
  }

  /* Core Service Block */
  .core-service {
    padding: 80px 0;
    background: var(--lavender-white);
    position: relative;
  }
  .core-service::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(at 30% 40%, rgba(232,93,58,0.03) 0%, transparent 50%),
      radial-gradient(at 70% 60%, rgba(232,93,58,0.02) 0%, transparent 50%);
    pointer-events: none;
  }
  .core-service-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
    position: relative;
  }
  .core-service-content h2 {
    font-size: 1.8rem;
    font-weight: 800;
    margin-bottom: 16px;
  }
  .core-service-content > p {
    font-size: 1rem;
    color: #555;
    line-height: 1.8;
    font-weight: 300;
    margin-bottom: 24px;
  }

  .partner-features {
    display: flex;
    flex-direction: column;
    gap: 12px;
  }
  .partner-features li {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 0.95rem;
    color: var(--deep-indigo);
    font-weight: 400;
    padding: 8px 0;
  }
  .partner-features li::before {
    content: '';
    width: 24px;
    height: 24px;
    min-width: 24px;
    border-radius: 50%;
    background: rgba(232,93,58,0.08);
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%234361EE'%3E%3Cpath fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'/%3E%3C/svg%3E");
    background-size: 14px;
    background-repeat: no-repeat;
    background-position: center;
  }

  /* Process Steps */
  .process-sidebar {
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,0.5);
    border-radius: var(--radius-lg);
    padding: 40px;
  }
  .process-sidebar h3 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 24px;
  }
  .process-steps {
    display: flex;
    flex-direction: column;
    gap: 0;
  }
  .process-step {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 14px 0;
    position: relative;
  }
  .process-step:not(:last-child) {
    border-bottom: 1px solid rgba(232,93,58,0.08);
  }
  .step-number {
    width: 32px;
    height: 32px;
    min-width: 32px;
    border-radius: 50%;
    background: rgba(232,93,58,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-heading);
    font-weight: 700;
    font-size: 0.85rem;
    color: var(--royal-blue);
  }
  .step-text {
    font-size: 0.92rem;
    color: var(--deep-indigo);
    padding-top: 5px;
  }

  /* Market Focus */
  .market-section {
    padding: 80px 0;
    background: var(--white);
  }
  .market-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    position: relative;
  }
  .market-card {
    text-align: center;
    padding: 40px 28px;
  }
  .market-icon {
    font-size: 2.5rem;
    margin-bottom: 16px;
  }
  .market-card h3 {
    font-size: 1.1rem;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .market-card p {
    font-size: 0.9rem;
    color: var(--light-gray);
    line-height: 1.7;
    font-weight: 300;
  }
  .market-card .badge {
    display: inline-block;
    margin-top: 12px;
    padding: 4px 14px;
    border-radius: var(--radius-full);
    font-size: 0.75rem;
    font-weight: 600;
    font-family: var(--font-heading);
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  .badge-primary { background: rgba(232,93,58,0.1); color: var(--royal-blue); }
  .badge-secondary { background: rgba(42,31,26,0.06); color: var(--deep-indigo); }

  /* Why Partner (Dark) */
  .why-partner-section {
    padding: 100px 0;
    background: var(--deep-indigo);
    position: relative;
    overflow: hidden;
  }
  .why-partner-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse at 30% 30%, rgba(232,93,58,0.2) 0%, transparent 50%),
      radial-gradient(ellipse at 70% 70%, rgba(255,200,160,0.08) 0%, transparent 50%);
    pointer-events: none;
  }
  .why-partner-section .section-label { color: rgba(232,93,58,0.8); }
  .why-partner-section .section-title { color: var(--white); }
  .why-partner-section .section-subtitle { color: rgba(255,255,255,0.5); }

  .why-partner-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    position: relative;
    z-index: 2;
  }
  .why-partner-grid .glass-card-dark {
    text-align: center;
    padding: 48px 28px;
  }
  .why-partner-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 20px;
    background: rgba(232,93,58,0.12);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .why-partner-icon svg {
    width: 28px;
    height: 28px;
    color: var(--royal-blue);
  }
  .why-partner-grid h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 12px;
  }
  .why-partner-grid p {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.5);
    line-height: 1.7;
    font-weight: 300;
  }

  /* Contact CTA for Partners */
  .partner-cta {
    padding: 80px 0;
    background: var(--lavender-white);
    text-align: center;
  }
  .partner-cta-inner {
    max-width: 600px;
    margin: 0 auto;
  }
  .partner-cta-inner h2 {
    font-size: 2rem;
    font-weight: 800;
    margin-bottom: 16px;
  }
  .partner-cta-inner > p {
    font-size: 1rem;
    color: #555;
    line-height: 1.8;
    font-weight: 300;
    margin-bottom: 32px;
  }
  .partner-contact-info {
    display: flex;
    flex-direction: column;
    gap: 12px;
    align-items: center;
    margin-bottom: 32px;
  }
  .partner-contact-info a {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 1rem;
    font-weight: 500;
    color: var(--deep-indigo);
    transition: var(--transition);
  }
  .partner-contact-info a:hover { color: var(--royal-blue); }
  .partner-contact-info svg {
    width: 20px;
    height: 20px;
    color: var(--royal-blue);
  }
  .partner-socials {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 24px;
  }
  .partner-socials a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(232,93,58,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
  }
  .partner-socials a:hover {
    background: var(--royal-blue);
  }
  .partner-socials svg {
    width: 18px;
    height: 18px;
    fill: var(--royal-blue);
  }
  .partner-socials a:hover svg { fill: var(--white); }

  @media (max-width: 768px) {
    .core-service-inner { grid-template-columns: 1fr; }
    .market-grid { grid-template-columns: 1fr; max-width: 400px; margin: 0 auto; }
    .why-partner-grid { grid-template-columns: 1fr; max-width: 400px; margin: 0 auto; }
  }
</style>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <h1><?php scholvia_te('partner_hero_title_prefix'); ?> <span class="text-gradient"><?php scholvia_te('partner_hero_title_gradient'); ?></span></h1>
    <p><?php scholvia_te('partner_hero_subtitle'); ?></p>
  </div>
</section>

<!-- ========== INTRO ========== -->
<section class="partner-intro">
  <div class="container">
    <div class="partner-intro-inner reveal">
      <h2><?php scholvia_te('partner_intro_title'); ?></h2>
      <p><?php scholvia_te('partner_intro_text'); ?></p>
    </div>
  </div>
</section>

<!-- ========== CORE SERVICE + PROCESS ========== -->
<section class="core-service">
  <div class="container">
    <div class="core-service-inner reveal">
      <div class="core-service-content">
        <span class="section-label"><?php scholvia_te('partner_core_label'); ?></span>
        <h2><?php scholvia_te('partner_core_title'); ?></h2>
        <p><?php scholvia_te('partner_core_text'); ?></p>
        <ul class="partner-features">
          <li><?php scholvia_te('partner_feature1'); ?></li>
          <li><?php scholvia_te('partner_feature2'); ?></li>
          <li><?php scholvia_te('partner_feature3'); ?></li>
          <li><?php scholvia_te('partner_feature4'); ?></li>
          <li><?php scholvia_te('partner_feature5'); ?></li>
          <li><?php scholvia_te('partner_feature6'); ?></li>
        </ul>
      </div>
      <div class="process-sidebar">
        <h3><?php scholvia_te('partner_process_title'); ?></h3>
        <div class="process-steps">
          <div class="process-step">
            <span class="step-number">1</span>
            <span class="step-text"><?php scholvia_te('partner_step1'); ?></span>
          </div>
          <div class="process-step">
            <span class="step-number">2</span>
            <span class="step-text"><?php scholvia_te('partner_step2'); ?></span>
          </div>
          <div class="process-step">
            <span class="step-number">3</span>
            <span class="step-text"><?php scholvia_te('partner_step3'); ?></span>
          </div>
          <div class="process-step">
            <span class="step-number">4</span>
            <span class="step-text"><?php scholvia_te('partner_step4'); ?></span>
          </div>
          <div class="process-step">
            <span class="step-number">5</span>
            <span class="step-text"><?php scholvia_te('partner_step5'); ?></span>
          </div>
          <div class="process-step">
            <span class="step-number">6</span>
            <span class="step-text"><?php scholvia_te('partner_step6'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== MARKET FOCUS ========== -->
<section class="market-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('partner_market_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('partner_market_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('partner_market_subtitle'); ?></p>
    </div>
    <div class="market-grid">
      <div class="glass-card market-card reveal">
        <div class="market-icon">&#127470;&#127465;</div>
        <h3><?php scholvia_te('partner_market1_title'); ?></h3>
        <p><?php scholvia_te('partner_market1_text'); ?></p>
        <span class="badge badge-primary"><?php scholvia_te('partner_market1_badge'); ?></span>
      </div>
      <div class="glass-card market-card reveal" style="transition-delay: 0.1s;">
        <div class="market-icon">&#127468;&#127463;</div>
        <h3><?php scholvia_te('partner_market2_title'); ?></h3>
        <p><?php scholvia_te('partner_market2_text'); ?></p>
        <span class="badge badge-secondary"><?php scholvia_te('partner_market2_badge'); ?></span>
      </div>
      <div class="glass-card market-card reveal" style="transition-delay: 0.2s;">
        <div class="market-icon">&#127758;</div>
        <h3><?php scholvia_te('partner_market3_title'); ?></h3>
        <p><?php scholvia_te('partner_market3_text'); ?></p>
        <span class="badge badge-secondary"><?php scholvia_te('partner_market3_badge'); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- ========== WHY PARTNER (Dark) ========== -->
<section class="why-partner-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('partner_why_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('svc_why_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('svc_why_subtitle'); ?></p>
    </div>
    <div class="why-partner-grid">
      <div class="glass-card-dark reveal">
        <div class="why-partner-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card1_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card1_text'); ?></p>
      </div>
      <div class="glass-card-dark reveal" style="transition-delay: 0.1s;">
        <div class="why-partner-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card2_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card2_text'); ?></p>
      </div>
      <div class="glass-card-dark reveal" style="transition-delay: 0.2s;">
        <div class="why-partner-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card3_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card3_text'); ?></p>
      </div>
      <div class="glass-card-dark reveal" style="transition-delay: 0.3s;">
        <div class="why-partner-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card4_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card4_text'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ========== CONTACT CTA ========== -->
<section class="partner-cta">
  <div class="container">
    <div class="partner-cta-inner reveal">
      <span class="section-label"><?php scholvia_te('partner_cta_label'); ?></span>
      <h2><?php scholvia_te('partner_cta_title'); ?></h2>
      <p><?php scholvia_te('partner_cta_text'); ?></p>
      <div class="partner-contact-info">
        <a href="mailto:study@scholvia.com">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
          study@scholvia.com
        </a>
        <a href="https://scholvia.com" target="_blank" rel="noopener">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5a17.36 17.36 0 01-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
          scholvia.com
        </a>
      </div>
      <a href="mailto:study@scholvia.com" class="btn btn-primary"><?php scholvia_te('partner_btn_start'); ?></a>
      <div class="partner-socials">
        <a href="https://instagram.com/scholviaofficial" target="_blank" rel="noopener" aria-label="<?php echo esc_attr(scholvia_t('social_instagram')); ?>">
          <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
        </a>
        <a href="https://linkedin.com/company/scholvia/" target="_blank" rel="noopener" aria-label="<?php echo esc_attr(scholvia_t('social_linkedin')); ?>">
          <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
        <a href="https://facebook.com/share/1Yma7Hx8Kg/" target="_blank" rel="noopener" aria-label="<?php echo esc_attr(scholvia_t('social_facebook')); ?>">
          <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
