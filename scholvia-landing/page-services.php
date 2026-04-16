<?php get_header(); ?>
<style>
  /* Services Page Specific Styles */
  .service-block {
    padding: 80px 0;
    position: relative;
  }
  .service-block:nth-child(odd) { background: var(--lavender-white); }
  .service-block:nth-child(even) { background: var(--white); }

  .service-block::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(at 20% 30%, rgba(232,93,58,0.03) 0%, transparent 50%),
      radial-gradient(at 80% 70%, rgba(232,93,58,0.02) 0%, transparent 50%);
    pointer-events: none;
  }

  .service-inner {
    display: grid;
    grid-template-columns: 80px 1fr;
    gap: 36px;
    align-items: start;
    position: relative;
  }

  .service-icon-box {
    width: 80px;
    height: 80px;
    background: rgba(232,93,58,0.08);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  .service-icon-box svg {
    width: 36px;
    height: 36px;
    color: var(--royal-blue);
  }

  .service-content h2 {
    font-size: 1.8rem;
    font-weight: 800;
    margin-bottom: 12px;
  }
  .service-content > p {
    font-size: 1rem;
    color: #555;
    line-height: 1.8;
    margin-bottom: 20px;
    font-weight: 300;
    max-width: 700px;
  }

  .service-features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px 24px;
    margin-bottom: 20px;
  }
  .service-features li {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.92rem;
    color: var(--deep-indigo);
    font-weight: 400;
    padding: 6px 0;
  }
  .service-features li::before {
    content: '';
    width: 20px;
    height: 20px;
    min-width: 20px;
    border-radius: 50%;
    background: rgba(232,93,58,0.08);
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%234361EE'%3E%3Cpath fill-rule='evenodd' d='M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z' clip-rule='evenodd'/%3E%3C/svg%3E");
    background-size: 12px;
    background-repeat: no-repeat;
    background-position: center;
  }

  .service-note {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: rgba(232,93,58,0.06);
    border-radius: var(--radius-full);
    font-size: 0.85rem;
    color: var(--royal-blue);
    font-weight: 500;
  }
  .service-note svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
  }

  /* Why Choose Us Dark Section */
  .why-choose-section {
    padding: 100px 0;
    background: var(--deep-indigo);
    position: relative;
    overflow: hidden;
  }
  .why-choose-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse at 30% 30%, rgba(232,93,58,0.2) 0%, transparent 50%),
      radial-gradient(ellipse at 70% 70%, rgba(255,200,160,0.08) 0%, transparent 50%);
    pointer-events: none;
  }
  .why-choose-section .section-label { color: rgba(232,93,58,0.8); }
  .why-choose-section .section-title { color: var(--white); }
  .why-choose-section .section-subtitle { color: rgba(255,255,255,0.5); }

  .why-choose-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    position: relative;
    z-index: 2;
  }

  .why-choose-card {
    text-align: center;
    padding: 48px 28px;
  }
  .why-choose-card-icon {
    width: 64px;
    height: 64px;
    margin: 0 auto 20px;
    background: rgba(232,93,58,0.12);
    border-radius: var(--radius-md);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .why-choose-card-icon svg {
    width: 28px;
    height: 28px;
    color: var(--royal-blue);
  }
  .why-choose-card h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 12px;
  }
  .why-choose-card p {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.5);
    line-height: 1.7;
    font-weight: 300;
  }

  /* Extras */
  .extras-section {
    padding: 80px 0;
    background: var(--lavender-white);
  }
  .extras-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
  }
  .extras-card {
    padding: 40px;
    text-align: center;
  }
  .extras-card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 12px;
  }
  .extras-card p {
    font-size: 0.92rem;
    color: var(--light-gray);
    line-height: 1.7;
    font-weight: 300;
  }
  .extras-icon {
    font-size: 2.5rem;
    margin-bottom: 16px;
  }

  @media (max-width: 768px) {
    .service-inner { grid-template-columns: 1fr; }
    .service-icon-box { width: 64px; height: 64px; }
    .service-icon-box svg { width: 28px; height: 28px; }
    .service-features { grid-template-columns: 1fr; }
    .why-choose-grid { grid-template-columns: 1fr; max-width: 400px; margin: 0 auto; }
    .extras-grid { grid-template-columns: 1fr; }
  }
</style>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <h1><?php scholvia_te('services_hero_title_prefix'); ?> <span class="text-gradient"><?php scholvia_te('services_hero_title_gradient'); ?></span></h1>
    <p><?php scholvia_te('services_hero_subtitle'); ?></p>
  </div>
</section>

<!-- ========== SERVICE 1: University Enrollment ========== -->
<div class="service-block">
  <div class="container">
    <div class="service-inner reveal">
      <div class="service-icon-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
      </div>
      <div class="service-content">
        <h2><?php scholvia_te('svc1_title'); ?></h2>
        <p><?php scholvia_te('svc1_text'); ?></p>
        <ul class="service-features">
          <li><?php scholvia_te('svc1_feature1'); ?></li>
          <li><?php scholvia_te('svc1_feature2'); ?></li>
          <li><?php scholvia_te('svc1_feature3'); ?></li>
          <li><?php scholvia_te('svc1_feature4'); ?></li>
          <li><?php scholvia_te('svc1_feature5'); ?></li>
          <li><?php scholvia_te('svc1_feature6'); ?></li>
        </ul>
        <div class="service-note">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5a17.36 17.36 0 01-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
          <?php scholvia_te('svc1_note'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== SERVICE 2: Language Courses ========== -->
<div class="service-block">
  <div class="container">
    <div class="service-inner reveal">
      <div class="service-icon-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364V3m0 2.364a48.498 48.498 0 013.414.262M9.334 5.364C7.89 8.654 6.813 11.222 6.292 12.69m3.042-7.326a48.5 48.5 0 013.414.262m0 0A48.4 48.4 0 0118 7.35"/></svg>
      </div>
      <div class="service-content">
        <h2><?php scholvia_te('svc2_title'); ?></h2>
        <p><?php scholvia_te('svc2_text'); ?></p>
        <ul class="service-features">
          <li><?php scholvia_te('svc2_feature1'); ?></li>
          <li><?php scholvia_te('svc2_feature2'); ?></li>
          <li><?php scholvia_te('svc2_feature3'); ?></li>
          <li><?php scholvia_te('svc2_feature4'); ?></li>
          <li><?php scholvia_te('svc2_feature5'); ?></li>
          <li><?php scholvia_te('svc2_feature6'); ?></li>
        </ul>
        <div class="service-note">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          <?php scholvia_te('svc2_note'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== SERVICE 3: Visa Consultation ========== -->
<div class="service-block">
  <div class="container">
    <div class="service-inner reveal">
      <div class="service-icon-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z"/></svg>
      </div>
      <div class="service-content">
        <h2><?php scholvia_te('svc3_title'); ?></h2>
        <p><?php scholvia_te('svc3_text'); ?></p>
        <ul class="service-features">
          <li><?php scholvia_te('svc3_feature1'); ?></li>
          <li><?php scholvia_te('svc3_feature2'); ?></li>
          <li><?php scholvia_te('svc3_feature3'); ?></li>
          <li><?php scholvia_te('svc3_feature4'); ?></li>
          <li><?php scholvia_te('svc3_feature5'); ?></li>
          <li><?php scholvia_te('svc3_feature6'); ?></li>
        </ul>
        <div class="service-note">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
          <?php scholvia_te('svc3_note'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== SERVICE 4: Education-Tourism ========== -->
<div class="service-block">
  <div class="container">
    <div class="service-inner reveal">
      <div class="service-icon-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"/></svg>
      </div>
      <div class="service-content">
        <h2><?php scholvia_te('svc4_title'); ?></h2>
        <p><?php scholvia_te('svc4_text'); ?></p>
        <ul class="service-features">
          <li><?php scholvia_te('svc4_feature1'); ?></li>
          <li><?php scholvia_te('svc4_feature2'); ?></li>
          <li><?php scholvia_te('svc4_feature3'); ?></li>
          <li><?php scholvia_te('svc4_feature4'); ?></li>
          <li><?php scholvia_te('svc4_feature5'); ?></li>
          <li><?php scholvia_te('svc4_feature6'); ?></li>
        </ul>
        <div class="service-note">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
          <?php scholvia_te('svc4_note'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== SERVICE 5: 24/7 Support ========== -->
<div class="service-block">
  <div class="container">
    <div class="service-inner reveal">
      <div class="service-icon-box">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
      </div>
      <div class="service-content">
        <h2><?php scholvia_te('svc5_title'); ?></h2>
        <p><?php scholvia_te('svc5_text'); ?></p>
        <ul class="service-features">
          <li><?php scholvia_te('svc5_feature1'); ?></li>
          <li><?php scholvia_te('svc5_feature2'); ?></li>
          <li><?php scholvia_te('svc5_feature3'); ?></li>
          <li><?php scholvia_te('svc5_feature4'); ?></li>
          <li><?php scholvia_te('svc5_feature5'); ?></li>
          <li><?php scholvia_te('svc5_feature6'); ?></li>
        </ul>
        <div class="service-note">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
          <?php scholvia_te('svc5_note'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== WHY CHOOSE US (Dark Section) ========== -->
<section class="why-choose-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('svc_why_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('svc_why_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('svc_why_subtitle'); ?></p>
    </div>
    <div class="why-choose-grid">
      <div class="glass-card-dark why-choose-card reveal">
        <div class="why-choose-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card1_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card1_text'); ?></p>
      </div>
      <div class="glass-card-dark why-choose-card reveal" style="transition-delay: 0.1s;">
        <div class="why-choose-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card2_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card2_text'); ?></p>
      </div>
      <div class="glass-card-dark why-choose-card reveal" style="transition-delay: 0.2s;">
        <div class="why-choose-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card3_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card3_text'); ?></p>
      </div>
      <div class="glass-card-dark why-choose-card reveal" style="transition-delay: 0.3s;">
        <div class="why-choose-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
        </div>
        <h3><?php scholvia_te('svc_why_card4_title'); ?></h3>
        <p><?php scholvia_te('svc_why_card4_text'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ========== EXTRAS ========== -->
<section class="extras-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label"><?php scholvia_te('extras_label'); ?></span>
      <h2 class="section-title"><?php scholvia_te('extras_title'); ?></h2>
      <p class="section-subtitle"><?php scholvia_te('extras_subtitle'); ?></p>
    </div>
    <div class="extras-grid">
      <div class="glass-card extras-card reveal">
        <div class="extras-icon">&#128197;</div>
        <h3><?php scholvia_te('extras_card1_title'); ?></h3>
        <p><?php scholvia_te('extras_card1_text'); ?></p>
      </div>
      <div class="glass-card extras-card reveal" style="transition-delay: 0.1s;">
        <div class="extras-icon">&#127942;</div>
        <h3><?php scholvia_te('extras_card2_title'); ?></h3>
        <p><?php scholvia_te('extras_card2_text'); ?></p>
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
