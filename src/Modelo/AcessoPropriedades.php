<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{

    public function __get($nome)
    {
        $metodo = "recupera" . ucfirst($nome);
        return $this->$metodo();  
    }

}