<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->increments('id_log');
            $table->string('ip',50);
            $table->string('sistema_operativo', 200);
            $table->string('navegador',200);
            $table->string('formulario',200);
            $table->string('accion', 200);
            $table->string('log',4000);
            $table->timestamp('fecha_hora')->default(DB::raw('CURRENT_TIMESTAMP'));

            # FK
            $table->integer('id_usuario')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log');
    }
}
