<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//SPATIE

use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos =[

            // Tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',
            //Tabla fincas
            'ver-fincas',
            'crear-fincas',
            'editar-fincas',
            'borrar-fincas',
            //tabla uso de tierras
            'ver-tierras',
            'crear-tierras',
            'editar-tierras',
            'borrar-tierras',
            //tabla productores
            'ver-productor',
            'crear-productor',
            'editar-productor',
            'borrar-productor',
            //tabla bitacoras
            'ver-bitacora',
            'crear-bitacora',
            'editar-bitacora',
            'borrar-bitacora',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
