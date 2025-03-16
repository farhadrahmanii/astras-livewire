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
        Schema::create('khat_estashans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_type_id')->constrained('product_types');
            $table->foreignId('transport_type_id')->constrained('transport_types');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('companay_id')->constrained('companays');
            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('country_from_id')->constrained('countrys');
            $table->foreignId('country_to_id')->constrained('countrys');
            $table->string('number_of_wagon');
            $table->string('wigth');
            $table->string('number_of_bar');
            $table->string('date_of_out');
            $table->string('date_of_in');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khat_estashans');
    }
};
