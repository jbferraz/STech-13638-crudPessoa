<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author jbferraz
 */
class Usuario {

    //put your code here
    private $idUsuario;
    private $nomeUsuario;
    private $usuario;
    private $senha;

    public function Usuario() {
        
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNomeUsuario() {
        return $this->nomeUsuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    function setNomeUsuario($nomeUsuario): void {
        $this->nomeUsuario = $nomeUsuario;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function __toString() {
        $user = "Usuário:<br/>"
                . " - Nome Usuário: " . $this->getNomeUsuario() . "<br/>"
                . " - Usuário: " . $this->getUsuario() ."<br/>";
        return $user;
    }
    
    
}
