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
        Schema::create('user_registers', function (Blueprint $table) {
            $table->id();
            //
            $table->biginteger('user_id');
            $table->string('nisn')->nullable();
            $table->string('nim')->nullable();
            $table->string('school');
            $table->string('department');
            $table->string('name');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('address');
            $table->string('phone_number');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('file');
            $table->string('sertificate')->nullable();
            $table->string('status');

            //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_registers');
    }
};
