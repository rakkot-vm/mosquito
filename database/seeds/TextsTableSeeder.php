<?php

use Illuminate\Database\Seeder;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('texts')->insert([
            'type' => 'email',
            'text_id' => 'order_subject',
            'text' => 'Mosquito order successful'
        ]);
        DB::table('texts')->insert([
            'type' => 'email',
            'text_id' => 'order_hello',
            'text' => 'Hello <i> :name</i>'
        ]);
        DB::table('texts')->insert([
            'type' => 'email',
            'text_id' => 'order_body',
            'text' => '<p>Your order №:orderNumber is successful</p>'
        ]);
        DB::table('texts')->insert([
            'type' => 'email',
            'text_id' => 'order_footer',
            'text' => '<p>Thanks you</p>'
        ]);
    }
}
