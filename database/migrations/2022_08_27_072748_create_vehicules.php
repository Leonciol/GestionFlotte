<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('models',50);
            $table->string('marque',50);
            $table->datetime('last_maintenance');
            $table->integer('nb_kilometrage');
            $table->integer('nb_serie');
            $table->foreignId('statuses_id')->nullable()->constrained('statuses');
            $table->foreignId('fournisseurs_id')->nullable()->constrained('fournisseurs');
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
        Schema::dropIfExists('vehicules');
    }
}
