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
        Schema::create('academic_info', function (Blueprint $table) {
            $table->id();
            $table->string('info_1');
            $table->string('info_2');
            $table->string('info_3');
            $table->string('info_4');
            $table->string('info_5');
            $table->string('info_6');
            $table->string('info_7');
            $table->string('info_8');
            $table->string('info_9');
            $table->string('info_10');
            $table->string('info_11');
            $table->string('info_12');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate() ;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_info');
    }
};
