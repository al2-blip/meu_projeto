// Função para validar e enviar o formulário
function validarFormulario(event) {
    event.preventDefault(); // Impede o envio do formulário

    // Coletar valores dos campos
    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensagem = document.getElementById('mensagem').value.trim();

    // Validar os campos
    if (nome === '' || email === '' || mensagem === '') {
        alert('Por favor, preencha todos os campos.');
        return;
    }

    // Exibir mensagem de sucesso (para fins de demonstração)
    alert('Obrigado, ' + nome + '! Sua mensagem foi enviada.');

    // Aqui, você pode adicionar lógica para enviar o formulário, se necessário
}

// Adiciona o evento de envio ao formulário
document.querySelector('form').addEventListener('submit', validarFormulario);

// Lógica do Slideshow
let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");

    // Esconder todos os slides
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1; // Reseta o índice se passar do total de slides
    }

    slides[slideIndex - 1].style.display = "block"; // Mostra o slide atual
    setTimeout(showSlides, 5000); // Muda a imagem a cada 5 segundos
}

function plusSlides(n) {
    slideIndex += n - 1; // Ajuste do índice
    showSlides();
}
