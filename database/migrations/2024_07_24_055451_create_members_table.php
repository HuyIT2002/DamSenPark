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
        Schema::create('members', function (Blueprint $table) {
            $table->increments('members_id');
            $table->text('title');
            $table->unsignedInteger('images_id')->nullable();
            $table->unsignedInteger('categories_child_id')->nullable();
            $table->timestamps();
            $table->foreign('images_id')
                ->references('images_id')->on('images')
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
        Schema::dropIfExists('members');
    }
};
