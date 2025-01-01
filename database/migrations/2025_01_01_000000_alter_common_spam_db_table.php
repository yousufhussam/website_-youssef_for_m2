<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * The database connection that should be used by the migration.
     *
     * @var string
     */
    protected $connection = 'common';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // change word to 191 characters (max length for index on utf8mb4 in MySQL < 5.7)
        Schema::table('spam_db', function (Blueprint $table) {
            $table->string('word', 191)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->change();
        });
        // create index on type
        Schema::table('spam_db', function (Blueprint $table) {
            $table->index('type');
        });
        // update to modern standards (InnoDB & utf8mb4)
        Schema::table('spam_db', function (Blueprint $table) {
            DB::statement('ALTER TABLE common.spam_db ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');
            DB::statement('ALTER TABLE common.spam_db CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // revert to old standards (MyISAM & utf8)
        Schema::table('spam_db', function (Blueprint $table) {
            DB::statement('ALTER TABLE spam_db ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci');
            DB::statement('ALTER TABLE spam_db CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci');
        });
        // change word back to 256 characters
        Schema::table('spam_db', function (Blueprint $table) {
            $table->string('word', 256)->charset('utf8')->collation('utf8_general_ci')->change();
        });
        // drop index on type
        Schema::table('spam_db', function (Blueprint $table) {
            $table->dropIndex(['type']);
        });
    }
};
