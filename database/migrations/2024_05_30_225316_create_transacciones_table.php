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
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id();
            $table->string('Sede');
            $table->date('Fecha');
            $table->string('Codigo_sede');
            $table->string('Ticket');
            $table->decimal('Venta', 10, 2);
            $table->decimal('Utilidad', 10, 2);
            $table->decimal('Porcentaje_c_v', 5, 2);
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
        Schema::dropIfExists('transacciones');
    }
};
