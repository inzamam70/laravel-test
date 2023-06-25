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
        Schema::table('front_users', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('profile2_id')->after('id');
            $table->foreign('profile2_id')->references('id')->on('profile2s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('front_users', function (Blueprint $table) {
            //
            $table->dropForeign('front_user_profile2_id_foreign');
            $table->dropColumn('profile2_id');
        });
    }
};
