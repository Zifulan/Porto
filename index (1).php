<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatahillah Rachman — APT Website Officer & IT Programmer</title>
    <meta name="description" content="Portfolio of Fatahillah Rachman — APT Website Officer at ASEAN Secretariat. Background in healthcare IT, PHP development, SQL and Python data analysis.">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Fatahillah Rachman",
      "url": "https://zif.my.id",
      "jobTitle": "ASEAN Plus Three (APT) Website Officer",
      "worksFor": { "@type": "Organization", "name": "ASEAN Secretariat" },
      "alumniOf": { "@type": "CollegeOrUniversity", "name": "Bina Nusantara University" },
      "knowsAbout": ["PHP", "Laravel", "Python", "SQL", "Healthcare IT", "TrakCare HIS", "CMS", "SEO", "Web Analytics"],
      "sameAs": ["https://linkedin.com/in/fatahillah-rachman"]
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Mono:ital,wght@0,400;0,500;1,400&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        :root {
            --sand:    #F2EDE4;
            --cream:   #FAF8F4;
            --ink:     #1A1714;
            --bark:    #3D3228;
            --moss:    #4A6741;
            --clay:    #B85C38;
            --gold:    #C9963A;
            --mist:    #8E9E8A;
            --line:    rgba(26,23,20,0.12);
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { font-size: 16px; }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--cream);
            color: var(--ink);
            overflow-x: hidden;
            cursor: none;
        }

        /* Custom Cursor */
        .cursor {
            position: fixed;
            width: 10px; height: 10px;
            background: var(--clay);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: transform 0.1s, width 0.2s, height 0.2s, background 0.2s;
        }
        .cursor-ring {
            position: fixed;
            width: 36px; height: 36px;
            border: 1.5px solid var(--clay);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: transform 0.18s ease, width 0.25s, height 0.25s;
        }
        body:hover .cursor { opacity: 1; }

        /* Scrollbar */
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: var(--sand); }
        ::-webkit-scrollbar-thumb { background: var(--clay); border-radius: 4px; }

        /* NAV */
        nav {
            position: fixed; top: 0; left: 0; right: 0;
            z-index: 100;
            display: flex; align-items: center; justify-content: space-between;
            padding: 1.4rem 3rem;
            background: rgba(250,248,244,0.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--line);
            transition: padding 0.3s;
        }
        .nav-logo {
            font-family: 'Syne', sans-serif;
            font-weight: 800; font-size: 1.1rem;
            letter-spacing: -0.02em;
            color: var(--ink);
            text-decoration: none;
        }
        .nav-logo span { color: var(--clay); }
        .nav-links { display: flex; gap: 2.2rem; list-style: none; }
        .nav-links a {
            font-size: 0.82rem;
            font-family: 'DM Mono', monospace;
            color: var(--bark);
            text-decoration: none;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: var(--clay); }
        .nav-cta {
            font-family: 'DM Mono', monospace;
            font-size: 0.78rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            background: var(--ink);
            color: var(--cream);
            padding: 0.55rem 1.4rem;
            border-radius: 2px;
            text-decoration: none;
            transition: background 0.2s;
        }
        .nav-cta:hover { background: var(--clay); }
        .nav-hamburger { display: none; background: none; border: none; cursor: none; }
        .nav-hamburger span { display: block; width: 22px; height: 2px; background: var(--ink); margin: 5px 0; transition: 0.3s; }

        /* HERO */
        #home {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: end;
            padding: 10rem 3rem 4rem;
            position: relative;
            overflow: hidden;
        }
        .hero-bg-text {
            position: absolute;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: clamp(8rem, 20vw, 18rem);
            color: transparent;
            -webkit-text-stroke: 1px rgba(26,23,20,0.06);
            white-space: nowrap;
            pointer-events: none;
            user-select: none;
            letter-spacing: -0.04em;
        }
        .hero-left { position: relative; z-index: 2; }
        .hero-tag {
            display: inline-flex; align-items: center; gap: 0.5rem;
            font-family: 'DM Mono', monospace;
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--mist);
            border: 1px solid var(--line);
            padding: 0.35rem 0.85rem;
            border-radius: 2px;
            margin-bottom: 2rem;
        }
        .hero-tag::before {
            content: '';
            width: 6px; height: 6px;
            background: var(--moss);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }
        @keyframes pulse { 0%,100%{opacity:1;transform:scale(1);} 50%{opacity:0.4;transform:scale(0.8);} }
        .hero-name {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: clamp(3.2rem, 7vw, 6.5rem);
            line-height: 0.92;
            letter-spacing: -0.04em;
            color: var(--ink);
            margin-bottom: 1.8rem;
        }
        .hero-name em { color: var(--clay); font-style: normal; }
        .hero-desc {
            font-size: 1.05rem;
            line-height: 1.7;
            color: var(--bark);
            max-width: 480px;
            margin-bottom: 2.5rem;
            font-weight: 300;
        }
        .hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn {
            display: inline-flex; align-items: center; gap: 0.5rem;
            font-family: 'DM Mono', monospace;
            font-size: 0.78rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            text-decoration: none;
            padding: 0.85rem 2rem;
            border-radius: 2px;
            transition: all 0.25s;
            cursor: none;
        }
        .btn-dark { background: var(--ink); color: var(--cream); }
        .btn-dark:hover { background: var(--clay); }
        .btn-outline {
            background: transparent;
            color: var(--ink);
            border: 1.5px solid var(--ink);
        }
        .btn-outline:hover { background: var(--ink); color: var(--cream); }

        .hero-right {
            position: relative; z-index: 2;
            display: flex; flex-direction: column;
            align-items: flex-end; justify-content: flex-end;
            gap: 1.5rem;
        }
        .hero-stat-card {
            background: var(--sand);
            border: 1px solid var(--line);
            border-radius: 4px;
            padding: 1.4rem 2rem;
            text-align: center;
            min-width: 140px;
        }
        .hero-stat-card .num {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 2.8rem;
            color: var(--clay);
            line-height: 1;
        }
        .hero-stat-card .label {
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--mist);
            margin-top: 0.3rem;
        }
        .hero-stack {
            display: flex; flex-wrap: wrap; gap: 0.5rem;
            justify-content: flex-end;
        }
        .stack-pill {
            font-family: 'DM Mono', monospace;
            font-size: 0.7rem;
            letter-spacing: 0.04em;
            background: var(--sand);
            border: 1px solid var(--line);
            color: var(--bark);
            padding: 0.3rem 0.75rem;
            border-radius: 100px;
        }
        /* SECTION BASE */
        section { padding: 7rem 3rem; }
        .section-label {
            font-family: 'DM Mono', monospace;
            font-size: 0.7rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--clay);
            margin-bottom: 0.75rem;
            display: flex; align-items: center; gap: 0.75rem;
        }
        .section-label::after { content: ''; flex: 1; max-width: 48px; height: 1px; background: var(--clay); }
        .section-title {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: clamp(2rem, 4vw, 3.2rem);
            letter-spacing: -0.03em;
            line-height: 1.05;
            color: var(--ink);
            margin-bottom: 3.5rem;
        }
        .divider { height: 1px; background: var(--line); margin: 0 3rem; }

        /* ABOUT */
        #about { background: var(--sand); }
        .about-grid { display: grid; grid-template-columns: 1fr 1.4fr; gap: 5rem; align-items: start; }
        .about-left { }
        .about-intro {
            font-size: 1.25rem;
            line-height: 1.75;
            font-weight: 300;
            color: var(--bark);
            margin-bottom: 2.5rem;
        }
        .about-intro strong { font-weight: 600; color: var(--ink); }
        .contact-chips { display: flex; flex-direction: column; gap: 0.75rem; }
        .chip {
            display: flex; align-items: center; gap: 0.85rem;
            font-size: 0.88rem;
            color: var(--bark);
            text-decoration: none;
            transition: color 0.2s;
        }
        .chip:hover { color: var(--clay); }
        .chip i { width: 16px; color: var(--mist); }
        .about-right { }
        .competency-list { display: flex; flex-direction: column; }
        .competency-item {
            display: flex; align-items: flex-start;
            padding: 1.4rem 0;
            border-bottom: 1px solid var(--line);
            gap: 1.5rem;
        }
        .competency-item:first-child { border-top: 1px solid var(--line); }
        .competency-num {
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            color: var(--mist);
            min-width: 24px;
            padding-top: 2px;
        }
        .competency-info h4 {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 1rem;
            color: var(--ink);
            margin-bottom: 0.3rem;
        }
        .competency-info p {
            font-size: 0.85rem;
            color: var(--mist);
            line-height: 1.5;
        }

        /* EXPERIENCE */
        #experience { background: var(--cream); }
        .exp-list { display: flex; flex-direction: column; gap: 0; }
        .exp-item {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 3rem;
            padding: 3rem 0;
            border-bottom: 1px solid var(--line);
            position: relative;
        }
        .exp-item:first-child { border-top: 1px solid var(--line); }
        .exp-meta { }
        .exp-date {
            font-family: 'DM Mono', monospace;
            font-size: 0.72rem;
            color: var(--mist);
            letter-spacing: 0.04em;
            line-height: 1.6;
            margin-bottom: 0.75rem;
        }
        .exp-company {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--bark);
            margin-bottom: 0.4rem;
        }
        .exp-badge {
            display: inline-block;
            font-family: 'DM Mono', monospace;
            font-size: 0.62rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 0.2rem 0.6rem;
            border-radius: 2px;
        }
        .badge-current { background: var(--moss); color: #fff; }
        .badge-promoted { background: var(--clay); color: #fff; }
        .badge-intern { background: var(--sand); color: var(--bark); border: 1px solid var(--line); }
        .exp-body { }
        .exp-title {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.35rem;
            letter-spacing: -0.02em;
            color: var(--ink);
            margin-bottom: 0.75rem;
        }
        .exp-summary {
            font-size: 0.9rem;
            color: var(--bark);
            font-style: italic;
            margin-bottom: 1.2rem;
            line-height: 1.6;
        }
        .exp-bullets { list-style: none; display: flex; flex-direction: column; gap: 0.55rem; }
        .exp-bullets li {
            display: flex; gap: 0.75rem;
            font-size: 0.88rem;
            color: var(--bark);
            line-height: 1.55;
        }
        .exp-bullets li::before {
            content: '→';
            color: var(--clay);
            font-family: 'DM Mono', monospace;
            flex-shrink: 0;
            margin-top: 1px;
        }
        .exp-tags { display: flex; flex-wrap: wrap; gap: 0.4rem; margin-top: 1.2rem; }
        .exp-tag {
            font-family: 'DM Mono', monospace;
            font-size: 0.65rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            background: var(--sand);
            color: var(--bark);
            border: 1px solid var(--line);
            padding: 0.2rem 0.65rem;
            border-radius: 2px;
        }

        /* SKILLS */
        #skills { background: var(--ink); color: var(--cream); }
        #skills .section-label { color: var(--gold); }
        #skills .section-label::after { background: var(--gold); }
        #skills .section-title { color: var(--cream); }
        .skills-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 2px; }
        .skill-block {
            background: rgba(255,255,255,0.04);
            padding: 2.2rem;
            border: 1px solid rgba(255,255,255,0.07);
            transition: background 0.2s;
        }
        .skill-block:hover { background: rgba(255,255,255,0.08); }
        .skill-block h3 {
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 1.2rem;
        }
        .skill-items { display: flex; flex-wrap: wrap; gap: 0.5rem; }
        .skill-item {
            font-size: 0.83rem;
            background: rgba(255,255,255,0.06);
            color: rgba(250,248,244,0.75);
            padding: 0.35rem 0.85rem;
            border-radius: 2px;
            border: 1px solid rgba(255,255,255,0.08);
            transition: background 0.2s, color 0.2s;
        }
        .skill-item:hover { background: var(--clay); color: #fff; border-color: var(--clay); }

        /* EDUCATION */
        #education { background: var(--sand); }
        .edu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; }
        .edu-col h3 {
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--mist);
            margin-bottom: 1.5rem;
        }
        .edu-item {
            padding: 1.6rem 0;
            border-bottom: 1px solid var(--line);
        }
        .edu-item:first-of-type { border-top: 1px solid var(--line); }
        .edu-degree {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--ink);
            margin-bottom: 0.25rem;
        }
        .edu-school {
            font-size: 0.85rem;
            color: var(--moss);
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        .edu-date {
            font-family: 'DM Mono', monospace;
            font-size: 0.7rem;
            color: var(--mist);
        }
        .edu-status {
            display: inline-block;
            font-family: 'DM Mono', monospace;
            font-size: 0.6rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 0.18rem 0.55rem;
            border-radius: 2px;
            margin-top: 0.5rem;
        }
        .status-ongoing { background: var(--gold); color: #fff; }
        .status-done { background: var(--moss); color: #fff; }
        .cert-item {
            padding: 1.25rem 0;
            border-bottom: 1px solid var(--line);
        }
        .cert-item:first-of-type { border-top: 1px solid var(--line); }
        .cert-name {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--ink);
            margin-bottom: 0.2rem;
        }
        .cert-issuer {
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            color: var(--mist);
        }

        /* CONTACT */
        #contact { background: var(--cream); }
        .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 5rem; align-items: start; }
        .contact-left .big-text {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: clamp(2.2rem, 5vw, 4rem);
            letter-spacing: -0.04em;
            line-height: 1.05;
            color: var(--ink);
            margin-bottom: 1.5rem;
        }
        .contact-left .big-text em { color: var(--clay); font-style: normal; }
        .contact-left p {
            font-size: 1rem;
            color: var(--bark);
            font-weight: 300;
            line-height: 1.7;
            max-width: 420px;
            margin-bottom: 2.5rem;
        }
        .contact-links { display: flex; flex-direction: column; gap: 1rem; }
        .contact-link {
            display: flex; align-items: center; gap: 1.2rem;
            padding: 1.4rem 1.6rem;
            background: var(--sand);
            border: 1px solid var(--line);
            text-decoration: none;
            color: var(--ink);
            border-radius: 4px;
            transition: all 0.2s;
            cursor: none;
        }
        .contact-link:hover { background: var(--ink); color: var(--cream); border-color: var(--ink); }
        .contact-link:hover .cl-icon { background: rgba(255,255,255,0.1); color: var(--cream); }
        .cl-icon {
            width: 40px; height: 40px;
            background: var(--cream);
            border-radius: 2px;
            display: flex; align-items: center; justify-content: center;
            font-size: 1rem;
            color: var(--clay);
            flex-shrink: 0;
            transition: all 0.2s;
        }
        .cl-info { flex: 1; }
        .cl-type { font-family: 'DM Mono', monospace; font-size: 0.62rem; letter-spacing: 0.08em; text-transform: uppercase; color: var(--mist); margin-bottom: 0.2rem; }
        .cl-value { font-size: 0.88rem; font-weight: 500; }
        .cl-arrow { font-size: 0.9rem; color: var(--mist); transition: transform 0.2s; }
        .contact-link:hover .cl-arrow { transform: translate(4px, -4px); color: var(--cream); }
        .contact-right { }
        .availability-card {
            background: var(--ink);
            color: var(--cream);
            border-radius: 4px;
            padding: 2.5rem;
            margin-bottom: 1.5rem;
        }
        .avail-dot {
            display: inline-block;
            width: 8px; height: 8px;
            background: #4ade80;
            border-radius: 50%;
            margin-right: 0.5rem;
            animation: pulse 2s infinite;
        }
        .avail-title {
            font-family: 'DM Mono', monospace;
            font-size: 0.7rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(250,248,244,0.5);
            margin-bottom: 1.5rem;
        }
        .avail-status {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.6rem;
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }
        .avail-list { list-style: none; display: flex; flex-direction: column; gap: 0.6rem; }
        .avail-list li { font-size: 0.85rem; color: rgba(250,248,244,0.7); display: flex; gap: 0.75rem; }
        .avail-list li::before { content: '✓'; color: #4ade80; }

        /* PORTFOLIO */
        #portfolio { background: var(--cream); }
        .porto-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
        .porto-card {
            background: var(--sand);
            border: 1px solid var(--line);
            border-radius: 4px;
            padding: 2.2rem;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
            transition: all 0.25s;
            position: relative;
            overflow: hidden;
        }
        .porto-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 3px;
            background: var(--clay);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }
        .porto-card:hover::before { transform: scaleX(1); }
        .porto-card:hover { border-color: rgba(184,92,56,0.3); transform: translateY(-3px); }
        .porto-card.coming-soon {
            border-style: dashed;
            background: transparent;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 280px;
        }
        .porto-card.coming-soon:hover { transform: none; border-color: var(--line); }
        .porto-card.coming-soon::before { display: none; }
        .porto-type {
            font-family: 'DM Mono', monospace;
            font-size: 0.62rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--clay);
            display: flex; align-items: center; gap: 0.5rem;
        }
        .porto-type::before {
            content: '';
            width: 16px; height: 1px;
            background: var(--clay);
        }
        .porto-title {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 1.2rem;
            letter-spacing: -0.02em;
            color: var(--ink);
            line-height: 1.2;
        }
        .porto-desc {
            font-size: 0.85rem;
            color: var(--bark);
            line-height: 1.65;
            font-weight: 300;
            flex: 1;
        }
        .porto-meta {
            display: flex; flex-direction: column; gap: 0.5rem;
        }
        .porto-org {
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            color: var(--mist);
            letter-spacing: 0.04em;
        }
        .porto-tags { display: flex; flex-wrap: wrap; gap: 0.4rem; }
        .porto-tag {
            font-family: 'DM Mono', monospace;
            font-size: 0.62rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            background: var(--cream);
            color: var(--bark);
            border: 1px solid var(--line);
            padding: 0.2rem 0.6rem;
            border-radius: 2px;
        }
        .porto-link {
            display: inline-flex; align-items: center; gap: 0.4rem;
            font-family: 'DM Mono', monospace;
            font-size: 0.68rem;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--clay);
            text-decoration: none;
            margin-top: auto;
            transition: gap 0.2s;
        }
        .porto-link:hover { gap: 0.7rem; }
        .porto-coming-icon {
            font-size: 2rem;
            color: var(--line);
            margin-bottom: 0.5rem;
        }
        .porto-coming-text {
            font-family: 'Syne', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--mist);
            margin-bottom: 0.4rem;
        }
        .porto-coming-sub {
            font-family: 'DM Mono', monospace;
            font-size: 0.65rem;
            letter-spacing: 0.06em;
            color: rgba(142,158,138,0.6);
            text-transform: uppercase;
        }
        @media (max-width: 900px) {
            .porto-grid { grid-template-columns: 1fr; }
        }

        /* FOOTER */
        footer {
            background: var(--ink);
            color: rgba(250,248,244,0.4);
            padding: 2.5rem 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-family: 'DM Mono', monospace;
            font-size: 0.7rem;
            letter-spacing: 0.04em;
        }
        footer a { color: rgba(250,248,244,0.4); text-decoration: none; transition: color 0.2s; }
        footer a:hover { color: var(--clay); }

        /* MOBILE NAV MENU */
        .mobile-nav {
            display: none;
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: var(--cream);
            z-index: 99;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2rem;
        }
        .mobile-nav.open { display: flex; }
        .mobile-nav a {
            font-family: 'Syne', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            color: var(--ink);
            text-decoration: none;
            letter-spacing: -0.02em;
        }
        .mobile-nav a:hover { color: var(--clay); }
        .mobile-close {
            position: absolute; top: 1.5rem; right: 2rem;
            font-size: 1.5rem;
            background: none; border: none;
            color: var(--ink); cursor: pointer;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            nav { padding: 1.2rem 1.5rem; }
            .nav-links, .nav-cta { display: none; }
            .nav-hamburger { display: block; }
            #home { grid-template-columns: 1fr; padding: 8rem 1.5rem 3rem; }
            .hero-right { align-items: flex-start; margin-top: 2.5rem; }
            .hero-bg-text { font-size: 5rem; }
            section { padding: 5rem 1.5rem; }
            .divider { margin: 0 1.5rem; }
            .about-grid { grid-template-columns: 1fr; gap: 3rem; }
            .exp-item { grid-template-columns: 1fr; gap: 0.5rem; }
            .skills-grid { grid-template-columns: 1fr 1fr; }
            .edu-grid { grid-template-columns: 1fr; }
            .porto-grid { grid-template-columns: 1fr; }
            .contact-grid { grid-template-columns: 1fr; gap: 3rem; }
            footer { flex-direction: column; gap: 1rem; text-align: center; }
            .cursor, .cursor-ring { display: none; }
            body { cursor: auto; }
            a, button { cursor: pointer; }
            .mobile-nav a { font-size: 1.8rem; }
        }
        @media (max-width: 560px) {
            .skills-grid { grid-template-columns: 1fr; }
        }

        /* SCROLL REVEAL */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Cursor -->
    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    <!-- Mobile Nav -->
    <div class="mobile-nav" id="mobileNav">
        <button class="mobile-close" id="mobileClose">✕</button>
        <a href="#home" onclick="closeMobileNav()">Home</a>
        <a href="#about" onclick="closeMobileNav()">About</a>
        <a href="#experience" onclick="closeMobileNav()">Experience</a>
        <a href="#skills" onclick="closeMobileNav()">Skills</a>
        <a href="#portfolio" onclick="closeMobileNav()">Portfolio</a>
        <a href="#education" onclick="closeMobileNav()">Education</a>
        <a href="#contact" onclick="closeMobileNav()">Contact</a>
    </div>

    <!-- Navigation -->
    <nav id="mainNav">
        <a href="#home" class="nav-logo">F<span>.</span>Rachman</a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="mailto:fatahillah.rachman14@gmail.com" class="nav-cta">Hire Me</a>
        <button class="nav-hamburger" id="navHamburger" aria-label="Menu">
            <span></span><span></span><span></span>
        </button>
    </nav>

    <!-- HERO -->
    <section id="home">
        <div class="hero-bg-text">RACHMAN</div>
        <div class="hero-left">
            <div class="hero-tag">Open to new opportunities</div>
            <h1 class="hero-name">
                Fatahillah<br><em>Rachman</em>
            </h1>
            <p class="hero-desc">
                IT programmer and application support with around 4 years working in hospital IT and, more recently, regional digital platforms. Currently based at the ASEAN Secretariat managing the ASEAN+3 website.
            </p>
            <div class="hero-actions">
                <a href="#experience" class="btn btn-dark"><i class="fas fa-briefcase"></i> View Work</a>
                <a href="mailto:fatahillah.rachman14@gmail.com" class="btn btn-outline"><i class="fas fa-paper-plane"></i> Get In Touch</a>
            </div>
        </div>
        <div class="hero-right">
            <div class="hero-stack">
                <span class="stack-pill">PHP</span>
                <span class="stack-pill">Laravel</span>
                <span class="stack-pill">Python</span>
                <span class="stack-pill">SQL</span>
                <span class="stack-pill">TrakCare HIS</span>
                <span class="stack-pill">CMS</span>
                <span class="stack-pill">Linux</span>
                <span class="stack-pill">Git</span>
            </div>
            <div style="display:flex; gap:1rem;">
                <div class="hero-stat-card">
                    <div class="num">4+</div>
                    <div class="label">Years Exp.</div>
                </div>
                <div class="hero-stat-card">
                    <div class="num">4</div>
                    <div class="label">Roles Held</div>
                </div>
                <div class="hero-stat-card">
                    <div class="num">3</div>
                    <div class="label">Hospitals</div>
                </div>
            </div>
        </div>

    </section>

    <div class="divider"></div>

    <!-- ABOUT -->
    <section id="about">
        <div class="section-label">About Me</div>
        <div class="about-grid">
            <div class="about-left reveal">
                <p class="about-intro">
                    I'm an IT programmer and application support with <strong>around 4 years of experience</strong>, mostly in hospital IT. I work primarily with <strong>PHP</strong> and <strong>SQL</strong>, and I've spent a good chunk of my career inside TrakCare HIS environments at Premier Bintaro Hospital.
                </p>
                <p class="about-intro" style="font-size:0.95rem;">
                    I recently made a shift into regional digital platforms at the ASEAN Secretariat, where I manage the ASEAN+3 website. I also use <strong>Python</strong> for data work on both sides of that career so far, from hospital reporting to web analytics.
                </p>
                <div class="contact-chips" style="margin-top:2rem;">
                    <a href="mailto:fatahillah.rachman14@gmail.com" class="chip">
                        <i class="fas fa-envelope"></i> fatahillah.rachman14@gmail.com
                    </a>
                    <a href="https://linkedin.com/in/fatahillah-rachman" target="_blank" class="chip">
                        <i class="fab fa-linkedin"></i> linkedin.com/in/fatahillah-rachman
                    </a>
                    <a href="https://zif.my.id" target="_blank" class="chip">
                        <i class="fas fa-globe"></i> zif.my.id
                    </a>
                    <span class="chip">
                        <i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia
                    </span>
                </div>
            </div>
            <div class="about-right reveal">
                <div class="section-title" style="font-size:1.1rem; margin-bottom:0;">Core Competencies</div>
                <div class="competency-list">
                    <div class="competency-item">
                        <span class="competency-num">01</span>
                        <div class="competency-info">
                            <h4>PHP Development & Laravel</h4>
                            <p>Built and maintained internal web apps, migrated legacy PHP 5 code to PHP 8.1, and handled server deployment.</p>
                        </div>
                    </div>
                    <div class="competency-item">
                        <span class="competency-num">02</span>
                        <div class="competency-info">
                            <h4>Python Data Analysis</h4>
                            <p>Used pandas, numpy, matplotlib and scikit-learn for hospital management reports and website performance analytics.</p>
                        </div>
                    </div>
                    <div class="competency-item">
                        <span class="competency-num">03</span>
                        <div class="competency-info">
                            <h4>SQL & Database Management</h4>
                            <p>Comfortable with MySQL, SQL Server and InterSystems IRIS SQL. Familiar with ODBC connections and building reports from live databases.</p>
                        </div>
                    </div>
                    <div class="competency-item">
                        <span class="competency-num">04</span>
                        <div class="competency-info">
                            <h4>Healthcare IT Systems</h4>
                            <p>Hands-on with TrakCare HIS across its 2012 to 2023 versions, including the upgrade process, clinical reporting, and daily support.</p>
                        </div>
                    </div>
                    <div class="competency-item">
                        <span class="competency-num">05</span>
                        <div class="competency-info">
                            <h4>CMS & Web Platform Management</h4>
                            <p>Day-to-day management of the ASEAN+3 website including content, UI updates, SEO, plugin maintenance and performance reporting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- EXPERIENCE -->
    <section id="experience">
        <div class="section-label">Work Experience</div>
        <h2 class="section-title">Career History</h2>
        <div class="exp-list">

            <!-- ASEAN -->
            <div class="exp-item reveal">
                <div class="exp-meta">
                    <div class="exp-date">June 2025<br>Present</div>
                    <div class="exp-company">ASEAN Secretariat</div>
                    <span class="exp-badge badge-current">Current</span>
                </div>
                <div class="exp-body">
                    <div class="exp-title">ASEAN Plus Three (APT) Website Officer</div>
                    <p class="exp-summary">Managing the ASEAN Plus Three website, a public platform covering cooperation across 13 countries in East and Southeast Asia.</p>
                    <ul class="exp-bullets">
                        <li>Handle daily content updates, technical maintenance and CMS management for the APT website</li>
                        <li>Work on UI improvements, plugin updates and bug fixes as they come up</li>
                        <li>Run SEO updates and support multimedia content work</li>
                        <li>Use Python to pull and process website analytics for stakeholder reports</li>
                        <li>Write interim reports and technical documentation to keep things running smoothly</li>
                    </ul>
                    <div class="exp-tags">
                        <span class="exp-tag">CMS Management</span>
                        <span class="exp-tag">Python Analytics</span>
                        <span class="exp-tag">SEO</span>
                        <span class="exp-tag">UI/UX</span>
                        <span class="exp-tag">Technical Documentation</span>
                    </div>
                </div>
            </div>

            <!-- Premier Group -->
            <div class="exp-item reveal">
                <div class="exp-meta">
                    <div class="exp-date">Apr 2025<br>May 2025</div>
                    <div class="exp-company">Premier Hospital Group</div>
                    <span class="exp-badge badge-promoted">Promoted</span>
                </div>
                <div class="exp-body">
                    <div class="exp-title">IT Core Application Developer Staff</div>
                    <p class="exp-summary">Promoted to the corporate IT team to take over the core PHP application used across all three RS Premier hospitals after the previous developer left.</p>
                    <ul class="exp-bullets">
                        <li>Picked up the codebase as sole developer and stabilised it during the handover period</li>
                        <li>Fixed urgent issues to keep operations running across RS Premier Bintaro, Jatinegara and Surabaya</li>
                        <li>Wrote documentation covering the application for whoever came next</li>
                    </ul>
                    <div class="exp-tags">
                        <span class="exp-tag">PHP Development</span>
                        <span class="exp-tag">System Maintenance</span>
                        <span class="exp-tag">Documentation</span>
                    </div>
                </div>
            </div>

            <!-- Premier Bintaro -->
            <div class="exp-item reveal">
                <div class="exp-meta">
                    <div class="exp-date">Mar 2023<br>Apr 2025</div>
                    <div class="exp-company">Premier Bintaro Hospital</div>
                    <span class="exp-badge" style="background:var(--gold);color:#fff;">2y 2m</span>
                </div>
                <div class="exp-body">
                    <div class="exp-title">IT Programmer & Application Support</div>
                    <p class="exp-summary">IT programmer and application support at Premier Bintaro Hospital, working across development projects and day-to-day system maintenance.</p>
                    <ul class="exp-bullets">
                        <li>Involved in the TrakCare HIS upgrade from 2012 to 2023, covering planning, testing, deployment and post-go-live support</li>
                        <li>Migrated legacy internal PHP 5.0 apps to PHP 8.1 and moved them to a new server</li>
                        <li>Built operational and clinical reports using JReport, Crystal Report and DBeaver connected to TrakCare via ODBC</li>
                        <li>Used Python (pandas, numpy, matplotlib, scikit-learn) to analyse TrakCare data for management reporting</li>
                        <li>Worked with the corporate dev team on the PHP application that eventually served all three RS Premier hospitals</li>
                        <li>Handled general IT support including hardware issues and user assistance</li>
                    </ul>
                    <div class="exp-tags">
                        <span class="exp-tag">TrakCare HIS</span>
                        <span class="exp-tag">PHP 8.1</span>
                        <span class="exp-tag">Python</span>
                        <span class="exp-tag">Crystal Report</span>
                        <span class="exp-tag">JReport</span>
                        <span class="exp-tag">Healthcare IT</span>
                    </div>
                </div>
            </div>

            <!-- Internship -->
            <div class="exp-item reveal">
                <div class="exp-meta">
                    <div class="exp-date">Feb 2022<br>Feb 2023</div>
                    <div class="exp-company">Premier Bintaro Hospital</div>
                    <span class="exp-badge badge-intern">Internship</span>
                </div>
                <div class="exp-body">
                    <div class="exp-title">Application Developer & Tech Support</div>
                    <p class="exp-summary">Started here as an intern, building internal web tools and getting my first real exposure to hospital IT systems.</p>
                    <ul class="exp-bullets">
                        <li>Built a web-based internal app to support hospital processes</li>
                        <li>Got familiar with TrakCare and how it connected to hospital operations day to day</li>
                        <li>Helped with IT support including hardware fixes and user requests</li>
                    </ul>
                    <div class="exp-tags">
                        <span class="exp-tag">Web Development</span>
                        <span class="exp-tag">TrakCare</span>
                        <span class="exp-tag">IT Support</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="divider"></div>

    <!-- SKILLS -->
    <section id="skills">
        <div class="section-label">Technical Arsenal</div>
        <h2 class="section-title" style="color:var(--cream);">Skills & Technologies</h2>
        <div class="skills-grid reveal">
            <div class="skill-block">
                <h3>Programming Languages</h3>
                <div class="skill-items">
                    <span class="skill-item">PHP</span>
                    <span class="skill-item">Python</span>
                    <span class="skill-item">SQL</span>
                    <span class="skill-item">JavaScript</span>
                </div>
            </div>
            <div class="skill-block">
                <h3>Frameworks & Libraries</h3>
                <div class="skill-items">
                    <span class="skill-item">Laravel</span>
                    <span class="skill-item">pandas</span>
                    <span class="skill-item">numpy</span>
                    <span class="skill-item">matplotlib</span>
                    <span class="skill-item">scikit-learn</span>
                    <span class="skill-item">ODBC</span>
                </div>
            </div>
            <div class="skill-block">
                <h3>Databases</h3>
                <div class="skill-items">
                    <span class="skill-item">MySQL</span>
                    <span class="skill-item">SQL Server</span>
                    <span class="skill-item">InterSystems IRIS</span>
                    <span class="skill-item">DBeaver</span>
                </div>
            </div>
            <div class="skill-block">
                <h3>Reporting Tools</h3>
                <div class="skill-items">
                    <span class="skill-item">Crystal Report</span>
                    <span class="skill-item">JReport</span>
                    <span class="skill-item">Power BI</span>
                </div>
            </div>
            <div class="skill-block">
                <h3>Systems & Infrastructure</h3>
                <div class="skill-items">
                    <span class="skill-item">Windows AD</span>
                    <span class="skill-item">DHCP</span>
                    <span class="skill-item">Radius Server</span>
                    <span class="skill-item">Linux</span>
                    <span class="skill-item">Mac OS</span>
                    <span class="skill-item">Cloud Infra</span>
                    <span class="skill-item">Server Backup</span>
                </div>
            </div>
            <div class="skill-block">
                <h3>Network & Healthcare IT</h3>
                <div class="skill-items">
                    <span class="skill-item">TrakCare HIS</span>
                    <span class="skill-item">Optic Fiber (SM/MM)</span>
                    <span class="skill-item">SFP/SFP+</span>
                    <span class="skill-item">OTDR</span>
                    <span class="skill-item">Git</span>
                    <span class="skill-item">Team Management</span>
                </div>
            </div>
        </div>
    </section>

    <div class="divider" style="background:rgba(255,255,255,0.08); margin:0;"></div>

    <!-- PORTFOLIO -->
    <section id="portfolio">
        <div class="section-label">Selected Work</div>
        <h2 class="section-title">Portfolio</h2>
        <div class="porto-grid">

            <!-- Case Study 1: Patient Journey Dashboard -->
            <div class="porto-card reveal">
                <div class="porto-type">Case Study</div>
                <div class="porto-title">Patient Journey Dashboard</div>
                <p class="porto-desc">
                    Built a web-based dashboard connecting QMS Caller and TrakCare HIS to show patient flow across hospital departments. Management could see where delays were happening in real time instead of waiting on manual reports, which made it quicker to act on bottleneck issues. The hospital handled 500+ patients per day.
                </p>
                <div class="porto-meta">
                    <div class="porto-org">📍 Premier Bintaro Hospital &nbsp;·&nbsp; 500+ patients/day</div>
                    <div class="porto-tags">
                        <span class="porto-tag">PHP</span>
                        <span class="porto-tag">TrakCare HIS</span>
                        <span class="porto-tag">SQL</span>
                        <span class="porto-tag">QMS Integration</span>
                        <span class="porto-tag">Healthcare IT</span>
                    </div>
                </div>
            </div>

            <!-- Case Study 2: APT Website -->
            <div class="porto-card reveal">
                <div class="porto-type">Case Study</div>
                <div class="porto-title">ASEAN+3 Website Revamp</div>
                <p class="porto-desc">
                    Refreshed the UI of the ASEAN Plus Three website, a public platform covering cooperation across 13 countries. Updated the visual layout for better readability and consistency, and made SEO improvements that helped with organic search visibility. The site covers 22+ areas of regional collaboration.
                </p>
                <div class="porto-meta">
                    <div class="porto-org">📍 ASEAN Secretariat &nbsp;·&nbsp; Regional Digital Platform</div>
                    <div class="porto-tags">
                        <span class="porto-tag">UI/UX</span>
                        <span class="porto-tag">SEO</span>
                        <span class="porto-tag">CMS</span>
                        <span class="porto-tag">Web Management</span>
                    </div>
                </div>
                <a href="https://aseanplusthree.asean.org" target="_blank" class="porto-link">
                    View Live Site <span>↗</span>
                </a>
            </div>

            <!-- Coming Soon -->
            <div class="porto-card coming-soon reveal">
                <div class="porto-coming-icon"><i class="fas fa-layer-group"></i></div>
                <div class="porto-coming-text">More coming soon</div>
                <div class="porto-coming-sub">Personal & academic projects<br>in progress</div>
            </div>

        </div>
    </section>

    <div class="divider"></div>

    <!-- EDUCATION -->
    <section id="education">
        <div class="section-label">Education & Certifications</div>
        <h2 class="section-title">Academic Background</h2>
        <div class="edu-grid reveal">
            <div class="edu-col">
                <h3>Degrees</h3>
                <div class="edu-item">
                    <div class="edu-degree">Master's in Information Management System</div>
                    <div class="edu-school">Bina Nusantara University (Online)</div>
                    <div class="edu-date">July 2024 – Present</div>
                    <span class="edu-status status-ongoing">In Progress</span>
                </div>
                <div class="edu-item">
                    <div class="edu-degree">Bachelor's in Computer Science</div>
                    <div class="edu-school">Bina Nusantara University</div>
                    <div class="edu-date">September 2019 – March 2024</div>
                    <span class="edu-status status-done">Completed</span>
                </div>
            </div>
            <div class="edu-col">
                <h3>Certifications</h3>
                <div class="cert-item">
                    <div class="cert-name">R Fundamental for Data Science</div>
                    <div class="cert-issuer">DQLab — Statistical programming & data analysis</div>
                </div>
                <div class="cert-item">
                    <div class="cert-name">Fundamental SQL Using SELECT</div>
                    <div class="cert-issuer">DQLab — Advanced query optimization & data extraction</div>
                </div>
                <div class="cert-item">
                    <div class="cert-name">Python Fundamental for Data</div>
                    <div class="cert-issuer">DQLab — Data manipulation & analysis foundations</div>
                </div>
                <div class="cert-item">
                    <div class="cert-name">TOEFL Score: 567</div>
                    <div class="cert-issuer">Englishvit — Professional English proficiency</div>
                </div>
            </div>
        </div>
    </section>

    <div class="divider"></div>

    <!-- CONTACT -->
    <section id="contact">
        <div class="section-label">Contact</div>
        <div class="contact-grid">
            <div class="contact-left reveal">
                <div class="big-text">Let's work<br><em>together.</em></div>
                <p>Open to new opportunities in IT development, application support, or web platform management. Based in Jakarta and available for remote work too.</p>
                <div class="contact-links">
                    <a href="mailto:fatahillah.rachman14@gmail.com" class="contact-link">
                        <div class="cl-icon"><i class="fas fa-envelope"></i></div>
                        <div class="cl-info">
                            <div class="cl-type">Email</div>
                            <div class="cl-value">fatahillah.rachman14@gmail.com</div>
                        </div>
                        <span class="cl-arrow">↗</span>
                    </a>
                    <a href="https://linkedin.com/in/fatahillah-rachman" target="_blank" class="contact-link">
                        <div class="cl-icon"><i class="fab fa-linkedin"></i></div>
                        <div class="cl-info">
                            <div class="cl-type">LinkedIn</div>
                            <div class="cl-value">linkedin.com/in/fatahillah-rachman</div>
                        </div>
                        <span class="cl-arrow">↗</span>
                    </a>
                    <a href="https://zif.my.id" target="_blank" class="contact-link">
                        <div class="cl-icon"><i class="fas fa-globe"></i></div>
                        <div class="cl-info">
                            <div class="cl-type">Portfolio</div>
                            <div class="cl-value">zif.my.id</div>
                        </div>
                        <span class="cl-arrow">↗</span>
                    </a>
                    <a href="assets/Fatahillah_CV.pdf" download class="contact-link">
                        <div class="cl-icon"><i class="fas fa-file-download"></i></div>
                        <div class="cl-info">
                            <div class="cl-type">Resume</div>
                            <div class="cl-value">Download CV (PDF)</div>
                        </div>
                        <span class="cl-arrow">↓</span>
                    </a>
                </div>
            </div>
            <div class="contact-right reveal">
                <div class="availability-card">
                    <div class="avail-title"><span class="avail-dot"></span>Status</div>
                    <div class="avail-status">Available for<br>New Projects</div>
                    <ul class="avail-list">
                        <li>Based in Jakarta, Indonesia</li>
                        <li>Open to remote collaboration</li>
                        <li>Full-time & contract work</li>
                        <li>IT development & platform management</li>
                        <li>Healthcare IT & data analytics roles</li>
                    </ul>
                </div>
                <a href="mailto:fatahillah.rachman14@gmail.com" class="btn btn-dark" style="width:100%; justify-content:center; padding:1.2rem;">
                    <i class="fas fa-paper-plane"></i> Send a Message
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <span>© 2026 Fatahillah Rachman. All rights reserved.</span>
        <div style="display:flex; gap:1.5rem;">
            <a href="mailto:fatahillah.rachman14@gmail.com">Email</a>
            <a href="https://linkedin.com/in/fatahillah-rachman" target="_blank">LinkedIn</a>
            <a href="https://zif.my.id" target="_blank">Portfolio</a>
        </div>
    </footer>

    <script>
        // Custom Cursor
        const cursor = document.getElementById('cursor');
        const cursorRing = document.getElementById('cursorRing');
        let cx = 0, cy = 0, rx = 0, ry = 0;

        document.addEventListener('mousemove', e => {
            cx = e.clientX; cy = e.clientY;
            cursor.style.left = cx + 'px';
            cursor.style.top = cy + 'px';
        });

        function animateRing() {
            rx += (cx - rx) * 0.12;
            ry += (cy - ry) * 0.12;
            cursorRing.style.left = rx + 'px';
            cursorRing.style.top = ry + 'px';
            requestAnimationFrame(animateRing);
        }
        animateRing();

        document.querySelectorAll('a, button').forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.style.width = '6px'; cursor.style.height = '6px';
                cursorRing.style.width = '52px'; cursorRing.style.height = '52px';
            });
            el.addEventListener('mouseleave', () => {
                cursor.style.width = '10px'; cursor.style.height = '10px';
                cursorRing.style.width = '36px'; cursorRing.style.height = '36px';
            });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) { e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
            });
        });

        // Mobile nav
        document.getElementById('navHamburger').addEventListener('click', () => {
            document.getElementById('mobileNav').classList.add('open');
        });
        document.getElementById('mobileClose').addEventListener('click', closeMobileNav);
        function closeMobileNav() { document.getElementById('mobileNav').classList.remove('open'); }

        // Scroll reveal
        const reveals = document.querySelectorAll('.reveal');
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
        }, { threshold: 0.1 });
        reveals.forEach(r => obs.observe(r));

        // Nav shrink on scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('mainNav');
            nav.style.padding = window.scrollY > 80 ? '0.9rem 3rem' : '';
        }, { passive: true });
    </script>
</body>
</html>