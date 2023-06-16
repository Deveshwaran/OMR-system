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
        Schema::create('marriage_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->string('religion');
            $table->string('permanent_address');
            $table->string('present_address');
            $table->string('nric');
            $table->string('pic');
            $table->string('first_name2');
            $table->string('last_name2');
            $table->date('dob2');
            $table->string('religion2');
            $table->string('permanent_address2');
            $table->string('present_address2');
            $table->string('nric2');
            $table->string('pic2');
            $table->string('name');
            $table->string('address');
            $table->string('name2');
            $table->string('address2');
            $table->date('marriage_date');
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
            $table->string('file6')->nullable();
            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marriage_registrations');
    }
};
