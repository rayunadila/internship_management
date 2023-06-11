<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apprentince_details', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->biginteger('apprentiance_id')->unsigned();
            $table->string('nisn_nim')->nullable();
            $table->string('name');
            $table->string('department');
            $table->string('gender');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('address');
            $table->string('phone_number');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('sertificate')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apprentince_details');
    }
};
