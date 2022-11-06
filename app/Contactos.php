<?php

namespace App;

class Contactos
{
    private static function _contactos()
    {
        return collect([
            (object) [
                'calle' => 'pendiente',
                'colonia' => 'pendiente',
                'telefonos' => ['(322) 24 41 516'],
                'emails' => ['miguenw@gmail.com'],
                'estado' => 'Puerto Vallarta, Jalisco.',
            ],
        ]);
    }

    /**
     * Retorna todos los contactos
     *
     * @return \Illuminate\Support\Collection
     */
    public static function all()
    {
        return self::_contactos();
    }
}
