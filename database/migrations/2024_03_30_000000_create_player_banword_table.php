<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('player')->create('banword', function (Blueprint $table) {
            $table->binary('word', length: 24)->default('')->primary();
        });

        // Populate the table data
        $data = File::json(database_path('data/banword.json'));
        \App\Models\Game\Player\Banword::upsert($data, ['word']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('banword');
    }
};
