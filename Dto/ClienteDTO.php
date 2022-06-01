<?php

class ClienteDTO {

    private $idCliente;
    private $nome;
    private $email;
    private $dtnasc;
    private $telefone;
     private $sexo;
     function getIdCliente() {
         return $this->idCliente;
     }

     function getNome() {
         return $this->nome;
     }

     function getEmail() {
         return $this->email;
     }

     function getDtnasc() {
         return $this->dtnasc;
     }

     function getTelefone() {
         return $this->telefone;
     }

     function getSexo() {
         return $this->sexo;
     }

     function setIdCliente($idCliente) {
         $this->idCliente = $idCliente;
     }

     function setNome($nome) {
         $this->nome = $nome;
     }

     function setEmail($email) {
         $this->email = $email;
     }

     function setDtnasc($dtnasc) {
         $this->dtnasc = $dtnasc;
     }

     function setTelefone($telefone) {
         $this->telefone = $telefone;
     }

     function setSexo($sexo) {
         $this->sexo = $sexo;
     }


}

