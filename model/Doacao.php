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
class Doacao {

    //atributos

    private $DtVencimentoCartao;
    private $CodIdentificacaoCartao;
    private $NumeroCartao;
    private $DtDoacao;
    private $NomeDoacao;
    private $relatorio;
    private $doacoes;
    private $historico;

    //gets e sets
    function getDtVencimentoCartao() {
        return $this->DtVencimentoCartao;
    }

    function getCodIdentificacaoCartao() {
        return $this->CodIdentificacaoCartao;
    }

    function getNumeroCartao() {
        return $this->NumeroCartao;
    }

    function getDtDoacao() {
        return $this->DtDoacao;
    }

    function getNomeDoacao() {
        return $this->NomeDoacao;
    }

    function setDtVencimentoCartao($DtVencimentoCartao) {
        $this->DtVencimentoCartao = $DtVencimentoCartao;
    }

    function setCodIdentificacaoCartao($CodIdentificacaoCartao) {
        $this->CodIdentificacaoCartao = $CodIdentificacaoCartao;
    }

    function setNumeroCartao($NumeroCartao) {
        $this->NumeroCartao = $NumeroCartao;
    }

    function setDtDoacao($DtDoacao) {
        $this->DtDoacao = $DtDoacao;
    }

    function setNomeDoacao($NomeDoacao) {
        $this->NomeDoacao = $NomeDoacao;
    }

//metodos do CRUD
    #consultar
    public function consultar($relatorio, $doacoes, $historico) {

        $sql = "SELECT 'DtVencimentoCartao', 'CodIdentificacaoCartao', 'NumeroCartao', 'DtDoacao', 'NomeDoacao' FROM 'Doacao'";

        return $array;
    }

}

?>