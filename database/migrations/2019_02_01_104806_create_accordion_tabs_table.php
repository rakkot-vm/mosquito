<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccordionTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accordion_tabs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('setting_id');
            $table->integer('sort');
            $table->integer('title');
            $table->integer('img');
            $table->integer('imgAlt');
            $table->integer('imgTitle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accordion_tabs');
    }
}
