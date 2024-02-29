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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('job_title');
            $table->string('residency_status');
            $table->string('proofOfIdentity');
            $table->string('pan');
            $table->string('city');
            $table->string('address');
            $table->string('phoneNumber');
            $table->string('email');
            $table->json('dynamic_fields')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
