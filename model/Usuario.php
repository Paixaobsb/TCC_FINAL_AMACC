<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Tabela usuario onde possui os dados de todos os que usam o sistema

 * @author lucas.mpaixao
 */
class Usuario {

    //atributos
    private $Email;
    private $Senha;
    private $Cnpj;
    private $Telefone;
    private $Status;
    private $DtModificacao;
    private $AtrAntigo;
    private $AtrNovo;
    private $MensagemLog;
    private $NomePerfil;

    //gets e sets
    function getEmail() {
        return $this->Email;
    }

    function getSenha() {
        return $this->Senha;
    }

    function getCnpj() {
        return $this->Cnpj;
    }

    function getTelefone() {
        return $this->Telefone;
    }

    function getStatus() {
        return $this->Status;
    }

    function getDtModificacao() {
        return $this->DtModificacao;
    }

    function getAtrAntigo() {
        return $this->AtrAntigo;
    }

    function getAtrNovo() {
        return $this->AtrNovo;
    }

    function getMensagemLog() {
        return $this->MensagemLog;
    }

    function getNomePerfil() {
        return $this->NomePerfil;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setSenha($Senha) {
        $this->Senha = $Senha;
    }

    function setCnpj($Cnpj) {
        $this->Cnpj = $Cnpj;
    }

    function setTelefone($Telefone) {
        $this->Telefone = $Telefone;
    }

    function setStatus($Status) {
        $this->Status = $Status;
    }

    function setDtModificacao($DtModificacao) {
        $this->DtModificacao = $DtModificacao;
    }

    function setAtrAntigo($AtrAntigo) {
        $this->AtrAntigo = $AtrAntigo;
    }

    function setAtrNovo($AtrNovo) {
        $this->AtrNovo = $AtrNovo;
    }

    function setMensagemLog($MensagemLog) {
        $this->MensagemLog = $MensagemLog;
    }

    function setNomePerfil($NomePerfil) {
        $this->NomePerfil = $NomePerfil;
    }

    //metodos do CRUD
    #update
    public function alterar() {

        $sql = "SELECT 'Nome', 'Cep', 'Cnpj', 'Email', 'Telefone' FROM 'Usuario'";

        return $array;
    }

    #inserir

    public function inserir($nome, $Email, $Telefone) {

        $sql = "INSERT INTO 'Usuario'('nome', 'email', 'telefone') VALUES ($nome,$Email,$Telefone)";

        return true;
    }

    #excluir

    public function excluir($Id, $Nome, $Email, $Telefone) {

        $sql = "DELETE FROM 'Usuario' WHERE id=$Id, nome=$Nome, email=$Email, telefone=$Telefone";

        return true;
    }

}

?>