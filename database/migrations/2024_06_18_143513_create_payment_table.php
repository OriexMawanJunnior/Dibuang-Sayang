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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            // $table->foreignId('product_id')->constrained('product')->onDelete('cascade')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status');
            $table->string('token')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_channel')->nullable();
            $table->integer('total_amount');
            $table->string('transaction_status')->nullable();
            $table->timestamp('transaction_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
