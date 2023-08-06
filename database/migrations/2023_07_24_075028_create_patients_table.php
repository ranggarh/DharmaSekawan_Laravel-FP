<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Antrian;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian');
            $table->string('fullname');
            $table->integer('nik');
            $table->string('alamat');
            $table->integer('telp');
            $table->foreignId('specialist_id')->constrained();
            $table->string('keluhan');
            $table->boolean('is_call')->default(false);
            $table->date('tanggal_antrian')->default(Carbon::now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
