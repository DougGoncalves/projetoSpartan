<?php require_once('header.php'); ?>
<main class="mainhome">
    <section id="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Imagens/web.png" class="d-block w-100" alt="Primeiro Slide">
              </div>
              <div class="carousel-item">
                <img src="Imagens/bi.png" class="d-block w-100" alt="Segundo Slide">
              </div>
              <div class="carousel-item">
                <img src="Imagens/MarketingDigital.png" class="d-block w-100" alt="Terceiro Slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section id="servicos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="mb-5">Serviços</h2>
                </div>
            </div>
            <div class="row">
            <?php
                $servicos = listarServicos ();
                  // foreach ($servicos as $indice => $valor) {
                  //   echo "<div class='col-md-4 mt-4'>
                  //           <div class='card'>
                  //             <img class='card-img-top p-4' src='$servicos[$indice]['imagem']' alt='Imagem de capa do card'> 
                  //               <div class='card-body'>
                  //                 <p class='card-text text-center'><a href='$servicos[$indice]['nome']</a></p>
                  //               </div>
                  //           </div>
                  //         </div>";
            ?>
            </div>
        </div>
    </section>
    <section id="assine">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 id="cta">ASSINE AGORA</h1>
          </div>
          <div class="col">
            <div class="col">
               <input id="mail"type="email"placeholder="Seu e-mail aqui" >
              </div>
          </div>
          <div class="col">
              <button id="btn-assine"class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </section>
    <section id="sobre">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="Imagens/spartan-logo.png" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h1>Sobre</h1>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Cevadis im ampola pa arma uma pindureta. Não sou faixa preta cumpadi, sou preto inteiris, inteiris. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contato">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Entre em contato</h2>
                        <form>
                            <div class="form-group">
                              <label for="nome">Nome</label>
                              <input type="text" class="form-control" id="nome" >
                            </div>
                            <div class="form-group">
                              <label for="e-mail">E-mail</label>
                              <input type="text" class="form-control" id="e-mail" >
                            </div>
                            <div class="form-group">
                                    <label for="mensagem">Mensagem</label>
                                    <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                          </form>
                </div>
                <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d755.3098302195446!2d-73.96115517077487!3d40.77875251424242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589636d52e8f%3A0xf1bae9a67349fd7!2s1100%20Madison%20Ave%2C%20New%20York%2C%20NY%2010028%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1569682040689!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php require_once('footer.php');?>