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

    public function edad($datos){

        $edad = $datos['edad'];
        $rta="";
        if($edad>=18){
            $rta = "mayor";
        }else{
            $rta = "menor";
        }
        return $rta;
    }

}