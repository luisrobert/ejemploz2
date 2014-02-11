<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Model;

class Tienda
{
    public $id;
    public $nombre;
    public $direccion;
    public $telefono;
    public $email;

    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->nombre = (isset($data['nombre'])) ? $data['nombre'] : null;
        $this->direccion  = (isset($data['direccion'])) ? $data['direccion'] : null;
        $this->telefono = (isset($data['telefono'])) ? $data['telefono'] : null;
        $this->email  = (isset($data['email'])) ? $data['email'] : null;
        
    }
}