<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class libroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['ISBN' => '1101',
            'titulo' => 'el principito',
            'precio' => 10000,
            'stock' => 20,
            'editorial' => '1',
            ],
            ['ISBN' => '1102',
            'titulo' => 'nuevo testamento',
            'precio' => 30000,
            'stock' => 5,
            'editorial' => '3',
            ],
            ['ISBN' => '1103',
            'titulo' => 'el zorro',
            'precio' => 10000,
            'stock' => 100,
            'editorial' => '2',
            ],
            ['ISBN' => '1104',
            'titulo' => 'la paz',
            'precio' => 50000,
            'stock' => 0,
            'editorial' => '4',
            ],
            ['ISBN' => '1105',
            'titulo' => 'seminario',
            'precio' => 200000,
            'stock' => 40,
            'editorial' => '5',
            ]
            
            
        ];
        DB::table('libro')->insert($datos);
           
    }
}
