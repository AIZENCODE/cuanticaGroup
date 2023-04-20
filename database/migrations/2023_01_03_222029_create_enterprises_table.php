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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('razon_social');
            $table->string('banner_titulo')->nullable();
            $table->text('banner_text')->nullable();
            $table->text('description')->nullable();
            $table->string('direccion')->nullable();
            $table->string('correo')->nullable();
            $table->text('quienes_somos')->nullable();
            $table->text('mision')->nullable();
            $table->text('valores')->nullable();
            $table->text('proposito')->nullable();
            $table->string('telefono_uno')->nullable();
            $table->string('telefono_dos')->nullable();

            $table->string('whatsapp')->nullable();
            $table->text('facebook')->nullable()->nullable();
            $table->text('linkedin')->nullable();
            $table->text('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();

            $table->string('image_url')->nullable();
            




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
        Schema::dropIfExists('enterprises');
    }
};
