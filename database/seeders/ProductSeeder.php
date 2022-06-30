<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Franela Github',
            'slug' => 'franela-github',
            'details' => 'Franela, varios tamaños y tallas',
            'price' => 15,
            'sizes' => json_encode(['XS', 'S', 'M', 'L', 'XL', 'XXL']),
            'colors' => json_encode(['Blanco', 'Negro', 'Rojo', 'Verde', 'Azul']),
            'shipping_cost' => 5,
            'description' => 'Franela github',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'franela.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Franela Ubuntu',
            'slug' => 'franela-ubuntu',
            'details' => 'Franela, varios tamaños y tallas',
            'price' => 10,
            'sizes' => json_encode(['XS', 'S', 'M', 'L', 'XL', 'XXL']),
            'colors' => json_encode(['Blanco', 'Negro', 'Rojo', 'Verde', 'Azul']),           
            'shipping_cost' => 5,
            'description' => 'Franela ubuntu',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'franela2.jpg'
        ]); 

        DB::table('products')->insert([
            'name' => 'Franela SONIC',
            'slug' => 'franela-SONIC',
            'details' => 'Franela, varios tamaños y tallas',
            'price' => 5,
            'sizes' => json_encode(['XS', 'S', 'M', 'L', 'XL', 'XXL']),
            'colors' => json_encode(['Blanco', 'Negro', 'Rojo', 'Verde', 'Azul']),            
            'shipping_cost' => 5,
            'description' => 'Franela SONIC',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'franela-sonic.jpg'
        ]);                

              
    }
}
