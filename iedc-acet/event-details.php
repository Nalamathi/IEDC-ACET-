<?php
require_once __DIR__ . '/includes/events-data.php';

$eventId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$event   = ($eventId && isset($eventsData[$eventId])) ? $eventsData[$eventId] : null;

$pageTitle  = $event ? $event['title'] : "Event Not Found";
$activePage = "events";

include __DIR__ . "/includes/header.php";
?>
<main id="event-details-page">

  <?php if (!$event): ?>
  <!-- ── Event Not Found State ── -->
  <section class="section">
    <div class="container" style="max-width: 720px; text-align: center; padding-block: 80px 100px;">
      <div style="font-size: 3.5rem; margin-bottom: 16px;">🔍</div>
      <span class="section-kicker">NOTICE</span>
      <h1 class="section-title" style="margin-top: 10px;">Event Not Found</h1>
      <p style="color: var(--text-secondary); margin: 18px 0 32px; font-size: 1.05rem; line-height: 1.8;">
        The event you are looking for does not exist or may have been updated.
        Please browse our current schedule on the events page.
      </p>
      <a class="btn btn-primary" href="events.php">← Back to Events</a>
    </div>
  </section>

  <?php else: ?>
  <!-- ── Event Details View ── -->
  <section class="section page-header-section">
    <div class="container">
      <div style="margin-bottom: 20px;">
        <a class="back-link" href="events.php">
          <span aria-hidden="true">←</span> Back to All Events
        </a>
      </div>

      <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 10px; margin-bottom: 12px;">
        <span class="event-badge <?= htmlspecialchars($event['badge_class'], ENT_QUOTES, 'UTF-8') ?>" style="position: static;">
          <?= htmlspecialchars($event['category_label'], ENT_QUOTES, 'UTF-8') ?>
        </span>
        <span style="color: var(--blue-bright); font-size: 0.78rem; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase;">
          IEDC ACET EVENT
        </span>
      </div>

      <h1 class="section-title" style="font-size: clamp(1.8rem, 3.5vw, 2.7rem);">
        <?= htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8') ?>
      </h1>

      <?php if (!empty($event['resource_person']) && $event['resource_person'] !== 'To be announced'): ?>
      <div class="event-speaker-tag" style="margin-top: 16px; font-size: 0.9rem; padding: 6px 14px;">
        👤 <strong>Chief Resource Person:</strong> <?= htmlspecialchars($event['resource_person'], ENT_QUOTES, 'UTF-8') ?>
        <?php if (!empty($event['resource_designation'])): ?>
          <span style="color: var(--text-secondary); font-weight: 400;">(<?= htmlspecialchars($event['resource_designation'], ENT_QUOTES, 'UTF-8') ?>)</span>
        <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- ── Main Event Content Grid ── -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="event-details-layout">

        <!-- Left / Main Column: Details, Objectives, Eligibility -->
        <div class="event-details-main">

          <?php if (!empty($event['poster']) && file_exists(__DIR__ . '/' . $event['poster'])): ?>
          <!-- Large Event Poster -->
          <div class="event-poster-container">
            <img
              class="event-poster-full"
              src="<?= htmlspecialchars($event['poster'], ENT_QUOTES, 'UTF-8') ?>"
              alt="<?= htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8') ?> – Official Poster"
              loading="eager">
          </div>
          <?php endif; ?>

          <!-- Overview & Description -->
          <div class="event-details-card">
            <h2 class="details-heading">About This Event</h2>
            <p style="color: var(--text-primary); font-size: 1.05rem; line-height: 1.8; margin-bottom: 16px;">
              <?= htmlspecialchars($event['short_desc'], ENT_QUOTES, 'UTF-8') ?>
            </p>
            <p style="color: var(--text-secondary); line-height: 1.85;">
              <?= htmlspecialchars($event['full_desc'], ENT_QUOTES, 'UTF-8') ?>
            </p>
          </div>

          <!-- Objectives & Key Takeaways -->
          <?php if (!empty($event['objectives'])): ?>
          <div class="event-details-card">
            <h2 class="details-heading">Objectives &amp; Key Takeaways</h2>
            <ul class="event-benefits-list">
              <?php foreach ($event['objectives'] as $obj): ?>
              <li>
                <span class="benefit-bullet" aria-hidden="true">✦</span>
                <span><?= htmlspecialchars($obj, ENT_QUOTES, 'UTF-8') ?></span>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>

          <!-- Eligibility & Who Can Attend -->
          <div class="event-details-card">
            <h2 class="details-heading">Eligibility &amp; Target Audience</h2>
            <p style="color: var(--text-secondary); line-height: 1.8;">
              <?= htmlspecialchars($event['eligibility'], ENT_QUOTES, 'UTF-8') ?>
            </p>
          </div>

        </div>

        <!-- Right / Sidebar Column: Quick Meta, Venue, Registration Action -->
        <aside class="event-details-sidebar">

          <!-- Action & Registration Card -->
          <div class="event-sidebar-card action-card">
            <h3>Event Registration</h3>

            <?php if (!empty($event['registration_url'])): ?>
              <p style="color: var(--text-secondary); font-size: 0.88rem; margin-bottom: 20px; line-height: 1.6;">
                Registration is currently open for this session. Click the button below to join the community and confirm your seat.
              </p>
              <a
                class="btn btn-primary"
                style="width: 100%; justify-content: center; text-align: center;"
                href="<?= htmlspecialchars($event['registration_url'], ENT_QUOTES, 'UTF-8') ?>"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Register for <?= htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8') ?>">
                Register Now ↗
              </a>
              <small style="display: block; text-align: center; color: var(--text-secondary); font-size: 0.72rem; margin-top: 10px;">
                Opens official external registration link securely in a new tab.
              </small>

            <?php else: ?>
              <div class="registration-tba-box">
                <span style="font-size: 1.5rem; display: block; margin-bottom: 8px;">⏳</span>
                <strong>Registration details will be announced soon</strong>
                <p style="margin-top: 6px; font-size: 0.82rem; color: var(--text-secondary); line-height: 1.6;">
                  Official registration instructions and timings will be shared once dates are confirmed by the IEDC coordinator.
                </p>
              </div>
            <?php endif; ?>
          </div>

          <!-- Quick Event Facts -->
          <div class="event-sidebar-card">
            <h3>Event Information</h3>

            <div class="sidebar-fact">
              <span class="fact-icon" aria-hidden="true">📅</span>
              <div>
                <strong>Date &amp; Time</strong>
                <span><?= htmlspecialchars($event['date'], ENT_QUOTES, 'UTF-8') ?></span>
                <?php if (!empty($event['time']) && $event['time'] !== 'To be announced'): ?>
                  <small style="display: block; color: var(--blue-bright);"><?= htmlspecialchars($event['time'], ENT_QUOTES, 'UTF-8') ?></small>
                <?php endif; ?>
              </div>
            </div>

            <div class="sidebar-fact">
              <span class="fact-icon" aria-hidden="true">📍</span>
              <div>
                <strong>Venue</strong>
                <span><?= htmlspecialchars($event['venue'], ENT_QUOTES, 'UTF-8') ?></span>
              </div>
            </div>

            <div class="sidebar-fact">
              <span class="fact-icon" aria-hidden="true">⏰</span>
              <div>
                <strong>Registration Deadline</strong>
                <span><?= htmlspecialchars($event['deadline'], ENT_QUOTES, 'UTF-8') ?></span>
              </div>
            </div>

            <div class="sidebar-fact">
              <span class="fact-icon" aria-hidden="true">🏛️</span>
              <div>
                <strong>Organized By</strong>
                <span><?= htmlspecialchars($event['organizer'], ENT_QUOTES, 'UTF-8') ?></span>
              </div>
            </div>

            <?php if (!empty($event['contact'])): ?>
            <div class="sidebar-fact">
              <span class="fact-icon" aria-hidden="true">💬</span>
              <div>
                <strong>Inquiries &amp; Coordination</strong>
                <span><?= htmlspecialchars($event['contact'], ENT_QUOTES, 'UTF-8') ?></span>
              </div>
            </div>
            <?php endif; ?>

            <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--border);">
              <a class="btn btn-outline" style="width: 100%; justify-content: center;" href="events.php">
                ← Back to All Events
              </a>
            </div>

          </div>

        </aside>

      </div>
    </div>
  </section>
  <?php endif; ?>

</main>
<?php include __DIR__ . "/includes/footer.php"; ?>
