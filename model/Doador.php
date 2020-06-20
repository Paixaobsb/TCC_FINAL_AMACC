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
class Doador {

    //atributos
    private $Nome;
    private $Cpf;
    private $DtNascimento;
    private $Email;
    private $DtMensagem;
    private $Mensagem;
    private $DtModificacao;
    private $AtrAntigo;
    private $AtrNovo;
    private $MensagemLog;
    private $Contatos;

    //gets e sets
    function getNome() {
        return $this->Nome;
    }

    function getCpf() {
        return $this->Cpf;
    }

    function getDtNascimento() {
        return $this->DtNascimento;
    }

    function getEmail() {
        return $this->Email;
    }

    function getDtMensagem() {
        return $this->DtMensagem;
    }

    function getMensagem() {
        return $this->Mensagem;
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

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setCpf($Cpf) {
        $this->Cpf = $Cpf;
    }

    function setDtNascimento($DtNascimento) {
        $this->DtNascimento = $DtNascimento;
    }

    function setEmail($Email) {
        $this->Email = $Email;
    }

    function setDtMensagem($DtMensagem) {
        $this->DtMensagem = $DtMensagem;
    }

    function setMensagem($Mensagem) {
        $this->Mensagem = $Mensagem;
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

//metodos do CRUD
    #inserir

    public function inserir($Nome, $Cpf, $DtNascimento, $Mensagem) {

        $sql = "INSERT INTO 'Doador'('Nome', 'Cpf', 'Email', 'Dt_Nascimento', 'Email', 'Mensagem') VALUES ($Nome, $Cpf, $DtNascimento, $Mensagem)";

        return true;
    }

    #consultar

    public function consultar($contatos) {

        $sql = "SELECT 'Nome', 'Cpf', 'Email', 'Dt_Nascimento', 'Email', 'Mensagem', 'Dt_Modificacao', 'AtrAntigo', 'AtrNovo', 'MensagemLog' FROM 'Doador'";

        return $array;
    }

}

?>