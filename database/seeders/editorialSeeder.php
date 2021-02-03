<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class editorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
$datos = [
    ['nombre' => 'Norma',
    'direccion' => 'av.el dorado 90-10',
    'ciudad' => 'bogota',
    'telefono' => '426652',
    ],
    ['nombre' => 'Mc graw hill',
    'direccion' => 'cra 85A no 46A-66',
    'ciudad' => 'bogota',
    'telefono' => '3102266',
    ],
    ['nombre' => 'Alfaomega colombiana',
    'direccion' => 'calle 62 no 20-46',
    'ciudad' => 'bogota',
    'telefono' => '125520',
    ],
    ['nombre' => 'La Santillana',
    'direccion' => 'cra 82 no 11241N-33A',
    'ciudad' => 'medellin',
    'telefono' => '700022',
    ],
    ['nombre' => 'Los Tres Editores S.A.S',
    'direccion' => 'calle 32 no 8A-95',
    'ciudad' => 'cali',
    'telefono' => '1255200',
    ]
    
];
DB::table('editorial')->insert($datos);
    }
}
