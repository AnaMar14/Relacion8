<?php
class RegistroTexto{

    private string $_cadena;
    private DateTime $_fecha;

  
    public function getCadena()
    {
        return $this->_cadena;
    }


    public function getFecha()
    {
        return $this->_fecha;
    }

    public function __construct(string $cadena)
    {
        $this->_cadena=$cadena;
        $this->_fecha=new DateTime();
    }

    /**Dehabilitamos sobrecarga dinamica de propiedades */
    public function __set($name, $value)
    {
        throw new \Exception('Sobrecarga dinámica no permitida');
    }

    public function __toString():string
    {
       return $this->_cadena . " escrito en " . $this->_fecha->format("d/m/Y H:i:s");
    }
}