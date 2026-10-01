<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>¡Andá Pa Allá! — Turismo Futbolero</title>
</head>
<body>

<!-- ═══ NAVBAR ═══ -->
<nav>
  <div class="nav-logo" onclick="showPage('home')">¡Á!</div>
  <ul class="nav-links">
    <li><a href="#" onclick="showPage('home');return false">Inicio</a></li>
    <li><a href="#" onclick="showPage('ciudades');return false">Ciudades</a></li>
    <li><a href="#" onclick="showPage('experiencias');return false">Experiencias</a></li>
    <li><a href="#" onclick="showPage('gastronomia');return false">Gastronomía</a></li>
    <li><a href="#" onclick="showPage('sobre');return false">Sobre el proyecto</a></li>
  </ul>
  <div class="hamburger" onclick="toggleMenu()" id="hamburger">
    <span></span><span></span><span></span>
  </div>
</nav>

<!-- Mobile menu -->
<div class="mobile-menu" id="mobile-menu">
  <a href="#" onclick="showPage('home');closeMenu();return false">Inicio</a>
  <a href="#" onclick="showPage('ciudades');closeMenu();return false">Ciudades</a>
  <a href="#" onclick="showPage('experiencias');closeMenu();return false">Experiencias</a>
  <a href="#" onclick="showPage('gastronomia');closeMenu();return false">Gastronomía</a>
  <a href="#" onclick="showPage('sobre');closeMenu();return false">Sobre el proyecto</a>
</div>

<!-- ═══ HOME ═══ -->
<div id="page-home" class="page active">
  <div class="home-hero">
    <h1 class="home-title">¡ANDÁ<em>!</em></h1>
    <p class="home-sub">El fútbol también es turismo</p>
    <div class="search-bar">
      <input type="text" id="search-input" placeholder="Buscar ciudad o club..." oninput="handleSearch(this.value)" autocomplete="off">
      <button onclick="doSearch()">Buscar</button>
    </div>
    <div class="search-results" id="search-results"></div>
  </div>

  <p class="section-label">★ Clubes Destacados</p>
  <div class="clubs-grid">
    <!-- Boca Juniors: azul y oro -->
    <div class="club-card" onclick="showCiudad('baires')">
      <div class="club-shield">
        <div class="shield-bg" style="background:linear-gradient(160deg,#003087 55%,#FFD700 55%);border-color:#FFD700"></div>
        <img class="shield-img" src="img/BOCA-ESCUDO.png" alt="Boca Juniors">
      </div>
      <span class="club-name">Boca Juniors</span>
    </div>
    <!-- River Plate: blanco con banda roja diagonal -->
    <div class="club-card" onclick="showCiudad('river')">
      <div class="club-shield">
        <div class="shield-bg" style="background:linear-gradient(150deg,#ffffff 40%,#cc0000 40%,#cc0000 60%,#ffffff 60%);border-color:#cc0000"></div>
        <img class="shield-img" src="img/RIVER-ESCUDO.png" alt="River Plate">
      </div>
      <span class="club-name">River Plate</span>
    </div>
    <!-- FC Barcelona: azul grana -->
    <div class="club-card" onclick="showCiudad('barcelona')">
      <div class="club-shield">
        <div class="shield-bg" style="background:linear-gradient(135deg,#a50044 0%,#a50044 50%,#004d98 50%);border-color:#a50044"></div>
        <img class="shield-img" src="img/BARCELONA-ESCUDO.png" alt="FC Barcelona">
      </div>
      <span class="club-name">Barcelona</span>
    </div>
    <!-- Real Madrid: blanco y dorado -->
    <div class="club-card" onclick="showCiudad('madrid')">
      <div class="club-shield">
        <div class="shield-bg" style="background:#f5f5f5;border-color:#C8A951"></div>
        <img class="shield-img" src="img/REAL-MADRID-ESCUDO.png" alt="Real Madrid">
      </div>
      <span class="club-name">Real Madrid</span>
    </div>
    <!-- Arsenal: rojo y blanco -->
    <div class="club-card" onclick="showCiudad('london')">
      <div class="club-shield">
        <div class="shield-bg" style="background:#EF0107;border-color:#9C0000"></div>
        <img class="shield-img" src="img/ARSENAL-ESCUDO.png" alt="Arsenal">
      </div>
      <span class="club-name">Arsenal</span>
    </div>
    <!-- Chelsea: azul royal -->
    <div class="club-card" onclick="showCiudad('chelsea')">
      <div class="club-shield">
        <div class="shield-bg" style="background:#034694;border-color:#DBA111"></div>
        <img class="shield-img" src="img/CHELSEA-ESCUDO.png" alt="Chelsea">
      </div>
      <span class="club-name">Chelsea</span>
    </div>
    <!-- Flamengo: rojo y negro -->
    <div class="club-card" onclick="showCiudad('rio')">
      <div class="club-shield">
        <div class="shield-bg" style="background:linear-gradient(135deg,#cc0000 50%,#111111 50%);border-color:#cc0000"></div>
        <img class="shield-img" src="img/FLAMENGO-ESCUDO.png" alt="Flamengo">
      </div>
      <span class="club-name">Flamengo</span>
    </div>
    <!-- Inter Miami: negro y rosa -->
    <div class="club-card" onclick="showCiudad('miami')">
      <div class="club-shield">
        <div class="shield-bg" style="background:linear-gradient(160deg,#231f20 55%,#f7b5cd 55%);border-color:#f7b5cd"></div>
        <img class="shield-img" src="img/miami-ESCUDO.png" alt="Inter Miami">
      </div>
      <span class="club-name">Inter Miami</span>
    </div>
  </div>
</div>

<!-- ═══ CIUDADES ═══ -->
<div id="page-ciudades" class="page">
  <div class="ciudades-hero">
    <h1 class="page-title">¡CIUDADES<span>!</span></h1>
    <p class="home-sub">Elegí tu destino futbolero</p>
  </div>
  <div class="ciudades-grid">
    <div class="ciudad-card" onclick="showCiudad('miami')">
      <img class="ciudad-img" src="img/ESTADIO-MIAMI.png" alt="Miami">
      <div class="ciudad-overlay">
        <h2 class="ciudad-nombre">Miami</h2>
      </div>
    </div>
    <div class="ciudad-card" onclick="showCiudad('barcelona')">
      <img class="ciudad-img" src="img/ESTADIO-BARCELONA.png" alt="Barcelona">
      <div class="ciudad-overlay">
        <h2 class="ciudad-nombre">Barcelona</h2>
      </div>
    </div>
    <div class="ciudad-card" onclick="showCiudad('baires')">
      <img class="ciudad-img" src="img/ESTADIO-BUENOS-AIRES.png" alt="Buenos Aires">
      <div class="ciudad-overlay">
        <h2 class="ciudad-nombre">Buenos Aires</h2>
      </div>
    </div>
    <div class="ciudad-card" onclick="showCiudad('roma')">
      <img class="ciudad-img" src="img/ESTADIO-ROMA.png" alt="Roma">
      <div class="ciudad-overlay">
        <h2 class="ciudad-nombre">Roma</h2>
      </div>
    </div>
  </div>
</div>

<!-- ═══ CIUDAD DETALLE ═══ -->
<div id="page-ciudad" class="page">
  <div class="ciudad-hero" id="ciudad-hero">
    <div class="ciudad-hero-fallback" id="ciudad-hero-bg"></div>
    <div class="ciudad-hero-overlay">
      <p class="ciudad-hero-tag" id="ciudad-hero-tag">TURISMO FUTBOLERO</p>
      <h1 class="ciudad-hero-title" id="ciudad-hero-title">CIUDAD</h1>
      <p class="ciudad-hero-sub" id="ciudad-hero-sub">Argentina</p>
    </div>
  </div>
  <div class="ciudad-content">
    <button class="ciudad-back" onclick="showPage('ciudades')">← Volver a ciudades</button>
    <div class="info-blocks" id="ciudad-info-blocks"></div>
    <div class="ciudad-clubs-section">
      <h2 class="section-title">Clubes de <span id="ciudad-clubs-nombre"></span></h2>
      <div class="ciudad-clubs-grid" id="ciudad-clubs-grid"></div>
    </div>
    <div class="estadio-section">
      <h2 class="section-title" id="ciudad-estadio-titulo">El Estadio</h2>
      <div class="estadio-img-wrap">
        <div class="estadio-img-fallback" id="estadio-img-fallback"></div>
      </div>
      <div class="estadio-datos" id="estadio-datos"></div>
    </div>

  </div>
</div>

<!-- ═══ EXPERIENCIAS ═══ -->
<div id="page-experiencias" class="page">
  <div class="exp-hero">
    <h1 class="page-title">¡EXPERIENCIAS<span>!</span></h1>
    <p class="home-sub">Lo que dicen los hinchas viajeros</p>
  </div>
  <div class="exp-grid">
    <!-- Reseña 1 -->
    <div class="exp-card">
      <div class="exp-img-wrap">
        <img src="img/EXPERIENCIA-ARSENAL.png" alt="Experiencia Arsenal" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
      <div class="exp-body">
        <p class="exp-tag">📍 Londres — Emirates Stadium</p>
        <p class="exp-quote">"Quería hacer el tour del Arsenal y no sabía por dónde arrancar, pero acá encontré todo al toque: info, horarios y cómo ir. Me re sirvió para organizarme sin tener que buscar en mil páginas."</p>
        <div class="exp-stars">★★★★★</div>
        <p class="exp-author">— Tomás R., Buenos Aires</p>
      </div>
    </div>
    <!-- Reseña 2 -->
    <div class="exp-card">
      <div class="exp-img-wrap">
        <img src="img/EXPERIENCIA-FLAMENGO.png" alt="Experiencia Flamengo" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
      <div class="exp-body">
        <p class="exp-tag">📍 Río de Janeiro — Maracaná</p>
        <p class="exp-quote">"Quería visitar la cancha del Flamengo y acá encontré toda la data sin vueltas. Tenía horarios, info del tour y cómo llegar. Me ahorré una banda de tiempo y pude organizar todo re fácil."</p>
        <div class="exp-stars">★★★★★</div>
        <p class="exp-author">— Lucas F., Córdoba</p>
      </div>
    </div>
    <!-- Reseña 3 -->
    <div class="exp-card">
      <div class="exp-img-wrap">
        <img src="img/EXPERIENCIA-ROMA.png" alt="Experiencia Roma" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
      <div class="exp-body">
        <p class="exp-tag">📍 Roma — Estadio Olímpico</p>
        <p class="exp-quote">"Estaba en Roma y quería conocer el estadio, pero no sabía bien cómo era la movida. En la web encontré todo clarito, desde el tour hasta cómo llegar. Me salvó y lo pude organizar al toque."</p>
        <div class="exp-stars">★★★★★</div>
        <p class="exp-author">— Valentina M., Rosario</p>
      </div>
    </div>
  </div>

  <!-- Formulario -->
  <div class="exp-form-section">
    <h2 class="exp-form-title">¡Contanos tu <span>experiencia</span>!</h2>
    <div class="form-group">
      <label>Tu nombre</label>
      <input type="text" id="form-nombre" name="nombre" placeholder="Ej: Lucas Ferreyra">
    </div>
    <form action="index.php" method="POST">
      
    <div class="form-group">
      <label>Ciudad que visitaste</label>
      <select id="form-ciudad" name="ciudad">
        <option value="">Elegí una ciudad...</option>
        <option>Buenos Aires</option>
        <option>Barcelona</option>
        <option>Roma</option>
        <option>Miami</option>
        <option>Londres</option>
        <option>Madrid</option>
        <option>Río de Janeiro</option>
        <option>Otra ciudad</option>
      </select>
    </div>
    <div class="form-group">
      <label>Tu experiencia</label>
      <textarea id="form-exp" placeholder="Contanos cómo fue tu visita..."></textarea>
    </div>
    <div class="form-group">
      <label>Calificación</label>
      <div class="stars-input" id="stars-input">
        <button class="star-btn" onclick="setStar(1)">★</button>
        <button class="star-btn" onclick="setStar(2)">★</button>
        <button class="star-btn" onclick="setStar(3)">★</button>
        <button class="star-btn" onclick="setStar(4)">★</button>
        <button class="star-btn" onclick="setStar(5)">★</button>
      </div>
    </div>
    <button class="form-submit-btn" onclick="submitForm()">Enviar experiencia</button>
    <div class="form-success" id="form-success">
      ¡Gracias! Tu experiencia fue enviada con éxito.
    </div>
  </div>
</div>

<!-- ═══ SOBRE EL PROYECTO ═══ -->
<div id="page-sobre" class="page">
  <div class="sobre-layout">
    <div class="sobre-main-text" style="margin-bottom:2px;">
      <p class="sobre-kicker">Trabajo Práctico — Producción Digital I</p>
      <h2 class="sobre-big-title">¡SOBRE EL<br>PROYECTO<span>!</span></h2>
      <div class="sobre-text">
        <p>¡Andá Pa Allá! nació de una idea simple: hoy la información sobre estadios, tours, museos, tiendas y entradas está repartida en muchas páginas distintas, lo que hace difícil organizar una visita fácil.</p>
        <p>Esta plataforma junta toda la información futbolística de una ciudad en un solo sitio, para que el usuario pueda explorar, informarse y planear su visita de forma simple, rápida y sin complicaciones.</p>
        <p>El proyecto está orientado a hinchas viajeros que quieren combinar turismo general con la cultura futbolera de cada ciudad que visitan.</p>
      </div>
    </div>

    <div class="sobre-data-row">
      <div class="sobre-dato">
        <span class="sobre-dato-num">4</span>
        <p class="sobre-dato-label">Ciudades cubiertas</p>
      </div>
      <div class="sobre-dato">
        <span class="sobre-dato-num">8</span>
        <p class="sobre-dato-label">Clubes destacados</p>
      </div>
      <div class="sobre-dato">
        <span class="sobre-dato-num">1</span>
        <p class="sobre-dato-label">Solo lugar donde buscar</p>
      </div>
    </div>

    <div class="sobre-objetivo">
      <p class="sobre-objetivo-label">Objetivo del proyecto</p>
      <p>Brindar al usuario una forma rápida, clara y organizada de acceder a información sobre atracciones futbolísticas de distintas ciudades, facilitando la exploración y planificación de su visita. El fútbol también es turismo.</p>
    </div>

    <div class="sobre-dev-section">
      <p class="sobre-dev-label">Desarrollado por</p>
      <div class="dev-row">
        <div class="dev-avatar">MS</div>
        <div class="dev-info">
          <h4>Manuel Sznurewicz</h4>
          <p>Diseño de Imagen y Sonido — Universidad de Palermo · Legajo 0161930</p>
          <p style="margin-top:0.3rem;color:var(--verde)">Producción Digital I · 2026</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ═══ BOTTOM TAB BAR ═══ -->
<nav class="tab-bar">
  <div class="tab-bar-inner">
    <a class="tab-item" href="#" onclick="showPage('home');return false" id="tab-home">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M3 12l9-9 9 9"/><path d="M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9"/>
      </svg>
      Inicio
    </a>
    <a class="tab-item" href="#" onclick="showPage('ciudades');return false" id="tab-ciudades">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="10" r="3"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
      </svg>
      Ciudades
    </a>
    <a class="tab-item" href="#" onclick="showPage('experiencias');return false" id="tab-exp">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
      </svg>
      Exp.
    </a>
    <a class="tab-item" href="#" onclick="showPage('gastronomia');return false" id="tab-gastro">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M18 8h1a4 4 0 010 8h-1"/><path d="M2 8h16v9a4 4 0 01-4 4H6a4 4 0 01-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/>
      </svg>
      Gastro
    </a>
    <a class="tab-item" href="#" onclick="showPage('sobre');return false" id="tab-sobre">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>
      </svg>
      Proyecto
    </a>
  </div>
</nav>

<!-- ═══ GASTRONOMÍA ═══ -->
<div id="page-gastronomia" class="page">
  <div class="exp-hero">
    <h1 class="page-title">¡GASTRO<span>!</span></h1>
    <p class="home-sub">Comé como hincha local</p>
  </div>

  <!-- Filtro por ciudad -->
  <div style="display:flex;gap:0.5rem;flex-wrap:wrap;justify-content:center;padding:0 2rem 2rem;max-width:960px;margin:0 auto;">
    <button class="gastro-filter active" onclick="filterGastro('all')">Todos</button>
    <button class="gastro-filter" onclick="filterGastro('baires')">Buenos Aires</button>
    <button class="gastro-filter" onclick="filterGastro('barcelona')">Barcelona</button>
    <button class="gastro-filter" onclick="filterGastro('madrid')">Madrid</button>
    <button class="gastro-filter" onclick="filterGastro('london')">Londres</button>
    <button class="gastro-filter" onclick="filterGastro('roma')">Roma</button>


  </div>

  <div class="gastro-grid" id="gastro-grid">

    <!-- ── BUENOS AIRES ── -->
    <div class="gastro-card" data-ciudad="baires">
      <div class="gastro-card-img"><img src="img/BOCA-CANTINA.JPG" alt="Genovés"></div>
      <div class="gastro-card-header" style="background:linear-gradient(135deg,#003087,#FFD700)">
        <span class="gastro-club-tag">Boca Juniors</span>
        <h3 class="gastro-resto-name">Genovés</h3>
        <p class="gastro-resto-sub">📍 Brandsen 640, La Boca</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Bar y restaurante icónico a metros de La Bombonera. Punto de encuentro antes y después de los partidos.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Choripán xeneize</span><span>$3.500</span></li>
          <li><span>Empanadas de carne (x6)</span><span>$4.200</span></li>
          <li><span>Bondiola a la parrilla</span><span>$8.500</span></li>
          <li><span>Milanesa napolitana</span><span>$9.000</span></li>
          <li><span>Cerveza artesanal pinta</span><span>$2.800</span></li>
        </ul>
      </div>
    </div>

    <div class="gastro-card" data-ciudad="baires">
      <div class="gastro-card-img"><img src="img/BANDA-RIVER.png" alt="Banda"></div>
      <div class="gastro-card-header" style="background:linear-gradient(150deg,#cc0000,#ffffff22)">
        <span class="gastro-club-tag">River Plate</span>
        <h3 class="gastro-resto-name">Banda</h3>
        <p class="gastro-resto-sub">📍 Av. Figueroa Alcorta 7597, Núñez</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Es un restaurante exclusivo ubicado dentro del Estadio Más Monumental en la tribuna Centenario Media.Tiene una vista espectacular al campo de juego y ofrece platos de autor y tragos temáticos.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Asado de tira (500g)</span><span>$12.000</span></li>
          <li><span>Vacío a la parrilla</span><span>$11.500</span></li>
          <li><span>Provoleta</span><span>$4.500</span></li>
          <li><span>Morcilla y chorizo</span><span>$3.800</span></li>
          <li><span>Vino tinto copa</span><span>$2.500</span></li>
        </ul>
      </div>
    </div>

    <!-- ── BARCELONA ── -->
    <div class="gastro-card" data-ciudad="barcelona">
      <div class="gastro-card-img"><img src="img/BARCA-CAFE.png" alt="Barça Cafe"></div>
      <div class="gastro-card-header" style="background:linear-gradient(135deg,#a50044,#004d98)">
        <span class="gastro-club-tag">FC Barcelona</span>
        <h3 class="gastro-resto-name">Barça Cafe</h3>
        <p class="gastro-resto-sub">📍 Carrer de l'Arístides Maillol 12</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Restaurante oficial dentro del recinto del Camp Nou. Vista al campo de juego desde algunas mesas.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Pan con tomate y jamón</span><span>€9</span></li>
          <li><span>Patatas bravas</span><span>€7</span></li>
          <li><span>Croquetas de jamón (6u)</span><span>€10</span></li>
          <li><span>Bocadillo de butifarra</span><span>€8</span></li>
          <li><span>Caña de cerveza</span><span>€4</span></li>
        </ul>
      </div>
    </div>

    <!-- ── MADRID ── -->
    <div class="gastro-card" data-ciudad="madrid">
      <div class="gastro-card-img"><img src="img/PLAZA-MAHOU-MADRID.png" alt="Plaza Mahou"></div>
      <div class="gastro-card-header" style="background:linear-gradient(135deg,#1a1a1a,#C8A951)">
        <span class="gastro-club-tag">Real Madrid</span>
        <h3 class="gastro-resto-name">Plaza Mahou</h3>
        <p class="gastro-resto-sub">📍 Av. de Concha Espina, 1, Chamartín, 28036</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Plaza Mahou es la primera fábrica de cerveza ubicada dentro de un estadio deportivo en España. Es un amplio espacio de más de 1.000 metros cuadrados situado en el Estadio Santiago Bernabéu en Madrid. Combina gastronomía, cultura cervecera y fútbol.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Cochinillo asado</span><span>€28</span></li>
          <li><span>Chuletón de buey (600g)</span><span>€35</span></li>
          <li><span>Sopa castellana</span><span>€9</span></li>
          <li><span>Pimientos del piquillo</span><span>€8</span></li>
          <li><span>Rioja crianza (copa)</span><span>€6</span></li>
        </ul>
      </div>
    </div>

    <!-- ── LONDON ── -->
    <div class="gastro-card" data-ciudad="london">
      <div class="gastro-card-img"><img src="img/ARSENAL-BAR.png" alt="The Gunners Pub"></div>
      <div class="gastro-card-header" style="background:linear-gradient(135deg,#EF0107,#9C0000)">
        <span class="gastro-club-tag">Arsenal FC</span>
        <h3 class="gastro-resto-name">The Gunners Pub</h3>
        <p class="gastro-resto-sub">📍 Hornsey Rd, Holloway, Londres</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Pub clásico del norte de Londres frecuentado por los hinchas del Arsenal. Ambiente auténtico de matchday.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Fish & Chips</span><span>£14</span></li>
          <li><span>Beef burger con cheddar</span><span>£13</span></li>
          <li><span>Pie de carne y riñones</span><span>£12</span></li>
          <li><span>Full English Breakfast</span><span>£11</span></li>
          <li><span>Pinta de ale</span><span>£6</span></li>
        </ul>
      </div>
    </div>

    <div class="gastro-card" data-ciudad="london">
      <div class="gastro-card-img"><img src="img/CHELSEA-BAR.png" alt="The Shed End Bar"></div>
      <div class="gastro-card-header" style="background:linear-gradient(135deg,#034694,#DBA111)">
        <span class="gastro-club-tag">Chelsea FC</span>
        <h3 class="gastro-resto-name">The Shed End Bar</h3>
        <p class="gastro-resto-sub">📍 Fulham Rd, Fulham, Londres</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Bar oficial dentro de Stamford Bridge. Ideal para llegar temprano y vivir el ambiente previo al partido.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Sausage roll</span><span>£6</span></li>
          <li><span>Club sandwich</span><span>£12</span></li>
          <li><span>Nachos con queso</span><span>£9</span></li>
          <li><span>Brownie de chocolate</span><span>£5</span></li>
          <li><span>Lager pinta</span><span>£6</span></li>
        </ul>
      </div>
    </div>

    <!-- ── ROMA ── -->
    <div class="gastro-card" data-ciudad="roma">
      <div class="gastro-card-img"><img src="img/ROMA-BAR.png" alt="Trattoria dello Stadio"></div>
      <div class="gastro-card-header" style="background:linear-gradient(135deg,#8b0000,#ffd700)">
        <span class="gastro-club-tag">AS Roma / SS Lazio</span>
        <h3 class="gastro-resto-name">Trattoria dello Stadio</h3>
        <p class="gastro-resto-sub">📍 Viale dei Gladiatori 8, Roma</p>
      </div>
      <div class="gastro-body">
        <p class="gastro-desc">Trattoria romana clásica junto al Estadio Olímpico. Frecuentada por hinchas de la Roma y la Lazio por igual.</p>
        <div class="gastro-menu-title">Menú destacado</div>
        <ul class="gastro-menu">
          <li><span>Cacio e pepe</span><span>€13</span></li>
          <li><span>Carbonara alla romana</span><span>€14</span></li>
          <li><span>Supplì al telefono (4u)</span><span>€8</span></li>
          <li><span>Saltimbocca alla romana</span><span>€17</span></li>
          <li><span>Vino della casa (carafe)</span><span>€10</span></li>
        </ul>
      </div>
    </div>


  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<script>
// ════════════════════════════════════════
// DATA
// ════════════════════════════════════════
const ciudadesData = {
  baires: {
    nombre: 'Buenos Aires — Boca Juniors',
    pais: 'Argentina',
    subtitulo: 'La Bombonera: el estadio más intimidante del mundo',
    grad: 'linear-gradient(160deg, #003087 55%, #FFD700 55%)',
    tourTitulo: 'Tour La Bombonera',
    tourDesc: 'Recorrido por el estadio más famoso de Sudamérica. Incluye vestuarios, túnel de jugadores y el Museo de la Pasión Boquense.',
    tourHorario: 'Lunes a domingo, 10:00 a 18:00 hs',
    tourPrecio: '$8.000 — $15.000 ARS',
    partidoProximo: 'Boca Juniors vs River Plate',
    partidoFecha: 'Próximo Superclásico',
    partidoEntradas: 'Desde $20.000 ARS',
    estadioNombre: 'La Bombonera',
    estadioImg: 'ESTADIO-BOCA.png',
    estadioCapacidad: '54.000',
    estadioAnio: '1940',
    estadioCiudad: 'Brandsen 805, La Boca, CABA, Argentina',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7!2d-58.3645!3d-34.6353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a335631c1f69ef%3A0x9a9f8b9c0ef3b0d4!2sLa+Bombonera!5e0!3m2!1ses!2sar!4v1699999999999',
    clubs: [
      { sigla: 'CABJ', nombre: 'Boca Juniors', info: 'La Boca, CABA' },
      { sigla: 'INDI', nombre: 'Independiente', info: 'Avellaneda' },
      { sigla: 'RACE', nombre: 'Racing Club', info: 'Avellaneda' },
    ]
  },
  river: {
    nombre: 'Buenos Aires — River Plate',
    pais: 'Argentina',
    subtitulo: 'El Monumental: el estadio más grande de América',
    grad: 'linear-gradient(150deg, #ffffff 40%, #cc0000 40%, #cc0000 60%, #ffffff 60%)',
    tourTitulo: 'Tour El Monumental',
    tourDesc: 'Recorrido completo por el estadio más grande de Sudamérica. Incluye el Museo World Champions, vestuarios y el campo de juego.',
    tourHorario: 'Martes a domingo, 10:00 a 17:00 hs',
    tourPrecio: '$8.000 — $14.000 ARS',
    partidoProximo: 'River Plate vs Boca Juniors',
    partidoFecha: 'Próximo Superclásico',
    partidoEntradas: 'Desde $20.000 ARS',
    estadioNombre: 'Estadio Monumental',
    estadioImg: 'ESTADIO-RIVER.png',
    estadioCapacidad: '84.567',
    estadioAnio: '1938',
    estadioCiudad: 'Av. Figueroa Alcorta 7597, Núñez, CABA, Argentina',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.0!2d-58.4503!3d-34.5454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5d0f8b3b3c3%3A0x5c3e4d2a2f9b8e1d!2sEstadio+Monumental!5e0!3m2!1ses!2sar!4v1699999999999',
    clubs: [
      { sigla: 'CARP', nombre: 'River Plate', info: 'Núñez, CABA' },
      { sigla: 'INDI', nombre: 'Independiente', info: 'Avellaneda' },
      { sigla: 'RACE', nombre: 'Racing Club', info: 'Avellaneda' },
    ]
  },
  barcelona: {
    nombre: 'Barcelona',
    pais: 'España',
    subtitulo: 'La ciudad del Barça y el fútbol de tiqui-taca',
    grad: 'linear-gradient(135deg, #a50044 0%, #004d98 100%)',
    tourTitulo: 'Camp Nou Experience',
    tourDesc: 'Tour por el estadio más grande de Europa. Visita el museo, la sala de prensa, el terreno de juego y los vestuarios del FC Barcelona.',
    tourHorario: 'Abierto todos los días, 10:00 a 18:00 hs',
    tourPrecio: '29€ — 35€',
    partidoProximo: 'FC Barcelona vs Celta de Vigo',
    partidoFecha: 'Próxima jornada de La Liga',
    partidoEntradas: 'Desde 70€ a 150€',
    estadioNombre: 'Estadi Olímpic Lluís Companys',
    estadioImg: 'ESTADIO-BARCELONA.png',
    estadioCapacidad: '54.367',
    estadioAnio: '1927',
    estadioCiudad: 'Passeig Olímpic 17-19, Montjuïc, Barcelona, España',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.8!2d2.1492!3d41.3610!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a28f6e21c0f3%3A0x10b82c3688b2b30!2sCamp+Nou!5e0!3m2!1ses!2ses!4v1699999999999',
    clubs: [
      { sigla: 'FCB', nombre: 'FC Barcelona', info: 'Les Corts' },
      { sigla: 'ESPA', nombre: 'Espanyol', info: 'Cornellà' },
    ]
  },
  roma: {
    nombre: 'Roma',
    pais: 'Italia',
    subtitulo: 'La ciudad eterna con dos equipos eternamente rivales',
    grad: 'linear-gradient(135deg, #8b0000 0%, #ffd700 100%)',
    tourTitulo: 'Tour Estadio Olímpico',
    tourDesc: 'Recorrido por el Stadio Olimpico, casa de la AS Roma y la SS Lazio. Incluye acceso a las tribunas, sala de trofeos y área de calentamiento.',
    tourHorario: 'Martes a domingo, 10:00 a 17:00 hs',
    tourPrecio: '15€ — 25€',
    partidoProximo: 'AS Roma vs Napoli',
    partidoFecha: 'Serie A — Próxima fecha',
    partidoEntradas: 'Desde 30€ a 120€',
    estadioNombre: 'Stadio Olimpico',
    estadioImg: 'ESTADIO-ROMA.png',
    estadioCapacidad: '70.634',
    estadioAnio: '1953',
    estadioCiudad: 'Viale dei Gladiatori 2, Foro Italico, Roma, Italia',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.0!2d12.4545!3d41.9335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60612613e92f%3A0x85bf02a73de78d0a!2sStadio+Olimpico!5e0!3m2!1sit!2sit!4v1699999999999',
    clubs: [
      { sigla: 'ASR', nombre: 'AS Roma', info: 'Fondada en 1927' },
      { sigla: 'SSL', nombre: 'SS Lazio', info: 'Fundada en 1900' },
    ]
  },
  miami: {
    nombre: 'Miami',
    pais: 'Estados Unidos',
    subtitulo: 'La nueva capital del fútbol en Norteamérica',
    grad: 'linear-gradient(135deg, #ff007c 0%, #00b4d8 100%)',
    tourTitulo: 'Chase Stadium Tour',
    tourDesc: 'Tour por el estadio del Inter Miami CF, el club de Lionel Messi. Acceso al campo, vestuarios y tienda oficial del equipo.',
    tourHorario: 'Viernes a domingo, 11:00 a 17:00 hs',
    tourPrecio: '$25 — $45 USD',
    partidoProximo: 'Inter Miami vs LA Galaxy',
    partidoFecha: 'MLS — Próxima fecha',
    partidoEntradas: 'Desde $50 a $200 USD',
    estadioNombre: 'Chase Stadium',
    estadioImg: 'ESTADIO-MIAMI.png',
    estadioCapacidad: '21.550',
    estadioAnio: '2023',
    estadioCiudad: '1350 NW 55th St, Fort Lauderdale, FL 33309, Estados Unidos',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.0!2d-80.1494!3d26.1894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9ae10c8b8b3e5%3A0x1f7a42a2f1e2e3a4!2sChase+Stadium!5e0!3m2!1sen!2sus!4v1699999999999',
    clubs: [
      { sigla: 'IMC', nombre: 'Inter Miami CF', info: 'Fort Lauderdale, FL' },
    ]
  },
  madrid: {
    nombre: 'Madrid',
    pais: 'España',
    subtitulo: 'La capital del fútbol europeo',
    grad: 'linear-gradient(135deg, #ffffff15 0%, #1a1a1a 100%)',
    tourTitulo: 'Real Madrid Stadium Tour',
    tourDesc: 'Visita al Santiago Bernabéu. Incluye el museo con los trofeos, el terreno de juego y los vestuarios del club más laureado del mundo.',
    tourHorario: 'Lunes a domingo, 10:00 a 19:00 hs',
    tourPrecio: '25€ — 35€',
    partidoProximo: 'Real Madrid vs Atlético de Madrid',
    partidoFecha: 'Derbi madrileño — La Liga',
    partidoEntradas: 'Desde 80€ a 200€',
    estadioNombre: 'Santiago Bernabéu',
    estadioImg: 'ESTADIO-MADRID.png',
    estadioCapacidad: '83.186',
    estadioAnio: '1947',
    estadioCiudad: 'Av. de Concha Espina 1, Chamartín, Madrid, España',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.6!2d-3.6884!3d40.4531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42287330e61a21%3A0x3d9b3b16e6c3a4b0!2sSantiago+Bernab%C3%A9u!5e0!3m2!1ses!2ses!4v1699999999999',
    clubs: [
      { sigla: 'RMA', nombre: 'Real Madrid', info: 'Chamartín, Madrid' },
      { sigla: 'ATL', nombre: 'Atlético de Madrid', info: 'Wanda Metropolitano' },
    ]
  },
  london: {
    nombre: 'Londres — Arsenal FC',
    pais: 'Inglaterra',
    subtitulo: 'Emirates Stadium: la catedral del norte de Londres',
    grad: 'linear-gradient(135deg, #EF0107 0%, #9C0000 100%)',
    tourTitulo: 'Emirates Stadium Tour',
    tourDesc: 'Recorrido completo por el Emirates Stadium del Arsenal. Incluye el museo, los vestuarios, el banquillo y acceso al terreno de juego.',
    tourHorario: 'Martes a domingo, 10:00 a 18:00 hs',
    tourPrecio: '£25 — £40',
    partidoProximo: 'Arsenal vs Chelsea',
    partidoFecha: 'Premier League — Próxima fecha',
    partidoEntradas: 'Desde £50 a £150',
    estadioNombre: 'Emirates Stadium',
    estadioImg: 'ESTADIO-ARSENAL.png',
    estadioCapacidad: '60.704',
    estadioAnio: '2006',
    estadioCiudad: 'Hornsey Rd, Holloway, Londres N7 7AJ, Inglaterra',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.0!2d-0.1084!3d51.5549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b72b6b3fa63%3A0x6df3f9d67b18c6d!2sEmirates+Stadium!5e0!3m2!1sen!2sgb!4v1699999999999',
    clubs: [
      { sigla: 'AFC', nombre: 'Arsenal FC', info: 'Holloway, N. Londres' },
      { sigla: 'THFC', nombre: 'Tottenham', info: 'Haringey, N. Londres' },
    ]
  },
  chelsea: {
    nombre: 'Londres — Chelsea FC',
    pais: 'Inglaterra',
    subtitulo: 'Stamford Bridge: el fortín del oeste de Londres',
    grad: 'linear-gradient(135deg, #034694 0%, #DBA111 100%)',
    tourTitulo: 'Stamford Bridge Tour',
    tourDesc: 'Tour oficial del Chelsea FC por Stamford Bridge. Incluye el Chelsea Museum, los vestuarios históricos, el banquillo y el terreno de juego.',
    tourHorario: 'Lunes a domingo, 10:00 a 17:00 hs',
    tourPrecio: '£26 — £42',
    partidoProximo: 'Chelsea vs Arsenal',
    partidoFecha: 'Premier League — Próxima fecha',
    partidoEntradas: 'Desde £45 a £140',
    estadioNombre: 'Stamford Bridge',
    estadioImg: 'ESTADIO-CHELSEA.png',
    estadioCapacidad: '40.341',
    estadioAnio: '1877',
    estadioCiudad: 'Fulham Rd, Fulham, Londres SW6 1HS, Inglaterra',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5!2d-0.1910!3d51.4816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760f879d1a7b09%3A0x9f596e807cce3c0!2sStamford+Bridge!5e0!3m2!1sen!2sgb!4v1699999999999',
    clubs: [
      { sigla: 'CFC', nombre: 'Chelsea FC', info: 'Fulham, O. Londres' },
      { sigla: 'AFC', nombre: 'Arsenal FC', info: 'Holloway, N. Londres' },
    ]
  },
  rio: {
    nombre: 'Río de Janeiro',
    pais: 'Brasil',
    subtitulo: 'La ciudad del fútbol y el Maracaná',
    grad: 'linear-gradient(135deg, #cc0000 0%, #003d00 100%)',
    tourTitulo: 'Tour Maracaná',
    tourDesc: 'El estadio más famoso del mundo. Recorrido completo con acceso al campo, vestuarios históricos y el museo del fútbol brasileño.',
    tourHorario: 'Lunes a domingo, 09:00 a 17:00 hs',
    tourPrecio: 'R$70 — R$120',
    partidoProximo: 'Flamengo vs Fluminense',
    partidoFecha: 'Brasileirão — Clásico Fla-Flu',
    partidoEntradas: 'Desde R$80 a R$300',
    estadioNombre: 'Estádio do Maracanã',
    estadioImg: 'ESTADIO-FLAMENGO.png',
    estadioCapacidad: '78.838',
    estadioAnio: '1950',
    estadioCiudad: 'R. Prof. Eurico Rabelo s/n, Maracanã, Río de Janeiro, Brasil',
    mapaEmbed: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0!2d-43.2303!3d-22.9121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9982db2a9d6f8db5%3A0x4e8cfc3e8d1e2f0!2sMaracan%C3%A3!5e0!3m2!1spt!2sbr!4v1699999999999',
    clubs: [
      { sigla: 'FLA', nombre: 'Flamengo', info: 'Clube de Regatas' },
      { sigla: 'FLU', nombre: 'Fluminense', info: 'Las Laranjeiras' },
      { sigla: 'BOT', nombre: 'Botafogo', info: 'Estrela Solitária' },
    ]
  }
};

const gradMap = {
  baires: 'linear-gradient(135deg,#1a1a2e 0%,#0f3460 100%)',
  barcelona: 'linear-gradient(135deg,#a50044 0%,#004d98 100%)',
  roma: 'linear-gradient(135deg,#8b0000 0%,#ffd700 100%)',
  miami: 'linear-gradient(135deg,#ff007c 0%,#00b4d8 100%)',
  madrid: 'linear-gradient(135deg,#1a1a2e 0%,#444 100%)',
  london: 'linear-gradient(135deg,#1a1a2e 0%,#cc0000 100%)',
  rio: 'linear-gradient(135deg,#cc0000 0%,#003d00 100%)',
};

// ════════════════════════════════════════
// NAVIGATION
// ════════════════════════════════════════
function showPage(id) {
  document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
  const target = document.getElementById('page-' + id);
  if (target) target.classList.add('active');
  window.scrollTo(0, 0);
  // update tab bar
  document.querySelectorAll('.tab-item').forEach(t => t.classList.remove('active'));
  const tabMap = { home: 'tab-home', ciudades: 'tab-ciudades', experiencias: 'tab-exp', gastronomia: 'tab-gastro', sobre: 'tab-sobre' };
  if (tabMap[id]) document.getElementById(tabMap[id]).classList.add('active');
}

function showCiudad(slug) {
  const data = ciudadesData[slug];
  if (!data) return;

  // Hero
  document.getElementById('ciudad-hero-tag').textContent = 'TURISMO FUTBOLERO — ' + data.pais.toUpperCase();
  document.getElementById('ciudad-hero-title').textContent = '¡' + data.nombre.toUpperCase() + '!';
  document.getElementById('ciudad-hero-sub').textContent = data.subtitulo;
  document.getElementById('ciudad-hero-bg').style.cssText = '';
  document.getElementById('ciudad-hero-bg').innerHTML = data.estadioImg
    ? `<img src="img/${data.estadioImg}" style="width:100%;height:100%;object-fit:cover;display:block;filter:blur(4px) brightness(0.35);transform:scale(1.05);">`
    : `<div style="width:100%;height:100%;background:${data.grad}"></div>`;

  // Info blocks
  document.getElementById('ciudad-info-blocks').innerHTML = `
    <div class="info-block">
      <p class="info-block-label">🎟 Tours del estadio</p>
      <h3 class="info-block-title">${data.tourTitulo}</h3>
      <p class="info-block-desc">${data.tourDesc}</p>
      <p class="info-block-desc" style="margin-top:0.5rem"><strong style="color:var(--blanco)">Horario:</strong> ${data.tourHorario}</p>
      <p class="info-block-price">${data.tourPrecio}</p>
      <button class="cta-btn" onclick="showToast('¡Redirigiendo a compra de tour!')">Comprar entradas</button>
    </div>
    <div class="info-block">
      <p class="info-block-label">⚽ Próximo partido</p>
      <h3 class="info-block-title" style="font-size:1.4rem">${data.partidoProximo}</h3>
      <p class="info-block-desc">${data.partidoFecha}</p>
      <p class="info-block-price">${data.partidoEntradas}</p>
      <button class="cta-btn" onclick="showToast('¡Redirigiendo a entradas del partido!')">Entradas aquí</button>
      <button class="cta-btn outline" style="margin-left:0.5rem" onclick="showToast('¡Próximos partidos cargados!')">Ver calendario</button>
    </div>
  `;

  // Clubs
  document.getElementById('ciudad-clubs-nombre').textContent = data.nombre;
  document.getElementById('ciudad-clubs-grid').innerHTML = data.clubs.map(c => `
    <div class="ciudad-club-card" onclick="showToast('${c.nombre} — ${c.info}')">
      <div class="club-mini-shield">
        <div class="shield-bg"></div>
        <div class="shield-fallback">${c.sigla}</div>
      </div>
      <div class="ciudad-club-info">
        <h4>${c.nombre}</h4>
        <p>${c.info}</p>
      </div>
    </div>
  `).join('');

  // Estadio
  document.getElementById('ciudad-estadio-titulo').innerHTML = 'El Estadio — <span style="color:var(--verde)">${data.estadioNombre}</span>';
  document.getElementById('ciudad-estadio-titulo').innerHTML = `El Estadio — <span style="color:var(--verde)">${data.estadioNombre}</span>`;
  document.getElementById('estadio-img-fallback').style.cssText = '';
  if (data.estadioImg) {
    document.getElementById('estadio-img-fallback').innerHTML = `<img src="img/${data.estadioImg}" alt="${data.estadioNombre}" style="width:100%;height:100%;object-fit:cover;display:block;">`;
  } else {
    document.getElementById('estadio-img-fallback').style.cssText = 'width:100%;height:100%;background:' + data.grad + ';display:flex;align-items:center;justify-content:center;';
    document.getElementById('estadio-img-fallback').innerHTML = `<span style="font-family:var(--font-display);font-size:clamp(1.5rem,4vw,3rem);letter-spacing:4px;color:rgba(255,255,255,0.12)">${data.estadioNombre.toUpperCase()}</span>`;
  }
  document.getElementById('estadio-datos').innerHTML = `
    <div class="estadio-dato">
      <p class="estadio-dato-label">Nombre</p>
      <div class="estadio-dato-val" style="font-size:1rem">${data.estadioNombre}</div>
    </div>
    <div class="estadio-dato">
      <p class="estadio-dato-label">Capacidad</p>
      <div class="estadio-dato-val">${data.estadioCapacidad}</div>
    </div>
    <div class="estadio-dato">
      <p class="estadio-dato-label">Año de apertura</p>
      <div class="estadio-dato-val">${data.estadioAnio}</div>
    </div>
    <div class="estadio-dato">
      <p class="estadio-dato-label">Ubicación</p>
      <div class="estadio-dato-val" style="font-size:0.9rem">${data.estadioCiudad}</div>
    </div>
  `;

  // Mapa


  showPage('ciudad');
}

// ════════════════════════════════════════
// SEARCH
// ════════════════════════════════════════
const searchIndex = [
  { label: 'Buenos Aires', type: 'Ciudad', action: () => showCiudad('baires') },
  { label: 'Barcelona', type: 'Ciudad', action: () => showCiudad('barcelona') },
  { label: 'Roma', type: 'Ciudad', action: () => showCiudad('roma') },
  { label: 'Miami', type: 'Ciudad', action: () => showCiudad('miami') },
  { label: 'Madrid', type: 'Ciudad', action: () => showCiudad('madrid') },
  { label: 'Londres', type: 'Ciudad', action: () => showCiudad('london') },
  { label: 'Río de Janeiro', type: 'Ciudad', action: () => showCiudad('rio') },
  { label: 'Boca Juniors', type: 'Club', action: () => showCiudad('baires') },
  { label: 'River Plate', type: 'Club', action: () => showCiudad('river') },
  { label: 'Independiente', type: 'Club', action: () => showCiudad('baires') },
  { label: 'Racing Club', type: 'Club', action: () => showCiudad('baires') },
  { label: 'FC Barcelona', type: 'Club', action: () => showCiudad('barcelona') },
  { label: 'Real Madrid', type: 'Club', action: () => showCiudad('madrid') },
  { label: 'Atlético de Madrid', type: 'Club', action: () => showCiudad('madrid') },
  { label: 'Arsenal', type: 'Club', action: () => showCiudad('london') },
  { label: 'Chelsea', type: 'Club', action: () => showCiudad('chelsea') },
  { label: 'Tottenham', type: 'Club', action: () => showCiudad('london') },
  { label: 'Flamengo', type: 'Club', action: () => showCiudad('rio') },
  { label: 'Fluminense', type: 'Club', action: () => showCiudad('rio') },
  { label: 'Inter Miami', type: 'Club', action: () => showCiudad('miami') },
  { label: 'La Bombonera', type: 'Estadio', action: () => showCiudad('baires') },
  { label: 'Estadio Monumental', type: 'Estadio', action: () => showCiudad('river') },
  { label: 'Stamford Bridge', type: 'Estadio', action: () => showCiudad('chelsea') },
  { label: 'Camp Nou', type: 'Estadio', action: () => showCiudad('barcelona') },
  { label: 'Santiago Bernabéu', type: 'Estadio', action: () => showCiudad('madrid') },
  { label: 'Maracaná', type: 'Estadio', action: () => showCiudad('rio') },
  { label: 'Emirates Stadium', type: 'Estadio', action: () => showCiudad('london') },
  { label: 'Chase Stadium', type: 'Estadio', action: () => showCiudad('miami') },
  { label: 'Stadio Olimpico', type: 'Estadio', action: () => showCiudad('roma') },
];

let searchActions = [];

function handleSearch(val) {
  const q = val.trim().toLowerCase();
  const resultsEl = document.getElementById('search-results');
  if (!q) { resultsEl.classList.remove('visible'); resultsEl.innerHTML = ''; return; }
  const matches = searchIndex.filter(item => item.label.toLowerCase().includes(q)).slice(0, 6);
  if (!matches.length) { resultsEl.classList.remove('visible'); return; }
  searchActions = matches;
  resultsEl.innerHTML = matches.map((m, i) => `
    <div class="search-result-item" onclick="pickSearchResult(${i})">
      <span class="result-tag">${m.type}</span>
      <span>${m.label}</span>
    </div>
  `).join('');
  resultsEl.classList.add('visible');
}

function pickSearchResult(i) {
  document.getElementById('search-results').classList.remove('visible');
  document.getElementById('search-input').value = searchActions[i].label;
  searchActions[i].action();
}

function doSearch() {
  const val = document.getElementById('search-input').value.trim().toLowerCase();
  if (!val) return;
  const match = searchIndex.find(item => item.label.toLowerCase().includes(val));
  if (match) { match.action(); document.getElementById('search-results').classList.remove('visible'); }
  else showToast('No se encontraron resultados');
}

// ════════════════════════════════════════
// HAMBURGER
// ════════════════════════════════════════
function toggleMenu() {
  document.getElementById('mobile-menu').classList.toggle('open');
}
function closeMenu() {
  document.getElementById('mobile-menu').classList.remove('open');
}

// ════════════════════════════════════════
// STARS FORM
// ════════════════════════════════════════
let selectedStars = 0;
function setStar(n) {
  selectedStars = n;
  document.querySelectorAll('.star-btn').forEach((btn, i) => {
    btn.classList.toggle('active', i < n);
  });
}

function submitForm() {
  const nombre = document.getElementById('form-nombre').value.trim();
  const ciudad = document.getElementById('form-ciudad').value;
  const exp = document.getElementById('form-exp').value.trim();
  if (!nombre || !ciudad || !exp || !selectedStars) {
    showToast('Completá todos los campos antes de enviar');
    return;
  }
  document.getElementById('form-success').style.display = 'block';
  document.getElementById('form-nombre').value = '';
  document.getElementById('form-ciudad').value = '';
  document.getElementById('form-exp').value = '';
  setStar(0);
  setTimeout(() => { document.getElementById('form-success').style.display = 'none'; }, 4000);
}

// ════════════════════════════════════════
// TOAST
// ════════════════════════════════════════
let toastTimer;
function showToast(msg) {
  const t = document.getElementById('toast');
  t.textContent = msg;
  t.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => t.classList.remove('show'), 2800);
}

// ════════════════════════════════════════
// GASTRO FILTER
// ════════════════════════════════════════
function filterGastro(ciudad) {
  document.querySelectorAll('.gastro-filter').forEach(btn => btn.classList.remove('active'));
  event.target.classList.add('active');
  document.querySelectorAll('.gastro-card').forEach(card => {
    if (ciudad === 'all' || card.dataset.ciudad === ciudad) {
      card.classList.remove('hidden');
    } else {
      card.classList.add('hidden');
    }
  });
}
document.addEventListener('click', e => {
  if (!e.target.closest('.search-bar') && !e.target.closest('.search-results')) {
    document.getElementById('search-results').classList.remove('visible');
  }
});

// Enter key on search
document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('search-input').addEventListener('keydown', e => {
    if (e.key === 'Enter') doSearch();
  });
});
</script>
</body>
</html>
