<?php

namespace App;

class Redes
{
    private static function _redes()
    {
        return collect([
            (object) [
                "nombre" => "Facebook",
                "link" => "#",
                "icon" => "facebook"
            ]
        ]);
    }

    public static function all()
    {
        return self::_redes();
    }
}
