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
        $this->main();

        $this->home();
    }

    protected function home()
    {
        //sec1
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_title',
            'value' => 'Is is the title (test :))'
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_text',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img1',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img2',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img3',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img4',
        ]);

        //sec2
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_text',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_textWidth',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_infoWidth',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_popupWidth',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_textHeight',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_infoHeight',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_popupHeight',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_textDeep',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_infoDeep',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_popupDeep',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_textHols',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_infoHols',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_popupHols',
        ]);

        //3
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec3_acc',
        ]);

        //4
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4_title',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4_text',
        ]);

        //5
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img1',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title1',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img2',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title2',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img3',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title3',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img4',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title4',
        ]);
    }

    protected function main()
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
    }
}
