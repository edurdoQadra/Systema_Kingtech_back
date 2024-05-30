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
        // este no va ya que se llena desde el $table->string('CODIGO_CLIENTE')->nullable();
        //------------------------------------------------------------------------------------//
        Schema::create('matrizs', function (Blueprint $table) {
            $table->id();
            $table->string('ADMINISTRADOR');
            $table->string('REPORTES');
            $table->string('DEPARTAMENTO');
            $table->string('PROVINCIA');
            $table->string('DISTRITO');
            $table->string('DIRECCION');
            $table->string('REFERENCIA');
            $table->string('ASOCIADO');
            $table->string('DNI');
            $table->string('NUMERO');
            $table->string('RAZON_SOCIAL');
            $table->string('RUC');
            $table->string('PORCENTAJE_EMPRESA');
            $table->string('CORREO');
            $table->string('TELEFONO');
            $table->string('ESTADO_LOCAL');
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
        Schema::dropIfExists('matrizs');
    }
};
