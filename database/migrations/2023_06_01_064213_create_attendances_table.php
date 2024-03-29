<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\NullableType;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            // $table->id();
            // $table->bigInteger('apprentince_id')->comment('foreign key apprentince');
            // $table->string('latitude')->nullable()->comment('latitude');
            // $table->string('longitude')->nullable()->comment('longitude');
            // $table->string('status')->nullable()->comment('status');
            // $table->timestamps();

            $table->id();
            $table->bigInteger('apprentince_id')->comment('foreign key user');
            $table->string('latitude')->nullable()->comment('latitude');
            $table->string('longitude')->nullable()->comment('longitude');
            $table->dateTime('present_in')->nullable()->comment('presensi masuk');
            $table->dateTime('present_out')->nullable()->comment('presensi keluar');
            $table->string('status')->nullable()->comment('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
