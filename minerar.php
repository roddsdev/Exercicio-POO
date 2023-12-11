<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>POO</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="container">
         <h1>Mineracão com classe</h1>

         <h4>--- Vitalidade = disposição para procurar recursos minerais</h4>
         <h4>--- Sorte = Facilidade para encontrar recursos minerais</h4>

         <?php
            // a classe "Jogador" é chamada dentro da classe "Mineracao"
            require_once 'class\Mineracao.php';

            $nome = "Rodrigo San";
            $genero = "M";
            $j[0] = new Jogador($nome, $genero);
            $j[0]->verStatus();

            $nome = "Pedro Clooney";
            $genero = "M";
            $j[1] = new Jogador($nome, $genero);
            $j[1]->verStatus();

            $nome = "Samuel Sam";
            $genero = "M";
            $j[2] = new Jogador($nome, $genero);
            $j[2]->verStatus();
         ?>

         <a>----------- Foi dado início a Mineração ! -----------</a>
         <a href=""><button class="btn-refresh">Minerar novamente</button></a><br>

         <?php
            $m[0] = new Mineracao($j[0]);
            $m[1] = new Mineracao($j[1]);
            $m[2] = new Mineracao($j[2]);
            
            foreach ($m as $key => $minerador) {
               $minerador->minerar();
               $minerador->verResultado();
            }
         ?>
         <br><br><br>
         
         <div>
            <a href="/"><button>Voltar ao menu</button></a>
         </div>
      </div>
   </body>
   </html>
   