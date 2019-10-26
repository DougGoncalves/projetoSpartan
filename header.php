<?php require_once('functions.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agência Spartan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php"><img src="Imagens/spartan-logo.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="#servicos">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sobre">Sobre</a>
                  </li>
                  <li class="nav-item">
                            <a class="nav-link" href="#assine">Assine</a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#contato">Contato</a>
                        </li>
                        <?php 
                          if(isset($_SESSION['logado'])){
                            echo"<li><a class='nav-link'>Bem vindo, usuário</a></li>";
                            echo "<li><a class='nav-link'href='login.php?logout=true'>Sair</a></li>";
                          } else {
                            echo"<li><a class='nav-link'href='login.php'>Login</a></li>";
                          }
                        ?>
                      </ul>
                    </div>
              </nav>
    </header>