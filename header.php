<!DOCTYPE html>
<html>

<head>
    <?php
    wp_head();?>
	<?php
	$title = get_the_title();
	if($title == ''){
		$title = 'Home';
	}
	?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Portal do Planejamento </title>
    <link rel="stylesheet" href="https://use.typekit.net/oto7nky.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/PortalPlanejamento/style.css">
    <link rel="shortcut icon" href="<?php echo get_theme_root_uri(); ?>/PortalPlanejamento/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <section class="nav center">
            <div class="mobileBtn">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <div class="w25 logo">
                <img src="<?php echo get_theme_root_uri(); ?>/PortalPlanejamento/img/brasao-am.png" alt="">
                <a href="home">
                    <h1>PORTAL DO PLANEJAMENTO</h1>
                    <h2>AMAZONAS</h2>
                </a>
            </div>
            <div class="w50 navegador menu-desktop">
                <nav>
                    <ul>
                        <a href="https://planejamento.site/portal/">
                            <li class="nav-button">INÍCIO</li>
                        </a>
                        <a href="https://planejamento.site/portal/sobre/">
                            <li class="nav-button">SOBRE</li>
                        </a>
                        <a href="https://planejamento.site/portal/produtos/">
                            <li class="nav-button">PRODUTOS</li>
                        </a>
                        <a href="https://planejamento.site/portal/sistemas/">
                            <li class="nav-button">SISTEMAS</li>
                        </a>
                        <a href="https://planejamento.site/portal/contato/">
                            <li class="nav-button">CONTATO</li>
                        </a>
                        <a href="https://planejamento.site/portal/noticias/">
                            <li class="nav-button">NOTÍCIAS</li>
                        </a>
                        <li class="nav-button act-wrapper">
                            <a href="https://projeto.dadosabertos.online">
                                ProgIDA
                                <span class="act-tooltip">Programa de Institucionalização de Dados Abertos</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <?php
            add_filter('get_search_form', function($form){
                return str_replace(
                    '<input type="text"',
                    '<input type="text" placeholder="Pesquisar..."',
                    $form
                );
            });
            get_search_form();
            ?>
            <div class="menu-mobile">
                <nav>
                    <ul>
                        <a href="https://planejamento.site/portal">
                            <li class="nav-button">INÍCIO</li>
                        </a>
                        <a href="https://planejamento.site/portal/sobre/">
                            <li class="nav-button">SOBRE</li>
                        </a>
                        <a href="https://planejamento.site/portal/produtos/">
                            <li class="nav-button">PRODUTOS</li>
                        </a>
                        <a href="https://planejamento.site/portal/sistemas/">
                            <li class="nav-button">SISTEMAS</li>
                        </a>
                        <a href="https://planejamento.site/portal/contato/">
                            <li class="nav-button">CONTATO</li>
                        </a>
        				<li class="nav-button act-wrapper">
                            <a href="https://projeto.dadosabertos.online">
                                ProgIDA
                                <span class="act-tooltip">Programa de Institucionalização de Dados Abertos</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </header>