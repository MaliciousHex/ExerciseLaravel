<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tbl')->insert([
            [
            'nameProduct' => 'SilverQueen',
            'price' => '20000',
                'image'=>'image1.jpg'
            ],
            [
             'nameProduct' => 'Nano-nano',
             'price' => '4000',
                'image'=>'image2.jpg'
            ]
        ]);
    }
}
