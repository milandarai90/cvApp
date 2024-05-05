<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cv_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layout_id');
            $table->unsignedBigInteger('title_id');
            $table->unsignedBigInteger('details_id');

            $table->foreign('layuot_id')->references('id')->on('layouts')->onDelete('cascade');
            $table->foreign('title_id')->references('id')->on('title_name')->onDelete('cascade');
            $table->foreign('details_id')->references('id')->on('details')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv_tables');
    }
};
