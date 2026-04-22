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
        Schema::table('orders', function (Blueprint $table) {
            if (!Schema::hasColumn('orders', 'updated_at')) {
                $table->timestamp('updated_at')->useCurrent()->after('created_at');
            }
        });

        Schema::table('order_items', function (Blueprint $table) {
            if (!Schema::hasColumn('order_items', 'created_at')) {
                $table->timestamp('created_at')->useCurrent();
            }
            if (!Schema::hasColumn('order_items', 'updated_at')) {
                $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            if (Schema::hasColumn('orders', 'updated_at')) {
                $table->dropColumn('updated_at');
            }
        });

        Schema::table('order_items', function (Blueprint $table) {
            if (Schema::hasColumn('order_items', 'created_at')) {
                $table->dropColumn('created_at');
            }
            if (Schema::hasColumn('order_items', 'updated_at')) {
                $table->dropColumn('updated_at');
            }
        });
    }
};
