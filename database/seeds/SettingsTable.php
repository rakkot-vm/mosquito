<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SettingsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'id' => '1',
            'type' => 'main',
            'title' => 'logo',
            'value' => 'imgs\logo.png',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'id' => '2',
            'type' => 'main',
            'title' => 'phone',
            'value' => '6666-66-66',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'id' => '3',
            'type' => 'home-page',
            'title' => 'sec1-title',
            'value' => 'Is is the title',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('settings')->insert([
            'id' => '4',
            'type' => 'home-page',
            'title' => 'sec2-text',
            'value' => 'text text text TITLE textexttext text',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
