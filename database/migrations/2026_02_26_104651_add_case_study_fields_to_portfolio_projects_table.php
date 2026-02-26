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
        Schema::table('portfolio_projects', function (Blueprint $table) {
            $table->string('timeline')->nullable();
            $table->text('challenge')->nullable();
            $table->text('solution')->nullable();
            $table->text('key_features')->nullable();
            $table->string('efficiency_improvement')->nullable();
            $table->string('system_uptime')->nullable();
            $table->text('testimonial_quote')->nullable();
            $table->string('testimonial_name')->nullable();
            $table->string('testimonial_industry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio_projects', function (Blueprint $table) {
            $table->dropColumn([
                'timeline',
                'challenge',
                'solution',
                'key_features',
                'efficiency_improvement',
                'system_uptime',
                'testimonial_quote',
                'testimonial_name',
                'testimonial_industry'
            ]);
        });
    }
};
