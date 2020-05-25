<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent')->nullable();
            $table->string('slug');
            $table->string('title');
            $table->string('subtitle')->nullable();

            //nome para menu
            $table->string('menu_name');

            $table->longText('headline')->nullable();
            $table->longText('p1')->nullable();
            $table->string('image1')->nullable();
            $table->string('image1desc')->nullable();
            $table->longText('p2')->nullable();
            $table->string('image2')->nullable();
            $table->string('image2desc')->nullable();
            $table->longText('p3')->nullable();
            $table->string('video_url')->nullable();
            $table->string('video_desc')->nullable();
            $table->string('step1_title')->nullable();
            $table->longText('step1_content')->nullable();
            $table->string('step2_title')->nullable();
            $table->longText('step2_content')->nullable();
            $table->string('step3_title')->nullable();
            $table->longText('step3_content')->nullable();
            $table->string('step4_title')->nullable();
            $table->longText('step4_content')->nullable();
            $table->string('step5_title')->nullable();
            $table->longText('step5_content')->nullable();
            $table->string('step6_title')->nullable();
            $table->longText('step6_content')->nullable();
            $table->string('step7_title')->nullable();
            $table->longText('step7_content')->nullable();

            $table->integer('order')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
