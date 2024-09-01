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
        <span id="frasebonita">UMA FRASE BONITINHA OU ALGO DO TIPO</span>
        <main>
            <!-- SLIDESHOW -->
             <?= $this->renderSection('slideshow') ?>
            
              <!-- PRODUTOS -->
              <?= $this->renderSection('produtos') ?>
           
              <?= $this->renderSection("sobre")?>
        </main>

        <?= $this->renderSection('Footer') ?>
    
    </body>
    </html>