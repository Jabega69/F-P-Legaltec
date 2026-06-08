<?php
$title       = 'Abogado laboral en Lorca y Murcia — Despidos, EREs y Reclamaciones | F&P Legaltec';
$description = 'Especialistas en derecho laboral en Lorca y Murcia. Despidos improcedentes, EREs, acoso laboral y reclamaciones salariales. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/derecho-laboral/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Derecho laboral'],
];

$jsonLd = json_encode([
  '@context'   => 'https://schema.org',
  '@type'      => 'LegalService',
  'name'       => 'Derecho laboral — F&P Legaltec',
  'description'=> 'Abogados especialistas en despidos improcedentes, EREs, acoso laboral y reclamaciones salariales en Lorca y Murcia.',
  'url'        => 'https://pflegaltec.com/servicios/derecho-laboral/',
  'telephone'  => '+34676594016',
  'email'      => 'info@pflegaltec.com',
  'address'    => [
    '@type'           => 'PostalAddress',
    'streetAddress'   => 'Cuesta de San Francisco nº 5 Entlo',
    'addressLocality' => 'Lorca',
    'addressRegion'   => 'Murcia',
    'postalCode'      => '30800',
    'addressCountry'  => 'ES',
  ],
  'areaServed'   => ['Lorca', 'Murcia', 'España'],
  'priceRange'   => 'Consulta gratuita',
  'openingHours' => 'Mo-Fr 09:00-21:00',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$extraHead = <<<'HTML'
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Inicio","item":"https://pflegaltec.com/"},{"@type":"ListItem","position":2,"name":"Servicios jurídicos","item":"https://pflegaltec.com/servicios/"},{"@type":"ListItem","position":3,"name":"Derecho laboral","item":"https://pflegaltec.com/servicios/derecho-laboral/"}]}
</script>
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"¿Cuánto tiempo tengo para recurrir un despido?","acceptedAnswer":{"@type":"Answer","text":"El plazo para impugnar un despido es de 20 días hábiles desde la fecha de efectividad del despido. Es un plazo de caducidad, no de prescripción, lo que significa que una vez transcurrido no puede recuperarse. Actúe con rapidez."}},{"@type":"Question","name":"¿Qué diferencia hay entre despido improcedente y despido nulo?","acceptedAnswer":{"@type":"Answer","text":"El despido improcedente ocurre cuando el empresario no acredita la causa alegada o no cumple los requisitos formales. La consecuencia es la readmisión o una indemnización de 33 días por año trabajado. El despido nulo se produce cuando vulnera derechos fundamentales (embarazo, huelga, discriminación) y obliga a la readmisión inmediata con abono de salarios de tramitación."}},{"@type":"Question","name":"¿Qué es un ERE y cómo puedo impugnarlo?","acceptedAnswer":{"@type":"Answer","text":"Un ERE (Expediente de Regulación de Empleo) es un procedimiento para extinguir o suspender contratos por causas económicas, técnicas, organizativas o productivas. Puede impugnarse individualmente ante el Juzgado de lo Social si la empresa no acredita suficientemente las causas o incumple el periodo de consultas. El plazo es de 20 días hábiles."}},{"@type":"Question","name":"¿Cuánto me corresponde si mi despido es improcedente?","acceptedAnswer":{"@type":"Answer","text":"La indemnización por despido improcedente es de 33 días de salario por año trabajado (con un máximo de 24 mensualidades) para contratos posteriores a febrero de 2012. Para contratos anteriores, los tramos previos a esa fecha se calculan a 45 días por año. Factorías como el convenio colectivo o los complementos salariales pueden incrementar el cálculo."}},{"@type":"Question","name":"¿Qué se considera acoso laboral y cómo se prueba?","acceptedAnswer":{"@type":"Answer","text":"El acoso laboral (mobbing) es una conducta reiterada y sistemática que deteriora el ambiente de trabajo con el objetivo de que el trabajador abandone o sufra daño psicológico. Las pruebas más relevantes son los correos y mensajes escritos, testigos, partes médicos y el registro del protocolo de acoso interno si existe. Documentar desde el primer momento es fundamental."}}]}
</script>
<style>
  :root {
    --navy:        #0d1117;
    --navy-mid:    #131a23;
    --navy-light:  #1c2634;
    --navy-border: #253044;
    --gold:        #c8a96e;
    --gold-light:  #e2c98b;
    --gold-dim:    rgba(200,169,110,.15);
    --teal:        #3ecfb2;
    --teal-dim:    rgba(62,207,178,.12);
    --white:       #f4f0ea;
    --gray:        #8a96a8;
    --text:        #cdd4de;
    --copper:      #c98b62;
    --serif:       'Cormorant Garamond', Georgia, serif;
    --sans:        'DM Sans', system-ui, sans-serif;
    --radius:      6px;
    --max:         1160px;
    --transition:  .25s cubic-bezier(.4,0,.2,1);
  }

  body { background: var(--navy); color: var(--text); font-family: var(--sans); font-size: 16px; line-height: 1.7; -webkit-font-smoothing: antialiased; }
  main { padding-top: 110px; }
  .container { max-width: var(--max); margin: 0 auto; padding: 0 24px; }
  .sr-only { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0,0,0,0); }

  .nav { background: rgba(13,17,23,.92); border-bottom-color: var(--navy-border); }
  .nav::after { display: none; }
  .nav-link { color: var(--gray); }
  .nav-link:hover { color: var(--white); }

  .breadcrumb { padding: 14px 0; border-bottom: 1px solid var(--navy-border); }
  .breadcrumb ol { display: flex; align-items: center; gap: 8px; list-style: none; font-size: 13px; color: var(--gray); }
  .breadcrumb a { color: var(--gray); text-decoration: none; transition: color var(--transition); }
  .breadcrumb a:hover { color: var(--gold); }
  .breadcrumb li:not(:last-child)::after { content: '›'; margin-left: 8px; }
  .breadcrumb li:last-child { color: var(--gold); }

  .hero { position: relative; overflow: hidden; padding: 88px 0 80px; border-bottom: 1px solid var(--navy-border); background: var(--navy); display: block; }
  .hero::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 60% 50% at 70% 50%, rgba(200,169,110,.08) 0%, transparent 70%), radial-gradient(ellipse 40% 60% at 10% 80%, rgba(62,207,178,.05) 0%, transparent 60%); pointer-events: none; }
  .hero::after { content: 'LEX'; position: absolute; right: -20px; top: 50%; transform: translateY(-50%); font-family: var(--serif); font-size: clamp(120px,16vw,220px); font-weight: 700; color: rgba(200,169,110,.04); pointer-events: none; white-space: nowrap; line-height: 1; }
  .hero-inner { position: relative; max-width: var(--max); margin: 0 auto; padding: 0 24px; display: grid; grid-template-columns: 1fr auto; gap: 60px; align-items: center; }
  .hero-badge { display: inline-flex; align-items: center; gap: 8px; background: var(--gold-dim); border: 1px solid rgba(200,169,110,.25); color: var(--gold); font-size: 11.5px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; padding: 6px 14px; border-radius: 40px; margin-bottom: 24px; }
  .hero-badge svg { width: 13px; height: 13px; }
  h1 { font-family: var(--serif); font-size: clamp(38px,5.5vw,62px); font-weight: 700; color: var(--white); line-height: 1.1; letter-spacing: -.02em; margin-bottom: 20px; }
  h1 em { font-style: italic; color: var(--gold); }
  .hero-desc { font-size: 17px; color: var(--text); max-width: 560px; line-height: 1.7; margin-bottom: 36px; }
  .hero-actions { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
  .btn-primary { display: inline-flex; align-items: center; gap: 8px; background: var(--gold); color: var(--navy); text-decoration: none; font-weight: 600; font-size: 14.5px; padding: 14px 28px; border-radius: var(--radius); transition: background var(--transition), transform var(--transition); }
  .btn-primary:hover { background: var(--gold-light); transform: translateY(-1px); }
  .btn-ghost { display: inline-flex; align-items: center; gap: 8px; color: var(--text); text-decoration: none; font-weight: 500; font-size: 14.5px; padding: 14px 24px; border: 1px solid var(--navy-border); border-radius: var(--radius); transition: border-color var(--transition), color var(--transition); }
  .btn-ghost:hover { border-color: var(--gold); color: var(--gold); }
  .hero-stats { display: flex; flex-direction: column; gap: 16px; flex-shrink: 0; }
  .stat-card { background: var(--navy-light); border: 1px solid var(--navy-border); border-radius: 10px; padding: 22px 28px; text-align: center; min-width: 160px; }
  .stat-card .stat-num { font-family: var(--serif); font-size: 36px; font-weight: 700; color: var(--gold); line-height: 1; margin-bottom: 4px; }
  .stat-card .stat-label { font-size: 12px; color: var(--gray); letter-spacing: .04em; text-transform: uppercase; }

  .intro-alert { background: var(--navy-light); border-left: 4px solid var(--gold); border-radius: 0 var(--radius) var(--radius) 0; padding: 20px 28px; margin: 56px 0; display: flex; align-items: flex-start; gap: 16px; }
  .intro-alert svg { flex-shrink: 0; margin-top: 2px; color: var(--gold); }
  .intro-alert p { font-size: 15px; color: var(--text); line-height: 1.65; }
  .intro-alert strong { color: var(--white); }

  section { padding: 80px 0; background: var(--navy); }
  section + section { border-top: 1px solid var(--navy-border); }
  section.section-light { background: #f5f2ed; border-top-color: rgba(26,32,48,.10); }
  section.section-light h2 { color: #1a2030; }
  section.section-light h2 em { color: var(--copper); }
  section.section-light .section-label { color: var(--copper); }
  section.section-light .section-intro { color: rgba(26,32,48,.60); }
  section.section-light .service-card { background: #fff; border-color: rgba(26,32,48,.10); }
  section.section-light .service-card:hover { border-color: var(--copper); }
  section.section-light .service-card::before { background: linear-gradient(90deg, var(--copper), transparent); }
  section.section-light .service-card h3 { color: #1a2030; }
  section.section-light .service-card p { color: rgba(26,32,48,.60); }
  section.section-light .service-card ul li { color: rgba(26,32,48,.75); }
  section.section-light .service-card ul li::before { color: var(--copper); }
  section.section-light .service-icon { background: rgba(201,139,98,.12); color: var(--copper); }
  section.section-light .process-step { border-right-color: rgba(26,32,48,.10); border-top-color: rgba(26,32,48,.10); }
  section.section-light .step-num { color: rgba(26,32,48,.15); }
  section.section-light .process-step:hover .step-num { color: var(--copper); }
  section.section-light .process-step h3 { color: #1a2030; }
  section.section-light .process-step p { color: rgba(26,32,48,.60); }
  section.section-light .why-item-text h3 { color: #1a2030; }
  section.section-light .why-item-text p { color: rgba(26,32,48,.60); }
  section.section-light .why-bullet { background: rgba(201,139,98,.12); color: var(--copper); }
  section.section-light .why-cta-box { background: #fff; border-color: rgba(26,32,48,.10); }
  section.section-light .why-cta-box blockquote { color: #1a2030; }
  section.section-light .why-cta-box cite { color: rgba(26,32,48,.55); }
  section.section-light .faq-item { border-bottom-color: rgba(26,32,48,.10); }
  section.section-light .faq-item:first-child { border-top-color: rgba(26,32,48,.10); }
  section.section-light .faq-question { color: #1a2030; }
  section.section-light .faq-question:hover { color: var(--copper); }
  section.section-light .faq-item.open .faq-question { color: var(--copper); }
  section.section-light .faq-icon { border-color: rgba(26,32,48,.20); color: rgba(26,32,48,.40); }
  section.section-light .faq-item.open .faq-icon { border-color: var(--copper); color: var(--copper); }
  section.section-light .faq-answer-inner { color: rgba(26,32,48,.60); }
  section.section-light .related-card { background: #fff; border-color: rgba(26,32,48,.10); }
  section.section-light .related-card:hover { border-color: var(--copper); }
  section.section-light .related-card h3 { color: #1a2030; }
  section.section-light .related-card p { color: rgba(26,32,48,.60); }
  section.section-light .related-tag { color: var(--copper); }
  section.section-light .related-link { color: var(--copper); }

  .section-label { display: inline-block; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: var(--teal); margin-bottom: 14px; }
  h2 { font-family: var(--serif); font-size: clamp(28px,4vw,44px); font-weight: 700; color: var(--white); line-height: 1.15; letter-spacing: -.02em; margin-bottom: 16px; }
  h2 em { font-style: italic; color: var(--gold); }
  .section-intro { font-size: 16px; color: var(--gray); max-width: 600px; line-height: 1.7; margin-bottom: 52px; }

  .services-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
  .service-card { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 10px; padding: 30px; transition: border-color var(--transition), transform var(--transition); position: relative; overflow: hidden; }
  .service-card::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 2px; background: linear-gradient(90deg, var(--gold), transparent); opacity: 0; transition: opacity var(--transition); }
  .service-card:hover { border-color: rgba(200,169,110,.4); transform: translateY(-3px); }
  .service-card:hover::before { opacity: 1; }
  .service-icon { width: 46px; height: 46px; background: var(--gold-dim); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px; color: var(--gold); }
  .service-card h3 { font-family: var(--serif); font-size: 20px; font-weight: 600; color: var(--white); margin-bottom: 10px; }
  .service-card p { font-size: 14px; color: var(--gray); line-height: 1.65; }
  .service-card ul { list-style: none; margin-top: 16px; display: flex; flex-direction: column; gap: 7px; }
  .service-card ul li { font-size: 13.5px; color: var(--text); display: flex; align-items: flex-start; gap: 8px; }
  .service-card ul li::before { content: '›'; color: var(--gold); font-size: 16px; line-height: 1.3; flex-shrink: 0; }

  .process-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 0; border: 1px solid var(--navy-border); border-radius: 12px; overflow: hidden; }
  .process-step { padding: 32px 28px; border-right: 1px solid var(--navy-border); }
  .process-step:last-child { border-right: none; }
  .process-step:nth-child(n+4) { border-top: 1px solid var(--navy-border); }
  .step-num { font-family: var(--serif); font-size: 48px; font-weight: 700; color: var(--navy-border); line-height: 1; margin-bottom: 12px; transition: color var(--transition); }
  .process-step:hover .step-num { color: var(--gold); }
  .process-step h3 { font-family: var(--serif); font-size: 17px; font-weight: 600; color: var(--white); margin-bottom: 8px; }
  .process-step p { font-size: 13.5px; color: var(--gray); line-height: 1.6; }

  .why-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
  .why-list { display: flex; flex-direction: column; gap: 20px; }
  .why-item { display: flex; gap: 16px; align-items: flex-start; }
  .why-bullet { width: 36px; height: 36px; background: var(--gold-dim); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--gold); flex-shrink: 0; font-family: var(--serif); font-weight: 700; font-size: 14px; }
  .why-item-text h3 { font-family: var(--serif); font-size: 18px; font-weight: 600; color: var(--white); margin-bottom: 4px; }
  .why-item-text p { font-size: 14px; color: var(--gray); line-height: 1.65; }
  .why-cta-box { background: var(--navy-light); border: 1px solid var(--navy-border); border-radius: 12px; padding: 44px; text-align: center; }
  .why-cta-box .big-quote { font-family: var(--serif); font-size: 72px; font-weight: 700; color: var(--gold-dim); line-height: .8; margin-bottom: 16px; }
  .why-cta-box blockquote { font-family: var(--serif); font-size: 22px; font-style: italic; color: var(--white); line-height: 1.4; margin-bottom: 28px; }
  .why-cta-box cite { font-size: 13px; color: var(--gray); font-style: normal; display: block; margin-bottom: 32px; }

  .faq-list { display: flex; flex-direction: column; }
  .faq-item { border-bottom: 1px solid var(--navy-border); }
  .faq-item:first-child { border-top: 1px solid var(--navy-border); }
  .faq-question { width: 100%; background: none; border: none; color: var(--white); font-family: var(--serif); font-size: 19px; font-weight: 600; text-align: left; padding: 24px 0; cursor: pointer; display: flex; align-items: center; justify-content: space-between; gap: 16px; transition: color var(--transition); }
  .faq-question:hover { color: var(--gold); }
  .faq-question .faq-icon { width: 28px; height: 28px; border: 1px solid var(--navy-border); border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--gray); font-size: 18px; transition: all var(--transition); }
  .faq-item.open .faq-question { color: var(--gold); }
  .faq-item.open .faq-icon { border-color: var(--gold); color: var(--gold); transform: rotate(45deg); }
  .faq-answer { overflow: hidden; max-height: 0; transition: max-height .4s cubic-bezier(.4,0,.2,1); }
  .faq-answer-inner { padding-bottom: 24px; font-size: 15px; color: var(--gray); line-height: 1.7; max-width: 720px; }

  .cta-banner { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 12px; padding: 60px 56px; display: grid; grid-template-columns: 1fr auto; gap: 40px; align-items: center; position: relative; overflow: hidden; margin: 80px 0; }
  .cta-banner::before { content: ''; position: absolute; inset: 0; background: radial-gradient(ellipse 60% 80% at 100% 50%, var(--gold-dim) 0%, transparent 70%); pointer-events: none; }
  .cta-banner h2 { font-size: clamp(24px,3.5vw,38px); margin-bottom: 12px; }
  .cta-banner p { font-size: 15px; color: var(--gray); }
  .cta-actions { display: flex; flex-direction: column; gap: 12px; align-items: center; flex-shrink: 0; }
  .cta-note { font-size: 11.5px; color: var(--gray); text-align: center; }

  .related-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 16px; }
  .related-card { background: var(--navy-mid); border: 1px solid var(--navy-border); border-radius: 10px; padding: 28px; text-decoration: none; transition: border-color var(--transition), transform var(--transition); display: block; }
  .related-card:hover { border-color: rgba(200,169,110,.4); transform: translateY(-2px); }
  .related-tag { font-size: 10.5px; font-weight: 600; letter-spacing: .1em; text-transform: uppercase; color: var(--teal); margin-bottom: 10px; }
  .related-card h3 { font-family: var(--serif); font-size: 18px; font-weight: 600; color: var(--white); margin-bottom: 8px; }
  .related-card p { font-size: 13px; color: var(--gray); line-height: 1.6; }
  .related-link { display: inline-flex; align-items: center; gap: 5px; margin-top: 14px; font-size: 13px; color: var(--gold); font-weight: 500; }

  .footer { background: var(--navy-mid); border-top: 1px solid var(--navy-border); }
  .footer-logo { color: var(--gold); }
  .footer-col h4 { color: var(--gold); }

  @media (max-width: 900px) {
    .hero-inner { grid-template-columns: 1fr; }
    .hero-stats { flex-direction: row; }
    .why-grid { grid-template-columns: 1fr; }
    .cta-banner { grid-template-columns: 1fr; }
    .related-grid { grid-template-columns: 1fr; }
    .process-grid { grid-template-columns: 1fr 1fr; }
    .process-step { border-right: none !important; border-bottom: 1px solid var(--navy-border); }
    .process-step:last-child { border-bottom: none; }
  }
  @media (max-width: 600px) {
    section { padding: 56px 0; }
    .hero { padding: 56px 0 48px; }
    .hero-stats { flex-wrap: wrap; }
    .cta-banner { padding: 40px 28px; }
    h1 { font-size: 36px; }
    .process-grid { grid-template-columns: 1fr; }
    .related-grid { grid-template-columns: 1fr; }
  }
</style>
HTML;

require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/head.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/nav.php';
?>

<main>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/breadcrumb.php'; ?>

  <!-- HERO -->
  <header class="hero">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
          Servicios jurídicos · Derecho laboral
        </div>
        <h1>Abogados laboralistas<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Defendemos los derechos de trabajadores y empresas en despidos, EREs, acoso laboral, reclamaciones salariales e incapacidades. Más de treinta años de experiencia en los juzgados de lo social de Murcia.
        </p>
        <div class="hero-actions">
          <a href="/contacto/" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-laborales" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">20</div>
          <div class="stat-label">Días para recurrir</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">33</div>
          <div class="stat-label">Días/año de indemnización</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>El plazo para impugnar un despido es de solo 20 días hábiles.</strong> Es un plazo de caducidad: una vez transcurrido, no puede recuperarse. Si ha sido despedido o está ante un procedimiento disciplinario, contacte con nosotros hoy mismo para analizar su situación sin compromiso.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-laborales" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Defensa laboral <em>completa</em></h2>
      <p class="section-intro">Cubrimos todas las situaciones laborales de trabajadores y empresas, desde el asesoramiento preventivo hasta la defensa en juicio.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3>Despido improcedente y nulo</h3>
          <p>Análisis del despido, negociación del acta de conciliación e impugnación judicial. Maximizamos la indemnización o conseguimos la readmisión cuando procede.</p>
          <ul>
            <li>Revisión de la carta de despido</li>
            <li>Conciliación previa obligatoria</li>
            <li>Demanda ante el Juzgado de lo Social</li>
            <li>Recursos ante el TSJ de Murcia</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Reclamación de salarios</h3>
          <p>Reclamamos cantidades adeudadas: salarios impagados, horas extra no abonadas, complementos y liquidaciones incorrectas.</p>
          <ul>
            <li>Cálculo de cantidades debidas</li>
            <li>Papeleta de conciliación</li>
            <li>Demanda de cantidad</li>
            <li>Ejecución de sentencia</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>EREs y despidos colectivos</h3>
          <p>Asesoramiento e impugnación de EREs tanto para trabajadores individuales como para representantes sindicales durante el periodo de consultas.</p>
          <ul>
            <li>Análisis de la documentación económica</li>
            <li>Negociación en el periodo de consultas</li>
            <li>Impugnación individual y colectiva</li>
            <li>Acciones ante la Inspección de Trabajo</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/></svg>
          </div>
          <h3>Acoso laboral y discriminación</h3>
          <p>Defensa ante situaciones de mobbing, acoso sexual o discriminación en el trabajo. Asesoramos en la recogida de pruebas y en la vía judicial más adecuada.</p>
          <ul>
            <li>Activación del protocolo de acoso</li>
            <li>Denuncia ante la Inspección de Trabajo</li>
            <li>Demanda por daños y perjuicios</li>
            <li>Tutela de derechos fundamentales</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
          </div>
          <h3>Incapacidades y accidentes de trabajo</h3>
          <p>Reclamaciones ante el INSS por incapacidad temporal, permanente y accidentes laborales. Impugnación de altas médicas prematuras y recargos de prestaciones.</p>
          <ul>
            <li>Impugnación de resoluciones del INSS</li>
            <li>Recargo de prestaciones por falta de medidas</li>
            <li>Reclamación de daños al empresario</li>
            <li>Coordinación con médicos especialistas</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Asesoría laboral para empresas</h3>
          <p>Acompañamiento jurídico continuo a empresas: contratación, modificaciones sustanciales, sanciones disciplinarias y relaciones con la representación de los trabajadores.</p>
          <ul>
            <li>Redacción y revisión de contratos</li>
            <li>Procedimientos disciplinarios</li>
            <li>Modificaciones de condiciones de trabajo</li>
            <li>Negociación con comités de empresa</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <!-- PROCESO -->
  <section aria-labelledby="proc-title">
    <div class="container">
      <span class="section-label">Cómo trabajamos</span>
      <h2 id="proc-title">De la consulta<br />a la <em>resolución</em></h2>
      <p class="section-intro">Un proceso claro y eficiente. Le explicamos cada paso y le mantenemos informado en todo momento.</p>
      <div class="process-grid" role="list">
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Consulta gratuita</h3>
          <p>Analizamos su situación laboral sin compromiso. Valoramos las opciones disponibles y el pronóstico realista de cada una.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Revisión documental</h3>
          <p>Contrato, nóminas, carta de despido o comunicación empresarial. Identificamos errores formales y vulneraciones de derechos.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Estrategia y plazos</h3>
          <p>Le explicamos qué vía es más conveniente — negociación, conciliación o juicio — y los plazos exactos para cada acción.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Conciliación previa</h3>
          <p>Representación en el acto de conciliación obligatorio ante el SMAC. Muchos casos se resuelven aquí con condiciones ventajosas.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Juicio laboral</h3>
          <p>Si no hay acuerdo, defendemos su caso ante el Juzgado de lo Social. Experiencia acumulada en cientos de vistas en Murcia y Lorca.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Ejecución y recursos</h3>
          <p>Si la sentencia es favorable, ejecutamos el fallo. Si no, valoramos con usted la viabilidad del recurso ante el TSJ de Murcia.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- POR QUÉ ELEGIRNOS -->
  <section class="section-light" aria-labelledby="why-title">
    <div class="container">
      <div class="why-grid">
        <div>
          <span class="section-label">Por qué elegirnos</span>
          <h2 id="why-title">Laboralistas con <em>experiencia real</em> en Murcia</h2>
          <p class="section-intro" style="margin-bottom:36px">No somos un despacho generalista que hace de todo. Llevamos décadas en los juzgados de lo social de Lorca y Murcia.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Conocimiento del entorno local</h3>
                <p>Conocemos los convenios colectivos de los principales sectores de Lorca y Murcia: agricultura, construcción, hostelería y servicios.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Respuesta inmediata</h3>
                <p>Los plazos laborales son muy cortos. Le atendemos con urgencia para no perder ninguna acción por razones de tiempo.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">03</div>
              <div class="why-item-text">
                <h3>Honorarios transparentes</h3>
                <p>Le informamos del coste antes de empezar. Sin sorpresas. En muchos casos de despido la primera consulta y la conciliación no tienen coste.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">04</div>
              <div class="why-item-text">
                <h3>Tecnología legaltech al servicio del caso</h3>
                <p>Usamos herramientas de IA para analizar jurisprudencia reciente y encontrar precedentes favorables que refuerzan su defensa.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Conseguimos la readmisión de un trabajador tras demostrar que el despido encubría represalias por su actividad sindical."</blockquote>
          <cite>— Caso real: trabajador de empresa del sector servicios, Lorca</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">despido declarado nulo</strong> con readmisión y abono de salarios de tramitación.</p>
          <a href="/contacto/" class="btn-primary" style="width:100%;justify-content:center">Consulta gratuita</a>
          <p style="font-size:11.5px;color:var(--gray);text-align:center;margin-top:12px">Sin compromiso · Respuesta en &lt;24h</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section aria-labelledby="faq-title">
    <div class="container">
      <span class="section-label">Preguntas frecuentes</span>
      <h2 id="faq-title">Lo que nuestros<br />clientes nos <em>preguntan</em></h2>
      <p class="section-intro">Las dudas más habituales sobre despidos, reclamaciones y procedimientos laborales.</p>
      <div class="faq-list" role="list" id="faq">

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq1">
            ¿Cuánto tiempo tengo para recurrir un despido?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq1" role="region">
            <div class="faq-answer-inner">El plazo para impugnar un despido es de 20 días hábiles desde la fecha de efectividad del despido. Es un plazo de caducidad, no de prescripción, lo que significa que una vez transcurrido no puede recuperarse por ningún motivo. No cuente fines de semana ni festivos, pero actúe con rapidez desde el primer día.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq2">
            ¿Qué diferencia hay entre despido improcedente y despido nulo?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq2" role="region">
            <div class="faq-answer-inner">El despido improcedente ocurre cuando el empresario no acredita la causa alegada o no cumple los requisitos formales (carta de despido, plazo de preaviso). La consecuencia es que la empresa puede elegir entre readmitir o pagar una indemnización de 33 días por año trabajado. El despido nulo se produce cuando vulnera derechos fundamentales — embarazo, maternidad, baja médica en ciertos casos, actividad sindical — y obliga a la readmisión inmediata con abono de salarios de tramitación.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq3">
            ¿Qué es un ERE y cómo puedo impugnarlo?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq3" role="region">
            <div class="faq-answer-inner">Un ERE (Expediente de Regulación de Empleo) es un procedimiento para extinguir o suspender contratos de trabajo por causas económicas, técnicas, organizativas o productivas. Puede impugnarse individualmente ante el Juzgado de lo Social si la empresa no acredita suficientemente las causas, no respeta el periodo de consultas o aplica criterios de selección discriminatorios. El plazo de impugnación individual es de 20 días hábiles desde la comunicación del despido.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq4">
            ¿Cuánto me corresponde si mi despido es improcedente?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq4" role="region">
            <div class="faq-answer-inner">La indemnización es de 33 días de salario por año trabajado con un máximo de 24 mensualidades, para contratos posteriores a febrero de 2012. Para los tramos de contrato anteriores a esa fecha, el cálculo se hace a 45 días por año con un máximo de 42 mensualidades. El salario regulador incluye salario base más todos los complementos de carácter fijo, lo que en la práctica puede ser significativamente mayor al salario base.</div>
          </div>
        </div>

        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq5">
            ¿Qué se considera acoso laboral y cómo se prueba?
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq5" role="region">
            <div class="faq-answer-inner">El acoso laboral (mobbing) es una conducta reiterada y sistemática — no un hecho aislado — dirigida a deteriorar el ambiente de trabajo con el objetivo de que el trabajador abandone o sufra daño psicológico. Las pruebas más valiosas son correos y mensajes escritos, testigos, informes médicos o psicológicos, y el registro del protocolo de acoso interno si existe. Documentar cada incidente desde el primer momento es fundamental: guarde fechas, descripciones detalladas y cualquier prueba escrita.</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <?php
  $ctaTitle = '¿Le han despedido o tiene<br />un <em>conflicto laboral</em>?';
  $ctaDesc  = 'Primera consulta gratuita y sin compromiso. Analizamos su caso y le explicamos opciones reales. Respondemos en menos de 24 horas.';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/cta-banner.php';
  ?>

  <!-- RELACIONADOS -->
  <section class="section-light" aria-labelledby="rel-title">
    <div class="container">
      <span class="section-label">También le puede interesar</span>
      <h2 id="rel-title">Otros servicios <em>jurídicos</em></h2>
      <p class="section-intro">Cubrimos todas las necesidades legales de particulares y empresas en Lorca y Murcia.</p>
      <div class="related-grid" role="list">
        <a href="/servicios/derecho-civil/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Derecho civil</h3>
          <p>Contratos, herencias, divorcios y reclamaciones patrimoniales. Protegemos su patrimonio y sus derechos.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/servicios/extranjeria-lorca/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Extranjería en Lorca</h3>
          <p>NIE, TIE, autorizaciones de residencia y trabajo, reagrupación familiar y nacionalidad española.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/legaltech/proteccion-datos-rgpd/" class="related-card" role="listitem">
          <p class="related-tag">Legaltech</p>
          <h3>Protección de datos y RGPD</h3>
          <p>Auditorías RGPD, registro de actividades y DPD externo para empresas en Lorca y Murcia.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
      </div>
    </div>
  </section>

</main>

<script>
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const item   = btn.closest('.faq-item');
      const answer = btn.nextElementSibling;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        el.querySelector('.faq-answer').style.maxHeight = null;
      });
      if (!isOpen) {
        item.classList.add('open');
        btn.setAttribute('aria-expanded', 'true');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
