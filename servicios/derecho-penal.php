<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/legal-service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/breadcrumb.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/faq.php';

$title       = 'Abogado penalista en Lorca y Murcia — Defensa Penal 24h | F&P Legaltec';
$description = 'Abogados penalistas en Lorca y Murcia. Defensa ante acusaciones penales, asistencia al detenido 24h, delitos económicos, recursos y defensa de víctimas. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/derecho-penal/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Derecho penal'],
];

// Single source of truth for the FAQ: used for both the visible accordion
// and the FAQPage structured data, so they can never drift apart.
$faqs = [
  '¿Qué debo hacer si me detiene la policía?' =>
    'Tiene derecho a guardar silencio, a no declarar contra usted mismo y a ser asistido por un abogado desde el primer momento. No declare nada sin su abogado presente, ni firme documentos que no comprenda. Tiene derecho a designar abogado de su confianza o a que le asignen uno de oficio. Lo más importante: ejerza su derecho a no declarar hasta haber hablado a solas con su letrado, que analizará la situación antes de fijar cualquier estrategia.',
  '¿Qué diferencia hay entre delito leve, menos grave y grave?' =>
    'La clasificación depende de la pena prevista. Los delitos leves (antiguas faltas) llevan penas menores como multas o trabajos en beneficio de la comunidad y se juzgan en un procedimiento rápido. Los delitos menos graves conllevan penas de prisión de hasta 5 años. Los delitos graves superan los 5 años de prisión y se enjuician ante la Audiencia Provincial. La calificación determina el procedimiento, los plazos y la gravedad de las consecuencias, por eso es clave una defensa técnica desde el inicio.',
  '¿Puedo recurrir una sentencia penal condenatoria?' =>
    'Sí. Las sentencias penales pueden recurrirse en apelación ante la Audiencia Provincial o el Tribunal Superior de Justicia, y en determinados casos en casación ante el Tribunal Supremo. El plazo para anunciar el recurso es muy corto —generalmente 10 días desde la notificación— por lo que es imprescindible actuar de inmediato. Analizamos la sentencia en busca de errores de valoración de la prueba, infracciones procesales o aplicación incorrecta de la ley.',
  '¿Qué es la asistencia al detenido y cuándo interviene el abogado?' =>
    'La asistencia al detenido es la presencia obligatoria de un abogado durante la detención policial y la primera declaración. El letrado interviene desde que se produce la detención: se entrevista reservadamente con usted antes de declarar, controla que se respeten sus derechos, supervisa la legalidad del atestado y le asesora sobre si conviene declarar o acogerse al silencio. Disponemos de servicio de asistencia urgente para estas situaciones.',
  '¿Puedo personarme como víctima o perjudicado en un proceso penal?' =>
    'Sí. Como víctima o perjudicado puede personarse mediante la acusación particular para defender activamente sus intereses, solicitar la condena del responsable y reclamar la indemnización por los daños sufridos. No basta con denunciar: personarse le permite proponer pruebas, intervenir en el juicio y recurrir resoluciones. Asesoramos y representamos tanto a quienes son acusados como a las víctimas que buscan justicia y reparación.',
];

$jsonLd = [
  pfl_legal_service_schema(
    'Derecho penal — F&P Legaltec',
    'Abogados penalistas especializados en defensa penal, asistencia al detenido, delitos económicos, recursos y defensa de víctimas en Lorca y Murcia.',
    $canonical
  ),
  pfl_breadcrumb_schema($breadcrumb, $canonical),
  pfl_faq_schema($faqs),
];

$extraHead = <<<'HTML'
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/inner.css">
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
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          Servicios jurídicos · Derecho penal
        </div>
        <h1>Abogados penalistas<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Defensa penal firme y discreta para acusados y víctimas: asistencia al detenido, delitos económicos, recursos y acusación particular. Más de treinta años de experiencia ante los juzgados de instrucción y la Audiencia Provincial de Murcia.
        </p>
        <div class="hero-actions">
          <a href="/contacto/" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-penales" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">24h</div>
          <div class="stat-label">Asistencia al detenido</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">10</div>
          <div class="stat-label">Días para recurrir</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>Si le han detenido, no declare sin abogado.</strong> Tiene derecho a guardar silencio y a ser asistido por un letrado desde el primer momento. Lo que diga en las primeras horas puede condicionar todo el proceso. Contacte con nosotros de inmediato para una defensa eficaz desde el inicio.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-penales" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Defensa penal <em>completa</em></h2>
      <p class="section-intro">Asistimos tanto a quienes están siendo investigados o acusados como a las víctimas que buscan justicia y reparación.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Defensa ante acusaciones penales</h3>
          <p>Defensa técnica en todo tipo de procedimientos: desde la fase de instrucción hasta el juicio oral. Construimos la mejor estrategia para su caso.</p>
          <ul>
            <li>Defensa en fase de instrucción</li>
            <li>Juicio oral ante el Juzgado de lo Penal</li>
            <li>Procedimientos ante la Audiencia Provincial</li>
            <li>Negociación de conformidades</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 01-3.46 0"/></svg>
          </div>
          <h3>Asistencia al detenido 24h</h3>
          <p>Asistencia urgente en comisaría y juzgado de guardia. Le acompañamos desde el primer minuto de la detención para proteger sus derechos.</p>
          <ul>
            <li>Entrevista reservada antes de declarar</li>
            <li>Control de la legalidad del atestado</li>
            <li>Asistencia en sede policial y judicial</li>
            <li>Solicitud de libertad provisional</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Delitos económicos y de empresa</h3>
          <p>Defensa especializada en delitos económicos: estafa, apropiación indebida, administración desleal, alzamiento de bienes y delitos contra la Hacienda Pública.</p>
          <ul>
            <li>Estafa y apropiación indebida</li>
            <li>Delitos societarios y administración desleal</li>
            <li>Insolvencias punibles y alzamiento de bienes</li>
            <li>Delitos fiscales y contra la Seguridad Social</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Acusación particular y víctimas</h3>
          <p>Defendemos a las víctimas personándonos como acusación particular para lograr la condena del responsable y la indemnización por los daños sufridos.</p>
          <ul>
            <li>Personación como acusación particular</li>
            <li>Reclamación de responsabilidad civil</li>
            <li>Defensa en delitos contra las personas</li>
            <li>Asesoramiento a víctimas de violencia</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Recursos y apelaciones</h3>
          <p>Impugnamos sentencias condenatorias y resoluciones desfavorables ante la Audiencia Provincial, el TSJ de Murcia y el Tribunal Supremo.</p>
          <ul>
            <li>Recurso de apelación</li>
            <li>Recurso de casación</li>
            <li>Recursos contra prisión provisional</li>
            <li>Revisión de la prueba practicada</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
          </div>
          <h3>Delitos de tráfico y seguridad vial</h3>
          <p>Defensa en delitos contra la seguridad vial: conducción bajo los efectos del alcohol o drogas, exceso de velocidad y conducción sin permiso.</p>
          <ul>
            <li>Alcoholemia y drogas al volante</li>
            <li>Conducción temeraria y exceso de velocidad</li>
            <li>Conducción sin permiso</li>
            <li>Negativa a someterse a las pruebas</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <!-- PROCESO -->
  <section aria-labelledby="proc-title">
    <div class="container">
      <span class="section-label">Cómo trabajamos</span>
      <h2 id="proc-title">De la detención<br />a la <em>resolución</em></h2>
      <p class="section-intro">Un proceso claro y eficiente. Le explicamos cada paso y le mantenemos informado en todo momento.</p>
      <div class="process-grid" role="list">
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Asistencia inmediata</h3>
          <p>Si hay detención, intervenimos con urgencia. Si no, analizamos su situación en una primera consulta sin compromiso.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Estudio de la causa</h3>
          <p>Examinamos el atestado, las diligencias y toda la prueba. Identificamos las debilidades de la acusación y las defensas posibles.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Estrategia de defensa</h3>
          <p>Diseñamos la estrategia más adecuada y le explicamos el pronóstico realista, los plazos y las decisiones clave del proceso.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Instrucción</h3>
          <p>Proponemos diligencias, periciales y testigos. Intervenimos en cada declaración para proteger sus derechos durante la investigación.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Juicio oral</h3>
          <p>Defendemos su caso ante el tribunal con rigor técnico. Experiencia acumulada en cientos de vistas penales en Murcia y Lorca.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Sentencia y recursos</h3>
          <p>Analizamos la sentencia y, si procede, interponemos los recursos oportunos ante la Audiencia Provincial o el Tribunal Supremo.</p>
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
          <h2 id="why-title">Penalistas con <em>experiencia real</em> en Murcia</h2>
          <p class="section-intro" style="margin-bottom:36px">No somos un despacho generalista que hace de todo. Llevamos décadas defendiendo casos penales ante los juzgados de instrucción y la Audiencia Provincial de Murcia.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Disponibilidad y respuesta urgente</h3>
                <p>En lo penal el tiempo es crítico. Atendemos las detenciones y los plazos de recurso con la máxima rapidez para no perder ninguna acción.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Discreción absoluta</h3>
                <p>Tratamos su caso con total confidencialidad. Sabemos lo delicado que es un procedimiento penal para usted y su entorno.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">03</div>
              <div class="why-item-text">
                <h3>Honorarios transparentes</h3>
                <p>Le informamos del coste antes de empezar. Sin sorpresas. La primera consulta para valorar su situación es siempre gratuita.</p>
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
          <blockquote>"Logramos la absolución de un cliente acusado de un delito económico al demostrar la falta de prueba sobre su intervención dolosa."</blockquote>
          <cite>— Caso real: delito económico, Murcia</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">sentencia absolutoria</strong> tras acreditar la insuficiencia de la prueba de cargo.</p>
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
      <p class="section-intro">Las dudas más habituales sobre detenciones, acusaciones, recursos y defensa penal.</p>
      <div class="faq-list" role="list" id="faq">
        <?php $faqIndex = 0; foreach ($faqs as $question => $answer): $faqIndex++; ?>
        <div class="faq-item" role="listitem">
          <button class="faq-question" aria-expanded="false" aria-controls="faq<?= $faqIndex ?>">
            <?= htmlspecialchars($question) ?>
            <span class="faq-icon" aria-hidden="true">+</span>
          </button>
          <div class="faq-answer" id="faq<?= $faqIndex ?>" role="region">
            <div class="faq-answer-inner"><?= htmlspecialchars($answer) ?></div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <?php
  $ctaTitle = '¿Le investigan o ha sido<br />víctima de un <em>delito</em>?';
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
        <a href="/servicios/derecho-laboral/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Derecho laboral</h3>
          <p>Despidos improcedentes, EREs, acoso laboral y reclamaciones salariales. Defendemos a trabajadores y empresas.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
        <a href="/servicios/extranjeria-lorca/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Extranjería en Lorca</h3>
          <p>NIE, TIE, autorizaciones de residencia y trabajo, reagrupación familiar y nacionalidad española.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
      </div>
    </div>
  </section>

</main>

<script src="/js/inner.js" defer></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
