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
        Schema::create('list_images', function (Blueprint $table) {
            $table->increments('list_images_id'); // Primary key
            $table->string('image_url');
            $table->unsignedInteger('images_id')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('images_id')
                ->references('images_id')->on('images')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_images');
    }
};
