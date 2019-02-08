<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attribute_values')->insert([
            'id' => '1',
            'attribute_id' => '1',
            'title' => 'White',
            'preview_img' => '',
            'border_img' => '',
            'price' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('attribute_values')->insert([
            'id' => '2',
            'attribute_id' => '1',
            'title' => 'Wood',
            'preview_img' => '',
            'border_img' => '',
            'price' => '15',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('attribute_values')->insert([
            'id' => '3',
            'attribute_id' => '2',
            'title' => 'Black',
            'preview_img' => '',
            'border_img' => '',
            'price' => '10',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('attribute_values')->insert([
            'id' => '4',
            'attribute_id' => '2',
            'title' => 'Gray',
            'preview_img' => '',
            'border_img' => '',
            'price' => '11',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
