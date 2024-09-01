<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TCC - MINHA VERSÃO</title>
        <link rel="stylesheet" href="style/css.css">
        <script src="script/js.js" defer></script>
    </head>
    <body>
        <header>
            <?= $this->renderSection('Sticky') ?>
        <div class="whatsapp-button">
        <a href="https://api.whatsapp.com/send?5515997021706" target="_blank">
            <img src="img/icons8-whatsapp.gif" alt="WhatsApp">
        </a>
    </div>
            <div class="header-container">
            <div class="logo">
                
                <img id="logoo"  src="img/file.png" alt="">
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
        <main>
            <!-- SLIDESHOW -->
             <?= $this->renderSection('slideshow') ?>
            <div class="slideshow-container">

              
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="https://placehold.co/600x200" style="width:100%">
                  <div class="text">Caption Text</div>
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="https://placehold.co/600x200" style="width:100%">
                  <div class="text">Caption Two</div>
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="https://placehold.co/400x200" style="width:100%">
                  <div class="text">Caption Three</div>
                </div>
              
             
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              
             
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>

              <!-- PRODUTOS -->
              <?= $this->renderSection('produtos') ?>
             
              <h2 id="produtos">PRODUTOS:</h2>
              <section class="products-section">
                
                <div class="products-grid">
                <div class="product-card">
        <img src="img/pasteu.png" alt="Pastel" class="product-image">
        <div class="product-name">Pastéis</div>
    </div>
    <div class="product-card">
        <img src="img/pasteu.png" alt="Pastel" class="product-image">
        <div class="product-name">Pastéis Doces</div>
    </div>
    <div class="product-card">
        <img src="img/pasteu.png" alt="Pastel" class="product-image">
        <div class="product-name">Mini-Pastel</div>
    </div>
    <div class="product-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPG6kUqEeu8B8NueCoO-RwaFfC-FuFrjZCpg&s" alt="Pastel" class="product-image">
        <div class="product-name">Bebidas</div>
    </div>
                </div>
            </section>
            

            </div>
            <div class="ifoodtambem">
              
                <a href=""><img src="img/ifood.png" alt="WhatsApp Button"></a>

            </div>
            <?= $this->renderSection("sobre"); ?>
            <section class="texto">
        <div class="bonitinha">
            <span>uma frase BONITINHA ou algo do tipo</span>
        </div>
        <div class="sobre">
            <h2>Sobre</h2>
            <span>


Experimente os Pastéis da Anita, feito com uma massa crocante e recheios irresistíveis. Seja o clássico queijo, carne suculenta ou uma combinação especial, cada pastel é preparado com ingredientes frescos e de qualidade. Perfeito para qualquer hora do dia, os Pastéis da Anita trazem um sabor incrível em cada mordida. Venha conferir e se apaixonar!

</span>
        </div>
    </section>
        </main>
        <?= $this->renderSection('Footer') ?>
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
   
    </div>
</footer>
    

    </body>
    </html>