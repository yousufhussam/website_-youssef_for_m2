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
        Schema::connection('common')->create('locale', function (Blueprint $table) {
            $table->string('mKey')->default('')->primary();
            $table->string('mValue')->default('');
        });

        // Populate the table data
        $data = File::json(database_path('data/locale.json'));
        \App\Models\Game\Common\Locale::upsert($data, ['mKey']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('common')->dropIfExists('locale');
    }
};
