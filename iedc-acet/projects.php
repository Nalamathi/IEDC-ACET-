<?php
$pageTitle  = "Student Projects";
$activePage = "projects";
include __DIR__ . "/includes/header.php";
?>
<main id="projects-page">

  <!-- ── Page Header ── -->
  <section class="section page-header-section">
    <div class="container">
      <span class="section-kicker">STUDENT INNOVATION</span>
      <h1 class="section-title">
        Prototype <span class="accent">&amp; Project Showcase.</span>
      </h1>
      <p class="section-sub">
        Explore innovative ideas and prototypes developed by student teams at Akshaya College of Engineering and Technology.
      </p>
    </div>
  </section>

  <!-- ── Projects Grid ── -->
  <section class="section" style="padding-top: 0;">
    <div class="container">

      <div class="project-grid">

        <!-- Project 1 -->
        <article class="project-card">
          <div class="project-img project-img-ai">
            <span class="proj-cat-tag">AI / Machine Learning</span>
            <span class="project-img-icon" aria-hidden="true">🤖</span>
          </div>
          <div class="project-body">
            <h3>Automated Crop Disease Detection System</h3>
            <p>
              A sample computer vision project using edge neural networks to detect leaf anomalies and fungal infections from mobile camera inputs.
            </p>
            <div class="tag-list">
              <span class="tag">Python</span>
              <span class="tag">OpenCV</span>
              <span class="tag">TensorFlow</span>
              <span class="tag">Raspberry Pi</span>
            </div>
            <div style="margin-top: 18px; font-size: 0.78rem; color: var(--blue-bright);">
              ⚡ Prototype Stage • Sample Student Project
            </div>
          </div>
        </article>

        <!-- Project 2 -->
        <article class="project-card">
          <div class="project-img project-img-web">
            <span class="proj-cat-tag">Web &amp; Cloud</span>
            <span class="project-img-icon" aria-hidden="true">🌐</span>
          </div>
          <div class="project-body">
            <h3>Campus Peer Skill Exchange Platform</h3>
            <p>
              A prototype web application allowing engineering students to find project partners, exchange tutoring in specialized subjects, and form hackathon teams.
            </p>
            <div class="tag-list">
              <span class="tag">PHP</span>
              <span class="tag">JavaScript</span>
              <span class="tag">MySQL</span>
              <span class="tag">REST API</span>
            </div>
            <div style="margin-top: 18px; font-size: 0.78rem; color: var(--blue-bright);">
              ⚡ Web Architecture • Sample Student Project
            </div>
          </div>
        </article>

        <!-- Project 3 -->
        <article class="project-card">
          <div class="project-img project-img-emerging">
            <span class="proj-cat-tag">IoT &amp; Embedded</span>
            <span class="project-img-icon" aria-hidden="true">⚡</span>
          </div>
          <div class="project-body">
            <h3>Smart Energy Metering &amp; Fault Sentinel</h3>
            <p>
              An IoT-enabled telemetry module monitoring electrical load fluctuations and sending automated alert notifications for unusual consumption spikes.
            </p>
            <div class="tag-list">
              <span class="tag">ESP32</span>
              <span class="tag">MQTT</span>
              <span class="tag">IoT Telemetry</span>
              <span class="tag">Sensors</span>
            </div>
            <div style="margin-top: 18px; font-size: 0.78rem; color: var(--blue-bright);">
              ⚡ Hardware Testing • Sample Student Project
            </div>
          </div>
        </article>

        <!-- Project 4 -->
        <article class="project-card">
          <div class="project-img project-img-social">
            <span class="proj-cat-tag">Sustainability</span>
            <span class="project-img-icon" aria-hidden="true">🌱</span>
          </div>
          <div class="project-body">
            <h3>Autonomous Campus Rainwater Harvesting Monitor</h3>
            <p>
              Sensor-based water tank depth and quality monitoring prototype designed to maximize storage efficiency and automate pump switching.
            </p>
            <div class="tag-list">
              <span class="tag">Ultrasonic</span>
              <span class="tag">Microcontroller</span>
              <span class="tag">CleanTech</span>
              <span class="tag">Sustainability</span>
            </div>
            <div style="margin-top: 18px; font-size: 0.78rem; color: var(--blue-bright);">
              ⚡ Validation Phase • Sample Student Project
            </div>
          </div>
        </article>

        <!-- Project 5 -->
        <article class="project-card">
          <div class="project-img project-img-web">
            <span class="proj-cat-tag">Healthcare Tech</span>
            <span class="project-img-icon" aria-hidden="true">🩺</span>
          </div>
          <div class="project-body">
            <h3>Low-Cost Vital Signs Data Logger</h3>
            <p>
              Portable pulse oximeter and temperature sensor unit recording patient trendlines for remote community health worker reporting.
            </p>
            <div class="tag-list">
              <span class="tag">Arduino</span>
              <span class="tag">BLE</span>
              <span class="tag">Mobile Companion</span>
              <span class="tag">Healthcare</span>
            </div>
            <div style="margin-top: 18px; font-size: 0.78rem; color: var(--blue-bright);">
              ⚡ Concept Prototyping • Sample Student Project
            </div>
          </div>
        </article>

        <!-- Project 6 -->
        <article class="project-card">
          <div class="project-img project-img-ai">
            <span class="proj-cat-tag">Automotive / EV</span>
            <span class="project-img-icon" aria-hidden="true">🔋</span>
          </div>
          <div class="project-body">
            <h3>Battery Thermal Management Telemetry System</h3>
            <p>
              Compact thermal monitoring setup testing battery pack temperature gradients under high-discharge simulated stress tests.
            </p>
            <div class="tag-list">
              <span class="tag">EV Tech</span>
              <span class="tag">Thermal Modeling</span>
              <span class="tag">CAN Bus</span>
              <span class="tag">MATLAB</span>
            </div>
            <div style="margin-top: 18px; font-size: 0.78rem; color: var(--blue-bright);">
              ⚡ Simulation Phase • Sample Student Project
            </div>
          </div>
        </article>

      </div>

      <div class="content-note" role="note" style="margin-top: 36px;">
        ℹ️ <strong>Sample Content Notice:</strong> The project cards shown above are illustrative placeholders demonstrating the layout of student innovations. They will be updated with actual project titles, student team names, faculty guides, and live repository links as project cohorts submit their work.
      </div>

    </div>
  </section>

  <!-- ── CTA ── -->
  <section class="cta-band" aria-label="Call to action">
    <div class="container cta-inner">
      <span class="cta-mark" aria-hidden="true">✳</span>
      <div class="cta-text">
        <span class="section-kicker">BUILDING SOMETHING COOL?</span>
        <h2>Submit your project to be featured in the IEDC showcase.</h2>
        <p>Get mentorship, peer feedback, and help presenting your ideas.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Submit Project Details →</a>
    </div>
  </section>

</main>
<?php include __DIR__ . "/includes/footer.php"; ?>
