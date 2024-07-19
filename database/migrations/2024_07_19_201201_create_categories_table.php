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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id'); // Tạo cột id tự tăng
            $table->string('stt'); // Tạo cột stt
            $table->string('name'); // Tạo cột name
            $table->unsignedInteger('parent_id')->nullable(); // Tạo cột parent_id với kiểu dữ liệu big integer không âm, có thể null
            $table->timestamps(); // Tạo cột created_at và updated_at

            // Thiết lập khóa ngoại
            $table->foreign('parent_id')
                ->references('parent_id')->on('parents')
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
        Schema::dropIfExists('categories');
    }
};