<?php get_header(); ?>

  <!-- ========== HERO ========== -->
  <section class="hero">
    <video class="hero-video" autoplay muted loop playsinline>
      <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/video/hero-bg.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>
    <div class="hero-dots"></div>
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="hero-badge"><?php scholvia_te('hero_badge'); ?></div>
          <h1 class="hero-title"><?php scholvia_te('hero_title_line1'); ?><br><?php scholvia_te('hero_title_line2'); ?> <span class="text-gradient"><?php scholvia_te('hero_title_gradient'); ?></span></h1>
          <p class="hero-subtitle"><?php scholvia_te('hero_subtitle'); ?></p>
          <div class="hero-buttons">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary"><?php scholvia_te('hero_btn_consultation'); ?></a>
            <a href="#how-it-works" class="btn btn-outline"><?php scholvia_te('hero_btn_how_it_works'); ?></a>
          </div>
        </div>
        <div class="hero-dashboard">
          <div class="dashboard-header"><?php scholvia_te('dashboard_header'); ?></div>
          <div class="dashboard-stats">
            <div class="stat-item">
              <div class="stat-value"><span data-counter="98" data-suffix="%">0%</span></div>
              <div class="stat-label"><?php scholvia_te('stat_visa_success'); ?></div>
            </div>
            <div class="stat-item">
              <div class="stat-value"><span data-counter="100" data-suffix="+">0+</span></div>
              <div class="stat-label"><?php scholvia_te('stat_students_placed'); ?></div>
            </div>
            <div class="stat-item">
              <div class="stat-value"><span data-counter="4.9" data-suffix="/5">0/5</span></div>
              <div class="stat-label"><?php scholvia_te('stat_student_rating'); ?></div>
            </div>
            <div class="stat-item">
              <div class="stat-value"><span data-counter="5" data-suffix="+">0+</span></div>
              <div class="stat-label"><?php scholvia_te('stat_partner_unis'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TRUST SIGNALS BAR ========== -->
  <section class="trust-bar reveal">
    <div class="container">
      <div class="trust-grid">
        <div class="trust-item">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>
          </div>
          <span class="trust-text"><?php scholvia_te('trust_licensed'); ?></span>
        </div>
        <div class="trust-item">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
          </div>
          <span class="trust-text"><?php scholvia_te('trust_partner_institutions'); ?></span>
        </div>
        <div class="trust-item">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/></svg>
          </div>
          <span class="trust-text"><?php scholvia_te('trust_247_support'); ?></span>
        </div>
        <div class="trust-item">
          <div class="trust-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/></svg>
          </div>
          <span class="trust-text"><?php scholvia_te('trust_no_hidden_fees'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== WHY STUDENTS CHOOSE US ========== -->
  <section class="why-section">
    <div class="container text-center">
      <div class="reveal">
        <span class="section-label"><?php scholvia_te('why_label'); ?></span>
        <h2 class="section-title"><?php scholvia_te('why_title'); ?></h2>
        <p class="section-subtitle"><?php scholvia_te('why_subtitle'); ?></p>
      </div>
      <div class="why-grid">
        <div class="glass-card why-card reveal">
          <div class="why-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/></svg>
          </div>
          <h3><?php scholvia_te('why_card1_title'); ?></h3>
          <p><?php scholvia_te('why_card1_text'); ?></p>
        </div>
        <div class="glass-card why-card reveal" style="transition-delay: 0.1s;">
          <div class="why-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/></svg>
          </div>
          <h3><?php scholvia_te('why_card2_title'); ?></h3>
          <p><?php scholvia_te('why_card2_text'); ?></p>
        </div>
        <div class="glass-card why-card reveal" style="transition-delay: 0.2s;">
          <div class="why-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
          </div>
          <h3><?php scholvia_te('why_card3_title'); ?></h3>
          <p><?php scholvia_te('why_card3_text'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== A DAY IN THE LIFE ========== -->
  <section class="day-section">
    <div class="container text-center">
      <div class="reveal">
        <span class="section-label"><?php scholvia_te('day_label'); ?></span>
        <h2 class="section-title"><?php scholvia_te('day_title'); ?></h2>
        <p class="section-subtitle"><?php scholvia_te('day_subtitle'); ?></p>
      </div>
      <div class="day-grid">
        <div class="day-card reveal">
          <div class="day-card-top morning">
            <span class="day-badge"><?php scholvia_te('day_morning'); ?></span>
            <span class="day-emoji">&#9749;</span>
          </div>
          <div class="day-card-body">
            <h3><?php scholvia_te('day_card1_title'); ?></h3>
            <p class="student-name"><?php scholvia_te('day_card1_name'); ?></p>
            <blockquote><?php scholvia_te('day_card1_quote'); ?></blockquote>
          </div>
        </div>
        <div class="day-card reveal" style="transition-delay: 0.1s;">
          <div class="day-card-top afternoon">
            <span class="day-badge"><?php scholvia_te('day_afternoon'); ?></span>
            <span class="day-emoji">&#128187;</span>
          </div>
          <div class="day-card-body">
            <h3><?php scholvia_te('day_card2_title'); ?></h3>
            <p class="student-name"><?php scholvia_te('day_card2_name'); ?></p>
            <blockquote><?php scholvia_te('day_card2_quote'); ?></blockquote>
          </div>
        </div>
        <div class="day-card reveal" style="transition-delay: 0.2s;">
          <div class="day-card-top evening">
            <span class="day-badge"><?php scholvia_te('day_evening'); ?></span>
            <span class="day-emoji">&#127769;</span>
          </div>
          <div class="day-card-body">
            <h3><?php scholvia_te('day_card3_title'); ?></h3>
            <p class="student-name"><?php scholvia_te('day_card3_name'); ?></p>
            <blockquote><?php scholvia_te('day_card3_quote'); ?></blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== HOW IT WORKS ========== -->
  <section class="steps-section" id="how-it-works">
    <div class="container text-center">
      <div class="reveal">
        <span class="section-label"><?php scholvia_te('steps_label'); ?></span>
        <h2 class="section-title"><?php scholvia_te('steps_title'); ?></h2>
        <p class="section-subtitle"><?php scholvia_te('steps_subtitle'); ?></p>
      </div>
      <div class="stepper reveal">
        <div class="stepper-line"></div>
        <div class="step">
          <div class="step-circle">1</div>
          <h3><?php scholvia_te('step1_title'); ?></h3>
          <p><?php scholvia_te('step1_text'); ?></p>
        </div>
        <div class="step">
          <div class="step-circle">2</div>
          <h3><?php scholvia_te('step2_title'); ?></h3>
          <p><?php scholvia_te('step2_text'); ?></p>
        </div>
        <div class="step">
          <div class="step-circle">3</div>
          <h3><?php scholvia_te('step3_title'); ?></h3>
          <p><?php scholvia_te('step3_text'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== MEET YOUR GUIDE ========== -->
  <section class="guide-section">
    <div class="container">
      <div class="text-center reveal">
        <span class="section-label"><?php scholvia_te('guide_label'); ?></span>
        <h2 class="section-title"><?php scholvia_te('guide_title'); ?></h2>
      </div>
      <div class="guide-grid" style="margin-top: 48px;">
        <div class="reveal-left">
          <div class="guide-photo-wrapper">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/citra.png" alt="<?php echo esc_attr(scholvia_t('guide_photo_alt')); ?>" class="guide-photo">
          </div>
        </div>
        <div class="guide-content reveal-right">
          <blockquote><?php scholvia_te('guide_quote'); ?></blockquote>
          <p class="guide-name"><?php scholvia_te('guide_name'); ?> <a href="https://www.linkedin.com/in/citragustina/" target="_blank" rel="noopener" class="linkedin-link" aria-label="<?php echo esc_attr(scholvia_t('guide_linkedin_aria')); ?>"><svg viewBox="0 0 24 24" width="18" height="18" style="vertical-align: middle; margin-left: 6px; fill: #E85D3A;"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a></p>
          <p class="guide-role"><?php scholvia_te('guide_role'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TRANSPARENCY DASHBOARD ========== -->
  <section class="transparency-section">
    <div class="container text-center">
      <div class="reveal">
        <span class="section-label"><?php scholvia_te('transparency_label'); ?></span>
        <h2 class="section-title"><?php scholvia_te('transparency_title'); ?></h2>
        <p class="section-subtitle"><?php scholvia_te('transparency_subtitle'); ?></p>
      </div>
      <div class="transparency-grid">
        <div class="glass-card-dark metric-card reveal">
          <div class="metric-value"><span data-counter="98" data-suffix="%">0%</span></div>
          <div class="metric-label"><?php scholvia_te('transparency_visa_rate'); ?></div>
          <div class="metric-bar"><div class="metric-bar-fill" data-width="98%"></div></div>
        </div>
        <div class="glass-card-dark metric-card reveal" style="transition-delay: 0.1s;">
          <div class="metric-value"><?php scholvia_te('transparency_processing'); ?></div>
          <div class="metric-label"><?php scholvia_te('transparency_processing_label'); ?></div>
          <div class="metric-bar"><div class="metric-bar-fill" data-width="75%"></div></div>
        </div>
        <div class="glass-card-dark metric-card reveal" style="transition-delay: 0.2s;">
          <div class="metric-value"><span data-counter="4.9" data-suffix="/5">0/5</span></div>
          <div class="metric-label"><?php scholvia_te('transparency_satisfaction'); ?></div>
          <div class="metric-bar"><div class="metric-bar-fill" data-width="96%"></div></div>
        </div>
        <div class="glass-card-dark metric-card reveal" style="transition-delay: 0.3s;">
          <div class="metric-value"><?php scholvia_te('transparency_free'); ?></div>
          <div class="metric-label"><?php scholvia_te('transparency_post_arrival'); ?></div>
          <div class="metric-bar"><div class="metric-bar-fill" data-width="100%"></div></div>
        </div>
      </div>
      <p class="transparency-note reveal"><?php scholvia_te('transparency_note'); ?></p>
    </div>
  </section>

  <!-- ========== TESTIMONIALS ========== -->
  <section class="testimonials-section">
    <div class="container text-center">
      <div class="reveal">
        <span class="section-label"><?php scholvia_te('testimonials_label'); ?></span>
        <h2 class="section-title"><?php scholvia_te_raw('testimonials_title'); ?></h2>
        <p class="section-subtitle"><?php scholvia_te('testimonials_subtitle'); ?></p>
      </div>
      <div class="testimonials-grid">
        <!-- Rizky -->
        <div class="glass-card testimonial-card border-blue reveal">
          <div class="testimonial-header">
            <div class="testimonial-avatar bg-blue">RA</div>
            <div class="testimonial-info">
              <h4>Rizky Aditya</h4>
              <span><?php scholvia_te('testimonial_rizky_role'); ?></span>
            </div>
          </div>
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p><?php scholvia_te('testimonial_rizky_text'); ?></p>
          <span class="testimonial-tag tag-student"><?php scholvia_te('testimonial_student_tag'); ?></span>
        </div>
        <!-- Siti (Parent) -->
        <div class="glass-card testimonial-card border-magenta reveal" style="transition-delay: 0.1s;">
          <div class="testimonial-header">
            <div class="testimonial-avatar bg-magenta">SW</div>
            <div class="testimonial-info">
              <h4>Siti Wulandari</h4>
              <span><?php scholvia_te('testimonial_siti_role'); ?></span>
            </div>
          </div>
          <p><?php scholvia_te('testimonial_siti_text'); ?></p>
          <span class="testimonial-tag tag-parent"><?php scholvia_te('testimonial_parent_tag'); ?></span>
        </div>
        <!-- Dinda -->
        <div class="glass-card testimonial-card border-blue reveal">
          <div class="testimonial-header">
            <div class="testimonial-avatar bg-blue">DP</div>
            <div class="testimonial-info">
              <h4>Dinda Permata</h4>
              <span><?php scholvia_te('testimonial_dinda_role'); ?></span>
            </div>
          </div>
          <div class="testimonial-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p><?php scholvia_te('testimonial_dinda_text'); ?></p>
          <span class="testimonial-tag tag-student"><?php scholvia_te('testimonial_student_tag'); ?></span>
        </div>
        <!-- Fajar -->
        <div class="glass-card testimonial-card border-blue reveal" style="transition-delay: 0.1s;">
          <div class="testimonial-header">
            <div class="testimonial-avatar bg-blue">FM</div>
            <div class="testimonial-info">
              <h4>Fajar Maulana</h4>
              <span><?php scholvia_te('testimonial_fajar_role'); ?></span>
            </div>
          </div>
          <p><?php scholvia_te('testimonial_fajar_text'); ?></p>
          <span class="testimonial-tag tag-student"><?php scholvia_te('testimonial_student_tag'); ?></span>
        </div>
        <!-- Budi (Parent) -->
        <div class="glass-card testimonial-card border-magenta reveal">
          <div class="testimonial-header">
            <div class="testimonial-avatar bg-magenta">BH</div>
            <div class="testimonial-info">
              <h4>Budi Hartono</h4>
              <span><?php scholvia_te('testimonial_budi_role'); ?></span>
            </div>
          </div>
          <p><?php scholvia_te('testimonial_budi_text'); ?></p>
          <span class="testimonial-tag tag-parent"><?php scholvia_te('testimonial_parent_tag'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
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
