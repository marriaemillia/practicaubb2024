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
        Schema::create('participants', function (Blueprint $table) {
            $table->foreignId('user_id')->references("id")->on("users");
            $table->foreignId('camp_id')->references("id")->on("camps");
            $table->primary(['user_id','camp_id']);
            $table->integer("patrool_number");
        });

        Schema::create('volunteers', function (Blueprint $table) {
            $table->foreignId('user_id')->references("id")->on("users");
            $table->foreignId('camp_id')->references("id")->on("camps");
            $table->primary(['user_id','camp_id']);
            $table->foreignId("department_id")->references("id")->on("departments");
            $table->integer("hours_to_work");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
