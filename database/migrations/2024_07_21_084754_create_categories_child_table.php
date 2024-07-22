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
        Schema::create('categories_child', function (Blueprint $table) {
            $table->increments('categories_child_id');
            $table->string('stt_category');
            $table->string('name');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->timestamps();

            // Thiết lập khóa ngoại
            $table->foreign('parent_id')
                ->references('parent_id')->on('parents')
                ->onDelete('set null');
            $table->foreign('category_id')
                ->references('category_id')->on('categories')
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
        Schema::dropIfExists('categories_child');
    }
};
