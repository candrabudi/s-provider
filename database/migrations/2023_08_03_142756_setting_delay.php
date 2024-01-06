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
        //
        
        Schema::table('profil', function (Blueprint $table) {
            $table->integer('deposit_delay')->nullable()->default(24);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        
        Schema::table('profil', function (Blueprint $table) {
            $table->dropColumn(['deposit_delay']);
        });
    }
};
