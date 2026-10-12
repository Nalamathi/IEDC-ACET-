<?php
$pageTitle = "Home";
$activePage = "home";
include __DIR__ . "/includes/header.php";
?>
<main>
  <section class="hero" id="home">
    <div class="container hero-grid">
      <div class="hero-copy">
        <span class="eyebrow"><span class="eyebrow-dot"></span> INNOVATION • ENTREPRENEURSHIP • IMPACT</span>
        <h1>Ideas today.<br><span>Impact tomorrow.</span></h1>
        <p class="hero-description">
          A space for curious minds to explore ideas, build solutions, collaborate with others,
          and take their first steps towards innovation and entrepreneurship.
        </p>
        <div class="hero-actions">
          <a class="button button-primary" href="#about">Discover IEDC <span aria-hidden="true">↗</span></a>
          <a class="button button-outline" href="#events">Explore activities</a>
        </div>
        <div class="hero-note">
          <span class="note-icon" aria-hidden="true">✦</span>
          <span>Think boldly. Build thoughtfully. Make a difference.</span>
        </div>
      </div>
      <div class="hero-art">
        <div class="art-glow"></div>
        <img src="assets/images/hero-innovation.svg" alt="Illustration of students working together on an innovative idea">
        <div class="floating-card floating-card-top">
          <span class="floating-icon teal">✦</span>
          <span><strong>Think creatively</strong><small>Ideas start here</small></span>
        </div>
        <div class="floating-card floating-card-bottom">
          <span class="floating-icon navy">↗</span>
          <span><strong>Build what matters</strong><small>Turn ideas into action</small></span>
        </div>
      </div>
    </div>
    <div class="hero-bottom-line"></div>
  </section>

  <section class="quick-strip" aria-label="IEDC focus areas">
    <div class="container quick-strip-inner">
      <span><span class="strip-symbol">✳</span> Creativity</span>
      <span><span class="strip-symbol">⌘</span> Collaboration</span>
      <span><span class="strip-symbol">↗</span> Entrepreneurship</span>
      <span><span class="strip-symbol">◇</span> Innovation</span>
    </div>
  </section>

  <section class="section about-section" id="about">
    <div class="container about-grid">
      <div>
        <span class="section-kicker">WHO WE ARE</span>
        <h2>A place where <span class="text-teal">ideas take shape.</span></h2>
      </div>
      <div class="about-copy">
        <p class="lead">The Innovation and Entrepreneurship Development Centre (IEDC) at Akshaya College of Engineering and Technology aims to encourage students to think creatively, explore real-world challenges and develop an entrepreneurial mindset.</p>
        <p>Through learning activities, workshops, project showcases and collaborative experiences, students can begin turning curiosity into practical solutions.</p>
        <a class="text-link" href="#focus">Learn about our focus <span aria-hidden="true">→</span></a>
      </div>
    </div>
  </section>

  <section class="section focus-section" id="focus">
    <div class="container">
      <div class="section-heading">
        <div>
          <span class="section-kicker">WHAT WE ENCOURAGE</span>
          <h2>From curiosity to creation.</h2>
        </div>
        <p>Helping students build the confidence and skills to explore possibilities and make their ideas real.</p>
      </div>
      <div class="feature-grid">
        <article class="feature-card">
          <div class="feature-icon icon-teal" aria-hidden="true">✳</div>
          <h3>Think creatively</h3>
          <p>Explore problems from new perspectives and develop original ideas.</p>
          <span class="card-number">01</span>
        </article>
        <article class="feature-card">
          <div class="feature-icon icon-blue" aria-hidden="true">⌘</div>
          <h3>Learn together</h3>
          <p>Share knowledge, work across disciplines and grow through collaboration.</p>
          <span class="card-number">02</span>
        </article>
        <article class="feature-card">
          <div class="feature-icon icon-gold" aria-hidden="true">↗</div>
          <h3>Build solutions</h3>
          <p>Turn concepts into prototypes and practical solutions to real challenges.</p>
          <span class="card-number">03</span>
        </article>
        <article class="feature-card">
          <div class="feature-icon icon-purple" aria-hidden="true">◇</div>
          <h3>Explore enterprise</h3>
          <p>Discover entrepreneurship, responsible innovation and new opportunities.</p>
          <span class="card-number">04</span>
        </article>
      </div>
    </div>
  </section>

  <section class="section events-section" id="events">
    <div class="container">
      <div class="section-heading">
        <div>
          <span class="section-kicker">LEARN • CONNECT • CREATE</span>
          <h2>Activities that move ideas forward.</h2>
        </div>
        <p>IEDC activities can create opportunities to learn new skills, exchange ideas and meet people who enjoy building things.</p>
      </div>
      <div class="event-grid">
        <article class="event-card">
          <div class="event-visual event-visual-workshop"><span class="event-visual-icon">⌘</span><span class="event-label">LEARN</span></div>
          <div class="event-content"><span class="event-category">WORKSHOPS</span><h3>Hands-on learning sessions</h3><p>Build practical knowledge through interactive sessions and guided activities.</p></div>
        </article>
        <article class="event-card">
          <div class="event-visual event-visual-ideas"><span class="event-visual-icon">✦</span><span class="event-label">IMAGINE</span></div>
          <div class="event-content"><span class="event-category">IDEA CHALLENGES</span><h3>Bring your ideas forward</h3><p>Explore problems, share concepts and collaborate on possible solutions.</p></div>
        </article>
        <article class="event-card">
          <div class="event-visual event-visual-connect"><span class="event-visual-icon">↗</span><span class="event-label">CONNECT</span></div>
          <div class="event-content"><span class="event-category">TALKS & NETWORKING</span><h3>Learn from new perspectives</h3><p>Discover insights through discussions, guest sessions and peer learning.</p></div>
        </article>
      </div>
      <p class="content-note">Event examples shown for layout purposes. Replace these with approved college events and dates.</p>
    </div>
  </section>

  <section class="cta-section">
    <div class="container cta-inner">
      <div class="cta-mark" aria-hidden="true">✳</div>
      <div>
        <span class="section-kicker">YOUR IDEA HAS A PLACE HERE</span>
        <h2>Curious about what you could create?</h2>
        <p>Start with a question. Explore an idea. Take the next step.</p>
      </div>
      <a class="button button-light" href="#contact">Get in touch <span aria-hidden="true">→</span></a>
    </div>
  </section>

  <section class="section contact-section" id="contact">
    <div class="container contact-grid">
      <div>
        <span class="section-kicker">CONTACT IEDC</span>
        <h2>Let's start a <span class="text-teal">conversation.</span></h2>
        <p class="contact-intro">Have a question about IEDC or its activities? Use the contact details approved by your college, or send a message through the form.</p>
        <div class="contact-detail"><span class="contact-detail-icon">⌖</span><div><strong>College</strong><span>Akshaya College of Engineering and Technology</span></div></div>
        <div class="contact-detail"><span class="contact-detail-icon">@</span><div><strong>IEDC email</strong><span>Add the official IEDC email address here</span></div></div>
        <p class="content-note">Please confirm contact details with your IEDC coordinator before publishing.</p>
      </div>
      <form class="contact-form" id="contactForm">
        <h3>Send an enquiry</h3>
        <p>This sample form demonstrates the homepage layout. Database submission will be connected in a later step.</p>
        <label for="name">Your name</label>
        <input id="name" name="name" type="text" placeholder="Enter your name" required maxlength="80">
        <label for="email">Email address</label>
        <input id="email" name="email" type="email" placeholder="you@example.com" required maxlength="150">
        <label for="message">How can we help?</label>
        <textarea id="message" name="message" rows="4" placeholder="Write your message..." required maxlength="2000"></textarea>
        <button class="button button-primary form-submit" type="submit">Preview submission <span aria-hidden="true">→</span></button>
        <p class="form-feedback" id="formFeedback" role="status" aria-live="polite"></p>
      </form>
    </div>
  </section>
</main>
<?php include __DIR__ . "/includes/footer.php"; ?>