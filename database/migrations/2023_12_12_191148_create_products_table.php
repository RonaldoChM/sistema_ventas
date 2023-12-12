<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);//nombre
            $table->decimal('cost', 10,2)->default(0);//costo    $precision = 8, $scale = 2)
            $table->string('characteristics',255);//caracteristicas
            $table->string('code', 50);//codigo
            $table->string('lot', 100);//lote
            $table->string('brand', 255);//marca
            $table->string('warranty', 255);//garantia
            $table->integer('mimimum_amount');//monto minimo
            $table->string('industry', 255);
            $table->enum('status', ['activo', 'inactivo'])->default('activo');
            $table->string('image', 2048)->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on ('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
