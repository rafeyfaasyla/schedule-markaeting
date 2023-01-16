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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_perusahaan');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_activity');

            $table->foreign('id_perusahaan')->references('id')->on('perusahaans')->onDelete('cascade');
            $table->foreign('id_produk')->references('id')->on('produks')->onDelete('cascade');
            $table->foreign('id_project')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('id_activity')->references('id')->on('activities')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwals');
    }
};
