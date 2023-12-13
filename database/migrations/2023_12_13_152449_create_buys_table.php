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
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            
            $table->decimal('amount_total', $precision = 8, $scale = 2);//importe total
            $table->decimal('discount', $precision = 8, $scale = 2);//descuento
            $table->date('purchase_date');//fecha compra
            $table->enum('transaction', ['credito','contado','p']); // transaccion
            $table->decimal('residue', $precision = 8, $scale = 2); //saldo
            $table->enum('type_document', ['factura', 'nota de venta', 'recibo', 'ninguno']);
            $table->string('nro_document', 50);
            $table->string('lot_buy', 50);//lote de compra
            $table->string('observation', 255);//observaciones
            $table->enum('status_buy', ['finalizada', 'no finalizada', 'p']);//estado de compra
            $table->enum('status', ['activo', 'inactivo', 'p']);//estado
            $table->string('image', 2048)->nullable();

            $table->foreignId('user_id')->constrained();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buys');
    }
};
