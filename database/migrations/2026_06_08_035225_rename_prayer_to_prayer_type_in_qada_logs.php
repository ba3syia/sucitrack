<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('qada_logs', function (Blueprint $table) {
            $table->renameColumn('prayer', 'prayer_type');
        });
    }

    public function down(): void
    {
        Schema::table('qada_logs', function (Blueprint $table) {
            $table->renameColumn('prayer', 'prayer_type');
        });
    }
};
