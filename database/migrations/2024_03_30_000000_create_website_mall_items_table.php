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
        Schema::connection('website')->create('mall_items', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('vnum');
            $table->integer('category_id');
            $table->integer('old_price')->nullable();
            $table->integer('price');
            $table->enum('pricing', ['CASH', 'MILEAGE'])->default('CASH');
            $table->integer('quantity');
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->enum('other', ['recommend', 'recommend_desc'])->nullable();
        });

        // Populate the table data
        $data = File::json(database_path('data/mall_items.json'));
        \App\Models\Mall\MallItem::upsert($data, ['id']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('website')->dropIfExists('mall_items');
    }
};
