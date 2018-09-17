<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->string('photo')->nullable();
            $table->integer('category_id')->unsigned()->index;
            $table->integer('repoter_id')->unsigned()->index;
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('news_categorys');
            $table->foreign('repoter_id')->references('id')->on('news_repoters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
