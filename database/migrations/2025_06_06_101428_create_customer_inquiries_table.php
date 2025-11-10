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
      Schema::create('customer_inquiries', function (Blueprint $table) {
    $table->id();
    $table->string('name')->nullabe();
    $table->string('email')->nullabe();
    $table->string('phone')->nullabe();
    $table->text('service')->nullabe();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_inquiries');
    }
};
