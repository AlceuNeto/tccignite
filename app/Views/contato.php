<?php $this->extend('template/template') ?>

<?php $this->section("header")?>

<?php $this->endSection() ?>
<p>nada</p>
<?php $this->section("contatos")?>

<<<<<<< HEAD

<p id="entreemcontato">Entre em Contato</p>
<section class="contatodireto">
    <div class="sideimage">
    <img src="img/file.png" alt="">
=======
<section class="contato">
    <div class="sideimage">
        <img src="img/file.png" alt="">
    </div>
    <div class="entraremcontato">
        <p>Entre em contato</p>
>>>>>>> 65e35cf662924524d29d9d2aefc2af4dc9aeda68
    </div>
    <div class="formulario">
        <form action="">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">E-mail</label>
        <input type="email" name="email">
        <label for="mensagemetc">Digite sua Mensagem:</label>
        <textarea name="mensagemetc" id="mensagemetc"></textarea>

        <input type="button" value="Enviar">


        </form>
    </div>


</section>


<?php $this->endSection() ?>    