<?php
require __DIR__ . '/data.php';

$lang = ($_GET['lang'] ?? 'id') === 'en' ? 'en' : 'id';
$t = $content[$lang];
$other = $lang === 'id' ? 'en' : 'id';
$soft = $lang === 'id' ? $softskills_id : $softskills_en;
$hobbies = $lang === 'id' ? $hobbies_id : $hobbies_en;
$birth = $lang === 'id' ? $profile['birth_place'] . ', ' . $profile['birth_date'] : $profile['birth_place'] . ', ' . $profile['birth_date_en'];
$status = $lang === 'id' ? $profile['status_id'] : $profile['status_en'];

function e($s) { return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8'); }
function lvlLabel($cat, $t) {
  return $cat === 'master' ? $t['lbl_master'] : ($cat === 'middle' ? $t['lbl_middle'] : $t['lbl_beginner']);
}
function lvlNum($cat) {
  return $cat === 'master' ? '09' : ($cat === 'middle' ? '06' : '03');
}
?>
<!DOCTYPE html>
<html lang="<?= $lang === 'id' ? 'id' : 'en' ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>HASAN &mdash; <?= $lang === 'id' ? 'CV' : 'Resume' ?></title>
<meta name="description" content="CV Hasan - <?= e($profile['title']) ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&family=Pixelify+Sans:wght@400;700&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- MARQUEE -->
<div class="marquee no-print" aria-hidden="true"><div class="marquee-inner">
  <span><?= e($profile['marquee']) ?> ★ <?= e($profile['marquee']) ?> ★ <?= e($profile['marquee']) ?> ★ <?= e($profile['marquee']) ?> ★&nbsp;</span><span><?= e($profile['marquee']) ?> ★ <?= e($profile['marquee']) ?> ★ <?= e($profile['marquee']) ?> ★ <?= e($profile['marquee']) ?> ★&nbsp;</span>
</div></div>

<!-- NAVIGATION -->
<nav class="navbar no-print" role="navigation" aria-label="Main navigation">
  <div class="wrap nav-inner">
    <a class="brand" href="?lang=<?= $lang ?>" aria-label="Home">■ HASAN.EXE</a>
    <div class="nav-links" id="navLinks">
      <a href="#about" class="active" data-section="about" data-icon="&#9781;"> <?= e($t['nav_about']) ?></a>
      <a href="#stats" data-section="stats" data-icon="&#9881;"> <?= e($t['nav_stats']) ?></a>
      <a href="#quests" data-section="quests" data-icon="&#9876;"> <?= e($t['nav_quests']) ?></a>
      <a href="#projects" data-section="projects" data-icon="&#9883;"> <?= e($t['nav_projects']) ?></a>
      <a href="#contact" data-section="contact" data-icon="&#9993;"> <?= e($t['nav_contact']) ?></a>
    </div>
    <div class="nav-controls">
      <a class="pbtn small" href="?lang=<?= $other ?>" aria-label="Switch to <?= $other === 'id' ? 'English' : 'Indonesian' ?>"><?= $other === 'id' ? 'EN' : 'ID' ?></a>
      <button class="pbtn small" id="soundBtn" type="button" aria-label="Toggle sound"><?= e($t['btn_sound_off']) ?></button>
      <button class="pbtn small accent" onclick="window.print()" type="button" aria-label="Print CV"><?= e($t['btn_print']) ?></button>
      <button class="hamburger" id="hamburgerBtn" type="button" aria-label="Open menu" aria-expanded="false">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>
    </div>
  </div>
</nav>

<!-- MOBILE NAV OVERLAY -->
<div class="nav-overlay" id="navOverlay" role="dialog" aria-label="Navigation menu" aria-hidden="true">
  <div class="nav-overlay-inner">
    <div class="rw-header">
      <span class="rw-dots">● ● ●</span>
      <span class="rw-title">MENU</span>
      <button class="nav-close" id="navClose" aria-label="Close menu">✕</button>
    </div>
    <div class="nav-overlay-body">
      <a href="#about" class="nav-overlay-link" data-section="about">> <?= e($t['nav_about']) ?></a>
      <a href="#stats" class="nav-overlay-link" data-section="stats">  <?= e($t['nav_stats']) ?></a>
      <a href="#quests" class="nav-overlay-link" data-section="quests">  <?= e($t['nav_quests']) ?></a>
      <a href="#projects" class="nav-overlay-link" data-section="projects">  <?= e($t['nav_projects']) ?></a>
      <a href="#contact" class="nav-overlay-link" data-section="contact">  <?= e($t['nav_contact']) ?></a>
      <div class="nav-overlay-controls">
        <a class="pbtn small" href="?lang=<?= $other ?>"><?= $other === 'id' ? 'EN' : 'ID' ?></a>
        <button class="pbtn small" id="soundBtnMobile" type="button"><?= e($t['btn_sound_off']) ?></button>
        <button class="pbtn small accent" onclick="window.print()" type="button"><?= e($t['btn_print']) ?></button>
      </div>
    </div>
  </div>
</div>

<!-- HERO -->
<header class="hero" id="hero">
  <div class="hero-deco-grid" aria-hidden="true">
    <span class="deco deco-star" style="top:8%;left:5%">✦</span>
    <span class="deco deco-plus" style="top:15%;right:8%">+</span>
    <span class="deco deco-dot" style="top:45%;left:3%">.</span>
    <span class="deco deco-plus" style="bottom:20%;left:7%">+</span>
    <span class="deco deco-star" style="bottom:10%;right:5%">✦</span>
  </div>
  <div class="wrap hero-wrap">
    <div class="hero-left">
      <div class="boot-text" id="bootText">
        <div class="boot-line">> <?= e($t['boot_1']) ?></div>
        <div class="boot-line">> <?= e($t['boot_2']) ?></div>
        <div class="boot-line">> <?= e($t['boot_3']) ?></div>
        <div class="boot-line">> <?= e($t['boot_4']) ?></div>
      </div>
      <div class="hero-content" id="heroContent">
        <p class="hero-greeting"><?= e($t['hero_greeting']) ?></p>
        <h1 class="hero-name"><?= e($profile['name']) ?></h1>
        <div class="hero-divider"></div>
        <p class="hero-title">> <span id="typed"></span><span class="cursor" aria-hidden="true">█</span></p>
        <p class="hero-desc"><?= e($t['hero_desc']) ?></p>
        <div class="hero-status" aria-label="Status">
          <span class="led led-green" aria-hidden="true"></span>
          <?= e($t['hero_status']) ?>
        </div>
        <div class="hero-btns no-print">
          <a class="pbtn primary" href="#projects" aria-label="<?= e($t['btn_view_work']) ?>">▶ <?= e($t['btn_view_work']) ?></a>
          <a class="pbtn accent" href="javascript:window.print()" aria-label="<?= e($t['btn_download_cv']) ?>">▶ <?= e($t['btn_download_cv']) ?></a>
          <a class="pbtn" href="#contact" aria-label="<?= e($t['btn_contact_me']) ?>">► <?= e($t['btn_contact_me']) ?></a>
          <a class="pbtn" href="<?= e($profile['github']) ?>" target="_blank" rel="noopener" aria-label="<?= e($t['btn_open_github']) ?>">&lt;/&gt; <?= e($t['btn_open_github']) ?></a>
        </div>
      </div>
    </div>
    <div class="hero-right">
      <div class="character-card">
        <div class="cc-header">
          <span class="rw-dots">● ● ●</span> CHARACTER
          <span class="led led-green cc-led" aria-hidden="true"></span>
        </div>
        <div class="cc-avatar">
          <?php if (file_exists(__DIR__ . '/' . $profile['photo'])): ?>
            <img src="<?= e($profile['photo']) ?>" alt="Avatar <?= e($profile['name']) ?>" width="180" height="200" loading="eager">
          <?php else: ?>
            <div class="avatar-fallback">H</div>
          <?php endif; ?>
        </div>
        <div class="cc-divider"></div>
        <div class="cc-stats">
          <div class="cc-row"><span class="cc-label">NAME</span><span class="cc-value">: <?= e($profile['name']) ?></span></div>
          <div class="cc-row"><span class="cc-label">CLASS</span><span class="cc-value">: DEVELOPER</span></div>
          <div class="cc-row"><span class="cc-label">LEVEL</span><span class="cc-value">: <?= str_pad((int)$profile['age'], 2, '0', STR_PAD_LEFT) ?></span></div>
          <div class="cc-row"><span class="cc-label">LOCATION</span><span class="cc-value">: INDONESIA</span></div>
          <div class="cc-row"><span class="cc-label">STATUS</span><span class="cc-value cc-online">: ● ONLINE</span></div>
        </div>
        <div class="cc-divider"></div>
        <div class="cc-exp">
          <div class="cc-exp-top">
            <span class="cc-label">EXP</span>
            <span>82%</span>
          </div>
          <div class="pixel-bar"><div class="fill fill-green" style="width:82%"></div></div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- MAIN CONTENT -->
<main class="wrap">

  <!-- [01] ABOUT -->
  <section id="about" class="retro-window">
    <div class="rw-header">
      <span class="rw-dots">● ● ●</span>
      <span class="rw-title">[01] ABOUT_ME.TXT</span>
      <span class="rw-spacer"></span>
      <span class="rw-meta">256B</span>
    </div>
    <div class="rw-body">
      <p class="terminal-line"><?= e($t['about']) ?></p>
      <?php foreach ($t['education'] as $ed): ?>
      <div class="edu-item">
        <p class="terminal-line"><?= e($ed['school']) ?></p>
        <p class="terminal-meta"><?= e($ed['major']) ?> | <?= e($ed['year']) ?></p>
        <p class="terminal-line" style="animation-delay:0s;opacity:1;transform:none"><?= e($ed['desc']) ?></p>
      </div>
      <?php endforeach; ?>
      <div class="deco-terminal" aria-hidden="true">>_</div>
    </div>
  </section>

  <!-- STATS + QUESTS -->
  <div class="section-grid">
    <!-- [STATS] -->
    <section id="stats" class="retro-window">
      <div class="rw-header">
        <span class="rw-dots">● ● ●</span>
        <span class="rw-title">STATS</span>
      </div>
      <div class="rw-body">
        <h3 class="stat-category"><?= e($t['skill_hard']) ?></h3>
        <?php foreach ($skills as $sk): ?>
        <div class="skill">
          <div class="skill-top">
            <span class="skill-name"><?= e($sk['name']) ?></span>
            <span class="skill-level"><?= e(lvlLabel($sk['cat'], $t)) ?> <?= (int)$sk['level'] ?>%</span>
          </div>
          <div class="pixel-bar"><div class="fill" style="width:<?= (int)$sk['level'] ?>%"></div></div>
        </div>
        <?php endforeach; ?>

        <!-- LV Card Variant (§10) -->
        <h3 class="stat-category">LV. CARDS</h3>
        <div class="skill-lv-grid">
          <?php foreach (array_slice($skills, 0, 4) as $sk): ?>
          <div class="skill-lv-card">
            <div class="skill-lv-name"><?= e($sk['name']) ?></div>
            <div class="skill-lv-level">LV. <?= lvlNum($sk['cat']) ?></div>
            <div class="pixel-bar pixel-bar-sm"><div class="fill" style="width:<?= (int)$sk['level'] ?>%"></div></div>
          </div>
          <?php endforeach; ?>
        </div>

        <h3 class="stat-category"><?= e($t['skill_tools']) ?></h3>
        <div class="tags">
          <?php foreach ($tools as $tl): ?>
          <span class="tag"><?= e($tl) ?></span>
          <?php endforeach; ?>
        </div>

        <h3 class="stat-category"><?= e($t['skill_soft']) ?></h3>
        <ul class="terminal-list">
          <?php foreach ($soft as $s): ?>
          <li>► <?= e($s) ?></li>
          <?php endforeach; ?>
        </ul>

        <h3 class="stat-category"><?= e($t['lang_title']) ?></h3>
        <?php foreach ($languages as $lg): ?>
        <div class="skill">
          <div class="skill-top">
            <span class="skill-name"><?= e($lg['name']) ?></span>
            <span class="skill-level"><?= e($lang === 'id' ? $lg['level_id'] : $lg['level_en']) ?></span>
          </div>
          <div class="pixel-bar"><div class="fill fill-green" style="width:<?= (int)$lg['bar'] ?>%"></div></div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- [02] QUEST LOG -->
    <section id="quests" class="retro-window">
      <div class="rw-header">
        <span class="rw-dots">● ● ●</span>
        <span class="rw-title">[02] QUEST_LOG</span>
      </div>
      <div class="rw-body">
        <div class="timeline">
          <?php foreach ($t['experience'] as $i => $ex): ?>
          <div class="timeline-item">
            <div class="timeline-dot" aria-hidden="true"></div>
            <div class="quest-card">
              <div class="quest-header">
                <span class="quest-number">QUEST #<?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
              </div>
              <h4 class="quest-role"><?= e($ex['role']) ?></h4>
              <p class="quest-meta"><?= e($ex['place']) ?> | <?= e($ex['year']) ?></p>
              <p class="quest-desc"><?= e($ex['desc']) ?></p>
              <?php if (!empty($ex['rewards'])): ?>
              <div class="quest-rewards">
                <span class="quest-rewards-label">REWARDS</span>
                <?php foreach ($ex['rewards'] as $rw): ?>
                <span class="quest-reward-item">+ <?= e($rw) ?></span>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <h3 class="stat-category" style="margin-top:20px"><?= e($t['cert_title']) ?></h3>
        <?php foreach ($certificates as $c): ?>
        <div class="quest-card badge-card">
          <p class="quest-role">★ <?= e($lang === 'id' ? $c['name_id'] : $c['name_en']) ?></p>
          <p class="quest-meta"><?= e($c['org']) ?> | <?= e($c['year']) ?></p>
        </div>
        <?php endforeach; ?>

        <h3 class="stat-category"><?= e($t['hobby_title']) ?></h3>
        <ul class="terminal-list">
          <?php foreach ($hobbies as $h): ?>
          <li>► <?= e($h) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </section>
  </div>

  <!-- [03] PROJECT INVENTORY -->
  <section id="projects" class="retro-window">
    <div class="rw-header">
      <span class="rw-dots">● ● ●</span>
      <span class="rw-title">[03] PROJECT_INVENTORY</span>
    </div>
    <div class="rw-body">
      <div class="project-grid">
        <?php foreach ($projects as $pi => $pr): ?>
        <article class="project-card">
          <div class="project-card-header">
            <span class="project-slot">[<?= str_pad($pi + 1, 2, '0', STR_PAD_LEFT) ?>]</span>
            <span>PROJECT</span>
          </div>
          <div class="project-preview">
            <?php if (!empty($pr['preview']) && file_exists(__DIR__ . '/' . $pr['preview'])): ?>
              <img src="<?= e($pr['preview']) ?>" alt="Preview <?= e($pr['name']) ?>" loading="lazy">
            <?php else: ?>
            <div class="project-preview-inner">
              <span class="project-preview-icon" aria-hidden="true">▣</span>
              <span class="project-preview-text">PROJECT PREVIEW</span>
            </div>
            <?php endif; ?>
          </div>
          <div class="project-card-body">
            <h4 class="project-name"><?= e($pr['name']) ?></h4>
            <?php if (!empty($pr['role_id'])): ?>
              <p class="project-role"><?= e($t['lbl_role']) ?>: <?= e($lang === 'id' ? ($pr['role_id'] ?? '') : ($pr['role_en'] ?? '')) ?></p>
            <?php endif; ?>
            <p class="project-desc"><?= e($lang === 'id' ? $pr['desc_id'] : $pr['desc_en']) ?></p>
            <div class="tags">
              <?php foreach ($pr['tech'] as $tech): ?>
              <span class="tag"><?= e($tech) ?></span>
              <?php endforeach; ?>
            </div>
            <div class="project-btns no-print">
              <a class="pbtn small" href="<?= e($pr['demo']) ?>" target="_blank" rel="noopener" aria-label="View demo <?= e($pr['name']) ?>">▶ <?= e($t['btn_demo']) ?></a>
              <a class="pbtn small" href="<?= e($pr['code']) ?>" target="_blank" rel="noopener" aria-label="Source code <?= e($pr['name']) ?>">&lt;/&gt; <?= e($t['btn_code']) ?></a>
            </div>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- [04] COMMUNICATION CONSOLE -->
  <section id="contact" class="retro-window">
    <div class="rw-header">
      <span class="rw-dots">● ● ●</span>
      <span class="rw-title">[04] COMMUNICATION_CONSOLE</span>
    </div>
    <div class="rw-body">
      <p class="terminal-line"><?= e($t['contact_status']) ?></p>
      <p class="terminal-line"><?= e($t['contact_channels']) ?></p>
      <div class="contact-channels">
        <a class="pbtn" href="mailto:<?= e($profile['email']) ?>" aria-label="Email">✉ EMAIL</a>
        <a class="pbtn" href="<?= e($profile['github']) ?>" target="_blank" rel="noopener" aria-label="GitHub">&lt;/&gt; GITHUB</a>
        <a class="pbtn" href="<?= e($profile['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram">◎ INSTAGRAM</a>
        <?php if (!empty($profile['linkedin']) && $profile['linkedin'] !== '#'): ?>
        <a class="pbtn" href="<?= e($profile['linkedin']) ?>" target="_blank" rel="noopener" aria-label="LinkedIn">◇ LINKEDIN</a>
        <?php endif; ?>
      </div>
      <div class="contact-form-area no-print">
        <a class="pbtn primary" href="mailto:<?= e($profile['email']) ?>" aria-label="<?= e($t['btn_send']) ?>">► <?= e($t['btn_send']) ?></a>
        <a class="pbtn" href="<?= e($profile['github']) ?>" target="_blank" rel="noopener" aria-label="Open GitHub">&lt;/&gt; <?= e($t['btn_open_github']) ?></a>
      </div>
      <div class="deco-terminal" aria-hidden="true">> THANK YOU FOR VISITING.</div>
    </div>
  </section>

</main>

<!-- FOOTER STATUS BAR -->
<footer class="status-bar no-print">
  <div class="wrap status-inner">
    <span>SYSTEM: <span class="status-green">ONLINE</span></span>
    <span aria-hidden="true">│</span>
    <span>VERSION: 1.0</span>
    <span aria-hidden="true">│</span>
    <span>&copy; <?= date('Y') ?> <?= e($profile['name']) ?></span>
    <span aria-hidden="true">│</span>
    <span><?= e($t['footer']) ?></span>
    <span aria-hidden="true">│</span>
    <span>UPDATED: <?= e($profile['last_updated']) ?></span>
    <span class="status-social">
      <a href="<?= e($profile['github']) ?>" target="_blank" rel="noopener" aria-label="GitHub">GH</a>
      <a href="<?= e($profile['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram">IG</a>
    </span>
  </div>
</footer>

<script>
  window.__TITLE__ = <?= json_encode($profile['title']) ?>;
  window.__LBL_ON__ = <?= json_encode($t['btn_sound_on']) ?>;
  window.__LBL_OFF__ = <?= json_encode($t['btn_sound_off']) ?>;
</script>
<script src="script.js"></script>
</body>
</html>
