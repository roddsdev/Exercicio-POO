<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>POO</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <div class="container">
         <h1>Operações bancárias</h1>

         <h4>--- Valores definidos estaticamente. (finalidade didática)</h4>

         <?php
            require_once 'class\ContaBanco.php';
            
            $params["numConta"] = 1;
            $params["tipo"] = "cp";
            $params["dono"] = "Rodrigo";

            echo "----------- Extrato bancário -----------";
            echo "<br>";
            
            $c1 = new ContaBanco();
            $c1->abrirConta($params);
            $c1->sacar(230);
            $c1->pagarMensal();
            $c1->depositar(30);
            $c1->depositar(30);
            $c1->fecharConta();

            echo "<br>";
            echo "----------- Fim do extrato -----------";
         ?>
         <br><br><br>

         <a href="/"><button>Voltar ao menu</button></a>
      </div>
   </body>
</html>
