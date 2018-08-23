<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perro
 *
 * @author Dual-ll
 */
class Perro {
    
    private $id;
    private $nombre;
    private $raza;
    private $edad;
    private $tamano;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getRaza() {
        return $this->raza;
    }

    function getEdad() {
        return $this->edad;
    }

    function getTamano() {
        return $this->tamano;
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setTamano($tamano) {
        $this->tamano = $tamano;
    }

    
            
}
