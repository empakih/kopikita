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
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name', 50)->default('')->after('id');
            $table->string('last_name', 50)->default('')->after('first_name');
            $table->string('greenhouse_name', 255)->nullable()->after('email');
            $table->string('greenhouse_location', 255)->nullable()->after('greenhouse_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->string('name', 50)->after('id');
            $table->dropColumn(['first_name', 'last_name', 'greenhouse_name', 'greenhouse_location']);
        });
    }
};
