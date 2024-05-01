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
        Schema::create('commande_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_commande');
            $table->unsignedBigInteger('id_product');
            $table->integer('quantite');
            $table->timestamps();

            $table->foreign('id_commande')->references('id')->on('commandes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande_product');
    }
};
