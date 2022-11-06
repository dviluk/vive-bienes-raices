<?php

namespace App;

class Servicios
{
    private static function _servicios()
    {
        return collect([
            (object) [
                "titulo" => 'Verea',
                "slug" => "elementos-de-seguridad",
                "imagen" => url('images/serviece/02.png'),
                'descripcion' => "
                    <p>Casa residencial 3 Recámaras, 3 Baños. </p>
                    ",
            ],
            (object) [
                "titulo" => 'Zyan.',
                "slug" => "asesesorias",
                "imagen" => url('images/serviece/zyan1.png'),
                'descripcion' => "
                    <p>Casas inteligentes, 3 recámaras, 3 baños. </p>
                    ",
            ],
            (object) [
                "titulo" => 'Senya',
                "slug" => "respaldo-y-supervision",
                "imagen" => url('images/serviece/senya1'),
                'descripcion' => "
                    <p>Casa residencial 3 Recámaras, 3 baños.  </p>
                    ",
            ],
            (object) [
                "titulo" => 'Valle del Mar. ',
                "slug" => "investigaciones-especiales",
                "imagen" => url('images/serviece/VALLE2.png'),
                'descripcion' => "
                    <p>casa residencial.</p>
                    ",
            ],
            (object) [
                "titulo" => 'Torre Francia. ',
                "slug" => "venta-instalacion-y-mantenimiento-de-circuito-cerrado-de-tv",
                "imagen" => url('images/serviece/FRANCIA3.png'),
                'descripcion' => "
                    <p>Departamentos de lujo. </p>
                    ",
            ],
            (object) [
                "titulo" => 'Litora ',
                "slug" => "equipos-contra-incendio",
                "imagen" => url('images/serviece/equipo-contras-incendio.jpg'),
                'descripcion' => "
                    <p>Departamentos de lujo. </p>
                    ",
            ],
            
            (object) [
                "titulo" => 'Tipos diseño de interiores, departamentos de lujo',
                "slug" => "econtrol-de-acceso",
                "imagen" => url('images/serviece/control-vehicular.jpg'),
                'descripcion' => "
                    <p>Nuestros mejores consejos para decorar tus interiores a tu estilo . </p>
                    ",
            ],
            (object) [
                "titulo" => 'Cercas electrificadas y alarmas ',
                "imagen" => url('images/serviece/alarmas.jpg'),
                "slug" => "alarmas-y-monitorios",
                'descripcion' => "
                    <p>Te brindamos el mejor servicio, asegura tu patrimonio fortalece la seguridad de tu hogar o negocio. </p>
                    ",
            ],
            (object) [
                "titulo" => 'Cursos de primeros auxilios ',
                "slug" => "cercas-electrificadas",
                "imagen" => url('images/serviece/cercas.jpg'),
                'descripcion' => "
                    <p>Capacita a tu personal, evita accidentes, te ofrecemos los mejores cursos actualizados. </p>
                    ",
            ],
        ]);
    }

    /**
     * Retorna todos los servicios
     *
     * @return \Illuminate\Support\Collection
     */
    public static function all()
    {
        return self::_servicios();
    }
}
