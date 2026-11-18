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
            if (!Schema::hasColumn('contacts', 'user_agent')) {
                $table->text('user_agent')->nullable()->after('ip_address');
            }
            if (!Schema::hasColumn('contacts', 'browser')) {
                $table->string('browser', 60)->nullable()->after('user_agent');
            }
            if (!Schema::hasColumn('contacts', 'os')) {
                $table->string('os', 60)->nullable()->after('browser');
            }
            if (!Schema::hasColumn('contacts', 'device_type')) {
                $table->string('device_type', 30)->nullable()->after('os');
            }
            if (!Schema::hasColumn('contacts', 'referrer')) {
                $table->text('referrer')->nullable()->after('device_type');
            }
            if (!Schema::hasColumn('contacts', 'landing_page')) {
                $table->text('landing_page')->nullable()->after('referrer');
            }
            if (!Schema::hasColumn('contacts', 'consent_status')) {
                $table->string('consent_status', 30)->nullable()->default('captured')->after('landing_page');
            }
            if (!Schema::hasColumn('contacts', 'session_id')) {
                $table->string('session_id', 64)->nullable()->after('consent_status');
            }
        });

        Schema::table('career_applications', function (Blueprint $table) {
            if (!Schema::hasColumn('career_applications', 'user_agent')) {
                $table->text('user_agent')->nullable()->after('ip_address');
            }
            if (!Schema::hasColumn('career_applications', 'browser')) {
                $table->string('browser', 60)->nullable()->after('user_agent');
            }
            if (!Schema::hasColumn('career_applications', 'os')) {
                $table->string('os', 60)->nullable()->after('browser');
            }
            if (!Schema::hasColumn('career_applications', 'device_type')) {
                $table->string('device_type', 30)->nullable()->after('os');
            }
            if (!Schema::hasColumn('career_applications', 'referrer')) {
                $table->text('referrer')->nullable()->after('device_type');
            }
            if (!Schema::hasColumn('career_applications', 'landing_page')) {
                $table->text('landing_page')->nullable()->after('referrer');
            }
            if (!Schema::hasColumn('career_applications', 'consent_status')) {
                $table->string('consent_status', 30)->nullable()->default('captured')->after('landing_page');
            }
            if (!Schema::hasColumn('career_applications', 'session_id')) {
                $table->string('session_id', 64)->nullable()->after('consent_status');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $cols = ['session_id', 'consent_status', 'landing_page', 'referrer', 'device_type', 'os', 'browser', 'user_agent'];
            foreach ($cols as $col) {
                if (Schema::hasColumn('contacts', $col)) {
                    $table->dropColumn($col);
                }
            }
        });

        Schema::table('career_applications', function (Blueprint $table) {
            $cols = ['session_id', 'consent_status', 'landing_page', 'referrer', 'device_type', 'os', 'browser', 'user_agent'];
            foreach ($cols as $col) {
                if (Schema::hasColumn('career_applications', $col)) {
                    $table->dropColumn($col);
                }
            }
        });
    }
};

