<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apprentince_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('school');
            $table->string('email');
            $table->string('file');
            $table->string('file_email')->nullable();
            $table->text('subject_email')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apprentince_requests');
    }
};
