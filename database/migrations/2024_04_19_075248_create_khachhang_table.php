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
        Schema::create('khachhang', function (Blueprint $table) {
            $table->string('makh', 100);
            $table->string('tenkh', 100)->nullable();
            $table->string('diachi')->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('sdt')->nullable();
            $table->integer('id_kh');

            $table->primary(['makh', 'id_kh']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
};
