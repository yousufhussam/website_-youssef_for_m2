<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('website')->create('mall_categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('name');
        });

        // Populate the table data
        $data = File::json(database_path('data/mall_categories.json'));
        \App\Models\Mall\MallCategory::upsert($data, ['id']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('website')->dropIfExists('mall_categories');
    }
};
