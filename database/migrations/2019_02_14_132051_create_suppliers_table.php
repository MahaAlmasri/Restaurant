<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('supplierName');
            $table->string('supplierAddress');
            $table->Integer('supplierHousenumber');
            $table->string('supplierPostalcode');
            $table->string('supplierCity');
            $table->string('supplierCountry');
            $table->string('supplierPhone');
            $table->string('supplierEmail', 100)->unique();

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
        Schema::dropIfExists('suppliers');
    }
}
