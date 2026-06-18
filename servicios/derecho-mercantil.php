<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/legal-service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/breadcrumb.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/faq.php';

$title       = 'Abogado mercantil en Lorca y Murcia — Empresas, Contratos y Concursal | F&P Legaltec';
$description = 'Abogados mercantilistas en Lorca y Murcia. Constitución y liquidación de sociedades, contratos mercantiles, reclamación de impagados, derecho concursal y societario. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/derecho-mercantil/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Derecho mercantil'],
];

// Single source of truth for the FAQ: used for both the visible accordion
// and the FAQPage structured data, so they can never drift apart.
$faqs = [
  '¿Qué tipo de sociedad me conviene para montar mi empresa?' =>
    'Depende de la actividad, el número de socios, la inversión inicial y la responsabilidad que quiera asumir. La Sociedad Limitada (SL) es la opción más habitual para pymes por su flexibilidad y porque limita la responsabilidad al capital aportado (mínimo 1 euro desde 2022). La Sociedad Anónima (SA) exige 60.000 euros de capital y se reserva para proyectos grandes. El autónomo o la comunidad de bienes pueden encajar en negocios pequeños, pero no limitan la responsabilidad. Analizamos su caso para elegir la forma jurídica y fiscal más ventajosa.',
  '¿Cómo puedo reclamar una factura impagada a otra empresa?' =>
    'La vía más rápida es el procedimiento monitorio, que permite reclamar deudas documentadas (facturas, albaranes, contratos) sin límite de cuantía. Si el deudor no paga ni se opone en 20 días, se puede pasar directamente a la ejecución y el embargo. Si se opone, el asunto continúa por el procedimiento que corresponda según la cuantía. También es recomendable un requerimiento previo de pago, que muchas veces resuelve el impago sin necesidad de demanda y permite reclamar intereses de demora.',
  '¿Qué es el derecho concursal y cuándo debo solicitar el concurso?' =>
    'El concurso de acreedores es el procedimiento para una empresa o persona en situación de insolvencia, es decir, que no puede cumplir regularmente sus obligaciones. El administrador tiene la obligación legal de solicitarlo dentro de los 2 meses siguientes a conocer la insolvencia; no hacerlo a tiempo puede acarrear responsabilidad personal. El concurso permite reestructurar la deuda, negociar con los acreedores o, en su caso, liquidar ordenadamente. Cuanto antes se actúe, más opciones de salvar la actividad.',
  '¿Son obligatorios los pactos de socios? ¿Para qué sirven?' =>
    'No son obligatorios, pero son muy recomendables. El pacto de socios regula aspectos que los estatutos no cubren o no conviene hacer públicos: reparto de dividendos, mayorías reforzadas, cláusulas de salida, derecho de adquisición preferente, no competencia y resolución de conflictos. Previenen bloqueos societarios y litigios entre socios, que son la principal causa de fracaso de muchas empresas. Redactarlo desde el inicio, cuando hay buena relación, evita problemas graves más adelante.',
  '¿Qué responsabilidad tiene el administrador de una sociedad?' =>
    'El administrador responde frente a la sociedad, los socios y los acreedores por los daños causados por actos contrarios a la ley o a los estatutos, o realizados sin la diligencia debida. Esta responsabilidad puede llegar a ser personal y con su propio patrimonio, especialmente si no solicita el concurso a tiempo, no formula las cuentas anuales o no convoca junta ante pérdidas que reduzcan el patrimonio neto. Asesoramos a administradores para cumplir sus obligaciones y minimizar riesgos.',
];

$jsonLd = [
  pfl_legal_service_schema(
    'Derecho mercantil — F&P Legaltec',
    'Abogados mercantilistas especializados en constitución de sociedades, contratos mercantiles, reclamación de impagados, derecho societario y concursal en Lorca y Murcia.',
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
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          Servicios jurídicos · Derecho mercantil
        </div>
        <h1>Abogados mercantilistas<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Seguridad jurídica para su empresa: constitución de sociedades, contratos mercantiles, reclamación de impagados, derecho societario y concursal. Más de treinta años acompañando a empresas y autónomos de Murcia.
        </p>
        <div class="hero-actions">
          <a href="/contacto/" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-mercantiles" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">2</div>
          <div class="stat-label">Meses para instar el concurso</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">20</div>
          <div class="stat-label">Días de oposición en monitorio</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>El administrador tiene solo 2 meses para solicitar el concurso desde que conoce la insolvencia.</strong> No hacerlo a tiempo puede comprometer su patrimonio personal. Si su empresa atraviesa dificultades o necesita reclamar impagados, contacte hoy mismo para analizar la mejor estrategia sin compromiso.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-mercantiles" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Asesoramiento mercantil <em>completo</em></h2>
      <p class="section-intro">Acompañamos a empresas y autónomos en todo el ciclo de vida del negocio, desde la constitución hasta la reestructuración o el cierre.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/></svg>
          </div>
          <h3>Constitución y vida societaria</h3>
          <p>Elegimos la forma jurídica óptima y constituimos su sociedad. Gestionamos toda la vida societaria: juntas, ampliaciones de capital y modificaciones estatutarias.</p>
          <ul>
            <li>Constitución de SL y SA</li>
            <li>Estatutos y pactos de socios</li>
            <li>Juntas y acuerdos sociales</li>
            <li>Ampliaciones y reducciones de capital</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
          </div>
          <h3>Contratos mercantiles</h3>
          <p>Redactamos y negociamos los contratos que sostienen su negocio, protegiendo sus intereses y previniendo conflictos futuros.</p>
          <ul>
            <li>Compraventa y distribución</li>
            <li>Agencia, franquicia y suministro</li>
            <li>Condiciones generales de contratación</li>
            <li>Acuerdos de confidencialidad</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Reclamación de impagados</h3>
          <p>Recuperamos las cantidades que adeudan a su empresa con el procedimiento más rápido y eficaz, incluida la ejecución y el embargo.</p>
          <ul>
            <li>Requerimiento previo de pago</li>
            <li>Procedimiento monitorio</li>
            <li>Juicio cambiario</li>
            <li>Ejecución de títulos y embargos</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          </div>
          <h3>Derecho concursal</h3>
          <p>Asesoramos en situaciones de insolvencia: concurso de acreedores, reestructuración de deuda y planes de continuidad o liquidación ordenada.</p>
          <ul>
            <li>Solicitud y tramitación del concurso</li>
            <li>Planes de reestructuración</li>
            <li>Negociación con acreedores</li>
            <li>Defensa de administradores y acreedores</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Conflictos societarios</h3>
          <p>Resolvemos conflictos entre socios y administradores: impugnación de acuerdos, responsabilidad de administradores y separación o exclusión de socios.</p>
          <ul>
            <li>Impugnación de acuerdos sociales</li>
            <li>Acción de responsabilidad de administradores</li>
            <li>Separación y exclusión de socios</li>
            <li>Disolución y liquidación</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Asesoría mercantil continua</h3>
          <p>Acompañamiento jurídico permanente para su empresa: contratación recurrente, decisiones estratégicas y cumplimiento normativo del día a día.</p>
          <ul>
            <li>Asesoramiento jurídico continuado</li>
            <li>Revisión de operaciones y contratos</li>
            <li>Compraventa de empresas y due diligence</li>
            <li>Cumplimiento normativo mercantil</li>
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
          <p>Analizamos la situación de su empresa sin compromiso. Valoramos las opciones disponibles y el pronóstico realista de cada una.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Análisis documental</h3>
          <p>Revisamos contratos, cuentas, estatutos y la documentación relevante para identificar riesgos y oportunidades.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Estrategia y plazos</h3>
          <p>Le proponemos la vía más conveniente — negociación, reclamación o procedimiento judicial — con los plazos y costes claros desde el inicio.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Negociación previa</h3>
          <p>Buscamos primero la solución extrajudicial. En el ámbito mercantil, un acuerdo bien negociado suele ser más rentable que un litigio.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Procedimiento judicial</h3>
          <p>Si no hay acuerdo, defendemos su caso ante el Juzgado de lo Mercantil o de Primera Instancia de Murcia y Lorca.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Ejecución y seguimiento</h3>
          <p>Ejecutamos las resoluciones favorables y mantenemos el acompañamiento jurídico continuo que su negocio necesita.</p>
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
          <h2 id="why-title">Mercantilistas con <em>visión de negocio</em> en Murcia</h2>
          <p class="section-intro" style="margin-bottom:36px">No somos un despacho generalista que hace de todo. Llevamos décadas asesorando a empresas y autónomos de Lorca y Murcia en sus decisiones más importantes.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Enfoque práctico y de negocio</h3>
                <p>No solo aplicamos la ley: entendemos su empresa y buscamos soluciones que protejan sus intereses sin frenar su actividad.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Prevención de conflictos</h3>
                <p>Un buen contrato o pacto de socios evita litigios costosos. Trabajamos para anticipar los problemas antes de que aparezcan.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">03</div>
              <div class="why-item-text">
                <h3>Honorarios transparentes</h3>
                <p>Le informamos del coste antes de empezar. Sin sorpresas. La primera consulta para valorar su caso es siempre gratuita.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">04</div>
              <div class="why-item-text">
                <h3>Tecnología legaltech al servicio del caso</h3>
                <p>Usamos herramientas de IA para analizar jurisprudencia reciente y agilizar la revisión de contratos y operaciones complejas.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Recuperamos una deuda comercial de varios meses mediante un monitorio que terminó en embargo, sin necesidad de juicio."</blockquote>
          <cite>— Caso real: pyme del sector servicios, Murcia</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">cobro íntegro</strong> de la deuda más intereses y costas tras el embargo.</p>
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
      <p class="section-intro">Las dudas más habituales sobre constitución de empresas, impagados, concursal y derecho societario.</p>
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
  $ctaTitle = '¿Necesita asesoría<br />para su <em>empresa</em>?';
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

<script src="/js/inner.js" defer></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
