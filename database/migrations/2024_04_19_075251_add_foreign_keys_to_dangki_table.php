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
        Schema::table('dangki', function (Blueprint $table) {
            $table->foreign(['id_phanquyen'], 'fk_dk')->references(['id_phanquyen'])->on('phanquyen')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dangki', function (Blueprint $table) {
            $table->dropForeign('fk_dk');
        });
    }
};
