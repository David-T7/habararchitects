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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('code_name')->nullable();
            $table->string('city')->default('Addis Ababa')->nullable();
            $table->string('country')->default('Ethiopia')->nullable();
            $table->json('types')->nullable();
            $table->string('collaborators')->default('Nimonah Architetcs')->nullable();
            $table->string('location')->nullable();
            $table->string('year')->default('2021')->nullable();
            $table->string('site_area')->nullable();
            $table->string('floor_area')->nullable();
            $table->string('story_num')->nullable();
            $table->string('client')->nullable();
            $table->decimal('budget', $precision = 14, $scale = 2)->default(0.00)->nullable();
            $table->string('category')->default('small')->nullable();
            $table->string('status')->default('Under Construction')->nullable();
            $table->longtext('description')->nullable();
            $table->json('architects')->nullable();
            $table->string('currency')->default('ETB')->nullable();
            $table->Boolean('isActive')->default(1);
            $table->Boolean('featured')->default(0);
            $table->integer('postedBy')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
