<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('badge_text')->nullable()->after('icon');
            $table->string('subtitle')->nullable()->after('badge_text');
            $table->string('icon_image')->nullable()->after('subtitle');
            $table->json('highlights')->nullable()->after('details');
            $table->json('technologies')->nullable()->after('highlights');
            $table->string('cta_label')->nullable()->after('technologies');
            $table->string('cta_url')->nullable()->after('cta_label');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'badge_text',
                'subtitle',
                'icon_image',
                'highlights',
                'technologies',
                'cta_label',
                'cta_url',
            ]);
        });
    }
};
