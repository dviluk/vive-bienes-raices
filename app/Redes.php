<?php

namespace App;

class Redes
{
    private static function _redes()
    {
        return collect([
            (object) [
                "nombre" => "Facebook",
                "link" => "https://www.facebook.com/viveenvallartabienesraices",
                "icon" => "facebook"
            ],
            (object) [
                "nombre" => "Twitter",
                "link" => "#",
                "icon" => "twitter"
            ],
            (object) [
                "nombre" => "Whatsapp",
                "link" => "https://wa.link/9gszsx",
                "icon" => "whatsapp"
            ],
            (object) [
                "nombre" => "Instagram",
                "link" => "https://www.instagram.com/",
                "icon" => "instagram"
            ],
        ]);
    }

    public static function all()
    {
        return self::_redes();
    }
}
