<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            'id' => '1',
            'product_id' => '1',
            'title' => 'Border color',
//            'img' => '{"corner":"","line":"","corner_small":"","line_small":""}',
//            'price' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('attributes')->insert([
            'id' => '2',
            'product_id' => '1',
            'title' => 'Nets',
//            'img' => '{"corner":"","line":"","corner_small":"","line_small":""}',
//            'price' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
