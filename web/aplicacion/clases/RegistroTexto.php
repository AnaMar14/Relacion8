<?php
class RegistroTexto{

    private string $_cadena;
    private DateTime $_fecha;

  
    public function getCadena()
    {
        return $this->_cadena;
    }

 
    public function setCadena($cadena)
    {
        $this->_cadena = $cadena;

        return $this;
    }


    public function getFecha()
    {
        return $this->_fecha;
    }


    public function setFecha($fecha)
    {
        $this->_fecha = $fecha;

        return $this;
    }

    public function __construct()
    {
        throw new \Exception('Not implemented');
    }
}