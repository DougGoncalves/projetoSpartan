<?php require_once('header.php');?>

<main>
    <div class="container my-5">
        <div class="row">
            <div class="col mb-4">
                <h1>Cadastro de novo serviço</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-6 mb-5">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control"name="nome" id="nome">
                    </div>
                    <div class="form-group">    
                        <label for="descricao">Descriçao</label>
                        <textarea name="descricao" id="descricao"rows="3" class="form-control"></textarea>
                    </div>   
                    <div class="form-group"> 
                        <label for="imagem">Imagem</label><br>
                        <input type="file" name="form-control" id="imagem" name='imagem'>
                    </div> 
                    <div class="form-group text-right">
                        <button class="btn btn-primary" name="cadastrar_servico">Enviar</button>      
                    </div>
                </form>
            </div>
            <div class="col-6 mb-5">
                <img src="Imagens/code.svg" alt="imagemcriar" id="imagemcriar_servico">
            </div>
        </div>
    </div>
</main>

<?php require_once('footer.php');?>