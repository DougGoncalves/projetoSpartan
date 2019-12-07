<?php require_once('header.php'); ?>

<section class="container mt-5">
    <div class="row">
        <div class="col">
            <h1><?php echo getNome($_GET['id']); ?></h1>
        </div>
    </div>
    <?php 
        $servicos = listarServicos ();

        foreach ($servicos as $indice => $valor){
            echo "<div class='row'>
            <div class='col-lg-6 mt-3 mb-3'>
                <p><a href='servico.php?id=$indice'>".$servicos[$indice]['descricao']."</a></p>
            </div>
            <div class='col-lg-6 text-center'>
                <img src=".
                $servicos[$indice]['imagem']." class='ilustra-servico' alt=".
                $servicos[$indice]['nome'].">
            </div>
            </div>";
        }
    ?> 
</section>

 <?php require_once('footer.php'); ?>
