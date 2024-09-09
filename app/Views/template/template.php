<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC - MINHA VERSÃO</title>
    <link rel="stylesheet" href="style/css.css">
    <link rel="shortcut icon" href="img/file.png" type="image/x-icon">
    <script src="script/js.js" defer></script>
</head>
<body>

    <header>
    <div class="whatsapp-button">
        <?php
    $telefone = '5515997021706  ';
    $mensagem = 'Olá mundo';
    $link = 'https://wa.me/' . $telefone . '?text=' . urlencode($mensagem);
    ?>
    <a href="<?= $link ?>" target="_blank"><img src="img/icons8-whatsapp.gif"></a>

    </a>
</div>  
        <div class="header-container">
            <div class="logo">
                <img id="logoo" src="img/file.png" alt="">
            </div>
            <nav>
                <ul class="navbar">
                    <a href="<?= base_url('/')?>"><li>Início</li></a>
                    <a href="<?= base_url('/produtos')?>"><li>Nossos Produtos</li></a>
                    <a href="<?= base_url('/contato')?>"><li>Contato</li></a>
                    <img src="img/Vector (4).png" alt="">
                </ul>
            </nav>
        </div>
    </header>
    
    <>
        <?= $this->renderSection('slideshow') ?>
        <?= $this->renderSection('produtos') ?>
        <?= $this->renderSection('sobre') ?>
        <?= $this->renderSection('contatos') ?>
    </main>
    
    <footer>
        <div class="footer-content">
            <div class="googlemaps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.880765389621!2d-47.85794852543028!3d-23.356333954090402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d93b292bd5d5%3A0x7fa122cb63971972!2sR.%20Carlos%20Orsi%2C%20433%20-%20Centro%2C%20Tatu%C3%AD%20-%20SP%2C%2018275-150!5e0!3m2!1spt-BR!2sbr!4v1724794672222!5m2!1spt-BR!2sbr" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="address">
                <h2>Endereço:</h2>
                <p>Rua Carlos Orsi, 433<br>Bairro Centro<br>CEP 18275-150 - Tatuí</p>
            </div>
            <div class="social">
                <a href="https://www.facebook.com" target="_blank">
                    <img src="img/facebook.png" alt="Facebook" width="50" height="50">
                </a>
                <a href="https://www.instagram.com" target="_blank">
                    <img src="img/instagram.png" alt="Instagram" width="50" height="50">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
