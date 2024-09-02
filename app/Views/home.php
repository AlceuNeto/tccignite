<?php $this->extend('template/template') ?>

<?php $this->section('header') ?>
<div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send?5515997021706" target="_blank">
        <img src="img/icons8-whatsapp.gif" alt="WhatsApp">
    </a>
</div>
<?php $this->endSection() ?>

<?php $this->section('slideshow') ?>
<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="https://placehold.co/600x300" style="width:100%">
        
    </div>
    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="https://placehold.co/600x300" style="width:100%">
      
    </div>
    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="https://placehold.co/600x300" style="width:100%">
        
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div class="bolinha" style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot1" onclick="currentSlide(2)"></span>
    <span class="dot2" onclick="currentSlide(3)"></span>
</div>
<?php $this->endSection() ?>

<?php $this->section('produtos') ?>
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
<?php $this->endSection() ?>

<?php $this->section('sobre') ?>
<section class="texto">
    <div class="bonitinha">
        <span>uma frase BONITINHA ou algo do tipo</span>
    </div>
    <div class="sobre">
        <h2>Sobre</h2>
        <span>Experimente os Pastéis da Anita, feito com uma massa crocante e recheios irresistíveis. Seja o clássico queijo, carne suculenta ou uma combinação especial, cada pastel é preparado com ingredientes frescos e de qualidade. Perfeito para qualquer hora do dia, os Pastéis da Anita trazem um sabor incrível em cada mordida. Venha conferir e se apaixonar!</span>
    </div>
</section>
<?php $this->endSection() ?>

>
      