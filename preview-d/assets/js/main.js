/* ============================================
   SCHOLVIA — Premium v3.0 | main.js
   ============================================ */

/* ---- Scroll Progress ---- */
const scrollBar = document.querySelector('.scroll-progress');
window.addEventListener('scroll', () => {
  if (scrollBar) {
    const pct = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
    scrollBar.style.width = pct + '%';
  }
}, { passive: true });

/* ---- Navbar Scroll ---- */
const navbar = document.getElementById('navbar');
if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 60);
  }, { passive: true });
}

/* ---- Mobile Menu ---- */
const hamburger = document.getElementById('hamburger');
const mobileNav = document.getElementById('mobile-nav');
if (hamburger && mobileNav) {
  hamburger.addEventListener('click', () => {
    const open = mobileNav.classList.toggle('open');
    hamburger.classList.toggle('open', open);
    hamburger.setAttribute('aria-expanded', open);
  });
  document.addEventListener('click', (e) => {
    if (!hamburger.contains(e.target) && !mobileNav.contains(e.target)) {
      mobileNav.classList.remove('open');
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
    }
  });
  mobileNav.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      mobileNav.classList.remove('open');
      hamburger.classList.remove('open');
      hamburger.setAttribute('aria-expanded', 'false');
    });
  });
}

/* ---- Smooth Scroll ---- */
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      const offset = 80;
      window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
    }
  });
});

/* ---- Reveal Animations ---- */
if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => observer.observe(el));
}

/* ---- Animated Counters ---- */
function animateCounter(el) {
  const target = parseFloat(el.dataset.counter);
  const suffix = el.dataset.suffix || '';
  const decimals = target % 1 !== 0 ? 1 : 0;
  const duration = 2000;
  const start = performance.now();
  const step = (now) => {
    const progress = Math.min((now - start) / duration, 1);
    const ease = 1 - Math.pow(1 - progress, 3);
    el.textContent = (target * ease).toFixed(decimals) + suffix;
    if (progress < 1) requestAnimationFrame(step);
  };
  requestAnimationFrame(step);
}

const counterObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.querySelectorAll('[data-counter]').forEach(el => animateCounter(el));
      counterObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

document.querySelectorAll('.stat-card, .metric-card').forEach(el => counterObserver.observe(el));

/* ---- FAQ Accordion ---- */
document.querySelectorAll('.faq-question').forEach(btn => {
  btn.addEventListener('click', () => {
    const item = btn.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const isOpen = item.classList.contains('active');

    document.querySelectorAll('.faq-item.active').forEach(open => {
      open.classList.remove('active');
      open.querySelector('.faq-answer').style.maxHeight = null;
    });

    if (!isOpen) {
      item.classList.add('active');
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  });
});

/* ---- Contact Form → WhatsApp ---- */
const contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const name = contactForm.querySelector('[name="name"]')?.value || '';
    const email = contactForm.querySelector('[name="email"]')?.value || '';
    const phone = contactForm.querySelector('[name="phone"]')?.value || '';
    const destination = contactForm.querySelector('[name="destination"]')?.value || '';
    const level = contactForm.querySelector('[name="level"]')?.value || '';
    const message = contactForm.querySelector('[name="message"]')?.value || '';
    const text = `*New Inquiry from Scholvia Website*\n\n*Name:* ${name}\n*Email:* ${email}\n*Phone:* ${phone}\n*Destination:* ${destination}\n*Study Level:* ${level}\n\n*Message:*\n${message}`;
    window.open('https://wa.me/6281388666994?text=' + encodeURIComponent(text), '_blank');
  });
}
