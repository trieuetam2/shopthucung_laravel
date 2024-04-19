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
        Schema::create('dathang', function (Blueprint $table) {
            $table->integer('id_dathang');
            $table->string('madathang', 50);
            $table->string('makh', 100);
            $table->string('trangthai', 100)->nullable();
            $table->integer('tongtien');
            $table->dateTime('ngaydathang')->nullable()->useCurrent();
            $table->string('giaohang', 10);
            $table->integer('id_kh');

            $table->primary(['id_dathang', 'madathang', 'makh', 'id_kh']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dathang');
    }
};
