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
            'title' => 'sec2_title',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_description',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_textAttention1',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_infoAttention1',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_popupAttention1',
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


        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_textAttention2',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_infoAttention2',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec2_popupAttention2',
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


        //45
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_title',
            'value' => 'Unsere Arbeit',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_img1',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_titleImg1',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_altImg1',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_img2',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_titleImg2',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_altImg2',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_img3',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_titleImg3',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_altImg3',
        ]);

        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_img4',
            'value' => ''
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_titleImg4',
        ]);
        DB::table('settings')->insert([
            'type' => 'home',
            'title' => 'sec45_altImg4',
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

        //email settings

        DB::table('settings')->insert([
            'type' => 'email',
            'title' => 'success_order',
            'value' => 'Your order is success'
        ]);

//        DB::table('settings')->insert([
//            'type' => 'email',
//            'title' => 'success_order',
//            'value' => 'Your order is success'
//        ]);

//        'address' => env('MAIL_FROM_ADDRESS', 'mosquito@mail.com'),
//        'name' => env('MAIL_FROM_NAME', 'Mosquito'),
//        MAIL_HOST=127.0.0.1
//        MAIL_PORT=1025
//        MAIL_USERNAME=testuser
//        MAIL_PASSWORD=testpwd
//        MAIL_ENCRYPTION=null
    }
}
