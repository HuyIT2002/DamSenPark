<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('posts_id');
            $table->string('plant_name');
            $table->text('content');
            $table->string('image_url');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('categories_child_id')->nullable();
            $table->timestamps();

            // Define foreign keys
            $table->foreign('parent_id')
                ->references('parent_id')->on('parents')
                ->onDelete('set null');
            $table->foreign('categories_child_id')
                ->references('categories_child_id')->on('categories_child')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
