<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('mark_id')->unsigned();
            $table->string('name');
            $table->string('sub_name');
            $table->string('text_additional');
            $table->string('precio');
            $table->string('property', 3000);
            $table->string('primary_image');
            $table->string('content_box_image');
            $table->string('slider_image', 2000);
            $table->string('box_content', 1000);
            $table->string('slug');
            $table->text('title_description');
            $table->text('Description');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('mark_id')->references('id')->on('marks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
