<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description');
            $table->string('excerpt');
            $table->string('image');
            $table->integer('category_id');
            $table->integer('sub_category_id')->nullable();
            $table->boolean('status');
            $table->boolean('visibility');
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_headline')->default(0);
            $table->string('tags'); // Array
            $table->integer('read_count')->default(0);
            $table->integer('author_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->string('slug');
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
