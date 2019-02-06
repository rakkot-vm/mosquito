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
            $table->integer('sort')->nullable();
            $table->string('title');
            $table->string('img')->default('imgs/no_img.jpg');
            $table->string('imgAlt')->nullable();
            $table->string('imgTitle')->nullable();
            $table->string('text')->nullable();
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
