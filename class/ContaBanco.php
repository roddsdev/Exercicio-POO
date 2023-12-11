<?php
class ContaBanco {
   public $numConta;
   protected $tipo; // cp ou cc
   private $dono;
   private $saldo;
   private $status;

   function __construct() {
      print_r("</br>para abrir uma conta use o metodo 'abrirConta'.");
      $this->status = false;
      $this->saldo = 0;
   }

   public function abrirConta($params = []) {
      print_r("</br>Você iniciou a abertura de uma conta.");

      if (isset($params["numConta"])) { $numConta = $params["numConta"]; } else { print_r("</br>Parâmetros insuficientes.");return; }
      if (isset($params["tipo"])) { $tipo = $params["tipo"]; } else { print_r("</br>Parâmetros insuficientes.");return; }
      if (isset($params["dono"])) { $dono = $params["dono"]; } else { print_r("</br>Parâmetros insuficientes.");return; }

      if ($numConta < 0) {
         print_r("</br>Você não pode definir uma número de conta negativo.");
         return;
      }

      $this->numConta = $numConta;
      $this->tipo     = $tipo;
      $this->dono     = $dono;
      $this->status   = true;

      if ($tipo == 'cc'){
         $this->saldo = 50;
      } else if ($tipo == 'cp') {
         $this->saldo = 150;
      }

      print_r("</br>Conta criada com sucesso! O saldo inicial é de <b>R$$this->saldo</b>.");

   }

   public function fecharConta() {
      if ($this->status) {
         if ($this->saldo >= 0) {
            print_r("</br>Processando solicitação de fechamento de conta!");
            $this->sacar($this->saldo);
            $this->status = false;
            print_r("</br>Você sacou todo o seu dinheiro com sucesso!</br> Conta encerrada com sucesso!<br>");
         } else {
            print_r("</br>Você não pode encerrar esta conta pois o saldo está negativo!");
         }
      } else {
         print_r("</br>Não é possível fechar uma conta que não existe");
      }

   }

   public function depositar($deposito) {
      if ($this->status) {
         if ($this->status == 1) {
            if ($deposito > 0) {
               $this->saldo = $this->saldo + $deposito;
               print_r("</br>Você depositou <b>R$$deposito</b>. O saldo atual é de <b>R$$this->saldo</b>.");
            } else {
               print_r("</br>Você não pode depositar uma quantida negativa em sua conta corrente. Use o método sacar.");
            }
         }
      } else {
         print_r("</br>Não é possível efetuar o depósito em uma conta que não existe");
      }
   }

   public function sacar($saque) {
      if ($this->status == 1 && $this->saldo > 0) {
         if ($saque <= $this->saldo) {
            $this->saldo = $this->saldo - $saque;
            print_r("</br>Você sacou <b>R$$saque</b>. O saldo atual é de <b>R$$this->saldo</b>.");
         } else {
            print_r("</br>Você não tem saldo suficiente para efetuar este saque de <b>R$$this->saldo</b>.");
         }
      } else if ($this->status == false) {
         print_r("</br>Não é possível efetuar o saque de uma conta que não existe");
      } else {
         print_r("</br>Não foi possível efetuar o saque.");
      }
   }

   public function pagarMensal() {
      if ($this->tipo == 'cc') {
         $this->sacar(12);
      } else if ($this->tipo == 'cp') {
         $this->sacar(20);
      }
   }

   public function getnumConta() {

   }

   public function setnumConta() {

   }

   public function getTipo() {

   }

   public function setTipo() {

   }

   public function getDono() {

   }

   public function getSaldo() {

   }

   public function setSaldo() {

   }

   public function getStatus() {

   }

   public function setStatus() {

   }
}


?>
