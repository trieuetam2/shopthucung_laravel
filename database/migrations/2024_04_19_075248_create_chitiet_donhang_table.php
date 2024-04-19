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
        Schema::create('chitiet_donhang', function (Blueprint $table) {
            $table->integer('id_ctdonhang');
            $table->string('madathang', 50);
            $table->string('makh', 100);
            $table->integer('id_sanpham');
            $table->string('tensp', 100);
            $table->tinyInteger('soluong')->nullable();
            $table->integer('giamgia')->nullable();
            $table->integer('giatien')->nullable();
            $table->integer('tongtien')->nullable();
            $table->string('trangthai', 100);
            $table->dateTime('ngaydat')->nullable()->useCurrent();
            $table->integer('id_dathang')->index('fk_ctiddh');
            $table->integer('id_kh');

            $table->primary(['id_ctdonhang', 'madathang', 'makh', 'id_sanpham', 'id_dathang', 'id_kh']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiet_donhang');
    }
};
