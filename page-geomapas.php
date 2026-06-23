<?php //Template Name: GEOMAPAS ?>

<?php get_header();?>
  <main>
    <section class="am-mapas-banner" style="background: url(<?php the_field("am_mapas_banner_imagem"); ?>)">
      <div class="am-mapas-banner-texto">
        <h1>GeoMapas</h1>
      </div>
      <img src="<?php echo get_theme_root_uri(); ?>/PortalPlanejamento/img/am-mapas/ondulacao1.png" alt="">
    </section>
    <section class="am-mapas-descricao">
      <div class="back-button whiteBtn">
        <a href="produtos">
          <span class="material-symbols-outlined">chevron_left</span>
          <h2>PRODUTOS</h2>
        </a>
      </div>
      <h1><?php the_field("geoportal_titulo"); ?></h1>
      <p>
        <?php the_field("geoportal_descricao"); ?>
      </p>
    </section>
    <div class="geoportal-main-content">
      <div id="particles-js"></div>
      <div class="geoportal-content-wrapper">
        <div class="geoportal-themes">
          <h1><?php the_field('titulo'); ?></h1>
          <h2><?php the_field('descricao'); ?></h2>
          <div id="card-area">
            <div class="geoportal-wrapper1">
              <div class="geoportal-box-area">
                <div class="geoportal-box" onclick="window.location.href='//planejamento.site/portal/geoprocessamento-economia/';" style="cursor: pointer;">
                  <img src="<?php the_field('imagem_1'); ?>" alt="">
                  <div class="geoportal-overlay">
                    <h3><?php the_field('nome_eixo_1'); ?></h3>
                  </div>
                </div>
                <div class="geoportal-box" onclick="window.location.href='//planejamento.site/portal/geoprocessamento-demografia/';" style="cursor: pointer;">
                  <img src="<?php the_field('imagem_2'); ?>" alt="">
                    <div class="geoportal-overlay">
                      <h3><?php the_field('nome_eixo_2'); ?></h3>
                    </div>
                </div>
                <div class="geoportal-box" onclick="window.location.href='//planejamento.site/portal/geoprocessamento-meio-ambiente/';" style="cursor: pointer;">
                  <img src="<?php the_field('imagem_3'); ?>" alt="">
                    <div class="geoportal-overlay">
                      <h3><?php the_field('nome_eixo_3'); ?></h3>
                    </div>
                </div>
                <div class="geoportal-box" onclick="window.location.href='//planejamento.site/portal/geoprocessamento-social/';" style="cursor: pointer;">
                  <img src="<?php the_field('imagem_4'); ?>" alt="">
                    <div class="geoportal-overlay">
                      <h3><?php the_field('nome_eixo_4'); ?></h3>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  particlesJS('particles-js', {
    "particles": {
      "number": { "value": 80, "density": { "enable": true, "value_area": 800 } },
      "color": { "value": "#ffffff" },
      "shape": { "type": "circle" },
      "opacity": { "value": 0.5 },
      "size": { "value": 3, "random": true },
      "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1 },
      "move": { "enable": true, "speed": 6, "direction": "none", "out_mode": "out" }
    },
    "interactivity": {
      "detect_on": "canvas",
      "events": {
        "onhover": { "enable": true, "mode": "repulse" },
        "onclick": { "enable": true, "mode": "push" },
        "resize": true
      }
    },
    "retina_detect": true
  });
</script>

<?php get_footer(); ?>