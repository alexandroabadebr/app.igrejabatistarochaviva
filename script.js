function showPopup(imageSrc) {
    var popup = document.getElementById('popup');
    var popupImage = document.getElementById('popupImage');
    popupImage.src = imageSrc;
    popup.style.display = 'block';
}

function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
}


// Contact Form

document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;

    // Enviar dados para o servidor usando AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'api/saveData.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Exibir mensagem de sucesso para o usuário
            alert('Dados enviados com sucesso!');
            // Limpar o formulário após o envio
            document.getElementById('contactForm').reset();
        }
    };
    // Enviar os dados como parâmetros POST
    xhr.send('name=' + encodeURIComponent(name) + '&phone=' + encodeURIComponent(phone));
});

