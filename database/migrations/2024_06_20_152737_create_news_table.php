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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('city')->default('Addis Ababa')->nullable();
            $table->string('country')->default('Ethiopia')->nullable();
            $table->string('category')->default('Default')->nullable();
            $table->string('budget')->nullable();
            $table->string('quote')->nullable();
            $table->longtext('description')->nullable();
            $table->Boolean('isActive')->default(1);
            $table->Boolean('featured')->default(0);
            $table->integer('postedBy')->default(1);

            $table->string('image')->nullable();
            $table->string('heading1')->nullable();
            $table->longtext('exp1')->nullable();
            $table->string('heading2')->nullable();
            $table->longtext('exp2')->nullable();
            $table->string('heading3')->nullable();
            $table->longtext('exp3')->nullable();
            $table->longtext('conclusion')->nullable();
            $table->string('video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
