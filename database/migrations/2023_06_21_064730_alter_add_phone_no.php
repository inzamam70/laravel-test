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
        Schema::connection('mysql')->table('users', function (Blueprint $table) {
            //
            $table->string('address')->nullable();
            $table->string('phone_no')->nullable();
            // $table->unsignedBigInteger('role_id');
            // $table->foreign('role_id')->references('id')->on('roles');
            $table->boolean('status')->default(1);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
