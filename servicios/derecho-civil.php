<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/legal-service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/breadcrumb.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/faq.php';

$title       = 'Abogado civil en Lorca y Murcia — Herencias, Contratos y Divorcios | F&P Legaltec';
$description = 'Especialistas en derecho civil en Lorca y Murcia. Herencias y sucesiones, contratos, divorcios, reclamaciones de cantidad y responsabilidad civil. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/derecho-civil/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Derecho civil'],
];

// Single source of truth for the FAQ: used for both the visible accordion
// and the FAQPage structured data, so they can never drift apart.
$faqs = [
  '¿Cuánto tiempo tengo para aceptar o rechazar una herencia?' =>
    'No existe un plazo legal estricto para aceptar una herencia, pero cualquier interesado puede acudir al notario para requerir al heredero a que se pronuncie en un plazo de 30 días. Para repudiar la herencia conviene hacerlo antes de realizar cualquier acto que implique aceptación tácita. Además, el plazo para liquidar el Impuesto de Sucesiones es de 6 meses desde el fallecimiento, prorrogable otros 6, por lo que aunque la aceptación no caduque, los plazos fiscales obligan a actuar con rapidez.',
  '¿Qué diferencia hay entre divorcio de mutuo acuerdo y contencioso?' =>
    'En el divorcio de mutuo acuerdo ambos cónyuges firman un convenio regulador que recoge custodia, pensiones, uso de la vivienda y reparto de bienes; es más rápido y económico, y si no hay hijos menores puede tramitarse incluso ante notario. El divorcio contencioso se da cuando no hay acuerdo: cada parte presenta sus pretensiones y decide el juez. Siempre intentamos primero la vía del acuerdo porque reduce el coste emocional y económico, pero defendemos firmemente sus intereses en juicio cuando es necesario.',
  '¿Puedo reclamar una deuda que me deben aunque no tenga contrato firmado?' =>
    'Sí. El contrato verbal es válido en derecho español, aunque la dificultad está en probarlo. Sirven como prueba las facturas, albaranes, transferencias, mensajes, correos electrónicos y testigos. Para deudas documentadas existe el procedimiento monitorio, una vía rápida y sin necesidad de abogado para cantidades reclamadas con documento. Analizamos las pruebas disponibles y elegimos el procedimiento más eficaz para recuperar lo que le deben.',
  '¿Qué plazo tengo para reclamar por daños o incumplimiento de contrato?' =>
    'Desde la reforma de 2015, el plazo general para reclamar el cumplimiento de obligaciones contractuales (acciones personales) es de 5 años. Para la responsabilidad civil extracontractual —daños causados sin contrato previo, como un accidente— el plazo es de solo 1 año desde que se conoció el daño. Por la disparidad de plazos es fundamental valorar el caso cuanto antes para no perder la acción por caducidad o prescripción.',
  '¿Es obligatorio hacer testamento? ¿Qué pasa si no lo hago?' =>
    'No es obligatorio, pero es muy recomendable. Si fallece sin testamento se abre la sucesión intestada o "ab intestato", que reparte la herencia según el orden legal de parientes —descendientes, ascendientes, cónyuge y colaterales— mediante una declaración de herederos ante notario, más lenta y costosa. Con testamento usted decide el reparto dentro de los límites de la legítima, evita conflictos familiares y agiliza enormemente la tramitación para sus herederos.',
];

$jsonLd = [
  pfl_legal_service_schema(
    'Derecho civil — F&P Legaltec',
    'Abogados especialistas en herencias y sucesiones, contratos, divorcios, reclamaciones de cantidad y responsabilidad civil en Lorca y Murcia.',
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
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/></svg>
          Servicios jurídicos · Derecho civil
        </div>
        <h1>Abogados de derecho civil<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Protegemos su patrimonio y sus derechos en herencias, contratos, divorcios, reclamaciones de cantidad y responsabilidad civil. Más de treinta años defendiendo a particulares y familias ante los juzgados de Murcia.
        </p>
        <div class="hero-actions">
          <a href="/#contacto" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-civiles" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">6</div>
          <div class="stat-label">Meses para liquidar sucesiones</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">5</div>
          <div class="stat-label">Años para reclamar contratos</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>Los plazos civiles varían enormemente: desde 1 año por daños hasta 5 años por incumplimiento de contrato.</strong> Reclamar fuera de plazo significa perder el derecho para siempre. Si tiene un conflicto patrimonial, una herencia que gestionar o una deuda que reclamar, contacte hoy mismo para valorar su caso sin compromiso.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-civiles" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Defensa civil <em>completa</em></h2>
      <p class="section-intro">Cubrimos todas las áreas del derecho civil para particulares y familias, desde la redacción preventiva de contratos hasta la defensa en juicio.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Herencias y sucesiones</h3>
          <p>Tramitamos toda la sucesión: testamento, declaración de herederos, partición y liquidación del Impuesto de Sucesiones. Defendemos su legítima frente a repartos injustos.</p>
          <ul>
            <li>Redacción y revisión de testamentos</li>
            <li>Declaración de herederos ab intestato</li>
            <li>Partición y adjudicación de bienes</li>
            <li>Impugnación de testamentos y legítimas</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
          </div>
          <h3>Contratos civiles</h3>
          <p>Redactamos, revisamos y reclamamos el incumplimiento de todo tipo de contratos: compraventa, préstamo, permuta, arras y prestación de servicios.</p>
          <ul>
            <li>Redacción y negociación de contratos</li>
            <li>Revisión de cláusulas abusivas</li>
            <li>Resolución por incumplimiento</li>
            <li>Reclamación de daños y perjuicios</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Familia y divorcios</h3>
          <p>Le acompañamos en divorcios, separaciones, custodia, pensiones y modificación de medidas, siempre buscando el acuerdo y protegiendo a los menores.</p>
          <ul>
            <li>Divorcio de mutuo acuerdo y contencioso</li>
            <li>Convenio regulador y custodia</li>
            <li>Pensiones de alimentos y compensatoria</li>
            <li>Modificación de medidas</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Reclamación de cantidad</h3>
          <p>Recuperamos las deudas que le adeudan mediante el procedimiento más rápido: monitorio, juicio verbal u ordinario según la cuantía y la prueba disponible.</p>
          <ul>
            <li>Procedimiento monitorio</li>
            <li>Reclamación de facturas impagadas</li>
            <li>Juicio verbal y ordinario</li>
            <li>Ejecución de sentencias y embargos</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
          </div>
          <h3>Responsabilidad civil y daños</h3>
          <p>Reclamamos la indemnización que le corresponde por daños personales o materiales: accidentes, negligencias y perjuicios causados por terceros.</p>
          <ul>
            <li>Indemnización por accidentes</li>
            <li>Negligencias y daños a la propiedad</li>
            <li>Reclamaciones a aseguradoras</li>
            <li>Valoración pericial del daño</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21v-6h6v6"/></svg>
          </div>
          <h3>Arrendamientos y propiedad</h3>
          <p>Asesoramos a propietarios e inquilinos: contratos de alquiler, desahucios, reclamación de rentas, comunidades de propietarios y derechos reales.</p>
          <ul>
            <li>Contratos de arrendamiento</li>
            <li>Desahucio por impago y expiración</li>
            <li>Reclamación de rentas y suministros</li>
            <li>Conflictos de comunidades de vecinos</li>
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
          <p>Analizamos su situación sin compromiso. Valoramos las opciones disponibles y el pronóstico realista de cada una.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Revisión documental</h3>
          <p>Contratos, escrituras, testamentos o facturas. Identificamos los puntos fuertes de su caso y las pruebas que lo respaldan.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Estrategia y plazos</h3>
          <p>Le explicamos qué vía es más conveniente — negociación, requerimiento o demanda — y los plazos exactos de prescripción y caducidad.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Negociación previa</h3>
          <p>Buscamos primero un acuerdo extrajudicial siempre que sea posible. Muchos conflictos se resuelven sin necesidad de juicio.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Procedimiento judicial</h3>
          <p>Si no hay acuerdo, defendemos su caso ante el Juzgado de Primera Instancia. Experiencia acumulada en cientos de vistas en Murcia y Lorca.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Ejecución y recursos</h3>
          <p>Si la sentencia es favorable, ejecutamos el fallo. Si no, valoramos con usted la viabilidad del recurso ante la Audiencia Provincial.</p>
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
          <h2 id="why-title">Civilistas con <em>experiencia real</em> en Murcia</h2>
          <p class="section-intro" style="margin-bottom:36px">No somos un despacho generalista que hace de todo. Llevamos décadas defendiendo el patrimonio de familias y particulares en los juzgados de Lorca y Murcia.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Trato cercano y humano</h3>
                <p>Los conflictos civiles suelen ser personales y familiares. Le escuchamos, le explicamos con claridad y le acompañamos durante todo el proceso.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Prioridad al acuerdo</h3>
                <p>Defendemos sus intereses con firmeza, pero buscamos siempre la solución que menos coste emocional y económico le suponga.</p>
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
                <p>Usamos herramientas de IA para analizar jurisprudencia reciente y encontrar precedentes favorables que refuerzan su reclamación.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Resolvimos una partición de herencia bloqueada durante años entre varios hermanos, logrando un reparto justo sin llegar a juicio."</blockquote>
          <cite>— Caso real: sucesión familiar, Lorca</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">acuerdo de partición</strong> firmado ante notario y herencia adjudicada en meses.</p>
          <a href="/#contacto" class="btn-primary" style="width:100%;justify-content:center">Consulta gratuita</a>
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
      <p class="section-intro">Las dudas más habituales sobre herencias, contratos, divorcios y reclamaciones civiles.</p>
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
  $ctaTitle = '¿Tiene una herencia, un contrato<br />o un <em>conflicto civil</em>?';
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
