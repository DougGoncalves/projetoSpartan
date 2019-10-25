<?php require_once('header.php');?>
<main>
    <div class="container my-5">
        <div class="row">
            <div class="col"> <h1>Painel Administrativo</h1></div>
            <div class="col text-right">
                <a href="criar_servico.php"class="btn btn-primary">+Novo Serviço</a>
            </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Imagem</th>
                            <th class="action">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Consultoria UX</td>
                            <td>Aqui vem a descrição</td>
                            <td><img src="Imagens/marketing.svg" alt="consultoria" id=imagemadmin></td>
                            <td>
                                <a href="#" class="btn btn-info"></a>
                                <a href="#" class="btn btn-danger"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
</main>
<?php require_once('footer.php');?>