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
        Schema::create('dangki', function (Blueprint $table) {
            $table->integer('id_dangki', true);
            $table->string('hoten', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('matkhau', 100)->nullable();
            $table->integer('id_phanquyen')->index('fk_dk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dangki');
    }
};
