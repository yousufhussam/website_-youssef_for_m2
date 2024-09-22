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
        Schema::connection('player')->create('land', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('map_index')->default(0);
            $table->integer('x')->default(0);
            $table->integer('y')->default(0);
            $table->integer('width')->default(0);
            $table->integer('height')->default(0);
            $table->unsignedInteger('guild_id')->default(0);
            $table->tinyInteger('guild_level_limit')->default(0);
            $table->unsignedInteger('price')->default(0);
            $table->enum('enable', ['YES', 'NO'])->default('NO');
        });

        // Populate the table data
        $data = File::json(database_path('data/land.json'));
        \App\Models\Game\Player\Land::upsert($data, ['id']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('player')->dropIfExists('land');
    }
};
