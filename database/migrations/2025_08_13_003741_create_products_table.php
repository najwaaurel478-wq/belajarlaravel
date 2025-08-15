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
            $table->string('name');
            $table->string('images')->nullable();
            $table->smallInteger('stock')->unsigned()->default(0);
            $table->string('unit', 4)->nullable();
            $table->double('price', 16, 2)->default(0);
            $table->double('discount', 16, 2)->default(0);
            $table->longText('description')->nullable();
            $table->bigInteger('suppliers_id')->unsigned();

            $table->foreign('suppliers_id')->references('id')->on('suppliers')->onDelete('cascade');
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
