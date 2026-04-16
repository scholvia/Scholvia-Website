<?php get_header(); ?>
<style>
  /* Contact Page Specific Styles */
  .contact-section {
    padding: 80px 0 100px;
    background: var(--white);
    position: relative;
  }
  .contact-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(at 20% 20%, rgba(232,93,58,0.04) 0%, transparent 50%),
      radial-gradient(at 80% 80%, rgba(232,93,58,0.03) 0%, transparent 50%);
    pointer-events: none;
  }

  .contact-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    position: relative;
  }

  /* Form Styles */
  .contact-form-wrapper {
    padding: 48px;
  }
  .contact-form-wrapper h2 {
    font-size: 1.8rem;
    font-weight: 800;
    margin-bottom: 8px;
  }
  .contact-form-wrapper > p {
    font-size: 0.95rem;
    color: var(--light-gray);
    margin-bottom: 32px;
    font-weight: 300;
  }

  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    display: block;
    font-family: var(--font-heading);
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--deep-indigo);
    margin-bottom: 8px;
  }
  .form-group input,
  .form-group select,
  .form-group textarea {
    width: 100%;
    padding: 14px 18px;
    border: 1.5px solid rgba(232,93,58,0.12);
    border-radius: var(--radius-sm);
    font-size: 0.92rem;
    color: var(--deep-indigo);
    background: var(--white);
    transition: var(--transition);
    outline: none;
  }
  .form-group input:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    border-color: var(--royal-blue);
    box-shadow: 0 0 0 3px rgba(232,93,58,0.08);
  }
  .form-group input::placeholder,
  .form-group textarea::placeholder {
    color: var(--light-gray);
    font-weight: 300;
  }
  .form-group textarea {
    min-height: 120px;
    resize: vertical;
  }
  .form-group select {
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='%2394A3B8'%3E%3Cpath fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    background-size: 18px;
    cursor: pointer;
  }

  .form-submit {
    width: 100%;
    padding: 16px;
    margin-top: 8px;
  }

  /* Contact Info Side */
  .contact-info-side {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto auto;
    gap: 16px;
  }

  .contact-info-card {
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    position: relative;
    overflow: hidden;
    border: 1.5px solid rgba(232,93,58,0.08);
    cursor: default;
  }
  .contact-info-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--royal-blue), #F4845F);
    opacity: 0;
    transition: var(--transition);
  }
  .contact-info-card:hover::before {
    opacity: 1;
  }
  .contact-info-card:hover {
    transform: translateY(-4px) scale(1.02);
    border-color: rgba(232,93,58,0.18);
  }

  /* Email card — full width, horizontal */
  .contact-info-card.card-email {
    grid-column: 1 / -1;
    flex-direction: row;
    align-items: center;
    gap: 16px;
  }

  /* Phone card — full width with featured style */
  .contact-info-card.card-phone {
    grid-column: 1 / -1;
    flex-direction: row;
    align-items: center;
    background: linear-gradient(135deg, #FFF8F5 0%, #FFF0E8 100%);
    border-color: rgba(232,93,58,0.15);
  }
  .contact-info-card.card-phone .contact-info-icon {
    width: 56px;
    height: 56px;
    min-width: 56px;
    background: var(--royal-blue);
  }
  .contact-info-card.card-phone .contact-info-icon svg {
    color: white;
  }
  .contact-info-card.card-phone .contact-info-text {
    flex: 1;
  }
  .contact-info-card.card-phone .phone-numbers {
    display: flex;
    gap: 24px;
    margin-top: 6px;
  }
  .contact-info-card.card-phone .phone-country {
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .contact-info-card.card-phone .phone-flag {
    font-size: 1.2rem;
    line-height: 1;
  }
  .contact-info-card.card-phone .phone-detail {
    display: flex;
    flex-direction: column;
  }
  .contact-info-card.card-phone .phone-detail small {
    font-size: 0.72rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--light-gray);
  }
  .contact-info-card.card-phone .phone-detail a {
    font-size: 0.92rem;
    font-weight: 600;
    color: var(--deep-indigo);
  }
  .contact-info-card.card-phone .phone-detail a:hover {
    color: var(--royal-blue);
  }

  /* Response time card — full width with green theme */
  .contact-info-card.card-response {
    grid-column: 1 / -1;
    flex-direction: row;
    align-items: center;
    gap: 16px;
    background: linear-gradient(135deg, #F8FFF5 0%, #F0FAE8 100%);
    border-color: rgba(76,175,80,0.15);
  }
  .contact-info-card.card-response .contact-info-icon {
    background: rgba(76,175,80,0.1);
  }
  .contact-info-card.card-response .contact-info-icon svg {
    color: #4CAF50;
  }
  .contact-info-card.card-response .response-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: 6px;
    padding: 4px 12px;
    border-radius: var(--radius-full);
    background: rgba(76,175,80,0.1);
    font-size: 0.75rem;
    font-weight: 600;
    color: #4CAF50;
  }
  .contact-info-card.card-response .response-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #4CAF50;
    animation: pulse-dot 2s ease-in-out infinite;
  }
  @keyframes pulse-dot {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.8); }
  }

  .contact-info-icon {
    width: 44px;
    height: 44px;
    min-width: 44px;
    background: var(--lavender-white);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: var(--transition);
  }
  .contact-info-card:hover .contact-info-icon {
    transform: scale(1.08);
  }
  .contact-info-icon svg {
    width: 20px;
    height: 20px;
    color: var(--royal-blue);
  }
  .contact-info-text h3 {
    font-size: 0.92rem;
    font-weight: 700;
    margin-bottom: 2px;
  }
  .contact-info-text p,
  .contact-info-text a {
    font-size: 0.84rem;
    color: var(--light-gray);
    line-height: 1.6;
    font-weight: 300;
  }
  .contact-info-text a:hover { color: var(--royal-blue); }

  /* Office card location tag */
  .office-tag {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-top: 8px;
    padding: 3px 10px;
    border-radius: var(--radius-full);
    background: rgba(232,93,58,0.06);
    font-size: 0.7rem;
    font-weight: 600;
    color: var(--royal-blue);
    letter-spacing: 0.5px;
  }

  /* Social Pills */
  .social-section {
    padding: 60px 0;
    background: var(--lavender-white);
  }
  .social-pills {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    margin-top: 32px;
  }
  .social-pill {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 24px;
    border-radius: var(--radius-full);
    font-family: var(--font-heading);
    font-size: 0.88rem;
    font-weight: 600;
    transition: var(--transition);
  }
  .social-pill svg {
    width: 18px;
    height: 18px;
  }
  .social-pill:hover {
    transform: translateY(-2px);
  }
  .social-pill.ig {
    background: rgba(225,48,108,0.08);
    color: #E1306C;
  }
  .social-pill.ig:hover { background: rgba(225,48,108,0.15); }
  .social-pill.ig svg { fill: #E1306C; }
  .social-pill.fb {
    background: rgba(24,119,242,0.08);
    color: #1877F2;
  }
  .social-pill.fb:hover { background: rgba(24,119,242,0.15); }
  .social-pill.fb svg { fill: #1877F2; }
  .social-pill.tt {
    background: rgba(0,0,0,0.06);
    color: #000;
  }
  .social-pill.tt:hover { background: rgba(0,0,0,0.1); }
  .social-pill.tt svg { fill: #000; }
  .social-pill.li {
    background: rgba(10,102,194,0.08);
    color: #0A66C2;
  }
  .social-pill.li:hover { background: rgba(10,102,194,0.15); }
  .social-pill.li svg { fill: #0A66C2; }
  .social-pill.yt {
    background: rgba(255,0,0,0.08);
    color: #FF0000;
  }
  .social-pill.yt:hover { background: rgba(255,0,0,0.12); }
  .social-pill.yt svg { fill: #FF0000; }
  .social-pill.tw {
    background: rgba(0,0,0,0.06);
    color: #000;
  }
  .social-pill.tw:hover { background: rgba(0,0,0,0.1); }
  .social-pill.tw svg { fill: #000; }

  /* Form feedback */
  #formMessage {
    display: none;
    padding: 14px 18px;
    border-radius: var(--radius-sm);
    font-size: 0.9rem;
    margin-top: 12px;
  }
  #formMessage.form-message--success {
    display: block;
    background: rgba(43,199,100,0.08);
    color: #1a8a4a;
    border: 1px solid rgba(43,199,100,0.15);
  }
  #formMessage.form-message--error {
    display: block;
    background: rgba(220,53,69,0.08);
    color: #c62828;
    border: 1px solid rgba(220,53,69,0.15);
  }

  @media (max-width: 768px) {
    .contact-layout { grid-template-columns: 1fr; }
    .contact-form-wrapper { padding: 32px; }
    .contact-info-side { grid-template-columns: 1fr; }
    .contact-info-card.card-phone { flex-direction: column; }
    .contact-info-card.card-phone .phone-numbers { flex-direction: column; gap: 12px; }
  }
  @media (max-width: 480px) {
    .contact-form-wrapper { padding: 24px; }
    .social-pills { gap: 8px; }
    .social-pill { padding: 10px 18px; font-size: 0.82rem; }
  }
</style>

<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <h1>Get in <span class="text-gradient">Touch</span></h1>
    <p>Your journey starts with a simple conversation. Reach out today and let us guide you toward your dream.</p>
  </div>
</section>

<!-- ========== CONTACT FORM + INFO ========== -->
<section class="contact-section">
  <div class="container">
    <div class="contact-layout">
      <!-- Form -->
      <div class="glass-card contact-form-wrapper reveal">
        <h2>Send Us a Message</h2>
        <p>Fill out the form and we will get back to you within 2 hours during business hours.</p>
        <form id="contactForm">
          <?php wp_nonce_field('scholvia_contact', 'scholvia_contact_nonce'); ?>
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your full name" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone / WhatsApp Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+62 or +60...">
          </div>
          <div class="form-group">
            <label for="service">Service of Interest</label>
            <select id="service" name="service" required>
              <option value="" disabled selected>Select a service</option>
              <option value="University Enrollment">University Enrollment Assistance</option>
              <option value="Language Courses">Language Courses &amp; Test Prep</option>
              <option value="Visa Consultation">Visa Consultation</option>
              <option value="Education-Tourism">Education-Tourism Programs</option>
              <option value="24/7 Support">24/7 Student Support</option>
              <option value="General Inquiry">General Inquiry</option>
            </select>
          </div>
          <div class="form-group">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" placeholder="Tell us about your goals, questions, or anything you'd like to know..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary form-submit">Send Message</button>
          <div id="formMessage"></div>
        </form>
      </div>

      <!-- Contact Info Cards -->
      <div class="contact-info-side">
        <!-- Email — full width, horizontal -->
        <div class="glass-card contact-info-card card-email reveal">
          <div class="contact-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
          </div>
          <div class="contact-info-text">
            <h3>Email</h3>
            <a href="mailto:study@scholvia.com">study@scholvia.com</a>
          </div>
        </div>

        <!-- Phone — featured card spanning full width -->
        <div class="glass-card contact-info-card card-phone reveal" style="transition-delay: 0.05s;">
          <div class="contact-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
          </div>
          <div class="contact-info-text">
            <h3>Phone / WhatsApp</h3>
            <div class="phone-numbers">
              <div class="phone-country">
                <span class="phone-flag">&#127470;&#127465;</span>
                <div class="phone-detail">
                  <small>Indonesia</small>
                  <a href="tel:+6281388666994">+62 813 88 666 994</a>
                </div>
              </div>
              <div class="phone-country">
                <span class="phone-flag">&#127474;&#127486;</span>
                <div class="phone-detail">
                  <small>Malaysia</small>
                  <a href="tel:+60142235105">+60 14 2235 105</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Jakarta Office -->
        <div class="glass-card contact-info-card reveal" style="transition-delay: 0.1s;">
          <div class="contact-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
          </div>
          <div class="contact-info-text">
            <h3>Jakarta Office</h3>
            <p>The Energy Building, Jl. Jend. Sudirman Kav.52-53, SCBD, Jakarta Selatan, 12190</p>
            <span class="office-tag">&#127470;&#127465; Headquarters</span>
          </div>
        </div>

        <!-- KL Office -->
        <div class="glass-card contact-info-card reveal" style="transition-delay: 0.15s;">
          <div class="contact-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
          </div>
          <div class="contact-info-text">
            <h3>Kuala Lumpur Office</h3>
            <p>Menara Prestige, No. 1, Jalan Pinang, Kuala Lumpur, 50450</p>
            <span class="office-tag">&#127474;&#127486; Branch Office</span>
          </div>
        </div>

        <!-- Response Time — full width with live indicator -->
        <div class="glass-card contact-info-card card-response reveal" style="transition-delay: 0.2s;">
          <div class="contact-info-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div class="contact-info-text">
            <h3>Response Time</h3>
            <p>We typically respond within 2 hours during business hours.</p>
            <span class="response-badge"><span class="response-dot"></span> WhatsApp available 24/7</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== SOCIAL MEDIA ========== -->
<section class="social-section">
  <div class="container text-center">
    <div class="reveal">
      <span class="section-label">Stay Connected</span>
      <h2 class="section-title">Find Us On Social Media</h2>
      <p class="section-subtitle">Follow us for student stories, tips, and behind-the-scenes content.</p>
    </div>
    <div class="social-pills reveal">
      <a href="https://instagram.com/scholviaofficial" target="_blank" rel="noopener" class="social-pill ig">
        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
        Instagram
      </a>
      <a href="https://facebook.com/share/1Yma7Hx8Kg/" target="_blank" rel="noopener" class="social-pill fb">
        <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        Facebook
      </a>
      <a href="https://tiktok.com/@scholviaofficial" target="_blank" rel="noopener" class="social-pill tt">
        <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
        TikTok
      </a>
      <a href="https://linkedin.com/company/scholvia/" target="_blank" rel="noopener" class="social-pill li">
        <svg viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        LinkedIn
      </a>
      <a href="https://youtube.com/@Scholvia" target="_blank" rel="noopener" class="social-pill yt">
        <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
        YouTube
      </a>
      <a href="https://x.com/Scholvia" target="_blank" rel="noopener" class="social-pill tw">
        <svg viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        X (Twitter)
      </a>
    </div>
  </div>
</section>

<!-- ========== CTA ========== -->
<section class="cta-section">
  <div class="container reveal">
    <h2>Ready to Write Your Story?</h2>
    <p>Every student who chose Scholvia started exactly where you are now — curious, a little nervous, full of potential. Let us help you take that first step.</p>
    <div class="cta-buttons">
      <a href="https://wa.me/6281388666994" target="_blank" rel="noopener" class="btn btn-primary">Chat on WhatsApp</a>
      <a href="mailto:study@scholvia.com" class="btn btn-outline">Send an Email</a>
    </div>
  </div>
</section>

<script>
document.getElementById('contactForm')?.addEventListener('submit', function(e) {
  e.preventDefault();
  var form = this;
  var btn = form.querySelector('.form-submit');
  var msg = document.getElementById('formMessage');
  var data = new FormData(form);
  data.append('action', 'scholvia_contact');

  // Collect field values for WhatsApp
  var nameVal = form.querySelector('#name').value;
  var emailVal = form.querySelector('#email').value;
  var phoneVal = form.querySelector('#phone').value;
  var serviceVal = form.querySelector('#service').value;
  var messageVal = form.querySelector('#message').value;

  btn.disabled = true;
  btn.textContent = 'Sending...';
  msg.className = '';
  msg.style.display = 'none';
  msg.textContent = '';

  fetch('<?php echo esc_url(admin_url('admin-ajax.php')); ?>', {
    method: 'POST',
    body: data
  })
  .then(function(r) { return r.json(); })
  .then(function(res) {
    if (res.success) {
      msg.className = 'form-message--success';
      msg.style.display = 'block';
      msg.textContent = res.data || 'Message sent successfully! Redirecting to WhatsApp...';
      form.reset();

      // Build WhatsApp URL with form data
      var waText = 'Hi Scholvia! I just submitted a contact form on your website.\n\n';
      waText += 'Name: ' + nameVal + '\n';
      waText += 'Email: ' + emailVal + '\n';
      if (phoneVal) { waText += 'Phone: ' + phoneVal + '\n'; }
      waText += 'Service: ' + serviceVal + '\n';
      waText += 'Message: ' + messageVal;
      var waUrl = 'https://wa.me/6281388666994?text=' + encodeURIComponent(waText);

      setTimeout(function() {
        window.open(waUrl, '_blank');
      }, 1500);
    } else {
      msg.className = 'form-message--error';
      msg.style.display = 'block';
      msg.textContent = res.data || 'Something went wrong. Please try again.';
    }
    btn.disabled = false;
    btn.textContent = 'Send Message';
  })
  .catch(function() {
    msg.className = 'form-message--error';
    msg.style.display = 'block';
    msg.textContent = 'Network error. Please try again.';
    btn.disabled = false;
    btn.textContent = 'Send Message';
  });
});
</script>

<?php get_footer(); ?>
