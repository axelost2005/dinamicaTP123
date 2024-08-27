<?php

class control{

    public function decirquiensos($datos){

        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];

        $rta=  "Mi nombre es $nombre y mi apellido $apellido,tengo $edad y vivo en $direccion";
        return $rta;
    }

}