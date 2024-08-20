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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('total');
            $table->text('description');
            $table->bigInteger('total_good');
            $table->bigInteger('total_not_good');
            $table->bigInteger('total_bad');
            $table->foreignId('rooms_id');
            $table->foreignId('item_id');
            $table->foreignId('period_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
