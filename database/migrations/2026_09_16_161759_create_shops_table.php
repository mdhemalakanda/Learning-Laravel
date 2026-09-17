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
        Schema::create('shops', function (Blueprint $table) {
            $table->comment('Shop Table');
            $table->id()->comment('Primary Key');
            $table->string('shop_name')->nullable()->comment('Shop Name');
            $table->integer('shop_number')->nullable()->comment('Shop Number');
            $table->string('shop_address')->nullable()->comment('Shop Address');
            $table->string('shop_phone')->nullable()->comment('Shop Phone');
            $table->string('shop_email')->nullable()->comment('Shop Email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
