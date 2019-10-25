<?php

//  $servicos = [
// //      [
// //          "nome" => "Desenvolvimento Web",
// //          "imagem" => "Imagens/code.svg",
// //          "descricao" => "Sites dinamicos, otimizados para motores de busca"
// //      ],
// //      [
// //          "nome" => "Marketing Digital",
// //          "imagem" => "Imagens/marketing.svg",
// //          "descricao" => "Alcance um publico maior, venda mais rápido!"
// //      ],
// //      [
// //          "nome" => "Consultoria UX",
// //          "imagem" => "Imagens/analise.svg",
// //          "descricao" => "Ofereça a melhor experiência para seus usuários!"
// //      ],
// //      [
// //          "nome" => "Consultoria Agil",
// //          "imagem" => "Imagens/analise.svg",
// //          "descricao" => "Torne seu time de dev em pastelaria"
// //      ],
// //      [
// //          "nome" => "Consultoria Agil",
// //          "imagem" => "Imagens/code.svg",
// //          "descricao" => "Torne seu time de dev em pastelaria"
// //      ],
// //      [
// //          "nome" => "Consultoria Agil",
// //          "imagem" => "Imagens/marketing.svg",
// //          "descricao" => "Torne seu time de dev em pastelaria"
// //      ]
// //  ];

 function listarServicos()
 {
     global $servicos;

     foreach ($servicos as $index => $servico) {
         echo "<div class='col-md-4 mt-4'>
             <div class='card'>
                 <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa do card'>
                 <div class='card-body'>
                     <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
                 </div>
             </div>
         </div>";
     }
 }


 function getNome($id)
 {
     global $servicos;
     return $servicos[$id]["nome"];
 }
 function getDescricao($id)
{
    global $servicos;
    return $servicos[$id]["descricao"];
}
function getImagem($id)
{
    global $servicos;
    return $servicos[$id]["imagem"];
}

if(isset($_POST['cadastrar_servico'])){
//     var_dump($_POST); 
    $arquivoServicos = 'servicos.json';


    if(file_exists($arquivoServicos)){
        
    } else {
        $arquivo = fopen($arquivoServicos, 'w'); //abre ou cria o arquivo
        $arrayServicos = ["servicos" =>[]]; // cria arrray para guardar servico
        $infoServico = $_POST; //pega informações do formulário de cadastro
        $arrayServicos['servicos'][]= $infoServico; //add novo servico no array
        $jsonServicos = json_encode($arrayServicos,true); //converte array para Json
        file_put_contents($arquivoServicos, $jsonServicos); //add info no arquivo
    }
}