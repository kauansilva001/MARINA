<?php
class Conection
{
    private static $instancia;

    public static function getConection(){
        if (!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost; dbname=PPDATABASE; chatset=utf8','root','');
            return self::$instancia;
        } else {
            return self::$instancia;
        }
    }
}

?>