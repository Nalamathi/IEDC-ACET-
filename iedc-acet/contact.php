<?php
$pageTitle  = "Contact Us";
$activePage = "contact";
include __DIR__ . "/includes/header.php";
?>
<main id="contact-page">

  <!-- ── Page Header ── -->
  <section class="section page-header-section">
    <div class="container">
      <span class="section-kicker">GET IN TOUCH</span>
      <h1 class="section-title">
        Connect with <span class="accent">IEDC ACET.</span>
      </h1>
      <p class="section-sub">
        Have questions about upcoming workshops, student project support, or how to get involved?
        Reach out to our campus team.
      </p>
    </div>
  </section>

  <!-- ── Contact Section ── -->
  <section class="section" style="padding-top: 0;">
    <div class="container contact-grid">

      <!-- Left Column: Official Institution Info -->
      <div>
        <span class="section-kicker">INSTITUTIONAL INFORMATION</span>
        <h2 class="section-title" style="font-size: 1.8rem; margin-top: 8px;">
          Campus <span class="accent">Location &amp; Details</span>
        </h2>
        <p class="contact-intro">
          The Innovation and Entrepreneurship Development Centre operates within the campus of
          Akshaya College of Engineering and Technology, Kinathukadavu, Coimbatore.
        </p>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
          </span>
          <div>
            <strong>Institution</strong>
            <span>Akshaya College of Engineering and Technology</span>
            <small style="color: var(--text-secondary); display: block; margin-top: 4px;">
              Kinathukadavu, Coimbatore – 642109, Tamil Nadu
            </small>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          </span>
          <div>
            <strong>Official Website</strong>
            <a href="https://www.acetcbe.edu.in" target="_blank" rel="noopener noreferrer" style="color: var(--blue-bright);">
              www.acetcbe.edu.in ↗
            </a>
          </div>
        </div>

        <div class="contact-item">
          <span class="contact-item-icon" aria-hidden="true">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </span>
          <div>
            <strong>Direct Enquiry Notice</strong>
            <span>Official IEDC email and coordinator phone numbers will be listed upon coordinator confirmation.</span>
          </div>
        </div>

        <div class="content-note" role="note">
          ℹ️ <strong>Demonstration Notice:</strong> All official institutional inquiries must be verified with your college IEDC faculty coordinator.
        </div>
      </div>

      <!-- Right Column: Interactive Demonstration Form -->
      <form class="contact-form" id="contactForm" novalidate>
        <h3>Send an Enquiry</h3>
        <p style="color: var(--text-secondary); font-size: 0.86rem; margin-bottom: 20px;">
          <strong>Frontend Demonstration:</strong> This form validates user inputs in real-time. It is a frontend demonstration and does not currently send or store messages on a live server.
        </p>

        <div class="form-row">
          <div class="field">
            <label for="cf-name">Your Full Name <span aria-hidden="true">*</span></label>
            <input
              id="cf-name"
              name="name"
              type="text"
              placeholder="e.g. John Doe"
              required
              maxlength="80"
              autocomplete="name">
          </div>
          <div class="field">
            <label for="cf-email">Email Address <span aria-hidden="true">*</span></label>
            <input
              id="cf-email"
              name="email"
              type="email"
              placeholder="e.g. student@acetcbe.edu.in"
              required
              maxlength="150"
              autocomplete="email">
          </div>
        </div>

        <div class="field">
          <label for="cf-subject">Subject / Inquiry Topic <span aria-hidden="true">*</span></label>
          <input
            id="cf-subject"
            name="subject"
            type="text"
            placeholder="e.g. Workshop Participation / Project Mentorship"
            required
            maxlength="120">
        </div>

        <div class="field">
          <label for="cf-message">Your Message <span aria-hidden="true">*</span></label>
          <textarea
            id="cf-message"
            name="message"
            rows="5"
            placeholder="Tell us about your project, idea, or questions..."
            required
            maxlength="2000"></textarea>
        </div>

        <button class="btn btn-primary form-submit" type="submit" id="formSubmitBtn">
          Send Message <span aria-hidden="true">→</span>
        </button>

        <p class="form-feedback" id="formFeedback" role="status" aria-live="polite" style="margin-top: 14px; font-size: 0.88rem;"></p>
      </form>

    </div>
  </section>

</main>
<?php include __DIR__ . "/includes/footer.php"; ?>
