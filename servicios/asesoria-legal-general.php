<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/legal-service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/breadcrumb.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/schemas/faq.php';

$title       = 'Asesoría legal general en Lorca y Murcia — Abogados de Confianza | F&P Legaltec';
$description = 'Asesoría legal general en Lorca y Murcia. Orientación jurídica integral para particulares, autónomos y empresas: contratos, reclamaciones, consultas puntuales e iguala mensual. Más de 30 años de experiencia. Primera consulta gratuita.';
$canonical   = 'https://pflegaltec.com/servicios/asesoria-legal-general/';
$ogImage     = 'https://pflegaltec.com/assets/og-servicios.jpg';

$breadcrumb = [
  ['name' => 'Inicio',              'url' => '/'],
  ['name' => 'Servicios jurídicos', 'url' => '/servicios/'],
  ['name' => 'Asesoría legal general'],
];

// Single source of truth for the FAQ: used for both the visible accordion
// and the FAQPage structured data, so they can never drift apart.
$faqs = [
  '¿Qué incluye la asesoría legal general?' =>
    'La asesoría legal general es un servicio de orientación jurídica integral: resolvemos consultas puntuales, revisamos y redactamos contratos, analizamos reclamaciones, le orientamos sobre plazos y derechos, y le derivamos al área especializada cuando el asunto lo requiere. Es el punto de entrada ideal cuando no sabe exactamente qué tipo de abogado necesita o cuando busca una opinión jurídica antes de tomar una decisión importante.',
  '¿Tengo que ir al despacho o puedo consultar online?' =>
    'Ambas opciones están disponibles. Puede acudir presencialmente a nuestro despacho en Lorca o realizar la consulta por teléfono, videollamada o correo electrónico. Muchas consultas se resuelven sin necesidad de desplazarse, y para empresas y autónomos esta flexibilidad permite obtener respuestas jurídicas rápidas sin interrumpir su actividad.',
  '¿Cuánto cuesta una consulta legal?' =>
    'La primera consulta para valorar su situación es siempre gratuita y sin compromiso. A partir de ahí, le informamos con total transparencia del coste antes de iniciar cualquier actuación, sin sorpresas. Para quienes necesitan asesoramiento recurrente ofrecemos igualas mensuales a precio cerrado, que resultan mucho más económicas que las consultas sueltas.',
  '¿Qué es una iguala y a quién le conviene?' =>
    'La iguala es un acuerdo de asesoramiento jurídico continuo por una cuota mensual fija. Le conviene especialmente a autónomos, pymes y empresas que necesitan consultar con regularidad: revisión de contratos, dudas del día a día, requerimientos, reclamaciones y prevención de conflictos. A cambio de una cuota predecible, dispone de un abogado de confianza siempre disponible, sin tener que negociar honorarios en cada consulta.',
  '¿Pueden ayudarme si mi caso es de una rama muy específica?' =>
    'Sí. Somos un despacho multidisciplinar: además de la asesoría general, contamos con áreas especializadas en derecho laboral, civil, penal, mercantil, extranjería y legaltech/protección de datos. Si su asunto requiere una especialidad concreta, lo gestiona directamente el abogado del área correspondiente, manteniendo siempre una visión coordinada y un único interlocutor para usted.',
];

$jsonLd = [
  pfl_legal_service_schema(
    'Asesoría legal general — F&P Legaltec',
    'Orientación jurídica integral para particulares, autónomos y empresas: consultas, contratos, reclamaciones e iguala mensual de asesoramiento continuo en Lorca y Murcia.',
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
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>
          Servicios jurídicos · Asesoría legal general
        </div>
        <h1>Asesoría legal general<br />en <em>Lorca y Murcia</em></h1>
        <p class="hero-desc">
          Orientación jurídica integral para particulares, autónomos y empresas. Resolvemos sus dudas, revisamos sus contratos y le acompañamos con visión estratégica. Un abogado de confianza para cualquier situación legal.
        </p>
        <div class="hero-actions">
          <a href="/contacto/" class="btn-primary">
            Consulta gratuita
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#servicios-asesoria" class="btn-ghost">Ver todos los servicios</a>
        </div>
      </div>
      <div class="hero-stats" aria-label="Datos destacados">
        <div class="stat-card">
          <div class="stat-num">+30</div>
          <div class="stat-label">Años de experiencia</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">6</div>
          <div class="stat-label">Áreas especializadas</div>
        </div>
        <div class="stat-card">
          <div class="stat-num">24h</div>
          <div class="stat-label">Tiempo de respuesta</div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="intro-alert" role="note">
      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <p>
        <strong>¿No sabe exactamente qué tipo de abogado necesita?</strong> Empiece por aquí. Analizamos su situación, le orientamos sobre sus derechos y plazos, y le derivamos al área especializada cuando hace falta. La primera consulta es siempre gratuita y sin compromiso.
      </p>
    </div>
  </div>

  <!-- SERVICIOS -->
  <section id="servicios-asesoria" class="section-light" aria-labelledby="srv-title">
    <div class="container">
      <span class="section-label">Qué hacemos</span>
      <h2 id="srv-title">Asesoramiento jurídico <em>integral</em></h2>
      <p class="section-intro">Un único interlocutor para todas sus necesidades legales, con la posibilidad de acceder a cada especialidad cuando su caso lo requiere.</p>
      <div class="services-grid" role="list">

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
          </div>
          <h3>Consultas jurídicas</h3>
          <p>Resolvemos sus dudas legales con claridad: qué derechos tiene, qué plazos le afectan y qué opciones reales existen antes de tomar una decisión.</p>
          <ul>
            <li>Consultas puntuales</li>
            <li>Segunda opinión jurídica</li>
            <li>Orientación sobre plazos y derechos</li>
            <li>Atención presencial y online</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3>Contratos y documentos</h3>
          <p>Redactamos y revisamos todo tipo de contratos y documentos legales para que protejan sus intereses y eviten problemas futuros.</p>
          <ul>
            <li>Redacción de contratos</li>
            <li>Revisión de cláusulas</li>
            <li>Acuerdos y requerimientos</li>
            <li>Escritos y reclamaciones</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
          </div>
          <h3>Reclamaciones</h3>
          <p>Le ayudamos a reclamar lo que le corresponde frente a empresas, administraciones o particulares, eligiendo la vía más eficaz.</p>
          <ul>
            <li>Reclamaciones de consumo</li>
            <li>Reclamaciones a aseguradoras</li>
            <li>Hojas de reclamaciones y administraciones</li>
            <li>Reclamación de cantidades</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M20 6L9 17l-5-5"/></svg>
          </div>
          <h3>Iguala para autónomos y pymes</h3>
          <p>Asesoramiento jurídico continuo por una cuota mensual fija. Un abogado de confianza siempre disponible, sin negociar honorarios en cada consulta.</p>
          <ul>
            <li>Cuota mensual a precio cerrado</li>
            <li>Consultas ilimitadas del día a día</li>
            <li>Revisión recurrente de contratos</li>
            <li>Prevención de conflictos</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          </div>
          <h3>Análisis y diagnóstico de su caso</h3>
          <p>Estudiamos su situación a fondo, identificamos los riesgos y le proponemos una hoja de ruta clara con costes y plazos realistas.</p>
          <ul>
            <li>Estudio del caso sin compromiso</li>
            <li>Valoración de riesgos y viabilidad</li>
            <li>Hoja de ruta y presupuesto cerrado</li>
            <li>Pronóstico realista</li>
          </ul>
        </article>

        <article class="service-card" role="listitem">
          <div class="service-icon" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
          </div>
          <h3>Derivación a especialistas</h3>
          <p>Cuando su asunto requiere una especialidad concreta, lo gestiona el abogado del área correspondiente, con un único interlocutor para usted.</p>
          <ul>
            <li>Derecho laboral, civil y penal</li>
            <li>Derecho mercantil y extranjería</li>
            <li>Protección de datos y legaltech</li>
            <li>Coordinación de todo su asunto</li>
          </ul>
        </article>

      </div>
    </div>
  </section>

  <!-- PROCESO -->
  <section aria-labelledby="proc-title">
    <div class="container">
      <span class="section-label">Cómo trabajamos</span>
      <h2 id="proc-title">De la consulta<br />a la <em>solución</em></h2>
      <p class="section-intro">Un proceso claro y eficiente. Le explicamos cada paso y le mantenemos informado en todo momento.</p>
      <div class="process-grid" role="list">
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">01</div>
          <h3>Consulta gratuita</h3>
          <p>Nos cuenta su situación sin compromiso. Escuchamos, preguntamos lo necesario y le orientamos desde el primer momento.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">02</div>
          <h3>Análisis del caso</h3>
          <p>Estudiamos la documentación y los hechos. Identificamos qué área legal interviene y qué opciones tiene a su disposición.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">03</div>
          <h3>Orientación y plan</h3>
          <p>Le explicamos con lenguaje claro qué le conviene hacer, los plazos a tener en cuenta y el coste cerrado de cada actuación.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">04</div>
          <h3>Actuación</h3>
          <p>Redactamos los documentos, enviamos los requerimientos o iniciamos las gestiones acordadas, manteniéndole siempre informado.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">05</div>
          <h3>Derivación si procede</h3>
          <p>Si el asunto requiere una especialidad, lo asume el abogado del área correspondiente sin que usted pierda su interlocutor.</p>
        </div>
        <div class="process-step" role="listitem">
          <div class="step-num" aria-hidden="true">06</div>
          <h3>Acompañamiento continuo</h3>
          <p>Quedamos a su disposición para futuras consultas, con la opción de una iguala mensual si necesita asesoramiento recurrente.</p>
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
          <h2 id="why-title">Su abogado de <em>confianza</em> en Murcia</h2>
          <p class="section-intro" style="margin-bottom:36px">Un despacho multidisciplinar que combina cercanía con especialización. Llevamos décadas resolviendo las dudas legales de particulares y empresas de Lorca y Murcia.</p>
          <div class="why-list" role="list">
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">01</div>
              <div class="why-item-text">
                <h3>Un único interlocutor</h3>
                <p>No le pasamos de un departamento a otro. Tiene un abogado de referencia que coordina todo su asunto, sea de la rama que sea.</p>
              </div>
            </div>
            <div class="why-item" role="listitem">
              <div class="why-bullet" aria-hidden="true">02</div>
              <div class="why-item-text">
                <h3>Lenguaje claro</h3>
                <p>Le explicamos su situación sin tecnicismos innecesarios para que entienda qué opciones tiene y pueda decidir con criterio.</p>
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
                <p>Usamos herramientas de IA para responder con rapidez, revisar documentos y analizar jurisprudencia reciente que refuerza su posición.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-cta-box">
          <div class="big-quote" aria-hidden="true">"</div>
          <blockquote>"Una consulta a tiempo nos permitió detectar una cláusula abusiva en un contrato antes de firmarlo, evitando a la empresa un perjuicio considerable."</blockquote>
          <cite>— Caso real: autónomo del sector servicios, Lorca</cite>
          <div style="background:var(--navy-border);height:1px;margin-bottom:28px"></div>
          <p style="font-size:14px;color:var(--gray);margin-bottom:20px">Resultado: <strong style="color:var(--gold)">contrato renegociado</strong> y riesgo eliminado antes de la firma.</p>
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
      <p class="section-intro">Las dudas más habituales sobre consultas, igualas y asesoramiento jurídico general.</p>
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
  $ctaTitle = '¿Tiene una duda legal<br />y no sabe <em>por dónde empezar</em>?';
  $ctaDesc  = 'Primera consulta gratuita y sin compromiso. Analizamos su caso y le explicamos opciones reales. Respondemos en menos de 24 horas.';
  require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/cta-banner.php';
  ?>

  <!-- RELACIONADOS -->
  <section class="section-light" aria-labelledby="rel-title">
    <div class="container">
      <span class="section-label">También le puede interesar</span>
      <h2 id="rel-title">Nuestras <em>especialidades</em></h2>
      <p class="section-intro">Cuando su asunto requiere una especialidad concreta, contamos con el área adecuada para usted.</p>
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
        <a href="/servicios/derecho-mercantil/" class="related-card" role="listitem">
          <p class="related-tag">Servicios jurídicos</p>
          <h3>Derecho mercantil</h3>
          <p>Constitución de sociedades, contratos mercantiles, reclamación de impagados y derecho concursal.</p>
          <span class="related-link">Saber más <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span>
        </a>
      </div>
    </div>
  </section>

</main>

<script src="/js/inner.js" defer></script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
