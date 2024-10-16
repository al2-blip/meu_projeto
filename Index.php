<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Turismo</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Estilos do Slideshow */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
            width: 100%;
        }

        /* Botões anterior/próximo */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            user-select: none;
        }

        .next {
            right: 0;
        }

        /* Texto de descrição da imagem */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
        }

    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <header>
        <h1>BEM-VINDO AO GUIA DE TURISMO BAGO VERMELHO EXPRESS</h1>
        <nav>
            <ul>
                <li><a href="#destinos">Destinos</a></li>
                <li><a href="#sobre-nos">Sobre Nós</a></li>
                <li><a href="contato.html">Contato</a></li> <!-- Link para a página de Contato -->
                <li><a href="gastronomia.html">Gastronomia de Angola!</a></li> <!-- Link para Gastronomia -->
            </ul>
        </nav>
    </header>

    <!-- Seção de Destaques -->
    <section id="destinos">
        <h2>Destinos Populares</h2>
        <div class="slideshow-container">
            <!-- Slide 1 -->
            <div class="mySlides fade">
                <img src="imagens/LARGO.JPG.jpg" alt="Praias do Uíge">
                <div class="text">Largo do Uíge</div>
            </div>

            <!-- Slide 2 -->
            <div class="mySlides fade">
                <img src="imagens/elefantes.JPG.jpg" alt="Elefantes no Kissama">
                <div class="text">Elefantes no Parque Nacional da Kissama</div>
            </div>

            <!-- Slide 3 -->
            <div class="mySlides fade">
                <img src="imagens/REI.JPG.jpg" alt="Quedas de água de Malanje">
                <div class="text">Quedas de Água em Malanje</div>
            </div>

            <!-- Slide 4 -->
            <div class="mySlides fade">
                <img src="imagens/LAGOA.JPG.jpg" alt="Praias de Angola">
                <div class="text">Praias de Angola</div>
            </div>
            
            <!-- Botões de navegação -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- Descrições dos destinos -->
        <div>
            <h3>Belezas do Uíge</h3>
            <p>Descubra as belas e deslumbrantes paisagens turísticas no Uíge, ideais para relaxar.</p>
        </div>
        <div>
            <h3>Montanhas de Malanje</h3>
            <p>Explore as montanhas e suas vistas incríveis em Malanje.</p>
        </div>
        <div>
            <h3>Parque Nacional da Kissama</h3>
            <p>Um paraíso de vida selvagem para os amantes da natureza e safaris.</p>
        </div>
    </section>

    <!-- Seção Sobre Nós -->
    <section id="sobre-nos">
        <h2>Sobre Nós</h2>
        <p>Somos uma equipe apaixonada por turismo, dedicados a mostrar o melhor que Angola tem a oferecer.</p>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Guia de Turismo. Todos os direitos reservados.</p>
    </footer>

    <!-- Script JavaScript para o Slideshow -->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let slides = document.getElementsByClassName("mySlides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Muda a imagem a cada 3 segundos
        }

        function plusSlides(n) {
            slideIndex += n - 1;
            showSlides();
        }
    </script>

</body>
</html>
