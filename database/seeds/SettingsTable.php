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
        $this->common();

        $this->home();

        $this->general();
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
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img1',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img2',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img3',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec1_img4',
            'value' => ''
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


        //4-5
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_title',
            'value' => 'Unsere Arbeit',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_img1',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_title-img1',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_alt-img1',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_img2',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_title-img2',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_alt-img2',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_img3',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_title-img3',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_alt-img3',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_img4',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_title-img4',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec4-5_alt-img4',
        ]);

        //5
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img1',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title1',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img2',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title2',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img3',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title3',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_img4',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec5_title4',
        ]);
    }

    protected function common()
    {
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'logo_img',
            'value' => ' '
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'logo_alt',
            'value' => 'alt text logo title'
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'logo_title',
            'value' => 'text logo title'
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'favicon',
            'value' => 'imgs/favicon.ico'
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'site_title',
            'value' => 'TITLE of this SITE'
        ]);

        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'phone_1',
            'value' => '6666-66-66',
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'email_1',
            'value' => 'email@email.com',
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'work_hours_1',
            'value' => '8 AM - 6 PM',
        ]);

        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'social_instagram',
            'value' => 'instagram.com/fotochki',
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'social_facebook',
            'value' => 'facebook.com/zalipyha',
        ]);
        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'social_youtube',
            'value' => 'youtube.com/vidosiki',
        ]);

        DB::table('settings')->insert([
            'type' => 'common',
            'title' => 'privacy_policy',
            'value' => 'It is privacy policy text :)',
        ]);
    }

    protected function general()
    {
        DB::table('settings')->insert([
            'type' => 'general',
            'title' => 'currency',
            'value' => 'eur'
        ]);
        DB::table('settings')->insert([
            'type' => 'general',
            'title' => 'stripe_publish_key',
            'value' => 'pk_test_AcmqjKi2CpY5PgKpGDwKp8SV'
        ]);
        DB::table('settings')->insert([
            'type' => 'general',
            'title' => 'stripe_secret_key',
            'value' => 'sk_test_wxsNKuPVMxQAjX5ot0aBoCiS'
        ]);
    }
}
