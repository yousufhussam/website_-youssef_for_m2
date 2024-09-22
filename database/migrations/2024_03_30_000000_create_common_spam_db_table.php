<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::connection('common')->create('spam_db', function (Blueprint $table) {
            // TODO: update this to modern standards (InnoDB & utf8mb4)
            $table->engine = "MyISAM";
            $table->charset = "utf8";
            $table->collation = "utf8_general_ci";

            $table->set('type', ['GOOD', 'SPAM'])->default('SPAM');
            $table->string('word', 256)->primary();
            $table->integer('score')->default(10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('common')->dropIfExists('spam_db');
    }
};
