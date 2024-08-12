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
        Schema::create('camps', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamp("start_date")->nullable();
            $table->timestamp("end_date")->nullable();
            $table->integer("max_members");
            $table->string("equipment",5000);
            $table->enum("type", ['international','national','regional']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camps');
    }
};
