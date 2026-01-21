<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Czar Bob Zambrano | Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    :root {
      --bg: #0f172a;
      --bg-alt: #020617;
      --card: #111827;
      --accent: #38bdf8;
      --accent-soft: rgba(56, 189, 248, 0.15);
      --text: #e5e7eb;
      --muted: #9ca3af;
      --border: #1f2937;
      --radius: 12px;
      --shadow: 0 18px 45px rgba(15, 23, 42, 0.9);
      --font-main: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: var(--font-main);
      background: radial-gradient(circle at top, #1e293b 0, #020617 55%, #000 100%);
      color: var(--text);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    .page {
      max-width: 1080px;
      margin: 0 auto;
      padding: 24px 16px 64px;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      padding: 12px 18px;
      margin-bottom: 24px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(148, 163, 184, 0.25);
      backdrop-filter: blur(18px);
      position: sticky;
      top: 12px;
      z-index: 10;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .brand-avatar {
      width: 32px;
      height: 32px;
      border-radius: 999px;
      background: radial-gradient(circle at 30% 20%, #38bdf8, #0ea5e9 40%, #0369a1 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 16px;
      color: #0b1120;
      box-shadow: 0 0 0 2px rgba(15, 23, 42, 0.9);
    }

    .brand-text {
      display: flex;
      flex-direction: column;
    }

    .brand-name {
      font-size: 14px;
      font-weight: 600;
      letter-spacing: 0.03em;
    }

    .brand-role {
      font-size: 11px;
      color: var(--muted);
      text-transform: uppercase;
      letter-spacing: 0.12em;
    }

    nav {
      display: flex;
      gap: 10px;
      font-size: 13px;
    }

    nav a {
      padding: 6px 12px;
      border-radius: 999px;
      color: var(--muted);
      border: 1px solid transparent;
      transition: all 0.18s ease-out;
    }

    nav a:hover {
      color: var(--text);
      border-color: rgba(148, 163, 184, 0.4);
      background: rgba(15, 23, 42, 0.9);
    }

    .btn-primary {
      padding: 7px 14px;
      border-radius: 999px;
      border: none;
      background: linear-gradient(135deg, #38bdf8, #0ea5e9);
      color: #0b1120;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 10px 30px rgba(56, 189, 248, 0.35);
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: transform 0.12s ease-out, box-shadow 0.12s ease-out;
    }

    .btn-primary:hover {
      transform: translateY(-1px);
      box-shadow: 0 16px 40px rgba(56, 189, 248, 0.45);
    }

    .btn-primary span {
      font-size: 16px;
    }

    main {
      display: grid;
      grid-template-columns: minmax(0, 3fr) minmax(0, 2.2fr);
      gap: 24px;
      margin-top: 24px;
    }

    @media (max-width: 840px) {
      header {
        border-radius: 18px;
        flex-wrap: wrap;
        justify-content: center;
      }
      nav {
        flex-wrap: wrap;
        justify-content: center;
      }
      main {
        grid-template-columns: minmax(0, 1fr);
      }
    }

    .card {
      background: radial-gradient(circle at top left, rgba(56, 189, 248, 0.08), transparent 55%),
                  radial-gradient(circle at bottom right, rgba(15, 23, 42, 0.9), #020617 70%);
      border-radius: 26px;
      border: 1px solid rgba(148, 163, 184, 0.25);
      box-shadow: var(--shadow);
      padding: 26px 24px;
      position: relative;
      overflow: hidden;
    }

    .card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at top, rgba(56, 189, 248, 0.12), transparent 55%);
      opacity: 0.7;
      pointer-events: none;
    }

    .card-inner {
      position: relative;
      z-index: 1;
    }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 4px 10px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.85);
      border: 1px solid rgba(148, 163, 184, 0.4);
      color: var(--muted);
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 0.16em;
    }

    .pill-dot {
      width: 7px;
      height: 7px;
      border-radius: 999px;
      background: #22c55e;
      box-shadow: 0 0 0 4px rgba(34, 197, 94, 0.25);
    }

    .hero-title {
      margin-top: 18px;
      font-size: clamp(26px, 3vw, 32px);
      line-height: 1.2;
      font-weight: 700;
    }

    .hero-title span {
      background: linear-gradient(135deg, #38bdf8, #a855f7);
      -webkit-background-clip: text;
      color: transparent;
    }

    .hero-subtitle {
      margin-top: 10px;
      font-size: 14px;
      color: var(--muted);
      max-width: 520px;
    }

    .hero-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 18px;
      font-size: 12px;
      color: var(--muted);
    }

    .hero-meta span {
      padding: 4px 10px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.8);
      border: 1px solid rgba(148, 163, 184, 0.35);
    }

    .hero-actions {
      margin-top: 22px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
    }

    .btn-ghost {
      padding: 7px 14px;
      border-radius: 999px;
      border: 1px solid rgba(148, 163, 184, 0.4);
      background: rgba(15, 23, 42, 0.85);
      color: var(--muted);
      font-size: 13px;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      cursor: pointer;
      transition: all 0.15s ease-out;
    }

    .btn-ghost:hover {
      color: var(--text);
      border-color: rgba(148, 163, 184, 0.7);
      background: rgba(15, 23, 42, 0.95);
    }

    .hero-footer {
      margin-top: 22px;
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      font-size: 12px;
      color: var(--muted);
    }

    .hero-footer strong {
      color: var(--text);
      font-weight: 500;
    }

    .side-column {
      display: flex;
      flex-direction: column;
      gap: 16px;
    }

    .side-card {
      background: rgba(15, 23, 42, 0.95);
      border-radius: 22px;
      border: 1px solid rgba(148, 163, 184, 0.25);
      padding: 18px 18px 16px;
    }

    .side-title {
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--muted);
      margin-bottom: 10px;
    }

    .side-title span {
      color: var(--accent);
    }

    .about-text {
      font-size: 13px;
      color: var(--muted);
    }

    .about-text strong {
      color: var(--text);
      font-weight: 500;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      gap: 10px;
      margin-top: 6px;
    }

    .skill {
      padding: 8px 10px;
      border-radius: 14px;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(31, 41, 55, 0.9);
      display: flex;
      flex-direction: column;
      gap: 4px;
    }

    .skill-header {
      display: flex;
      justify-content: space-between;
      font-size: 12px;
    }

    .skill-name {
      color: var(--text);
    }

    .skill-level {
      color: var(--muted);
      font-size: 11px;
    }

    .skill-bar {
      position: relative;
      height: 5px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.9);
      overflow: hidden;
      border: 1px solid rgba(31, 41, 55, 0.9);
    }

    .skill-fill {
      position: absolute;
      inset: 0;
      border-radius: inherit;
      background: linear-gradient(90deg, #38bdf8, #a855f7);
      transform-origin: left;
    }

    .tag-row {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin-top: 6px;
    }

    .tag {
      font-size: 11px;
      padding: 3px 8px;
      border-radius: 999px;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(31, 41, 55, 0.9);
      color: var(--muted);
    }

    .projects-list {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 6px;
    }

    .project {
      padding: 10px 10px;
      border-radius: 14px;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(31, 41, 55, 0.9);
    }

    .project-header {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      gap: 8px;
    }

    .project-name {
      font-size: 13px;
      font-weight: 500;
    }

    .project-role {
      font-size: 11px;
      color: var(--muted);
      text-transform: uppercase;
      letter-spacing: 0.12em;
    }

    .project-desc {
      margin-top: 4px;
      font-size: 12px;
      color: var(--muted);
    }

    .project-meta {
      margin-top: 6px;
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      font-size: 11px;
      color: var(--muted);
    }

    .contact-card {
      margin-top: 18px;
      padding: 12px 12px 10px;
      border-radius: 16px;
      background: rgba(15, 23, 42, 0.95);
      border: 1px dashed rgba(148, 163, 184, 0.4);
      font-size: 12px;
      color: var(--muted);
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .contact-row {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      align-items: center;
    }

    .contact-label {
      font-size: 11px;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--muted);
    }

    .contact-link {
      color: var(--accent);
      font-weight: 500;
      word-break: break-all;
    }

    footer {
      margin-top: 32px;
      font-size: 11px;
      color: var(--muted);
      text-align: center;
    }

    footer span {
      color: var(--accent);
    }
  </style>
</head>
<body>
  <div class="page">
    <header>
      <div class="brand">
        <div class="brand-avatar">CZ</div>
        <div class="brand-text">
          <div class="brand-name">Czar Bob Zambrano</div>
          <div class="brand-role">Information Systems Analyst • Developer</div>
        </div>
      </div>
      <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
        <button class="btn-primary" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">
          <span>●</span> Let’s work together
        </button>
      </nav>
    </header>

    <main>
      <!-- LEFT: HERO -->
      <section class="card">
        <div class="card-inner">
          <div class="pill">
            <div class="pill-dot"></div>
            Available for collaboration • Public sector & NGOs
          </div>

          <h1 class="hero-title">
            Building practical, people‑centered <span>IT solutions</span> for real‑world problems.
          </h1>

          <p class="hero-subtitle">
            I’m Czar, an Information Systems Analyst and hands‑on developer who designs and delivers systems that make
            work simpler, faster, and more transparent—especially in government and non‑profit environments.
          </p>

          <div class="hero-meta">
            <span>Systems Development &nbsp;•&nbsp; Project Leadership</span>
            <span>Customer & Client Support</span>
            <span>Government & NGO Projects</span>
          </div>

          <div class="hero-actions">
            <button class="btn-primary" onclick="document.getElementById('projects').scrollIntoView({behavior:'smooth'})">
              View my work
            </button>
            <button class="btn-ghost" onclick="document.getElementById('about').scrollIntoView({behavior:'smooth'})">
              More about me →
            </button>
          </div>

          <div class="hero-footer">
            <div><strong>Current role:</strong> Information Systems Analyst, DOLE‑X</div>
            <div><strong>Location:</strong> Cagayan de Oro City, Philippines</div>
          </div>
        </div>
      </section>

      <!-- RIGHT: SIDE COLUMN -->
      <aside class="side-column">
        <section id="about" class="side-card">
          <div class="side-title"><span>About</span> Czar</div>
          <p class="about-text">
            I work at the intersection of <strong>technology, public service, and user experience</strong>. I’ve led and
            supported projects that digitize workflows, improve transparency, and make services more accessible for
            workers, employers, and partner organizations.
          </p>
          <p class="about-text" style="margin-top:6px;">
            Whether I’m building a system from scratch or troubleshooting a critical issue, I bring a calm,
            solutions‑oriented mindset and a strong focus on <strong>real‑world impact</strong>.
          </p>
        </section>

        <section id="skills" class="side-card">
          <div class="side-title"><span>Skills</span> & Tools</div>
          <div class="skills-grid">
            <div class="skill">
              <div class="skill-header">
                <span class="skill-name">PHP & MySQL</span>
                <span class="skill-level">70%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-fill" style="width:70%;"></div>
              </div>
            </div>
            <div class="skill">
              <div class="skill-header">
                <span class="skill-name">JavaScript</span>
                <span class="skill-level">65%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-fill" style="width:65%;"></div>
              </div>
            </div>
            <div class="skill">
              <div class="skill-header">
                <span class="skill-name">Customer Support</span>
                <span class="skill-level">80%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-fill" style="width:80%;"></div>
              </div>
            </div>
            <div class="skill">
              <div class="skill-header">
                <span class="skill-name">Project Management</span>
                <span class="skill-level">65%</span>
              </div>
              <div class="skill-bar">
                <div class="skill-fill" style="width:65%;"></div>
              </div>
            </div>
          </div>

          <div class="tag-row">
            <span class="tag">Delphi</span>
            <span class="tag">SQL</span>
            <span class="tag">System Design</span>
            <span class="tag">User Support</span>
            <span class="tag">Documentation</span>
          </div>
        </section>

        <section class="side-card">
          <div class="side-title"><span>Outside</span> of work</div>
          <p class="about-text">
            I recharge through <strong>video games</strong>, <strong>sports</strong>, <strong>music</strong>, and
            <strong>anime</strong>—they keep me curious, creative, and grounded.
          </p>
        </section>
      </aside>
    </main>

    <!-- PROJECTS & CONTACT -->
    <section id="projects" class="side-card" style="margin-top:24px;">
      <div class="side-title"><span>Selected</span> Projects</div>
      <div class="projects-list">
        <article class="project">
          <div class="project-header">
            <div class="project-name">NAAC Financial Workflow System</div>
            <div class="project-role">Developer</div>
          </div>
          <p class="project-desc">
            Contributed to a financial workflow system for a Hong Kong–based non‑profit, improving transparency,
            approval tracking, and operational efficiency.
          </p>
          <div class="project-meta">
            <span>PHP</span>
            <span>MySQL</span>
            <span>Workflow Automation</span>
          </div>
        </article>

        <article class="project">
          <div class="project-header">
            <div class="project-name">Human Resource Information System (HRIS)</div>
            <div class="project-role">Lead Developer</div>
          </div>
          <p class="project-desc">
            Designed and developed an internal HR system covering employee profiling, leave management, and core HR
            processes for streamlined operations.
          </p>
          <div class="project-meta">
            <span>System Design</span>
            <span>PHP</span>
            <span>Database Design</span>
          </div>
        </article>

        <article class="project">
          <div class="project-header">
            <div class="project-name">Electronic Construction Safety and Health Program (e‑CSHP)</div>
            <div class="project-role">Project Leader</div>
          </div>
          <p class="project-desc">
            Led the development of an online system for CSHP applications, approvals, and monitoring for the Department
            of Labor and Employment, reducing manual processing and improving oversight.
          </p>
          <div class="project-meta">
            <span>Government System</span>
            <span>Project Leadership</span>
            <span>Process Digitization</span>
          </div>
        </article>
      </div>
    </section>

    <section id="contact" class="side-card" style="margin-top:16px;">
      <div class="side-title"><span>Contact</span> & Collaboration</div>
      <p class="about-text">
        If you’re working on a project in the public sector, non‑profit space, or any environment that needs
        <strong>clear, reliable systems</strong>, I’d be glad to explore how we can work together.
      </p>

      <div class="contact-card">
        <div class="contact-row">
          <span class="contact-label">Email</span>
          <a class="contact-link" href="mailto:czarbobzambrano@gmail.com">czarbobzambrano@gmail.com</a>
        </div>
        <div class="contact-row">
          <span class="contact-label">Phone</span>
          <span class="contact-link">+63 9636‑376‑837</span>
        </div>
        <div class="contact-row">
          <span class="contact-label">GitHub</span>
          <a class="contact-link" href="https://github.com/czarbob" target="_blank" rel="noopener">github.com/czarbob</a>
        </div>
        <div class="contact-row">
          <span class="contact-label">LinkedIn</span>
          <span class="contact-link">Add your LinkedIn URL here</span>
        </div>
      </div>
    </section>

    <footer>
      © <span>Czar Bob Zambrano</span> · Crafted with intention and public service in mind.
    </footer>
  </div>
</body>
</html>
