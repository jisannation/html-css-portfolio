<!DOCTYPE html>
<html <?php language_attributes(); ?> data-color-mode="dark">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://unpkg.com/@wcj/dark-mode"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="container nav-container">
      <a href="#home" class="logo">JISAN<span></span></a>
      <input type="checkbox" id="nav-toggle" class="nav-toggle-input">
      <nav class="nav-menu">
        <ul class="nav-list">
          <li><a href="#home" class="nav-link">Home</a></li>
          <li><a href="#features" class="nav-link">Features</a></li>
          <li><a href="#skills" class="nav-link">Skills</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/projects.html" class="nav-link">Projects</a></li>
          <li><a href="#resume" class="nav-link">Resume</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>
      <div class="nav-actions">
        <dark-mode permanent mode="dark"></dark-mode>
        <a href="#contact" class="btn btn-primary nav-btn">Hire Me</a>
        <label for="nav-toggle" class="nav-toggle-btn" aria-label="Toggle Navigation">
          <i class="fa-solid fa-bars"></i>
        </label>
      </div>
    </div>
  </header>

  <main>
    <section class="hero" id="home">
      <div class="container hero-container">
        <div class="hero-content">
          <span class="hero-subtitle">WELCOME TO MY WORLD</span>
          <h1 class="hero-title">Hi, I'm <span>Md Jisan</span></h1>
          <h2 class="hero-role">a <span>WordPress Developer</span>.</h2>
          <p class="hero-description">
            Passionate WordPress Developer with 6 months of professional experience building responsive, fast, and secure websites. Specialized in custom theme integration, Elementor, and WooCommerce solutions.
          </p>
          <div class="hero-meta">
            <div class="meta-box">
              <span class="meta-title">FIND WITH ME</span>
              <div class="social-links">
                <a href="https://wa.me/8801872802045" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="WhatsApp">
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/jisannation" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Facebook">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://github.com/jisannation" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="GitHub">
                  <i class="fa-brands fa-github"></i>
                </a>
              </div>
            </div>
            <div class="meta-box">
              <span class="meta-title">BEST SKILL ON</span>
              <div class="skill-icons">
                <span class="skill-btn" title="WordPress"><i class="fa-brands fa-wordpress"></i></span>
                <span class="skill-btn" title="HTML5"><i class="fa-brands fa-html5"></i></span>
                <span class="skill-btn" title="CSS3"><i class="fa-brands fa-css3-alt"></i></span>
                <span class="skill-btn" title="WooCommerce"><i class="fa-solid fa-cart-shopping"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="hero-media">
          <div class="image-wrapper">
            <div class="avatar-card">
              <img src="<?php echo get_template_directory_uri(); ?>/jisan.png" alt="Md Jisan" style="width: 100%; height: 100%; object-fit: cover; object-position: center; border-radius: inherit; display: block;">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section features" id="features">
      <div class="container">
        <div class="section-header">
          <span class="section-subtitle">FEATURES</span>
          <h2 class="section-title">What I Do</h2>
        </div>
        <div class="grid grid-3">
          <div class="card feature-card">
            <i class="fa-brands fa-wordpress-simple feature-icon"></i>
            <h3 class="card-title">WordPress Development</h3>
            <p class="card-text">Custom website creation using modern themes, Gutenberg, and page builders tailored to business goals.</p>
          </div>
          <div class="card feature-card">
            <i class="fa-solid fa-cart-flatbed-suitcase feature-icon"></i>
            <h3 class="card-title">WooCommerce Stores</h3>
            <p class="card-text">Full setup of online stores, product catalogs, shipping configurations, and payment gateways.</p>
          </div>
          <div class="card feature-card">
            <i class="fa-solid fa-mobile-screen-button feature-icon"></i>
            <h3 class="card-title">Responsive Design</h3>
            <p class="card-text">Pixel-perfect, ultra-fast website interfaces crafted to adapt smoothly across mobiles, tablets, and desktops.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section skills" id="skills">
      <div class="container">
        <div class="section-header">
          <span class="section-subtitle">SKILLS & PROFICIENCY</span>
          <h2 class="section-title">My Skills</h2>
        </div>
        <div class="skills-wrapper">
          <div class="skill-item">
            <div class="skill-header">
              <span class="skill-name"><i class="fa-brands fa-html5"></i> HTML</span>
              <span class="skill-percent">100%</span>
            </div>
            <div class="progress-track">
              <div class="progress-bar progress-html"></div>
            </div>
          </div>
          <div class="skill-item">
            <div class="skill-header">
              <span class="skill-name"><i class="fa-brands fa-css3-alt"></i> CSS</span>
              <span class="skill-percent">80%</span>
            </div>
            <div class="progress-track">
              <div class="progress-bar progress-css"></div>
            </div>
          </div>
          <div class="skill-item">
            <div class="skill-header">
              <span class="skill-name"><i class="fa-brands fa-wordpress"></i> WordPress</span>
              <span class="skill-percent">100%</span>
            </div>
            <div class="progress-track">
              <div class="progress-bar progress-wp"></div>
            </div>
          </div>
          <div class="skill-item">
            <div class="skill-header">
              <span class="skill-name"><i class="fa-solid fa-cart-shopping"></i> WooCommerce</span>
              <span class="skill-percent">80%</span>
            </div>
            <div class="progress-track">
              <div class="progress-bar progress-woo"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section resume" id="resume">
      <div class="container">
        <div class="section-header">
          <span class="section-subtitle">6+ MONTHS OF EXPERIENCE</span>
          <h2 class="section-title">My Resume</h2>
        </div>
        <div class="resume-wrapper">
          <div class="timeline-card">
            <span class="timeline-date"></span>
            <h3 class="timeline-title">Junior WordPress Developer</h3>
            <span class="timeline-company">Freelance & Contract Work</span>
            <p class="timeline-text">Delivering client websites, handling Elementor template building, plugin maintenance, performance optimization, and cross-browser responsiveness.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section contact" id="contact">
      <div class="container">
        <div class="section-header">
          <span class="section-subtitle">CONTACT</span>
          <h2 class="section-title">Get In Touch</h2>
        </div>
        <div class="contact-grid">
          <div class="card contact-info-card">
            <div class="info-thumb" style="width: 100%; height: auto; aspect-ratio: 1 / 1; overflow: hidden; padding: 0;">
              <img src="<?php echo get_template_directory_uri(); ?>/jisan.png" alt="Md Jisan" style="width: 100%; height: 100%; object-fit: cover; object-position: center; border-radius: inherit; display: block;">
            </div>
            <h3 class="info-title">Md Jisan</h3>
            <p class="info-role">WordPress Developer</p>
            <p class="info-desc">Available for freelance projects and remote full-time positions. Connect with me directly.</p>
            <div class="meta-box" style="margin-top: auto;">
              <span class="meta-title">FIND WITH ME</span>
              <div class="social-links">
                <a href="https://wa.me/8801872802045" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="WhatsApp">
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/jisannation" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="Facebook">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://github.com/jisannation" target="_blank" rel="noopener noreferrer" class="social-btn" aria-label="GitHub">
                  <i class="fa-brands fa-github"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="card contact-form-card">
            <form action="https://mail.google.com/mail/" method="get" target="_blank" class="contact-form">
              <input type="hidden" name="view" value="cm">
              <input type="hidden" name="fs" value="1">
              <input type="hidden" name="to" value="mdjamsedhossensijan@gmail.com">
              <input type="hidden" name="su" value="Portfolio Contact Inquiry">
              <div class="form-group">
                <label for="fullName">Your Name</label>
                <div class="input-wrapper">
                  <i class="fa-regular fa-user input-icon"></i>
                  <input type="text" id="fullName" name="name" placeholder="Enter your full name" required>
                </div>
              </div>

              <div class="form-group">
                <label for="emailAddress">Your Email Address</label>
                <div class="input-wrapper">
                  <i class="fa-regular fa-envelope input-icon"></i>
                  <input type="email" id="emailAddress" name="email" placeholder="Enter your email address" required>
                </div>
              </div>

              <div class="form-group">
                <label for="message">Your Message</label>
                <div class="input-wrapper textarea-wrapper">
                  <i class="fa-regular fa-comment-dots input-icon"></i>
                  <textarea id="message" name="body" rows="5" placeholder="Write your message here..." required></textarea>
                </div>
              </div>

              <div class="form-actions">
                <button type="reset" class="btn btn-secondary">
                  <i class="fa-solid fa-rotate-left"></i>
                  Reset
                </button>
                <button type="submit" class="btn btn-primary">
                  <i class="fa-regular fa-paper-plane"></i>
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer-content">
      <p>&copy; 2026 Md Jisan. All rights reserved.</p>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>