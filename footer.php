<footer>
    <div class="overlay" id="iframeOverlay">
        <div class="iframe-container">
            <button class="close-button" onclick="closeIframe()">X</button>
            <iframe id="iframeContent" src="" allowfullscreen></iframe>
        </div>
    </div>
    <div class="overlay-img" id="iframeOverlay-img">
        <div class="iframe-container-img">
            <button class="close-button-img" onclick="closeIframeImg()">X</button>
            <img id="iframeContent-img" src="">
        </div>
    </div>
    <div class="rodape">
        <div class="contatos-slider">
            <div class="contatos-tracker">
                <section class="mail-tel">
                    <div class="slide-item">
                        <p class="linha-1">
                            Secretaria de Estado de Desenvolvimento Econômico, Ciência, Tecnologia e Inovação
                        </p>
                    </div>
                </section>

                <section class="end-hor">
                    <div class="slide-item">
                        <p class="linha-1">
                            Desenvolvido pela Secretaria Executiva de Planejamento – SEPLAN/SEDECTI-AM
                        </p>
                        <p class="linha-2">
                            Todos os Direitos Reservados © 2024–2026
                        </p>
                    </div>
                </section>

            </div>
        </div>


        <section>
            <div class="topback">
                <button class="back-to-top">
                    <h2>Voltar ao topo <span class="material-symbols-outlined">keyboard_double_arrow_up</span></h2>
                </button>
            </div>
        </section>
    </div>

</footer>

<?php wp_footer(); ?>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const track = document.querySelector(".contatos-tracker");
        if (!track) return;

        let index = 0;
        let interval = null;
        const SLIDE_TIME = 5000;

        function goToSlide(i) {
            track.style.transform = `translateX(-${i * 50}%)`;
        }

        function startSlider() {
            interval = setInterval(() => {
                index = index === 0 ? 1 : 0;
                goToSlide(index);
            }, SLIDE_TIME);
        }

        function stopSlider() {
            clearInterval(interval);
            interval = null;
        }

        startSlider();
        track.addEventListener("mouseenter", stopSlider);
        track.addEventListener("mouseleave", () => {
            if (!interval) startSlider();
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    // Implementando evento para pesquisa (desktop)

    const searchBar = document.querySelector('.search-bar');
    const searchBtn = document.querySelector('.search');
    const input = document.querySelector('.input-value');

    searchBtn.addEventListener('click', () => {
        searchBar.classList.add('active');
    })


    // closeBtn.addEventListener('click', () => {
    //     searchBar.classList.remove('active');
    //     input.value = '';
    // })

    document.addEventListener('click', (evento) => {
        if (!searchBar.contains(evento.target) && !searchBtn.contains(evento.target) && !input.contains(evento.target)) {
            searchBar.classList.remove('active');
            input.value = '';
        }
    });
</script>
<script>
    document.querySelector(".mobileBtn").addEventListener("click", function () {
        document.querySelector(".menu-mobile").classList.toggle("active");
    });
</script>
<script>
    $('.slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 4000,
        prevArrow: $('.previous'),
        nextArrow: $('.next'),
    });

    $('.produtos').slick({
        dots: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        speed: 1000,
        prevArrow: $('.previous-card'),
        nextArrow: $('.next-card'),
        responsive: [
            {
                breakpoint: 1624,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 850,
                settings: {
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
    });
    $('.sobre-estrategia-card').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        speed: 1000,
        autoplaySpeed: 4000,
        prevArrow: $('.serv-prev'),
        nextArrow: $('.serv-next'),
        responsive: [
            {
                breakpoint: 1624,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 850,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
    });


</script>
<script>
    $('.menu-mobile span').click(function () {
        $('.menu-mobile').find('ul');
    })

    const backToTopButton = document.querySelector(".back-to-top");

    window.onscroll = () => {
        backToTopButton.style.display = window.scrollY > 200 ? "block" : "none";
    };

    backToTopButton.onclick = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };
</script>
<script>
    document.querySelectorAll('.demais-equipe').forEach(button => {
        button.addEventListener('click', () => {
            const integrantesEquipe = button.previousElementSibling;
            const isActive = integrantesEquipe.classList.contains('active');

            // Alterna a classe 'active' no bloco de informações
            if (isActive) {
                integrantesEquipe.classList.remove('active');
                button.querySelector('p').textContent = "Veja Mais";
                button.querySelector('span').textContent = "keyboard_arrow_down";
            } else {
                integrantesEquipe.classList.add('active');
                button.querySelector('p').textContent = "Ocultar";
                button.querySelector('span').textContent = "keyboard_arrow_up";
            }
        });
    });

</script>
<script>
    //Script para ativação do menu na página atual de navegação
    document.addEventListener('DOMContentLoaded', () => {
        const currentUrl = window.location.href;

        const menuLinks = document.querySelectorAll('.navegador a');

        menuLinks.forEach(link => {
            if (link.href === currentUrl) {
                link.querySelector('.navegador li').classList.add('active');
            }
        });
    });

</script>
<script>
    // Obtém o botão e a lista do anterior
    const openBalancaBtn = document.querySelector('.balanca-button button');
    const linksAnos = document.querySelector('.balanca-button-ano');

    openBalancaBtn.addEventListener('click', () => {
        linksAnos.classList.toggle('active');
    });
</script>
<script>
    document.querySelectorAll('.contato-perguntas-titulo').forEach(titulo => {
        // Encontrar as setas e as respostas associadas a este título
        const arrows = titulo.querySelectorAll('span');
        const respostas = titulo.nextElementSibling;

        // Adicionar o evento de clique para cada título
        titulo.addEventListener('click', () => {
            const isActive = arrows[0].classList.contains('active');

            // Se as setas estão ativas, desative-as e esconda as respostas
            if (isActive) {
                arrows.forEach(element => element.classList.remove('active'));
                respostas.classList.remove('active');
            } else {

                arrows.forEach(element => element.classList.add('active'));
                respostas.classList.add('active');
            }
        });
    });

</script>
<script>
    // Função para mostrar o iframe com a URL fornecida
    function openIframe(url) {
        var iframe = document.getElementById('iframeContent');
        iframe.src = url;
        document.getElementById('iframeOverlay').style.display = 'flex';
    }

    // Função para fechar o iframe
    function closeIframe() {
        document.getElementById('iframeOverlay').style.display = 'none';
    }

    // Adiciona evento de clique aos links com a classe 'openIframeLink'
    document.querySelectorAll('.openIframeLink').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Impede a navegação padrão do link
            openIframe(this.href); // Passa o href do link para a função openIframe
        });
    });
</script>
<script>
    // Função para mostrar o iframe com a URL fornecida
    function openIframeImg(url) {
        var iframe = document.getElementById('iframeContent-img');
        iframe.src = url;
        document.getElementById('iframeOverlay-img').style.display = 'flex';
    }

    // Função para fechar o iframe
    function closeIframeImg() {
        document.getElementById('iframeOverlay-img').style.display = 'none';
    }

    // Adiciona evento de clique aos links com a classe 'openIframeLink'
    document.querySelectorAll('.openIframeLink-img').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Impede a navegação padrão do link
            openIframeImg(this.href); // Passa o href do link para a função openIframe
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.ppa-single-sidebar nav ul li');
        const sections = document.querySelectorAll('.ppa-single-content');

        function clearActiveStates() {
            menuItems.forEach(item => item.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));
        }

        function setActive(menuItem, section) {
            menuItem.classList.add('active');
            section.classList.add('active');
        }

        // Inicializa a primeira opção do menu e a primeira seção como ativa
        if (menuItems.length > 0 && sections.length > 0) {
            setActive(menuItems[0], sections[0]);
        }

        menuItems.forEach(item => {
            item.addEventListener('click', (event) => {
                event.preventDefault(); // Evita o comportamento padrão de navegação
                clearActiveStates();

                // Ativa o item de menu clicado
                item.classList.add('active');

                // Ativa a seção correspondente
                const targetId = item.id;
                const targetSection = document.querySelector(`.${targetId}`);
                if (targetSection) {
                    targetSection.classList.add('active');
                }
            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const selectElement = document.querySelectorAll('.content-btn select');
        const iframeElement = document.getElementById('iframeContent');
        const overlayElement = document.getElementById('iframeOverlay');

        // Função para exibir o overlay e carregar o iframe
        function showIframe(url) {
            if (url) {
                iframeElement.src = url; // Atualiza o src do iframe
                overlayElement.style.display = 'flex'; // Exibe o overlay
            }
        }

        // Função para fechar o overlay
        window.closeIframe = function () {
            overlayElement.style.display = 'none'; // Oculta o overlay
            iframeElement.src = ''; // Limpa o src do iframe
            selectElement.forEach(select => {
                select.selectedIndex = 0;
            });
        }

        // Adiciona o evento de mudança ao select
        selectElement.forEach(select => {
            select.addEventListener('change', (event) => {
                const selectedValue = event.target.value;
                showIframe(selectedValue); // Exibe o overlay com o iframe

            });
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selects = document.querySelectorAll('select');

        selects.forEach(select => {
            select.addEventListener('change', function () {
                const selectedOption = this.options[this.selectedIndex];

                if (selectedOption.value) {
                    window.open(selectedOption.value, '_blank');
                }
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".BlockBtn");

        buttons.forEach(button => {
            button.style.cursor = "no-drop";
            button.addEventListener("click", function (event) {
                event.preventDefault();
                event.stopPropagation();
            });
        });
    });

</script>



</body>

</html>