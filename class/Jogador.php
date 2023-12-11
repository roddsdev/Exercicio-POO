<?php

class Jogador {
   private $nome;
   private $genero;
   private $vitalidade;
   private $sorte;

   function __construct($n, $g)
   {
      $this->setNome($n);
      $this->setGenero($g);
      $this->setVitalidade();
      $this->setSorte();
   }

   // MEUS METODOS

   function verStatus()
   {
      $corVit = "red";
      if ($this->getVitalidade() >= 70) {
         $corVit = "green";
      } else if ($this->getVitalidade() > 50) {
         $corVit = "blue";
      }

      $corSor = "red";
      if ($this->getSorte() >= 70) {
         $corSor = "green";
      } else if ($this->getSorte() > 50) {
         $corSor = "blue";
      }

      echo "Este é o jogador <b>". $this->getNome() ."</b> do genero ". $this->getGenero() ." que possui: </br>
         Vitalidade = <span style='color:{$corVit};'>". $this->getVitalidade() ."</span> </br>
         Sorte = <span style='color:{$corSor};'>". $this->getSorte() .'</span>';
      echo "</br>";
      echo "</br>";
      //var_dump($this);
   }

   // METODOS ESPECIAIS

   public function getNome()
   {
      return $this->nome;
   }

   public function setNome($nome)
   {
      $this->nome = $nome;

      return $this;
   }

   public function getGenero()
   {
      return $this->genero;
   }

   public function setGenero($genero)
   {
      if ($genero == "M") {
         $this->genero = "Masculino";
      } else if ($genero == "F") {
         $this->genero = "Femenino";
      } else {
         echo "Houve um erro ao inserir o genero";
      }

      return $this;
   }

   public function getVitalidade()
   {
      return $this->vitalidade;
   }

   public function setVitalidade()
   {
      $vitalidade = rand(1,99);

      $this->vitalidade = $vitalidade;

      return $this;
   }

   public function getSorte()
   {
      return $this->sorte;
   }

   public function setSorte()
   {
      if ($this->getVitalidade() <= 50) {
         $sorte = rand(30,99);
      } else {
         $sorte = rand(1,69);
      }

      $this->sorte = $sorte;

      return $this;
   }

}



 ?>
