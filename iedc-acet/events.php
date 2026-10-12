<?php
$pageTitle  = "Events";
$activePage = "events";
require_once __DIR__ . '/includes/events-data.php';
include __DIR__ . "/includes/header.php";
?>
<main id="events-page">

  <!-- ── Page Header ── -->
  <section class="section page-header-section">
    <div class="container">
      <span class="section-kicker">LEARN • CONNECT • CREATE</span>
      <h1 class="section-title">
        IEDC <span class="accent">Events &amp; Workshops.</span>
      </h1>
      <p class="section-sub">
        Explore workshops, hackathons, and entrepreneurship sessions organized for ACET students.
        Click on any event card to view full details and registration guidelines.
      </p>
    </div>
  </section>

  <!-- ── Events List & Interactive Category Filter ── -->
  <section class="section" style="padding-top: 0;">
    <div class="container">

      <!-- Category Filter Bar -->
      <div class="filter-bar" role="group" aria-label="Filter events by category">
        <button class="filter-btn active" data-filter="all"              type="button" aria-current="true">All Events</button>
        <button class="filter-btn"        data-filter="workshop"         type="button">Workshops</button>
        <button class="filter-btn"        data-filter="hackathon"        type="button">Hackathons</button>
        <button class="filter-btn"        data-filter="entrepreneurship" type="button">Entrepreneurship</button>
      </div>

      <div class="event-grid" id="eventGrid">

        <?php foreach ($eventsData as $item): ?>
        <!-- Event Card #<?= (int)$item['id'] ?> -->
        <article
          class="event-card clickable-card"
          data-category="<?= htmlspecialchars($item['filter_tag'], ENT_QUOTES, 'UTF-8') ?>"
          onclick="window.location.href='event-details.php?id=<?= (int)$item['id'] ?>'">

          <!-- Card Header / Banner -->
          <?php if (!empty($item['poster']) && file_exists(__DIR__ . '/' . $item['poster'])): ?>
          <div class="event-banner event-banner-poster">
            <span class="event-badge <?= htmlspecialchars($item['badge_class'], ENT_QUOTES, 'UTF-8') ?>">
              <?= htmlspecialchars($item['category_label'], ENT_QUOTES, 'UTF-8') ?>
            </span>
            <img
              class="event-banner-img"
              src="<?= htmlspecialchars($item['poster'], ENT_QUOTES, 'UTF-8') ?>"
              alt="<?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?> – Poster"
              width="600"
              height="350"
              loading="lazy">
          </div>
          <?php else: ?>
          <div class="event-banner banner-<?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?>">
            <span class="event-badge <?= htmlspecialchars($item['badge_class'], ENT_QUOTES, 'UTF-8') ?>">
              <?= htmlspecialchars($item['category_label'], ENT_QUOTES, 'UTF-8') ?>
            </span>
            <span class="event-banner-icon" aria-hidden="true"><?= htmlspecialchars($item['icon'], ENT_QUOTES, 'UTF-8') ?></span>
          </div>
          <?php endif; ?>

          <!-- Card Body -->
          <div class="event-body">
            <div class="event-meta">
              <span class="event-cat"><?= htmlspecialchars($item['category_label'], ENT_QUOTES, 'UTF-8') ?></span>
              <span class="event-date">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                <?= htmlspecialchars($item['date'], ENT_QUOTES, 'UTF-8') ?>
              </span>
            </div>

            <h3>
              <a class="event-title-link" href="event-details.php?id=<?= (int)$item['id'] ?>">
                <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>
              </a>
            </h3>

            <?php if (!empty($item['resource_person']) && $item['resource_person'] !== 'To be announced'): ?>
            <div class="event-speaker-tag">
              👤 <?= htmlspecialchars($item['resource_person'], ENT_QUOTES, 'UTF-8') ?>
            </div>
            <?php endif; ?>

            <p><?= htmlspecialchars($item['short_desc'], ENT_QUOTES, 'UTF-8') ?></p>

            <div class="event-footer">
              <span class="event-date">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <?= htmlspecialchars($item['venue'], ENT_QUOTES, 'UTF-8') ?>
              </span>

              <a
                class="event-link"
                href="event-details.php?id=<?= (int)$item['id'] ?>"
                onclick="event.stopPropagation();"
                aria-label="View full details for <?= htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') ?>">
                View Full Details →
              </a>
            </div>
          </div>

        </article>
        <?php endforeach; ?>

      </div><!-- /event-grid -->

      <div class="content-note" role="note" style="margin-top: 36px;">
        ℹ️ <strong>Demonstration Note:</strong> All events with unconfirmed schedules will be officially posted as details are coordinated with college management. Click any event card above to preview full event sheets.
      </div>

    </div>
  </section>

  <!-- ── CTA ── -->
  <section class="cta-band" aria-label="Call to action">
    <div class="container cta-inner">
      <span class="cta-mark" aria-hidden="true">✳</span>
      <div class="cta-text">
        <span class="section-kicker">HAVE A WORKSHOP TOPIC SUGGESTION?</span>
        <h2>Tell us what technology or topic you want to learn next.</h2>
        <p>Student feedback helps shape each semester's IEDC schedule.</p>
      </div>
      <a class="btn btn-primary" href="contact.php">Suggest an Event →</a>
    </div>
  </section>

</main>
<?php include __DIR__ . "/includes/footer.php"; ?>
