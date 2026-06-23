<?php

// =====================
// WORDPRESS CORE MOCKS
// =====================

if (!function_exists('wp_head')) {
    function wp_head() {}
}

if (!function_exists('wp_footer')) {
    function wp_footer() {}
}

if (!function_exists('get_the_title')) {
    function get_the_title() {
        return 'GeoMapas';
    }
}

if (!function_exists('add_filter')) {
    function add_filter($hook, $callback) {
        if ($hook === 'get_search_form') {
            $GLOBALS['search_filter'] = $callback;
        }
    }
}

if (!function_exists('get_search_form')) {
    function get_search_form() {

        $form = '<form><input type="text" placeholder="Pesquisar..."></form>';

        if (isset($GLOBALS['search_filter'])) {
            $form = call_user_func($GLOBALS['search_filter'], $form);
        }

        echo $form;
    }
}

if (!function_exists('the_field')) {
    function the_field($field) {

        $dados = [
            'am_mapas_banner_imagem' => 'https://portaldoplanejamento.am.gov.br/wp-content/uploads/2024/09/Banner-3.png',
            'geoportal_titulo' => 'GeoMapas Teste',
            'geoportal_descricao' => 'Descrição de teste',
            'titulo' => 'Eixos Temáticos',
            'descricao' => 'Descrição dos eixos temáticos',
            'imagem_1' => 'https://picsum.photos/400/300?1',
            'imagem_2' => 'https://picsum.photos/400/300?2',
            'imagem_3' => 'https://picsum.photos/400/300?3',
            'imagem_4' => 'https://picsum.photos/400/300?4',
            'nome_eixo_1' => 'Economia',
            'nome_eixo_2' => 'Demografia',
            'nome_eixo_3' => 'Meio Ambiente',
            'nome_eixo_4' => 'Social',
        ];

        echo $dados[$field] ?? '';
    }
}

if (!function_exists('get_theme_root_uri')) {
    function get_theme_root_uri() {
        return 'https://planejamento.blog/portal/wp-content/themes';
    }
}


if (!function_exists('get_header')) {
    function get_header() {
        include __DIR__ . '/header.php';
    }
}

if (!function_exists('get_footer')) {
    function get_footer() {
        include __DIR__ . '/footer.php';
    }
}