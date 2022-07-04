<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImporUserTable extends Migration
{

    public function up(): void
    {
        Schema::create('impor_user', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('file');
            $table->dateTime('waktu');
            $table->boolean('status_sukses')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('impor_user');
    }
}
