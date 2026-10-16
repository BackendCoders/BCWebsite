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
        Schema::table('contacts', function (Blueprint $table) {
            if (!Schema::hasColumn('contacts', 'visitor_id')) {
                $table->string('visitor_id', 64)->nullable()->index()->after('message');
            }
            if (!Schema::hasColumn('contacts', 'ip_address')) {
                $table->string('ip_address', 45)->nullable()->after('visitor_id');
            }
            if (!Schema::hasColumn('contacts', 'status')) {
                $table->string('status', 30)->default('new')->after('ip_address');
            }
        });

        Schema::table('career_applications', function (Blueprint $table) {
            if (!Schema::hasColumn('career_applications', 'visitor_id')) {
                $table->string('visitor_id', 64)->nullable()->index()->after('resume');
            }
            if (!Schema::hasColumn('career_applications', 'ip_address')) {
                $table->string('ip_address', 45)->nullable()->after('visitor_id');
            }
            if (!Schema::hasColumn('career_applications', 'status')) {
                $table->string('status', 30)->default('new')->after('ip_address');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            if (Schema::hasColumn('contacts', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('contacts', 'ip_address')) {
                $table->dropColumn('ip_address');
            }
            if (Schema::hasColumn('contacts', 'visitor_id')) {
                $table->dropColumn('visitor_id');
            }
        });

        Schema::table('career_applications', function (Blueprint $table) {
            if (Schema::hasColumn('career_applications', 'status')) {
                $table->dropColumn('status');
            }
            if (Schema::hasColumn('career_applications', 'ip_address')) {
                $table->dropColumn('ip_address');
            }
            if (Schema::hasColumn('career_applications', 'visitor_id')) {
                $table->dropColumn('visitor_id');
            }
        });
    }
};
