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
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('pro_pic', 100)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('designation', 100)->nullable();
            $table->string('blood_group', 100)->nullable();

            $table->string('subject', 100)->nullable();
            $table->string('qualification', 100)->nullable();
            $table->date('dob')->nullable();
            $table->date('doa')->nullable();
            $table->date('doj')->nullable();

            $table->string('phone', 100)->nullable();
            $table->string('email', 100)->nullable();

            $table->string('index', 100)->nullable();
            $table->string('ac_no', 100)->nullable();
            $table->string('id_no', 100)->nullable();
            $table->string('tin_no', 100)->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata');
    }
};
