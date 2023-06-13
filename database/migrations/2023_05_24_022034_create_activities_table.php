<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('description', 200);
            $table->double('amount', 8, 2);
            $table->timestamp('payday')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('done', ['Y', 'N'])->default('Y');
            $table->enum('recurrence', ['D', 'W', 'M', 'Y', 'F'])->default('F');
            $table->enum('active', ['Y', 'N'])->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
