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
        Schema::create('community', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('slug');
            $table->string('title');
            $table->longtext('Description');
            $table->string('image')->nullable();
            $table->integer('status');
            $table->string('whatsapp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('community');
    }
};
