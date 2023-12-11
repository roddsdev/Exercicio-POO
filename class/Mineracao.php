<?php
require_once 'Jogador.php';

class Mineracao {
   private $minerador; // instancia de jogador
   private $minerando; // logico
   private $encontrouAlgo; // logico
   private $qtdEncontradaOuro; // inteiro
   private $qtdEncontradaPrata; // inteiro
   private $qtdEncontradaBronze; // inteiro

   function __construct($m)
   {
      $this->setMinerador($m);
      $this->setMinerando(0);
      $this->setEncontrouAlgo(0);
      $this->setQtdEncontradaOuro(0);
      $this->setQtdEncontradaPrata(0);
      $this->setQtdEncontradaBronze(0);
   }

   // MEUS METODOS

   public function minerar()
   {
      $qm = rand (1,50) + $this->getMinerador()->getVitalidade(); // Quantidade de tentativas de Mineracao
      $fa = 100 - $this->getMinerador()->getSorte(); // Fator aleatorio

      for ($i = 1; $i <= $qm; $i++) {
         $loteria = rand(1,999);
         $roleta = $loteria - $fa; // quanto mais sorte do jogador , mais chance de ter roleta positiva
         if ($roleta >= -2 && $roleta <= 1) {
            if ($roleta == 0) {
               $this->jogarNoInventario("Ouro");
            } else if ($roleta > 0) {
               $this->jogarNoInventario("Prata");
            } else {
               $this->jogarNoInventario("Bronze");
            }
            $this->setEncontrouAlgo(1);
         }
      }
   }

   public function jogarNoInventario($tipo)
   {
      if ($tipo == "Ouro") {
         $this->setQtdEncontradaOuro($this->getQtdEncontradaOuro() + 1);
      } else if ($tipo == "Prata") {
         $this->setQtdEncontradaPrata($this->getQtdEncontradaPrata() + 1);
      } else {
         $this->setQtdEncontradaBronze($this->getQtdEncontradaBronze() + 1);
      }
   }

   public function verResultado()
   {
      if ($this->getEncontrouAlgo() == 1) {
         echo '</br>O jogador <b>'. $this->getMinerador()->getNome() .'</b> encontrou algo, mas não sabemos o que é nem o seu valor..';
         echo '</br>Fui no avaliador de itens e já sei o que conseguimos.';
         echo '</br>Total em Ouro = '. $this->getQtdEncontradaOuro();
         echo '</br>Total em Prata = '. $this->getQtdEncontradaPrata();
         echo '</br>Total em Bronze = '. $this->getQtdEncontradaBronze();
      } else {
         echo '</br>O jogador <b>'. $this->getMinerador()->getNome() .'</b> nao encontrou nada, infelizmente';
      }

      echo '</br>';
   }

   // METODOS ESPECIAIS

   public function getMinerador()
   {
      return $this->minerador;
   }

   public function setMinerador($minerador)
   {
      $this->minerador = $minerador;

      return $this;
   }

   public function getMinerando()
   {
      return $this->minerando;
   }

   public function setMinerando($minerando)
   {
      $this->minerando = $minerando;

      return $this;
   }

   public function getEncontrouAlgo()
   {
      return $this->encontrouAlgo;
   }

   public function setEncontrouAlgo($encontrouAlgo)
   {
      $this->encontrouAlgo = $encontrouAlgo;

      return $this;
   }

   public function getQtdEncontradaOuro()
   {
      return $this->qtdEncontradaOuro;
   }


   public function setQtdEncontradaOuro($qtdEncontradaOuro)
   {
      $this->qtdEncontradaOuro = $qtdEncontradaOuro;

      return $this;
   }

   public function getQtdEncontradaPrata()
   {
      return $this->qtdEncontradaPrata;
   }

   public function setQtdEncontradaPrata($qtdEncontradaPrata)
   {
      $this->qtdEncontradaPrata = $qtdEncontradaPrata;

      return $this;
   }

   public function getQtdEncontradaBronze()
   {
      return $this->qtdEncontradaBronze;
   }

   public function setQtdEncontradaBronze($qtdEncontradaBronze)
   {
      $this->qtdEncontradaBronze = $qtdEncontradaBronze;

      return $this;
   }

}


?>
