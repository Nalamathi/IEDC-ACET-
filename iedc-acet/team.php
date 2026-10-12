<?php
$pageTitle  = "Our Team";
$activePage = "team";
include __DIR__ . "/includes/header.php";
?>
<main id="team-page">

  <!-- ── Page Header ── -->
  <section class="section page-header-section">
    <div class="container">
      <span class="section-kicker">THE PEOPLE BEHIND IEDC</span>
      <h1 class="section-title">
        Leadership <span class="accent">&amp; Innovation Team.</span>
      </h1>
      <p class="section-sub">
        Meet the faculty coordinators and student leaders who foster innovation, organise workshops,
        and support student entrepreneurs across Akshaya College of Engineering and Technology.
      </p>
    </div>
  </section>

  <!-- ── Faculty Leadership ── -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="section-kicker">FACULTY ADVISORY</span>
          <h2 class="section-title">Faculty Mentorship</h2>
        </div>
        <p class="section-sub">
          Academic guidance, institutional direction, and project review.
        </p>
      </div>

      <div class="team-grid" style="margin-top: 36px;">

        <article class="team-card">
          <div class="team-avatar" aria-hidden="true">👩‍🏫</div>
          <h3>Faculty Coordinator</h3>
          <span class="team-role">Nodal Officer &amp; Faculty Lead</span>
          <p>
            Provides strategic oversight, liaises with institutional departments, mentors student teams, and reviews project feasibility.
          </p>
          <span class="team-placeholder-note">Official name to be confirmed by ACET</span>
        </article>

        <article class="team-card">
          <div class="team-avatar" aria-hidden="true">👨‍🏫</div>
          <h3>Technical Mentorship Advisor</h3>
          <span class="team-role">Technical Project Guide</span>
          <p>
            Assists student creators with lab resource allocation, component sourcing guidance, and engineering review.
          </p>
          <span class="team-placeholder-note">Official name to be confirmed by ACET</span>
        </article>

      </div>
    </div>
  </section>

  <!-- ── Student Committee ── -->
  <section class="section" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-header">
        <div>
          <span class="section-kicker">STUDENT CHAPTER</span>
          <h2 class="section-title">Student Leadership Committee</h2>
        </div>
        <p class="section-sub">
          Student innovators coordinating event schedules, creative hackathons, and technical projects.
        </p>
      </div>

      <div class="team-grid" style="margin-top: 36px;">

        <article class="team-card">
          <div class="team-avatar" aria-hidden="true">👨‍💼</div>
          <h3>Student Lead Coordinator</h3>
          <span class="team-role">Student Executive Lead</span>
          <p>
            Coordinates chapter operations, interfaces between student innovators and faculty, and runs planning sessions.
          </p>
          <span class="team-placeholder-note">Name to be confirmed by college</span>
        </article>

        <article class="team-card">
          <div class="team-avatar" aria-hidden="true">👩‍💻</div>
          <h3>Technical &amp; Projects Lead</h3>
          <span class="team-role">Prototype Lead</span>
          <p>
            Assists peer creators with hardware-software integrations, hackathon prep, and repository coordination.
          </p>
          <span class="team-placeholder-note">Name to be confirmed by college</span>
        </article>

        <article class="team-card">
          <div class="team-avatar" aria-hidden="true">🎨</div>
          <h3>Design &amp; Media Coordinator</h3>
          <span class="team-role">Creative Lead</span>
          <p>
            Develops visual communications, website assets, presentation kits, and outreach material for chapter activities.
          </p>
          <span class="team-placeholder-note">Name to be confirmed by college</span>
        </article>

        <article class="team-card">
          <div class="team-avatar" aria-hidden="true">📢</div>
          <h3>Outreach &amp; Event Operations</h3>
          <span class="team-role">Operations Lead</span>
          <p>
            Manages workshop logistics, attendee communication, venue setup, and inter-departmental participation.
          </p>
          <span class="team-placeholder-note">Name to be confirmed by college</span>
        </article>

      </div>

      <div class="content-note" role="note" style="margin-top: 36px;">
        ℹ️ <strong>Professional Notice:</strong> All member cards above use professional role designations and illustrative placeholders. Verified faculty names, student office bearers, and profile photographs will be added following the college's annual chapter appointment announcement.
      </div>

    </div>
  </section>

  <!-- ── CTA ── -->
  <section class="cta-band" aria-label="Call to action">
    <div class="container cta-inner">
      <span class="cta-mark" aria-hidden="true">✳</span>
      <div class="cta-text">
        <span class="section-kicker">WANT TO JOIN THE TEAM?</span>
        <h2>Get involved in the IEDC student executive committee.</h2>
        <p>Volunteer your skills in tech, design, event coordination, or outreach.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Contact the Coordinators →</a>
    </div>
  </section>

</main>
<?php include __DIR__ . "/includes/footer.php"; ?>
